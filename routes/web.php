<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GrupoEconomicoController;
use App\Http\Controllers\BandeiraController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\AuditoriaController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\AuthController;

// Rotas de autenticação (Blade)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas protegidas (inclui a página inicial)
Route::middleware('auth')->group(function () {
    // Página inicial (dashboard)
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/auditoria', [AuditoriaController::class, 'index'])->name('auditoria.index');

    // CRUDs
    Route::resource('grupos-economicos', GrupoEconomicoController::class);
    Route::resource('bandeiras', BandeiraController::class);
    Route::resource('unidades', UnidadeController::class);
    Route::resource('colaboradores', ColaboradorController::class)->parameters([
        'colaboradores' => 'colaborador'
    ]);

    // Exportações
    Route::get('/export/colaboradores', [ExportController::class, 'exportColaboradores'])->name('export.colaboradores');
    Route::get('/export/grupos', [ExportController::class, 'exportGrupos'])->name('export.grupos');
    Route::get('/export/bandeiras', [ExportController::class, 'exportBandeiras'])->name('export.bandeiras');
    Route::get('/export/unidades', [ExportController::class, 'exportUnidades'])->name('export.unidades');
});