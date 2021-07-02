<?php

namespace App\Http\Controllers;

use App\Models\Cor;
use App\Services\alteradorDeCor;
use App\Services\removedorDeCor;
use Illuminate\Http\Request;

class corController extends Controller
{
    //metodo que lista todas as cores cadastradas
    public function listaCores(){
        $lista=Cor::query()->orderBy('cor')->get();
        return view('viewsCor/cores',compact('lista'));
    }
    //metodo que salva uma nova cor
    public function store(Request $request){
        $novaCor= new Cor();
        $novaCor->cor=$request->novacor;
        $novaCor->Save();
        return redirect('/cores');
    }
    //metodo que chama o form para cadastro de uma nova cor
    public function cadastroCores(){
        return view('/viewsCor/formCores');
    }
    //metodo que altera a cor selecionada
    public function formAlterarCor(Request $request){
        $cor=$request->cor;
        $id=$request->id;
        return view('/viewsCor/formAlterarCor',compact('id','cor'));
    }
    //metodo que usa um service para alterar uma cor
    public function alterarCor(Request $request,alteradorDeCor $alteradorDeCor){

        $alteradorDeCor->alterCores($request->id,$request->novacor);
        return redirect('/cores');
    }
    //metodo para excluir uma cor usando uma classe service
    public function apagarCor(Request $request, removedorDeCor $removedorDeCor){
        $removedorDeCor->removeCor($request->id);
        return redirect('/cores');

    }
}
