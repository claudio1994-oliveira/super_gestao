<?php

use App\Http\Controllers\PrincipalController;
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
/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'principal'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'principal'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class,'principal'])->name('site.contato');
Route::get('/login', function () {
    return "Login";
}); 

Route::prefix('/app')->group(function (){
    Route::get('/clientes', function () {return "Cliente"; })->name('app.clientes'); 
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class,'index'])->name('site.fornecedores')->name('app.fornecedores'); 
    Route::get('/produtos', function () {return "Produtos";})->name('site.produtos'); 
});

Route::fallback(function(){
    echo "Página não encontrada. Clique <a href=" . route('site.index') . ">aqui</a> para ir para a página inicial";
});







