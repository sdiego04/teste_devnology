<?php

namespace App\Http\Controllers;

use App\Models\Veiculos;
use App\Models\vendaVeiculo;
use App\Services\inserindoVeiculo;
use Illuminate\Http\Request;

class vendaController extends Controller
{
    public function formVenda(){

        return view('viewsVenda/formVenda');
    }
    public function store(Request $request, int $id,inserindoVeiculo $veiculo){
        $comissao=$this->valorComissao($request->valorvenda);
        $objveiculo=new vendaVeiculo();
        $objveiculo->datavenda=$request->datavenda;
        $objveiculo->valorvenda=$request->valorvenda;
        $objveiculo->comissao=$comissao;
        $objveiculo->veiculo_id=$id;
        $objveiculo->save();
        $veiculo->alterarStatus($id);
        return view('/viewsVeiculos/veiculos');
    }

    public function valorComissao($valor){
        $comissao = $valor * 10 / 100.0;
        return $comissao;
    }
}
