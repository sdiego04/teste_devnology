<?php

use App\Http\Controllers\corController;
use App\Http\Controllers\marcasController;
use App\Http\Controllers\modeloController;
use App\Http\Controllers\veiculoController;
use App\Http\Controllers\vendaController;
use App\Models\Marca;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//rota para chamar a view principal
Route::get('/', function () {
    return view('home');
});

//inicio rotas "marca"
    //rota para chamar a view de listagem de marcas
    Route::get('/marcas',[marcasController::class,'listarMarcas'])
        ->name('listarMarcas');
    //rota para chamar o cadastro de marcas
    Route::get('/cadastroMarcas',[marcasController::class,'formCadastro'])
        ->name('formCadastro');
    //rota para executar o save das marcas
    Route::post('cadastroMarcas',[marcasController::class,'store'])
        ->name('salvarMarcas');
    //rota para excluir uma marca
    Route::post('/removermarca/{id}',[marcasController::class,'destroy']);
    //rota para chamar o form de alteração de marca
    Route::get('formAlterar/{id}+{marca}',[marcasController::class,'formAlterar'])
    ->name('formAlterar');
    //rota para alterar a marca
    Route::post('alterarMarca/{id}+{nome}',[marcasController::class,'alterarMarca']);
//fim rotas "marca"

//inicio rotas modelo
    //rota para chamar o cadastro de modelos
    Route::get('modelos',[modeloController::class,'listarModelos']);
    //rota para cadastrar um novo modelo
    Route::get('/cadastroModelo',[modeloController::class,'formModelo']);
    //rota para salvar no db o novo modelo
    Route::post('/cadastroModelo',[modeloController::class,'store']);
    //rota para remover um modelo
    Route::post('/removerModelo/{id}',[modeloController::class, 'destroy']);
    //rota para chamar o form de aleteração de modelo
    Route::get('/formAlterarModelo/{id}+{modelo}',[modeloController::class,'formAlterarModelo']);
    //rota para alterar o modelo
    Route::post('/alterarModelo/{id}+{modelo}',[modeloController::class,'alteraModelo']);
//fim rotas modelo

//inicio rotas cor
    // rota para exibir a lista de cores cadatradas
    Route::get('/cores',[corController::class,'listaCores']);
    //rota para exibir a view de cadastro de rotas
    Route::get('cadastroCores',[corController::class,'cadastroCores']);
    //rota que salva uma nova cor cadastrada
    Route::post('/cores',[corController::class,'store']);
    //rota que chama o form para alterar a cor selecionada
    Route::get('/formAlteraCor/{id}+{cor}',[corController::class,'formAlterarCor']);
    //rota que alterar a cor selecionada
    Route::post('/alteraCor/{id}+{cor}',[corController::class,'alterarCor']);
    //rota que exclui uma cor
    Route::post('/apagarCor/{id}',[corController::class,'apagarCor']);
//fim rotas cor

//inicio rotas veiculo
    //metodo que lista todos os veiculos
    Route::get('/veiculos',[veiculoController::class,'listarVeiculos']);
    //rota para chamar o form para cadastro de veiculos
    Route::get('/cadastroVeiculos',[veiculoController::class,'formCadastroVeiculos']);
    //rota para chamar o controller que salva o veiculo no banco
    Route::post('cadastroVeiculos',[veiculoController::class,'cadastraVeiculos']);
    Route::get('/formVenda/{id}',[vendaController::class,'formVenda']);
    Route::post('/formVenda/{id}',[vendaController::class,'store']);
    Route::get('/veiculosVendidos',[veiculoController::class,'listarVeiculosVendidos']);
    Route::get('/relatorioDeVendas',[veiculoController::class,'listarRelatorio']);
//fim rotas veiculo


