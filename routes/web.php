<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\PerfilController;
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
Route::get('/conteudo/{area}',[ConteudoController::class,'carregarPaginaSubsecoes']);
Route::get('/conteudo/{area}/{secao}/exercicios',[ConteudoController::class,'']);

Route::post('/conteudo/{area}',[ConteudoController::class,'cadastrarSecao']);
Route::post('/conteudo/{area}/{secao}',[ConteudoController::class,'cadastrarSubsecao']);
Route::post('/conteudo/{area}/{secao}/{subsecao}',[ConteudoController::class,'cadastrarConteudo']);

Route::get('/perfil',[PerfilController::class,'carregarPagina']);
Route::post('/perfil',[PerfilController::class,'atualizarPerfil']);

Auth::routes();
