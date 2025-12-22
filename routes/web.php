<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GrupoEconomicoController;
use App\Http\Controllers\BandeiraController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\AuditoriaController;
use App\Http\Controllers\ExportController;




Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/auditoria', [AuditoriaController::class, 'index']);
Route::resource('grupos-economicos', GrupoEconomicoController::class);
Route::get('/export/colaboradores', [ExportController::class, 'exportColaboradores']);
Route::get('/export/colaboradores', [ExportController::class, 'exportColaboradores'])->name('export.colaboradores');
Route::get('/export/grupos', [ExportController::class, 'exportGrupos'])->name('export.grupos');
Route::get('/export/bandeiras', [ExportController::class, 'exportBandeiras'])->name('export.bandeiras');
Route::get('/export/unidades', [ExportController::class, 'exportUnidades'])->name('export.unidades');
Route::resource('bandeiras', BandeiraController::class);
Route::resource('unidades', UnidadeController::class);
Route::resource('colaboradores', ColaboradorController::class)->parameters([
    'colaboradores' => 'colaborador'
]);