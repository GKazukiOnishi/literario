<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\RedacaoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\DicionarioController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/conteudo',[ConteudoController::class,'carregarPaginaSecoes'])->name('home');
Route::get('/conteudo/{area}',[ConteudoController::class,'carregarPaginaSubsecoes'])->name('carregar');
Route::get('/conteudo/{area}/{secao}/{subsecao}/{conteudo}',[ConteudoController::class,'baixarConteudo']);

Route::post('/conteudo/{area}',[ConteudoController::class,'cadastrarSecao']);
Route::post('/conteudo/{area}/{secao}',[ConteudoController::class,'cadastrarSubsecao']);
Route::post('/conteudo/{area}/{secao}/{subsecao}',[ConteudoController::class,'cadastrarConteudo']);
Route::post('/delete/{area}/',[ConteudoController::class,'excluirSubcecao']);


Route::post('/deleteSecao/{area}/{conteudo}/',[ConteudoController::class,'excluirSec']);

Route::post('/perfil',[PerfilController::class,'atualizarPerfil']);
Route::post('/editarSecao/{idArea}',[ConteudoController::class,'editarSecao']);
Route::post('/deletarSecap/{idArea}',[ConteudoContoller::class,'editarSessao']);

Route::get('/exercicio/{area}/{secao}',[ExercicioController::class,'carregarPaginaExercicios']);
Route::post('/exercicio/{area}/{secao}',[ExercicioController::class,'cadastrarExercicio']);
Route::post('/exercicio/{area}/{secao}/{idExercicio}',[ExercicioController::class,'salvarGabarito']);
Route::post('/exercicio/delete',[ExercicioController::class,'excluirExercicio']);

Route::get('/redacao/{tema}/{aluno}',[RedacaoController::class,'carregarPaginaRedacao']);
Route::get('/perfil',[PerfilController::class,'carregarPagina']);
Route::get('/',[PerfilController::class,'logout'])->name('logout2');

Route::get('/dicionario',[DicionarioController::class,'carregarPaginaDicionario']);
Route::post('/dicionario',[DicionarioController::class,'pesquisarPalavra']);

Auth::routes();

