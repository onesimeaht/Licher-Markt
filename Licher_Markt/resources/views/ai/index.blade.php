@extends('layouts.app')

@section('title', 'Assistant IA - Licher_Markt')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header de la page -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                🤖 Assistant IA Licher_Markt
            </h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Découvrez votre assistant intelligent pour optimiser votre recherche d'emploi au Bénin. 
                Recommandations personnalisées, analyse de CV et conseils sur mesure.
            </p>
        </div>
    </div>

    <!-- Navigation des sections IA -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Profil Candidat -->
            <div class="text-center p-6 border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-500 transition-colors cursor-pointer" onclick="showSection('profile')">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Mon Profil</h3>
                <p class="text-sm text-gray-600">Complétez votre profil pour des recommandations personnalisées</p>
            </div>

            <!-- Recommandations -->
            <div class="text-center p-6 border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-500 transition-colors cursor-pointer" onclick="showSection('recommendations')">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Recommandations</h3>
                <p class="text-sm text-gray-600">Offres d'emploi suggérées selon votre profil</p>
            </div>

            <!-- Assistant CV -->
            <div class="text-center p-6 border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-500 transition-colors cursor-pointer" onclick="showSection('cv-assistant')">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2v1a1 1 0 001 1h6a1 1 0 001-1V3a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Assistant CV</h3>
                <p class="text-sm text-gray-600">Optimisez votre CV pour le marché béninois</p>
            </div>

            <!-- Chatbot Guide -->
            <div class="text-center p-6 border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-500 transition-colors cursor-pointer" onclick="showSection('chatbot')">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Assistant Guide</h3>
                <p class="text-sm text-gray-600">Posez vos questions sur les procédures</p>
            </div>
        </div>
    </div>

    <!-- Section contenu dynamique -->
    <div id="content-sections">
        
        <!-- Section Profil -->
        <div id="profile-section" class="content-section hidden">
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-2xl font-bold mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                    </svg>
                    Mon Profil Candidat
                </h2>
                
                <form id="profile-form" class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                            <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Votre nom complet">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Années d'expérience</label>
                            <select name="experience" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Sélectionnez...</option>
                                <option value="0-1">0-1 an</option>
                                <option value="2-5">2-5 ans</option>
                                <option value="5-10">5-10 ans</option>
                                <option value="10+">Plus de 10 ans</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Localisation</label>
                            <select name="location" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="Cotonou">Cotonou</option>
                                <option value="Porto-Novo">Porto-Novo</option>
                                <option value="Parakou">Parakou</option>
                                <option value="Abomey-Calavi">Abomey-Calavi</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Niveau d'éducation</label>
                            <select name="education" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Sélectionnez...</option>
                                <option value="Bac">Baccalauréat</option>
                                <option value="Licence">Licence</option>
                                <option value="Master">Master</option>
                                <option value="Doctorat">Doctorat</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Compétences</label>
                        <div id="skills-container" class="mb-4">
                            <!-- Les compétences apparaîtront ici -->
                        </div>
                        <div class="flex gap-2">
                            <input type="text" id="skill-input" placeholder="Ajouter une compétence" class="flex-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <button type="button" onclick="addSkill()" class="px-4 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                                Ajouter
                            </button>
                        </div>
                        <div class="mt-2 text-sm text-gray-600">
                            Suggestions: Communication, Marketing, Finance, JavaScript, React, Excel, Comptabilité
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition-colors font-medium">
                        Sauvegarder mon profil
                    </button>
                </form>
            </div>
        </div>

        <!-- Section Recommandations -->
        <div id="recommendations-section" class="content-section hidden">
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-2xl font-bold mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Recommandations Personnalisées
                </h2>
                
                <div id="recommendations-content">
                    <div class="text-center py-8">
                        <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-gray-600">Complétez votre profil pour recevoir des recommandations personnalisées</p>
                        <button onclick="showSection('profile')" class="mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            Compléter mon profil
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Assistant CV -->
        <div id="cv-assistant-section" class="content-section hidden">
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-2xl font-bold mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2v1a1 1 0 001 1h6a1 1 0 001-1V3a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5z"/>
                    </svg>
                    Assistant CV Optimisé Bénin
                </h2>
                
                <div class="mb-6">
                    <button onclick="analyzeCv()" class="bg-yellow-600 text-white px-6 py-3 rounded-lg hover:bg-yellow-700 transition-colors flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        </svg>
                        Analyser mon CV
                    </button>
                </div>

                <div id="cv-analysis-result" class="hidden">
                    <!-- Les résultats d'analyse apparaîtront ici -->
                </div>
            </div>
        </div>

        <!-- Section Chatbot -->
        <div id="chatbot-section" class="content-section hidden">
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-2xl font-bold mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7z"/>
                    </svg>
                    Assistant Guide - Procédures Bénin
                </h2>
                
                <div class="bg-gray-50 rounded-lg p-4 h-96 overflow-y-auto mb-4" id="chat-messages">
                    <div class="mb-4 flex justify-start">
                        <div class="bg-white text-gray-800 border border-gray-200 px-4 py-2 rounded-lg max-w-xs lg:max-w-md">
                            Bonjour ! Je suis votre assistant IA pour Licher_Markt. Comment puis-je vous aider aujourd'hui ?
                        </div>
                    </div>
                </div>
                
                <div class="flex space-x-2">
                    <input type="text" id="chat-input" placeholder="Posez votre question sur les procédures, délais, concours..." class="flex-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <button onclick="sendMessage()" class="bg-purple-600 text-white px-4 py-3 rounded-lg hover:bg-purple-700 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                        </svg>
                    </button>
                </div>
                
                <div class="mt-4 text-sm text-gray-600">
                    <strong>Questions fréquentes :</strong> procédures de candidature, délais de concours, grilles salariales, critères d'éligibilité
                </div>
            </div>
        </div>

        <!-- Message de bienvenue par défaut -->
        <div id="welcome-section" class="content-section">
            <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                <div class="max-w-2xl mx-auto">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        Bienvenue dans votre Assistant IA 🚀
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Votre compagnon intelligent pour réussir votre recherche d'emploi au Bénin. 
                        Choisissez une fonctionnalité ci-dessus pour commencer.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h3 class="font-semibold text-blue-900 mb-2">🎯 Recommandations Intelligentes</h3>
                            <p class="text-blue-700 text-sm">
                                Recevez des suggestions d'emplois personnalisées basées sur votre profil et vos compétences.
                            </p>
                        </div>
                        
                        <div class="bg-green-50 p-6 rounded-lg">
                            <h3 class="font-semibold text-green-900 mb-2">📝 Optimisation CV</h3>
                            <p class="text-green-700 text-sm">
                                Améliorez votre CV avec des conseils spécifiques au marché de l'emploi béninois.
                            </p>
                        </div>
                        
                        <div class="bg-yellow-50 p-6 rounded-lg">
                            <h3 class="font-semibold text-yellow-900 mb-2">🤖 Assistant 24/7</h3>
                            <p class="text-yellow-700 text-sm">
                                Posez vos questions sur les procédures, délais et critères des concours publics.
                            </p>
                        </div>
                        
                        <div class="bg-purple-50 p-6 rounded-lg">
                            <h3 class="font-semibold text-purple-900 mb-2">📊 Analyse Intelligente</h3>
                            <p class="text-purple-700 text-sm">
                                Calculez votre compatibilité avec chaque offre d'emploi en temps réel.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Variables globales
let userSkills = [];
let chatMessages = [];

// Navigation entre sections
function showSection(sectionName) {
    // Cacher toutes les sections
    document.querySelectorAll('.content-section').forEach(section => {
        section.classList.add('hidden');
    });
    
    // Afficher la section demandée
    document.getElementById(sectionName + '-section').classList.remove('hidden');
    
    // Mettre à jour l'apparence des boutons de navigation
    updateNavigation(sectionName);
}

function updateNavigation(activeSection) {
    // Reset tous les boutons
    document.querySelectorAll('[onclick^="showSection"]').forEach(btn => {
        btn.classList.remove('border-blue-500', 'bg-blue-50');
        btn.classList.add('border-gray-300');
    });
    
    // Activer le bouton sélectionné
    const activeBtn = document.querySelector(`[onclick="showSection('${activeSection}')"]`);
    if (activeBtn) {
        activeBtn.classList.remove('border-gray-300');
        activeBtn.classList.add('border-blue-500', 'bg-blue-50');
    }
}

// Gestion des compétences
function addSkill() {
    const skillInput = document.getElementById('skill-input');
    const skill = skillInput.value.trim();
    
    if (skill && !userSkills.includes(skill)) {
        userSkills.push(skill);
        skillInput.value = '';
        updateSkillsDisplay();
    }
}

function removeSkill(skillToRemove) {
    userSkills = userSkills.filter(skill => skill !== skillToRemove);
    updateSkillsDisplay();
}

function updateSkillsDisplay() {
    const container = document.getElementById('skills-container');
    container.innerHTML = '';
    
    userSkills.forEach(skill => {
        const skillTag = document.createElement('span');
        skillTag.className = 'inline-flex items-center bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm mr-2 mb-2';
        skillTag.innerHTML = `
            ${skill}
            <button onclick="removeSkill('${skill}')" class="ml-2 text-blue-600 hover:text-blue-800">
                ×
            </button>
        `;
        container.appendChild(skillTag);
    });
}

// Gestion du profil
document.getElementById('profile-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    formData.append('skills', JSON.stringify(userSkills));
    
    // Simuler la sauvegarde
    showNotification('Profil sauvegardé avec succès !', 'success');
    
    // Activer les recommandations
    loadRecommendations();
});

// Charger les recommandations
function loadRecommendations() {
    if (userSkills.length === 0) {
        return;
    }
    
    // Données d'exemple d'offres d'emploi
    const jobs = [
        {
            id: 1,
            title: "Chargé de Communication",
            organization: "Ministère de la Santé (MS)",
            location: "Cotonou",
            contract: "CDI",
            requirements: ["Communication", "Marketing", "Rédaction"],
            description: "Poste de chargé de communication pour les campagnes de santé publique",
            deadline: "2024-07-15"
        },
        {
            id: 2,
            title: "Analyste Financier", 
            organization: "Ministère de l'Économie et des Finances (MEF)",
            location: "Porto-Novo",
            contract: "CDD",
            requirements: ["Finance", "Comptabilité", "Excel"],
            description: "Analyse des budgets et reporting financier",
            deadline: "2024-07-20"
        }
    ];
    
    const recommendationsHtml = jobs.map(job => {
        const compatibility = calculateCompatibility(job);
        const compatibilityClass = compatibility >= 80 ? 'bg-green-100 text-green-800' : 
                                  compatibility >= 60 ? 'bg-yellow-100 text-yellow-800' : 
                                  'bg-red-100 text-red-800';
        
        return `
            <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow mb-4">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">${job.title}</h3>
                        <p class="text-blue-600 font-medium">${job.organization}</p>
                    </div>
                    <div class="text-right">
                        <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium ${compatibilityClass}">
                            ⭐ ${compatibility}% compatible
                        </div>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4 text-sm text-gray-600 mb-3">
                    <span>📍 ${job.location}</span>
                    <span>💼 ${job.contract}</span>
                    <span>🕒 Expire le ${job.deadline}</span>
                </div>
                
                <p class="text-gray-700 mb-4">${job.description}</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    ${job.requirements.map(req => {
                        const isMatched = userSkills.some(skill => 
                            skill.toLowerCase().includes(req.toLowerCase()) || 
                            req.toLowerCase().includes(skill.toLowerCase())
                        );
                        const reqClass = isMatched ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-600';
                        return `<span class="px-2 py-1 rounded text-sm ${reqClass}">${req}</span>`;
                    }).join('')}
                </div>
                
                <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                    Postuler maintenant
                </button>
            </div>
        `;
    }).join('');
    
    document.getElementById('recommendations-content').innerHTML = recommendationsHtml;
}

function calculateCompatibility(job) {
    if (userSkills.length === 0) return 0;
    
    const matchingSkills = job.requirements.filter(req => 
        userSkills.some(skill => 
            skill.toLowerCase().includes(req.toLowerCase()) || 
            req.toLowerCase().includes(skill.toLowerCase())
        )
    );
    
    return Math.round((matchingSkills.length / job.requirements.length) * 100);
}

// Analyse CV
function analyzeCv() {
    const analysis = {
        score: 75,
        suggestions: [
            "Ajoutez des mots-clés spécifiques au secteur public béninois",
            "Mentionnez votre expérience avec les procédures administratives",
            "Incluez vos certifications ou formations continues",
            "Précisez vos compétences linguistiques (français, langues locales)"
        ],
        strengths: [
            "Profil bien structuré",
            "Compétences techniques solides",
            "Expérience pertinente"
        ]
    };
    
    const resultHtml = `
        <div class="space-y-6">
            <div class="bg-blue-50 p-4 rounded-lg">
                <h3 class="font-semibold text-blue-900 mb-2">Score Global du CV</h3>
                <div class="flex items-center">
                    <div class="flex-1 bg-blue-200 rounded-full h-3">
                        <div class="bg-blue-600 h-3 rounded-full transition-all duration-500" style="width: ${analysis.score}%"></div>
                    </div>
                    <span class="ml-3 font-bold text-blue-900">${analysis.score}/100</span>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold text-green-700 mb-3">✅ Points Forts</h3>
                    <ul class="space-y-2">
                        ${analysis.strengths.map(strength => 
                            `<li class="text-green-600 bg-green-50 p-2 rounded">${strength}</li>`
                        ).join('')}
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold text-orange-700 mb-3">💡 Suggestions d'Amélioration</h3>
                    <ul class="space-y-2">
                        ${analysis.suggestions.map(suggestion => 
                            `<li class="text-orange-600 bg-orange-50 p-2 rounded">${suggestion}</li>`
                        ).join('')}
                    </ul>
                </div>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <h3 class="font-semibold text-gray-700 mb-3">🇧🇯 Conseils Spécifiques au Bénin</h3>
                <ul class="space-y-2 text-gray-600">
                    <li>• Mentionnez votre connaissance des procédures administratives béninoises</li>
                    <li>• Incluez vos compétences en langues locales (Fon, Yoruba, etc.)</li>
                    <li>• Précisez votre familiarité avec les enjeux de développement du Bénin</li>
                    <li>• Ajoutez des références de professionnels basés au Bénin</li>
                </ul>
            </div>
        </div>
    `;
    
    const resultDiv = document.getElementById('cv-analysis-result');
    resultDiv.innerHTML = resultHtml;
    resultDiv.classList.remove('hidden');
    
    showNotification('Analyse CV terminée !', 'success');
}

// Chatbot
function sendMessage() {
    const input = document.getElementById('chat-input');
    const message = input.value.trim();
    
    if (!message) return;
    
    // Ajouter le message utilisateur
    addChatMessage(message, 'user');
    
    // Générer la réponse du bot
    const botResponse = generateBotResponse(message);
    setTimeout(() => {
        addChatMessage(botResponse, 'bot');
    }, 1000);
    
    input.value = '';
}

function addChatMessage(message, type) {
    const chatContainer = document.getElementById('chat-messages');
    const messageDiv = document.createElement('div');
    messageDiv.className = `mb-4 flex ${type === 'user' ? 'justify-end' : 'justify-start'}`;
    
    const messageClass = type === 'user' 
        ? 'bg-blue-600 text-white' 
        : 'bg-white text-gray-800 border border-gray-200';
    
    messageDiv.innerHTML = `
        <div class="${messageClass} px-4 py-2 rounded-lg max-w-xs lg:max-w-md">
            <pre class="whitespace-pre-wrap font-sans">${message}</pre>
        </div>
    `;
    
    chatContainer.appendChild(messageDiv);
    chatContainer.scrollTop = chatContainer.scrollHeight;
}

function generateBotResponse(input) {
    const lowerInput = input.toLowerCase();
    
    if (lowerInput.includes('concours') || lowerInput.includes('candidature')) {
        return "Pour les concours au Bénin, voici les étapes typiques :\n1. Vérifiez votre éligibilité\n2. Constituez votre dossier (diplômes, CV, certificats)\n3. Déposez avant la date limite\n4. Passez les épreuves écrites puis orales\n5. Attendez les résultats\n\nChaque ministère a ses propres critères spécifiques.";
    } else if (lowerInput.includes('délai') || lowerInput.includes('date')) {
        return "Les délais varient selon l'organisme :\n- Ministères : généralement 15-30 jours après publication\n- OB : souvent 21 jours\n- Autres organismes : 14-45 jours\n\nJe recommande de postuler dans les 7 premiers jours pour maximiser vos chances.";
    } else if (lowerInput.includes('salaire') || lowerInput.includes('rémunération')) {
        return "Les grilles salariales du secteur public béninois :\n- Catégorie A : 80,000 - 300,000 FCFA\n- Catégorie B : 60,000 - 150,000 FCFA\n- Catégorie C : 45,000 - 100,000 FCFA\n\nCes montants peuvent varier selon l'expérience et les primes.";
    } else {
        return "Je peux vous aider avec :\n- Les procédures de candidature\n- Les délais et dates limites\n- Les critères d'éligibilité\n- Les grilles salariales\n- Les étapes des concours\n\nQue souhaitez-vous savoir ?";
    }
}

// Notifications
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${
        type === 'success' ? 'bg-green-500 text-white' : 
        type === 'error' ? 'bg-red-500 text-white' : 
        'bg-blue-500 text-white'
    }`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Event listeners
document.getElementById('skill-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        addSkill();
    }
});

document.getElementById('chat-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});

// Initialisation
document.addEventListener('DOMContentLoaded', function() {
    // Afficher la section d'accueil par défaut
    showSection('welcome');
});
</script>
@endpush
@endsection