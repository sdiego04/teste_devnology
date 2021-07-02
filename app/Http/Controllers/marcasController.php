<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Services\alteradorDeMarca;
use App\Services\removedorDeMarca;
use Illuminate\Http\Request;

class marcasController extends Controller
{
    //lista todas as marcas cadastradas de automoveis
    public function listarMarcas(){

        $listar=Marca::query()->orderBy('marca')->get();
        return view('viewsMarca/marcas',compact('listar'));
    }
    //chama o form para cadastro de marcas
    public function formCadastro(){

        return view('viewsMarca/formMarca');
    }
    //salva uma nova marca
    public function store(Request $request){

        $nome=$request->marca;
        $marcaObj=new Marca();
        $marcaObj->marca=$nome;
        $marcaObj->save();
        return redirect('marcas');
    }
    //exclui uma marca
    public function destroy(Request $request,removedorDeMarca $removedor){

    $removedor->removedorMarca($request->id);
    return redirect('marcas');
    }

    //form para alterar a marca
    public function formAlterar(Request $request){
        $idMarca=$request->id;
        $nome=$request->marca;
        return view('viewsMarca/formAlterarMarca',compact('idMarca','nome'));

    }
    //altera o a marca
    public function alterarMarca(Request $request,alteradorDeMarca $alteradorDeMarca){

        $alteradorDeMarca->alterarMarcas($request->id,$request->novonome);
        return redirect("/marcas");
    }


}
