<?php


namespace App\Services;


use App\Models\compraVeiculo;
use App\Models\Veiculos;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class inserindoVeiculo
{
    //metodo que salva a compra no banco
    public function inserirCompra(float $preco,string $dataCompra){
        DB::transaction(function ()use($preco,$dataCompra){
            $objCompra=new compraVeiculo();
            $objCompra->valor=$preco;
            $objCompra->datacompra=$dataCompra;
            $objCompra->save();

        });
        $id_compra=compraVeiculo::query()->orderBy('id')->get();
        foreach ($id_compra as $item){
        }
        return $item->id;
    }
    //metodo que salva o veiculo no banco
  public function inserirVeiculo(string $anofabricacao, string $placa, string $chassi,int $marcas,int $modelo,int $cor,int $compra_id){
        DB::transaction(function ()use($anofabricacao,$placa,$chassi,$marcas,$modelo,$cor,$compra_id){
            $objVeiculo=new Veiculos();
            $objVeiculo->anofabricacao=$anofabricacao;
            $objVeiculo->placa=$placa;
            $objVeiculo->chassi=$chassi;
            $objVeiculo->marca_id=$marcas;
            $objVeiculo->modelo_id=$modelo;
            $objVeiculo->cor_id=$cor;
            $objVeiculo->compra_id=$compra_id;
            $objVeiculo->status=false;

            $objVeiculo->save();
        });

  }

    public function alterarStatus($id){
        $veiculos=Veiculos::find($id);
        $veiculos->status=true;
        $veiculos->save();
    }
}
