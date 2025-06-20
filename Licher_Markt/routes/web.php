<?php

use App\Http\Controllers\AutoriteController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\AIAssistantController;
use App\Models\Realisation;
use Illuminate\Support\Facades\Route;

Route::get('/', [RealisationController::class, 'home'])->name('realisation.home');
Route::get('/autorites', [AutoriteController::class, 'index'])->name('autorite.index');
Route::get('/autorite/{id}', [AutoriteController::class, 'show'])->name('autorite.show');
Route::get('/realisations', [RealisationController::class, 'index'])->name('realisation.index');
Route::get('/find', [RealisationController::class, 'find'])->name('realisation.find');
Route::post('/result', [RealisationController::class, 'filtre'])->name('realisation.filtre');

// Routes IA - SANS authentification pour tester
// Route::get('/assistant-ia', [AIAssistantController::class, 'index'])->name('ai.index');
// Route::post('/ai/recommendations', [AIAssistantController::class, 'getRecommendations']);
// Route::post('/ai/analyze-cv', [AIAssistantController::class, 'analyzeCv']);
// Route::post('/ai/chatbot', [AIAssistantController::class, 'chatbotResponse']);

// Route de test
Route::get('/test-model', function() {
    try {
        $typeautorites = \App\Models\Typeautorite::all();
        return "Modèle fonctionne ! Nombre d'enregistrements: " . $typeautorites->count();
    } catch (\Exception $e) {
        return "Erreur: " . $e->getMessage();
    }
});