<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\VerifyCsrfToken;

Route::middleware(['throttle:50,1'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Route::get('/informacoes', [HomeController::class, 'cnhInfo'])->name('cnh.info');
    Route::get('/verificacao', [HomeController::class, 'verificacao'])->name('verificacao');
    Route::get('/informacoes-de-contato', [HomeController::class, 'infosContato'])->name('infos.contato');
    Route::get('/validacao', [HomeController::class, 'validacao'])->name('validacao');
    Route::get('/questionario', [HomeController::class, 'questionario'])->name('questionario');
    Route::get('/resultado', [HomeController::class, 'resultado'])->name('resultado');
    Route::get('/endereco', [HomeController::class, 'endereco'])->name('endereco');
    Route::get('/auto-escola', [HomeController::class, 'autoEscola'])->name('auto-escola');
    Route::get('/aprovado', [HomeController::class, 'aprovado'])->name('aprovado');
    Route::get('/agendar-exame', [HomeController::class, 'agendarExame'])->name('agendar-exame');
    Route::get('/checkout/pix/{order}', [HomeController::class, 'pix'])->name('pix');

    Route::get('/cadastro/pendencia', [HomeController::class, 'pendencia'])->name('pendencia');
    Route::get('/cadastro/adicao-categoria', [HomeController::class, 'adicaoCategoria'])->name('adicao-categoria');
    Route::get('/cadastro/nova-chance', [HomeController::class, 'novaChance'])->name('nova-chance');
    Route::get('/cadastro/concluido', [HomeController::class, 'concluido'])->name('concluido');
    
});
Route::middleware(['throttle:50,1'])->group(function () {
    Route::post('/processar', [HomeController::class, 'processar']);
    Route::post('/consulta/cpf', [HomeController::class, 'consultar'])->name('consulta.cpf.post');
    Route::post('/confirmar', [HomeController::class, 'confirmar']);
    Route::post('/callback', [HomeController::class, 'callback']);
});