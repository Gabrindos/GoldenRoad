<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Rotas ControllerCampeonato
Route::get('/filme', [App\Http\Controllers\ControllerCampeonato::class, 'index'])->name('exibeFilme');
Route::get('/filme/novo', [App\Http\Controllers\ControllerCampeonato::class, 'create'])->name('novoFilme');
Route::post('/filme', [App\Http\Controllers\ControllerCampeonato::class, 'store'])->name('gravaFilme');
Route::get('/filme/edit/{id}', [App\Http\Controllers\ControllerCampeonato::class, 'edit'])->name('editarFilme');
Route::post('/filme/{id}', [App\Http\Controllers\ControllerCampeonato::class, 'update'])->name('atualizaFilme');
Route::get('/filme/apagar/{id}', [App\Http\Controllers\ControllerCampeonato::class, 'destroy'])->name('deletaFilme');

//Rotas ControllerTime
Route::get('/Diretor', [App\Http\Controllers\ControllerTime::class, 'index'])->name('exibeDiretor');
Route::get('/Diretor/novo', [App\Http\Controllers\ControllerTime::class, 'create'])->name('novoDiretor');
Route::post('/Diretor', [App\Http\Controllers\ControllerTime::class, 'store'])->name('gravaNovoDiretor');
Route::get('/Diretor/edit/{id}', [App\Http\Controllers\ControllerTime::class, 'edit'])->name('editarDiretor');
Route::post('/Diretor/{id}', [App\Http\Controllers\ControllerTime::class, 'update'])->name('atualizaDiretor');
Route::get('/Diretor/apagar/{id}', [App\Http\Controllers\ControllerTime::class, 'destroy'])->name('deletaDiretor');

//Rotas ControllerJogador
Route::get('/Personagem', [App\Http\Controllers\ControllerJogador::class, 'index'])->name('exibePersonagens');
Route::get('/Personagem/novo', [App\Http\Controllers\ControllerJogador::class, 'create'])->name('novoPersonagens');
Route::post('/Personagem', [App\Http\Controllers\ControllerJogador::class, 'store'])->name('gravaNovoPersonagens');
Route::get('/Personagem/edit/{id}', [App\Http\Controllers\ControllerJogador::class, 'edit'])->name('editarPersonagens');
Route::post('/Personagem/{id}', [App\Http\Controllers\ControllerJogador::class, 'update'])->name('atualizaPersonagens');
Route::get('/Personagem/apagar/{id}', [App\Http\Controllers\ControllerJogador::class, 'destroy'])->name('deletaPersonagens');

//Rotas ControllerTimeCampeonato
Route::get('/diretorfilme/detalhes/{id}', [App\Http\Controllers\ControllerTimeCampeonato::class, 'index'])->name('exibeDiretorFilme');
Route::get('/diretorfilme/{id}', [App\Http\Controllers\ControllerTimeCampeonato::class, 'create'])->name('novoDiretorFilme');
Route::post('/diretorfilme', [App\Http\Controllers\ControllerTimeCampeonato::class, 'store'])->name('gravaNovoDiretorFilme');
Route::get('/diretorfilme/apagar/{idC}/{idT}', [App\Http\Controllers\ControllerTimeCampeonato::class, 'destroy'])->name('deletaDiretorFilme');