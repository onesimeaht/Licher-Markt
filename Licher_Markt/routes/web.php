<?php

use App\Http\Controllers\AutoriteController;
use App\Http\Controllers\RealisationController;
use App\Models\Realisation;
use Illuminate\Support\Facades\Route;

Route::get('/', [RealisationController::class, 'home'])->name('realisation.home');
Route::get('/autorites', [AutoriteController::class, 'index'])->name('autorite.index');
Route::get('/autorite/{id}', [AutoriteController::class, 'show'])->name('autorite.show');
Route::get('/realisations', [RealisationController::class, 'index'])->name('realisation.index');
Route::get('/find', [RealisationController::class, 'find'])->name('realisation.find');
Route::post('/result', [RealisationController::class, 'filtre'])->name('realisation.filtre');
