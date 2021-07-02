<?php

namespace App\Http\Controllers;

use App\Models\compraVeiculo;
use App\Models\Cor;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Veiculos;
use App\Services\inserindoVeiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class veiculoController extends Controller
{
    public function listarRelatorio(){
        $compras=DB::table('compraveiculo')
            ->sum('compraveiculo.valor');
        $vendas=DB::table('vendaveiculo')
            ->sum('vendaveiculo.valorvenda');
        $comissao=DB::table('vendaveiculo')
            ->sum('vendaveiculo.comissao');


        return view('/viewsVeiculo/relatorioDeVendas',compact('compras','vendas','comissao'));
    }
    public function listarVeiculosVendidos(){

        $lista=DB::table('veiculos')
            ->join('compraveiculo','veiculos.compra_id','=','compraveiculo.id')
            ->join('corveiculo','veiculos.cor_id','=','corveiculo.id')
            ->join('marcaveiculo','veiculos.marca_id','=','marcaveiculo.id')
            ->join('modeloveiculo','veiculos.modelo_id','=','modeloveiculo.id')
            ->where('veiculos.status','=',true)
            ->select('veiculos.id','veiculos.chassi','veiculos.placa','veiculos.anofabricacao',
                'marcaveiculo.marca','modeloveiculo.modelo','corveiculo.cor','compraveiculo.valor',
                'compraveiculo.datacompra')
            ->get();

        return view('/viewsVeiculo/listaVeiculos',compact('lista'));
    }

    //metodo que lista todos os veiculos cadastrados
    public function listarVeiculos(){
        $lista=DB::table('veiculos')
                        ->join('compraveiculo','veiculos.compra_id','=','compraveiculo.id')
                        ->join('corveiculo','veiculos.cor_id','=','corveiculo.id')
                        ->join('marcaveiculo','veiculos.marca_id','=','marcaveiculo.id')
                        ->join('modeloveiculo','veiculos.modelo_id','=','modeloveiculo.id')
                        ->select('veiculos.id','veiculos.chassi','veiculos.placa','veiculos.anofabricacao',
                                        'marcaveiculo.marca','modeloveiculo.modelo','corveiculo.cor','compraveiculo.valor',
                                        'compraveiculo.datacompra','veiculos.status')
                        ->get();

        return view('/viewsVeiculo/veiculos',compact('lista'));
    }
    //metodo que chama o form de cadastro de veiculos
    public function formCadastroVeiculos(){
        $modelos=Modelo::query()->orderBy('modelo')->get();
        $cores=Cor::query()->orderBy('cor')->get();
        $marcas=Marca::query()->orderBy('marca')->get();
        return view('/viewsVeiculo/formCadastroVeiculo',compact('modelos','cores','marcas'));

    }
    //medoto que salva um novo veiculo no banco
    public function cadastraVeiculos(Request $request,inserindoVeiculo $veiculo){
        $id_compra=$veiculo->inserirCompra($request->preco,$request->datacompra);
        $veiculo->inserirVeiculo($request->anofabricacao,$request->placa,$request->chassi,$request->marcas,$request->modelo,$request->cor,$id_compra);
        return redirect('/veiculos');
    }
}
