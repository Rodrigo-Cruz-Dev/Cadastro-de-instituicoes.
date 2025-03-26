<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

Route::get('/', function () {
    return view('main');
});

Route::get('/cadastrar', [CadastroController::class, 'create'])->name('cadastrar.create');
Route::post('/cadastrar', [CadastroController::class, 'store'])->name('cadastrar.store');

Route::get('/entidades', [CadastroController::class, 'index'])->name('entidades.index');