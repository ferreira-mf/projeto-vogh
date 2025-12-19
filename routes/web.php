<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupoEconomicoController;
use App\Http\Controllers\BandeiraController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\ColaboradorController;


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('grupos-economicos', GrupoEconomicoController::class);
Route::resource('bandeiras', BandeiraController::class);
Route::resource('unidades', UnidadeController::class);
Route::resource('colaboradores', ColaboradorController::class)->parameters([
    'colaboradores' => 'colaborador'

]);