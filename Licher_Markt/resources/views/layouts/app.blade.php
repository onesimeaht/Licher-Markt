<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Licher_Markt - Votre carrière commence ici')</title>
    
    <!-- Tailwind CSS via CDN pour test rapide -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <style>
        .navbar-brand {
            color: #1e40af !important;
            font-weight: bold;
        }
        
        .nav-link {
            color: #374151 !important;
            font-weight: 500;
            transition: color 0.2s;
        }
        
        .nav-link:hover {
            color: #1e40af !important;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header/Navigation -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-blue-600">LICHER_MARKT</span>
                    </a>
                </div>

                <!-- Menu de navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="{{ url('/') }}" class="nav-link px-3 py-2 rounded-md text-sm font-medium">🏠 Accueil</a>
                        <a href="{{ url('/autorites') }}" class="nav-link px-3 py-2 rounded-md text-sm font-medium">🏢 Autorités</a>
                        <a href="{{ url('/realisations') }}" class="nav-link px-3 py-2 rounded-md text-sm font-medium">💼 Réalisations</a>
                        <a href="{{ url('/find') }}" class="nav-link px-3 py-2 rounded-md text-sm font-medium">🔍 Recherche</a>
                    </div>
                </div>

                <!-- Section utilisateur -->
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <span class="text-gray-700 bg-blue-100 px-3 py-1 rounded-full text-sm">
                            🤖 Mode Test Assistant IA
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p>&copy; {{ date('Y') }} Licher_Markt. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- BOUTON IA FLOTTANT - URGENT -->
    <button id="urgent-ai-btn" style="
        position: fixed !important;
        bottom: 30px !important;
        right: 30px !important;
        width: 80px !important;
        height: 80px !important;
        background: #1e40af !important;
        color: white !important;
        border: none !important;
        border-radius: 50% !important;
        font-size: 35px !important;
        cursor: pointer !important;
        box-shadow: 0 8px 25px rgba(0,0,0,0.3) !important;
        z-index: 999999 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        transition: all 0.3s ease !important;
    " onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
        🤖
    </button>

    <!-- Modal IA -->
    <div id="urgent-ai-modal" style="
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.8);
        z-index: 1000000;
    ">
        <div style="
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 30px;
            border-radius: 20px;
            width: 90%;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
        ">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; background: #1e40af; color: white; padding: 15px; border-radius: 10px; margin: -30px -30px 20px -30px;">
                <h2 style="margin: 0; font-size: 24px;">🤖 Assistant IA Licher_Markt</h2>
                <button id="urgent-close-btn" style="background: none; border: none; color: white; font-size: 30px; cursor: pointer; padding: 0; width: 40px; height: 40px;">×</button>
            </div>
            
            <div style="text-align: center; margin-bottom: 20px;">
                <h3 style="font-size: 20px; margin-bottom: 10px;">Votre Assistant IA pour l'Emploi au Bénin</h3>
                <p style="color: #666; margin-bottom: 20px;">Posez vos questions sur les concours, délais et procédures !</p>
            </div>
            
            <div id="urgent-chat-box" style="
                height: 250px;
                overflow-y: auto;
                border: 2px solid #e5e7eb;
                border-radius: 10px;
                padding: 15px;
                margin-bottom: 15px;
                background: #f9fafb;
            ">
                <div style="background: white; padding: 12px; border-radius: 8px; margin-bottom: 10px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                    <strong style="color: #1e40af;">Assistant IA :</strong> Bonjour ! Je peux vous aider avec les procédures d'emploi au Bénin. Que souhaitez-vous savoir ?
                </div>
            </div>
            
            <div style="display: flex; gap: 10px;">
                <input type="text" id="urgent-chat-input" placeholder="Tapez votre question..." style="
                    flex: 1;
                    padding: 12px;
                    border: 2px solid #d1d5db;
                    border-radius: 8px;
                    font-size: 16px;
                ">
                <button onclick="sendUrgentMessage()" style="
                    padding: 12px 20px;
                    background: #1e40af;
                    color: white;
                    border: none;
                    border-radius: 8px;
                    cursor: pointer;
                    font-size: 16px;
                ">Envoyer</button>
            </div>
            
            <div style="margin-top: 15px; text-align: center; font-size: 14px; color: #666;">
                <strong>Exemples :</strong> "délais concours", "grilles salariales", "procédures candidature"
            </div>
        </div>
    </div>

    <script>
        // Ouvrir le modal
        document.getElementById('urgent-ai-btn').onclick = function() {
            document.getElementById('urgent-ai-modal').style.display = 'block';
        };

        // Fermer le modal
        document.getElementById('urgent-close-btn').onclick = function() {
            document.getElementById('urgent-ai-modal').style.display = 'none';
        };

        // Fermer en cliquant à l'extérieur
        document.getElementById('urgent-ai-modal').onclick = function(e) {
            if (e.target === this) {
                this.style.display = 'none';
            }
        };

        // Envoyer message
        function sendUrgentMessage() {
            const input = document.getElementById('urgent-chat-input');
            const chatBox = document.getElementById('urgent-chat-box');
            const message = input.value.trim();
            
            if (!message) return;
            
            // Message utilisateur
            chatBox.innerHTML += `
                <div style="background: #dbeafe; padding: 12px; border-radius: 8px; margin-bottom: 10px; text-align: right;">
                    <strong>Vous :</strong> ${message}
                </div>
            `;
            
            // Réponse IA
            setTimeout(() => {
                const response = getUrgentResponse(message);
                chatBox.innerHTML += `
                    <div style="background: white; padding: 12px; border-radius: 8px; margin-bottom: 10px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                        <strong style="color: #1e40af;">Assistant IA :</strong> ${response}
                    </div>
                `;
                chatBox.scrollTop = chatBox.scrollHeight;
            }, 1000);
            
            input.value = '';
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        function getUrgentResponse(message) {
            const lower = message.toLowerCase();
            
            if (lower.includes('délai') || lower.includes('concours')) {
                return "🕒 Les délais de concours :<br>• Ministères : 15-30 jours<br>• Office du Bac : 21 jours<br>• Autres organismes : 14-45 jours<br><br>💡 Conseil : Postulez dans les 7 premiers jours !";
            } else if (lower.includes('salaire') || lower.includes('grille')) {
                return "💰 Grilles salariales secteur public :<br>• Catégorie A : 80,000 - 300,000 FCFA<br>• Catégorie B : 60,000 - 150,000 FCFA<br>• Catégorie C : 45,000 - 100,000 FCFA<br><br>Les montants varient selon l'expérience.";
            } else if (lower.includes('procédure') || lower.includes('candidature')) {
                return "📋 Procédures de candidature :<br>1️⃣ Vérifiez votre éligibilité<br>2️⃣ Constituez votre dossier complet<br>3️⃣ Déposez avant la date limite<br>4️⃣ Passez les épreuves<br>5️⃣ Attendez les résultats";
            } else if (lower.includes('bonjour') || lower.includes('salut')) {
                return "👋 Bonjour ! Je suis votre assistant IA spécialisé dans l'emploi public au Bénin. Je peux vous renseigner sur les concours, délais, salaires et procédures. Comment puis-je vous aider ?";
            } else {
                return "🤖 Je peux vous aider avec :<br>• Les délais de concours<br>• Les grilles salariales<br>• Les procédures de candidature<br>• Les critères d'éligibilité<br><br>Que souhaitez-vous savoir ?";
            }
        }

        // Envoi avec Entrée
        document.getElementById('urgent-chat-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendUrgentMessage();
            }
        });
    </script>
</body>
</html>