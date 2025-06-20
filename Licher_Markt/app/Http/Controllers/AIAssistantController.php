<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AIAssistantController extends Controller
{
    public function index()
    {
        return view('ai.index');
    }
    
    public function getRecommendations(Request $request)
    {
        // Logique de recommandations (à développer plus tard)
        return response()->json([
            'message' => 'Recommandations en cours de développement',
            'data' => []
        ]);
    }
    
    public function analyzeCv(Request $request)
    {
        // Logique d'analyse CV (à développer plus tard)
        return response()->json([
            'score' => 75,
            'suggestions' => [
                'Ajoutez des mots-clés spécifiques au secteur public béninois',
                'Mentionnez votre expérience avec les procédures administratives'
            ]
        ]);
    }
    
    public function chatbotResponse(Request $request)
    {
        // Logique chatbot (à développer plus tard)
        $message = $request->input('message', '');
        return response()->json([
            'response' => 'Je peux vous aider avec les procédures de candidature au Bénin. Que souhaitez-vous savoir ?'
        ]);
    }
}