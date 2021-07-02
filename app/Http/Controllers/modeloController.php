<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Services\alteradorDeModelo;
use App\Services\removedorDeModelo;
use Illuminate\Http\Request;

class modeloController extends Controller
{
    //lista todos os modelos
    public function listarModelos(){

        $listar=Modelo::query()->orderBy('modelo')->get();
        return view('viewsModelo/modelo',compact('listar'));
    }
    //cadastro de modelos
    public function formModelo(){

        return view('viewsModelo/formModelo');
    }
    //salvar modelo
    public function store(Request $request){
        $nome=new Modelo();
        $nome->modelo=$request->novomodelo;
        $nome->save();
        return redirect('/modelos');
    }
    //remover modelo
    public function destroy(Request $request, removedorDeModelo $removedorDeModelo){
        $removedorDeModelo->removerModelo($request->id);
        return redirect('/modelos');
    }
    //form para alterar o modelo
    public function formAlterarModelo(Request $request){
        $id=$request->id;
        $modelo=$request->modelo;
        return view('viewsModelo/formAlterarModelo',compact('id','modelo'));
    }
    //alterar o modelo
    public function alteraModelo(Request $request, alteradorDeModelo $alteradorDeModelo){
        $alteradorDeModelo->alterarModelo($request->id,$request->novomodelo);
        return redirect('/modelos');

    }
}
