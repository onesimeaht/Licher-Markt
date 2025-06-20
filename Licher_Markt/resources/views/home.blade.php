<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Licher Markt - Emploi au Bénin</title>
<link rel="icon" type="image/png" href="/market_info.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.16.0/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3-cloud/1.2.5/d3.layout.cloud.min.js"></script>

<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    width: 100%;
    background-image: url('/TreatInfo.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center; 
}

.logo-header {
    text-align: center;
    padding: 20px 0;
    margin-bottom: 20px;
}

.logo-header a {
    display: inline-block;
    transition: all 0.3s ease;
}

.logo-header a:hover {
    transform: scale(1.1);
}

.logo-header img {
    height: 80px;
    width: auto;
    cursor: pointer;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

.center {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}

#centb {
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
}

.btn-primary {
    background-color: #1976d2 !important;
    border-color: #1976d2 !important;
    padding: 15px 25px;
    border-radius: 25px;
    font-weight: 500;
    font-size: 16px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(25, 118, 210, 0.3);
    animation: fadeInUp 0.8s ease-out;
    display: flex;
    align-items: center;
    gap: 8px;
    position: relative;
    overflow: hidden;
    cursor: pointer;
    border: 2px solid transparent;
    flex: 1;
    justify-content: center;
    min-width: 280px;
}

/* Effet de brillance qui traverse le bouton */
.btn-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
    transition: left 0.6s ease;
}

.btn-primary:hover::before {
    left: 100%;
}

.btn-primary:nth-child(1) { animation-delay: 0.2s; opacity: 0; animation-fill-mode: forwards; }
.btn-primary:nth-child(2) { animation-delay: 0.4s; opacity: 0; animation-fill-mode: forwards; }
.btn-primary:nth-child(3) { animation-delay: 0.6s; opacity: 0; animation-fill-mode: forwards; }

/* Effets hover super visible */
.btn-primary:hover {
    background-color: #f59e0b !important;
    border-color: #f59e0b !important;
    color: white !important;
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 15px 35px rgba(245, 158, 11, 0.4);
    border: 2px solid #ffffff;
}

/* Effet focus pour l'accessibilité */
.btn-primary:focus {
    outline: 3px solid #f59e0b;
    outline-offset: 2px;
}

/* Animation d'apparition */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

h1, .page {
    text-align: center;
}

.animated-title {
    color: #1976d2;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
    font-size: 4rem;
    font-weight: bold;
    animation: slideDown 3s ease-out;
}

@keyframes slideDown {
    0% {
        transform: translateY(-100px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

.wordcloud-section {
    text-align: center;
    margin-top: 60px;
    animation: fadeIn 1.5s ease-out 1s both;
}

.wordcloud-title {
    color: white;
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 30px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
}

.wordcloud-container {
    display: flex;
    justify-content: center;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    padding: 30px;
    margin: 0 auto;
    max-width: 800px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
}

.wordcloud-image {
    max-width: 100%;
    height: auto;
    border-radius: 15px;
    opacity: 0.95;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .logo-header img {
        height: 60px;
    }
    
    .animated-title {
        font-size: 2.5rem;
    }
    
    #centb {
        flex-direction: column;
        gap: 15px;
    }
    
    .btn-primary {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
    
    .wordcloud-title {
        font-size: 1.5rem;
    }
    
    .wordcloud-container {
        margin: 0 20px;
        padding: 20px;
    }
}

/* Animation subtile pour le nuage de mots */
.wordcloud-animated {
    animation: fadeInSlowly 2s ease-out 1.5s both;
}

.wordcloud-animated img {
    transition: all 0.3s ease;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    animation: professionalFloat 6s ease-in-out infinite;
}

.wordcloud-animated img:hover {
    transform: scale(1.02);
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
    animation-play-state: paused;
}

@keyframes fadeInSlowly {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes professionalFloat {
    0%, 100% { 
        transform: translateY(0px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }
    50% { 
        transform: translateY(-8px);
        box-shadow: 0 16px 35px rgba(0, 0, 0, 0.15);
    }
}
</style>
</head>

<body>
<div id="space" >

<!-- Logo ajouté ici -->
<div class="logo-header">
    <a href="/" onclick="location.reload()">
        <img src="/market_info.png" alt="Market Info">
    </a>
</div>

<br>

<h1 class="animated-title">Votre carrière commence ici</h1>

<br><br><br>

<div id="centb">
<button type="button" class="btn btn-primary" onclick="window.location.href='autorites'">
    🏢 Rechercher par secteur
</button>
<button type="button" class="btn btn-primary" onclick="window.location.href='realisations'">
    🔍 Consulter les offres d'emploi
</button>
<button type="button" class="btn btn-primary" onclick="window.location.href='/find'">
    ⚙ Recherche avancée
</button>
</div>

<br><br><br><br><br><br>

<div class="center wordcloud-animated">
    <img src="/wordcloud.png" alt="Word Cloud" width="55%" height="60%">
</div>

</body>
</html>

<!-- BOUTON IA FLOTTANT -->
<button onclick="openAI()" style="
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
    z-index: 9999999 !important;
" onmouseover="this.style.background='#1d4ed8'" onmouseout="this.style.background='#1e40af'">
    🤖
</button>

<script>
function openAI() {
    // Créer le modal s'il n'existe pas
    if (!document.getElementById('ai-modal-simple')) {
        createAIModal();
    }
    
    // Afficher le modal
    document.getElementById('ai-modal-simple').style.display = 'block';
}

function createAIModal() {
    const modal = document.createElement('div');
    modal.id = 'ai-modal-simple';
    modal.style.cssText = `
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.8);
        z-index: 10000000;
    `;
    
    modal.innerHTML = `
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; border-radius: 20px; width: 95%; max-width: 900px; max-height: 90vh; overflow: hidden; display: flex; flex-direction: column;">
            
            <!-- HEADER -->
            <div style="display: flex; justify-content: space-between; align-items: center; background: #1e40af; color: white; padding: 20px; border-radius: 20px 20px 0 0;">
                <h2 style="margin: 0; font-size: 24px;">🤖 Assistant IA Licher_Markt</h2>
                <button onclick="closeAI()" style="background: none; border: none; color: white; font-size: 30px; cursor: pointer; width: 40px; height: 40px;">×</button>
            </div>

            <!-- NAVIGATION ONGLETS -->
            <div style="display: flex; background: #f8fafc; border-bottom: 2px solid #e2e8f0; padding: 0 20px;">
                <button onclick="switchTab('chat')" id="tab-btn-chat" style="padding: 15px 20px; border: none; background: none; cursor: pointer; font-weight: 600; color: #1e40af; border-bottom: 3px solid #1e40af;">
                    💬 Chat
                </button>
                <button onclick="switchTab('profile')" id="tab-btn-profile" style="padding: 15px 20px; border: none; background: none; cursor: pointer; font-weight: 600; color: #64748b; border-bottom: 3px solid transparent;">
                    👤 Mon Profil
                </button>
                <button onclick="switchTab('recommendations')" id="tab-btn-recommendations" style="padding: 15px 20px; border: none; background: none; cursor: pointer; font-weight: 600; color: #64748b; border-bottom: 3px solid transparent;">
                    🎯 Recommandations
                </button>
                <button onclick="switchTab('cv')" id="tab-btn-cv" style="padding: 15px 20px; border: none; background: none; cursor: pointer; font-weight: 600; color: #64748b; border-bottom: 3px solid transparent;">
                    📄 Assistant CV
                </button>
            </div>

            <!-- CONTENU DES ONGLETS -->
            <div style="flex: 1; overflow-y: auto; padding: 20px;">
                
                <!-- ONGLET CHAT -->
                <div id="tab-content-chat">
                    <div style="text-align: center; margin-bottom: 20px;">
                        <h3 style="margin: 0 0 10px 0;">Votre Assistant IA pour l'Emploi au Bénin</h3>
                        <p style="color: #666; margin: 0;">Posez vos questions sur les concours et procédures !</p>
                    </div>
                    
                    <div id="chat-box-simple" style="height: 300px; overflow-y: auto; border: 2px solid #e5e7eb; border-radius: 10px; padding: 15px; margin-bottom: 15px; background: #f9fafb;">
                        <div style="background: white; padding: 12px; border-radius: 8px; margin-bottom: 10px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                            <strong style="color: #1e40af;">Assistant :</strong> Bonjour ! Comment puis-je vous aider avec votre recherche d'emploi au Bénin ?
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 10px;">
                        <input type="text" id="chat-input-simple" placeholder="Tapez votre question..." style="flex: 1; padding: 12px; border: 2px solid #d1d5db; border-radius: 8px; font-size: 16px;">
                        <button onclick="sendMessage()" style="padding: 12px 20px; background: #1e40af; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px;">Envoyer</button>
                    </div>
                </div>

                <!-- ONGLET PROFIL -->
                <div id="tab-content-profile" style="display: none;">
                    <h3 style="margin: 0 0 20px 0; text-align: center;">👤 Complétez votre profil candidat</h3>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px;">
                        <div>
                            <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nom complet</label>
                            <input type="text" id="profile-name" placeholder="Votre nom complet" style="width: 100%; padding: 10px; border: 2px solid #d1d5db; border-radius: 6px;">
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 5px; font-weight: 600;">Années d'expérience</label>
                            <select id="profile-experience" style="width: 100%; padding: 10px; border: 2px solid #d1d5db; border-radius: 6px;">
                                <option value="">Sélectionnez...</option>
                                <option value="0-1">0-1 an</option>
                                <option value="2-5">2-5 ans</option>
                                <option value="5-10">5-10 ans</option>
                                <option value="10+">Plus de 10 ans</option>
                            </select>
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 5px; font-weight: 600;">Localisation</label>
                            <select id="profile-location" style="width: 100%; padding: 10px; border: 2px solid #d1d5db; border-radius: 6px;">
                                <option value="Cotonou">Cotonou</option>
                                <option value="Porto-Novo">Porto-Novo</option>
                                <option value="Parakou">Parakou</option>
                                <option value="Abomey-Calavi">Abomey-Calavi</option>
                            </select>
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 5px; font-weight: 600;">Niveau d'éducation</label>
                            <select id="profile-education" style="width: 100%; padding: 10px; border: 2px solid #d1d5db; border-radius: 6px;">
                                <option value="">Sélectionnez...</option>
                                <option value="Bac">Baccalauréat</option>
                                <option value="Licence">Licence</option>
                                <option value="Master">Master</option>
                                <option value="Doctorat">Doctorat</option>
                            </select>
                        </div>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; margin-bottom: 10px; font-weight: 600;">Compétences</label>
                        <div id="skills-display" style="margin-bottom: 10px; min-height: 40px; display: flex; flex-wrap: gap: 8px;"></div>
                        <div style="display: flex; gap: 10px;">
                            <input type="text" id="skill-input" placeholder="Ex: Communication, Excel..." style="flex: 1; padding: 10px; border: 2px solid #d1d5db; border-radius: 6px;">
                            <button onclick="addSkill()" style="padding: 10px 15px; background: #10b981; color: white; border: none; border-radius: 6px; cursor: pointer;">Ajouter</button>
                        </div>
                    </div>

                    <button onclick="saveProfile()" style="width: 100%; padding: 15px; background: #1e40af; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; font-weight: 600;">
                        💾 Sauvegarder mon profil
                    </button>
                </div>

                <!-- ONGLET RECOMMANDATIONS -->
                <div id="tab-content-recommendations" style="display: none;">
                    <h3 style="margin: 0 0 20px 0; text-align: center;">🎯 Recommandations personnalisées</h3>
                    
                    <div id="recommendations-content">
                        <div style="text-align: center; padding: 40px 20px; color: #666;">
                            <div style="font-size: 48px; margin-bottom: 20px;">📋</div>
                            <h4 style="margin: 0 0 10px 0;">Aucune recommandation pour le moment</h4>
                            <p style="margin: 0 0 20px 0;">Complétez votre profil pour recevoir des suggestions d'emploi !</p>
                            <button onclick="switchTab('profile')" style="padding: 12px 24px; background: #1e40af; color: white; border: none; border-radius: 6px; cursor: pointer;">
                                👤 Compléter mon profil
                            </button>
                        </div>
                    </div>
                </div>

                <!-- ONGLET ASSISTANT CV -->
                <div id="tab-content-cv" style="display: none;">
                    <h3 style="margin: 0 0 20px 0; text-align: center;">📄 Assistant CV - Secteur Public Bénin</h3>
                    
                    <div style="text-align: center; margin-bottom: 30px;">
                        <p style="color: #666; margin-bottom: 20px;">Obtenez une analyse de votre CV avec des conseils spécifiques au marché béninois</p>
                        <button onclick="analyzeCv()" style="padding: 15px 30px; background: #f59e0b; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; font-weight: 600;">
                            🔍 Analyser mon CV
                        </button>
                    </div>

                    <div id="cv-analysis-result" style="display: none;">
                        <!-- Les résultats apparaîtront ici -->
                    </div>
                </div>

            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
}

function closeAI() {
    document.getElementById('ai-modal-simple').style.display = 'none';
}

function sendMessage() {
    const input = document.getElementById('chat-input-simple');
    const chatBox = document.getElementById('chat-box-simple');
    const message = input.value.trim();
    
    if (!message) return;
    
    chatBox.innerHTML += `<div style="background: #dbeafe; padding: 12px; border-radius: 8px; margin-bottom: 10px; text-align: right;"><strong>Vous :</strong> ${message}</div>`;
    
    setTimeout(() => {
        let response = "Je peux vous aider avec les procédures de candidature au Bénin !";
        if (message.toLowerCase().includes('délai')) {
            response = "Les délais varient : Ministères (15-30 jours), OB (21 jours). Postulez vite !";
        } else if (message.toLowerCase().includes('salaire')) {
            response = "Grilles salariales : Cat A (80k-300k), Cat B (60k-150k), Cat C (45k-100k) FCFA.";
        }
        
        chatBox.innerHTML += `<div style="background: white; padding: 12px; border-radius: 8px; margin-bottom: 10px;"><strong style="color: #1e40af;">Assistant :</strong> ${response}</div>`;
        chatBox.scrollTop = chatBox.scrollHeight;
    }, 1000);
    
    input.value = '';
}
// Variables globales
let userProfile = {
    name: '',
    experience: '',
    location: 'Cotonou',
    education: '',
    skills: []
};

// Navigation onglets
function switchTab(tabName) {
    // Cacher tous les contenus
    document.querySelectorAll('[id^="tab-content-"]').forEach(content => {
        content.style.display = 'none';
    });
    
    // Réinitialiser les styles des boutons
    document.querySelectorAll('[id^="tab-btn-"]').forEach(btn => {
        btn.style.color = '#64748b';
        btn.style.borderBottomColor = 'transparent';
    });
    
    // Afficher le contenu sélectionné
    document.getElementById('tab-content-' + tabName).style.display = 'block';
    
    // Activer le bouton
    const activeBtn = document.getElementById('tab-btn-' + tabName);
    activeBtn.style.color = '#1e40af';
    activeBtn.style.borderBottomColor = '#1e40af';
}

// Gestion des compétences
function addSkill() {
    const input = document.getElementById('skill-input');
    if (!input) return;
    
    const skill = input.value.trim();
    
    if (skill && !userProfile.skills.includes(skill)) {
        userProfile.skills.push(skill);
        input.value = '';
        updateSkillsDisplay();
        
        // Générer automatiquement les recommandations
        if (userProfile.skills.length > 0) {
            generateRecommendations();
        }
    }
}

function updateSkillsDisplay() {
    const container = document.getElementById('skills-display');
    if (!container) return;
    
    container.innerHTML = userProfile.skills.map(skill => 
        `<span style="background: #dbeafe; color: #1e40af; padding: 6px 12px; border-radius: 20px; font-size: 14px; display: flex; align-items: center; gap: 8px;">
            ${skill}
            <button onclick="removeSkill('${skill}')" style="background: none; border: none; color: #1e40af; cursor: pointer; font-weight: bold;">×</button>
        </span>`
    ).join('');
}

function removeSkill(skill) {
    userProfile.skills = userProfile.skills.filter(s => s !== skill);
    updateSkillsDisplay();
}

function saveProfile() {
    const nameInput = document.getElementById('profile-name');
    const expInput = document.getElementById('profile-experience');
    const locInput = document.getElementById('profile-location');
    const eduInput = document.getElementById('profile-education');
    
    if (!nameInput) return;
    
    userProfile.name = nameInput.value;
    userProfile.experience = expInput.value;
    userProfile.location = locInput.value;
    userProfile.education = eduInput.value;
    
    localStorage.setItem('licher_profile', JSON.stringify(userProfile));
    
    alert('✅ Profil sauvegardé avec succès !');
    
    // Générer les recommandations automatiquement
    generateRecommendations();
    
    // Aller sur l'onglet recommandations
    setTimeout(() => {
        switchTab('recommendations');
    }, 1000);
}

function generateRecommendations() {
    if (userProfile.skills.length === 0) return;
    
    const jobs = [
        {
            title: "Chargé de Communication",
            organization: "Ministère de la Santé",
            location: "Cotonou",
            requirements: ["Communication", "Marketing", "Rédaction"],
            salary: "120,000 - 200,000 FCFA"
        },
        {
            title: "Analyste Financier", 
            organization: "Ministère des Finances",
            location: "Porto-Novo",
            requirements: ["Finance", "Excel", "Comptabilité"],
            salary: "150,000 - 250,000 FCFA"
        }
    ];
    
    const html = jobs.map(job => `
        <div style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 20px; margin-bottom: 20px;">
            <h4 style="margin: 0 0 5px 0;">${job.title}</h4>
            <p style="color: #1e40af; margin: 0;">${job.organization}</p>
            <p style="color: #666; margin: 10px 0;">💰 ${job.salary}</p>
            <div style="margin: 10px 0;">
                ${job.requirements.map(req => `<span style="background: #f1f5f9; padding: 4px 8px; border-radius: 12px; font-size: 12px; margin-right: 5px;">${req}</span>`).join('')}
            </div>
            <button style="width: 100%; padding: 10px; background: #1e40af; color: white; border: none; border-radius: 6px; cursor: pointer;">Postuler</button>
        </div>
    `).join('');
    
    document.getElementById('recommendations-content').innerHTML = html;
}

function analyzeCv() {
    // Créer un input file temporaire
    const fileInput = document.createElement('input');
    fileInput.type = 'file';
    fileInput.accept = '.pdf,.doc,.docx';
    fileInput.style.display = 'none';
    
    fileInput.onchange = function(e) {
        const file = e.target.files[0];
        if (file) {
            showCvAnalysis(file.name);
        }
    };
    
    document.body.appendChild(fileInput);
    fileInput.click();
    document.body.removeChild(fileInput);
}

function showCvAnalysis(fileName) {
    const score = Math.floor(Math.random() * 20) + 75;
    
    const html = `
        <div style="background: #1e40af; color: white; padding: 20px; border-radius: 12px; text-align: center; margin-bottom: 20px;">
            <h4 style="margin: 0 0 10px 0;">📄 Analyse de : ${fileName}</h4>
            <div style="font-size: 36px; font-weight: bold;">${score}/100</div>
        </div>
        
        <div style="background: #f0fdf4; border: 2px solid #bbf7d0; border-radius: 12px; padding: 20px; margin-bottom: 20px;">
            <h5 style="margin: 0 0 15px 0; color: #166534;">✅ Points Forts</h5>
            <ul style="color: #166534;">
                <li>Structure claire</li>
                <li>Expérience pertinente</li>
                <li>Compétences bien présentées</li>
            </ul>
        </div>
        
        <button onclick="analyzeCv()" style="padding: 12px 24px; background: #f59e0b; color: white; border: none; border-radius: 8px; cursor: pointer;">
            🔄 Analyser un autre CV
        </button>
    `;
    
    document.getElementById('cv-analysis-result').innerHTML = html;
    document.getElementById('cv-analysis-result').style.display = 'block';
}
// Support de la touche Entrée pour les compétences
document.addEventListener('keydown', function(e) {
    if (e.target.id === 'skill-input' && e.key === 'Enter') {
        addSkill();
    }
});

function applyJob(jobTitle) {
    alert(`🎉 Candidature envoyée pour : ${jobTitle}`);
}
</script>

<!-- MODAL IA COMPLET -->
<div id="home-ai-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 1000000;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; border-radius: 20px; width: 95%; max-width: 900px; max-height: 90vh; overflow: hidden; display: flex; flex-direction: column;">
        
        <!-- HEADER -->
        <div style="display: flex; justify-content: space-between; align-items: center; background: #1e40af; color: white; padding: 20px; border-radius: 20px 20px 0 0;">
            <h2 style="margin: 0; font-size: 24px;">🤖 Assistant IA Licher_Markt</h2>
            <button id="home-close-btn" style="background: none; border: none; color: white; font-size: 30px; cursor: pointer; width: 40px; height: 40px;">×</button>
        </div>

        <!-- NAVIGATION ONGLETS -->
        <div style="display: flex; background: #f8fafc; border-bottom: 2px solid #e2e8f0; padding: 0 20px;">
            <button class="ai-tab-btn" data-tab="chat" style="padding: 15px 20px; border: none; background: none; cursor: pointer; font-weight: 600; color: #1e40af; border-bottom: 3px solid #1e40af;">
                💬 Chat
            </button>
            <button class="ai-tab-btn" data-tab="profile" style="padding: 15px 20px; border: none; background: none; cursor: pointer; font-weight: 600; color: #64748b; border-bottom: 3px solid transparent;">
                👤 Mon Profil
            </button>
            <button class="ai-tab-btn" data-tab="recommendations" style="padding: 15px 20px; border: none; background: none; cursor: pointer; font-weight: 600; color: #64748b; border-bottom: 3px solid transparent;">
                🎯 Recommandations
            </button>
            <button class="ai-tab-btn" data-tab="cv" style="padding: 15px 20px; border: none; background: none; cursor: pointer; font-weight: 600; color: #64748b; border-bottom: 3px solid transparent;">
                📄 Assistant CV
            </button>
        </div>

        <!-- CONTENU DES ONGLETS -->
        <div style="flex: 1; overflow-y: auto; padding: 20px;">
            
            <!-- ONGLET CHAT -->
            <div id="tab-chat" class="ai-tab-content">
                <div style="text-align: center; margin-bottom: 20px;">
                    <h3 style="margin: 0 0 10px 0;">Votre Assistant IA pour l'Emploi au Bénin</h3>
                    <p style="color: #666; margin: 0;">Posez vos questions sur les concours et procédures !</p>
                </div>
                
                <div id="home-chat-box" style="height: 300px; overflow-y: auto; border: 2px solid #e5e7eb; border-radius: 10px; padding: 15px; margin-bottom: 15px; background: #f9fafb;">
                    <div style="background: white; padding: 12px; border-radius: 8px; margin-bottom: 10px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                        <strong style="color: #1e40af;">Assistant :</strong> Bonjour ! Comment puis-je vous aider avec votre recherche d'emploi au Bénin ?
                    </div>
                </div>
                
                <div style="display: flex; gap: 10px;">
                    <input type="text" id="home-chat-input" placeholder="Tapez votre question..." style="flex: 1; padding: 12px; border: 2px solid #d1d5db; border-radius: 8px; font-size: 16px;">
                    <button onclick="sendHomeMessage()" style="padding: 12px 20px; background: #1e40af; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px;">Envoyer</button>
                </div>
            </div>

            <!-- ONGLET PROFIL -->
            <div id="tab-profile" class="ai-tab-content" style="display: none;">
                <h3 style="margin: 0 0 20px 0; text-align: center;">👤 Complétez votre profil candidat</h3>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px;">
                    <div>
                        <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nom complet</label>
                        <input type="text" id="profile-name" placeholder="Votre nom complet" style="width: 100%; padding: 10px; border: 2px solid #d1d5db; border-radius: 6px;">
                    </div>
                    <div>
                        <label style="display: block; margin-bottom: 5px; font-weight: 600;">Années d'expérience</label>
                        <select id="profile-experience" style="width: 100%; padding: 10px; border: 2px solid #d1d5db; border-radius: 6px;">
                            <option value="">Sélectionnez...</option>
                            <option value="0-1">0-1 an</option>
                            <option value="2-5">2-5 ans</option>
                            <option value="5-10">5-10 ans</option>
                            <option value="10+">Plus de 10 ans</option>
                        </select>
                    </div>
                    <div>
                        <label style="display: block; margin-bottom: 5px; font-weight: 600;">Localisation</label>
                        <select id="profile-location" style="width: 100%; padding: 10px; border: 2px solid #d1d5db; border-radius: 6px;">
                            <option value="Cotonou">Cotonou</option>
                            <option value="Porto-Novo">Porto-Novo</option>
                            <option value="Parakou">Parakou</option>
                            <option value="Abomey-Calavi">Abomey-Calavi</option>
                            <option value="Bohicon">Bohicon</option>
                        </select>
                    </div>
                    <div>
                        <label style="display: block; margin-bottom: 5px; font-weight: 600;">Niveau d'éducation</label>
                        <select id="profile-education" style="width: 100%; padding: 10px; border: 2px solid #d1d5db; border-radius: 6px;">
                            <option value="">Sélectionnez...</option>
                            <option value="Bac">Baccalauréat</option>
                            <option value="Licence">Licence</option>
                            <option value="Master">Master</option>
                            <option value="Doctorat">Doctorat</option>
                        </select>
                    </div>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 10px; font-weight: 600;">Compétences</label>
                    <div id="skills-display" style="margin-bottom: 10px; min-height: 40px; display: flex; flex-wrap: gap: 8px;"></div>
                    <div style="display: flex; gap: 10px;">
                        <input type="text" id="skill-input" placeholder="Ajouter une compétence (ex: Communication, Excel...)" style="flex: 1; padding: 10px; border: 2px solid #d1d5db; border-radius: 6px;">
                        <button onclick="addSkill()" style="padding: 10px 15px; background: #10b981; color: white; border: none; border-radius: 6px; cursor: pointer;">Ajouter</button>
                    </div>
                    <div style="margin-top: 10px; font-size: 14px; color: #666;">
                        💡 Suggestions : Communication, Marketing, Excel, Finance, JavaScript, Comptabilité, Management, Informatique
                    </div>
                </div>

                <button onclick="saveProfile()" style="width: 100%; padding: 15px; background: #1e40af; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; font-weight: 600;">
                    💾 Sauvegarder mon profil
                </button>
            </div>

            <!-- ONGLET RECOMMANDATIONS -->
            <div id="tab-recommendations" class="ai-tab-content" style="display: none;">
                <h3 style="margin: 0 0 20px 0; text-align: center;">🎯 Recommandations personnalisées</h3>
                
                <div id="recommendations-content">
                    <div style="text-center; padding: 40px 20px; color: #666;">
                        <div style="font-size: 48px; margin-bottom: 20px;">📋</div>
                        <h4 style="margin: 0 0 10px 0;">Aucune recommandation pour le moment</h4>
                        <p style="margin: 0 0 20px 0;">Complétez votre profil pour recevoir des suggestions d'emploi personnalisées !</p>
                        <button onclick="switchTab('profile')" style="padding: 12px 24px; background: #1e40af; color: white; border: none; border-radius: 6px; cursor: pointer;">
                            👤 Compléter mon profil
                        </button>
                    </div>
                </div>
            </div>

            <!-- ONGLET ASSISTANT CV -->
            <div id="tab-cv" class="ai-tab-content" style="display: none;">
                <h3 style="margin: 0 0 20px 0; text-align: center;">📄 Assistant CV - Secteur Public Bénin</h3>
                
                <div style="text-align: center; margin-bottom: 30px;">
                    <p style="color: #666; margin-bottom: 20px;">Obtenez une analyse de votre CV avec des conseils spécifiques au marché béninois</p>
                    <button onclick="analyzeCv()" style="padding: 15px 30px; background: #f59e0b; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; font-weight: 600;">
                        🔍 Analyser mon CV
                    </button>
                </div>

                <div id="cv-analysis-result" style="display: none;">
                    <!-- Les résultats apparaîtront ici -->
                </div>
            </div>

        </div>
    </div>
</div>

<script>

// CODE DE TEST - Ajouter à la fin du script
console.log("Script IA chargé !");

function testAddSkill() {
    console.log("Test addSkill appelé");
    const input = document.getElementById('skill-input');
    console.log("Input trouvé:", input);
    
    if (input) {
        const skill = input.value.trim();
        console.log("Compétence à ajouter:", skill);
        
        if (skill) {
            alert("Test réussi ! Compétence: " + skill);
        } else {
            alert("Aucune compétence saisie");
        }
    } else {
        alert("Input skill-input non trouvé !");
    }
}

function testSaveProfile() {
    console.log("Test saveProfile appelé");
    alert("Test sauvegarde - fonction appelée !");
}

function testAnalyzeCv() {
    console.log("Test analyzeCv appelé");
    alert("Test analyse CV - fonction appelée !");
}

// Variables globales
let userProfile = {
    name: '',
    experience: '',
    location: 'Cotonou',
    education: '',
    skills: []
};

// Ouvrir/Fermer modal
document.getElementById('home-ai-btn').onclick = function() {
    document.getElementById('home-ai-modal').style.display = 'block';
    loadProfile();
};

document.getElementById('home-close-btn').onclick = function() {
    document.getElementById('home-ai-modal').style.display = 'none';
};

// Navigation onglets
document.querySelectorAll('.ai-tab-btn').forEach(btn => {
    btn.onclick = function() {
        switchTab(this.dataset.tab);
    };
});

function switchTab(tabName) {
    // Cacher tous les contenus
    document.querySelectorAll('.ai-tab-content').forEach(content => {
        content.style.display = 'none';
    });
    
    // Réinitialiser les styles des boutons
    document.querySelectorAll('.ai-tab-btn').forEach(btn => {
        btn.style.color = '#64748b';
        btn.style.borderBottomColor = 'transparent';
    });
    
    // Afficher le contenu sélectionné
    document.getElementById('tab-' + tabName).style.display = 'block';
    
    // Activer le bouton
    const activeBtn = document.querySelector(`[data-tab="${tabName}"]`);
    activeBtn.style.color = '#1e40af';
    activeBtn.style.borderBottomColor = '#1e40af';
}

// GESTION DU PROFIL
function addSkill() {
    const input = document.getElementById('skill-input');
    const skill = input.value.trim();
    
    if (skill && !userProfile.skills.includes(skill)) {
        userProfile.skills.push(skill);
        input.value = '';
        updateSkillsDisplay();
    }
}

function removeSkill(skill) {
    userProfile.skills = userProfile.skills.filter(s => s !== skill);
    updateSkillsDisplay();
}

function updateSkillsDisplay() {
    const container = document.getElementById('skills-display');
    container.innerHTML = userProfile.skills.map(skill => 
        `<span style="background: #dbeafe; color: #1e40af; padding: 6px 12px; border-radius: 20px; font-size: 14px; display: flex; align-items: center; gap: 8px;">
            ${skill}
            <button onclick="removeSkill('${skill}')" style="background: none; border: none; color: #1e40af; cursor: pointer; font-weight: bold;">×</button>
        </span>`
    ).join('');
}

function saveProfile() {
    userProfile.name = document.getElementById('profile-name').value;
    userProfile.experience = document.getElementById('profile-experience').value;
    userProfile.location = document.getElementById('profile-location').value;
    userProfile.education = document.getElementById('profile-education').value;
    
    // Sauvegarder dans le navigateur
    localStorage.setItem('licher_profile', JSON.stringify(userProfile));
    
    showNotification('✅ Profil sauvegardé avec succès !', 'success');
    generateRecommendations();
}

function loadProfile() {
    const saved = localStorage.getItem('licher_profile');
    if (saved) {
        userProfile = JSON.parse(saved);
        
        document.getElementById('profile-name').value = userProfile.name || '';
        document.getElementById('profile-experience').value = userProfile.experience || '';
        document.getElementById('profile-location').value = userProfile.location || 'Cotonou';
        document.getElementById('profile-education').value = userProfile.education || '';
        
        updateSkillsDisplay();
        
        if (userProfile.skills.length > 0) {
            generateRecommendations();
        }
    }
}

// RECOMMANDATIONS
function generateRecommendations() {
    if (userProfile.skills.length === 0) return;
    
    const jobs = [
        {
            title: "Chargé de Communication",
            organization: "Ministère de la Santé (MS)",
            location: "Cotonou",
            contract: "CDI",
            requirements: ["Communication", "Marketing", "Rédaction", "Réseaux sociaux"],
            description: "Poste de chargé de communication pour les campagnes de santé publique",
            deadline: "2024-07-15",
            salary: "120,000 - 200,000 FCFA"
        },
        {
            title: "Analyste Financier",
            organization: "Ministère de l'Économie et des Finances (MEF)",
            location: "Porto-Novo",
            contract: "CDD",
            requirements: ["Finance", "Comptabilité", "Excel", "Analyse de données"],
            description: "Analyse des budgets et reporting financier",
            deadline: "2024-07-20",
            salary: "150,000 - 250,000 FCFA"
        },
        {
            title: "Développeur Web",
            organization: "Office du Baccalauréat (OB)",
            location: "Cotonou",
            contract: "CDI",
            requirements: ["JavaScript", "React", "Node.js", "Base de données"],
            description: "Développement de la plateforme numérique du baccalauréat",
            deadline: "2024-07-25",
            salary: "180,000 - 300,000 FCFA"
        },
        {
            title: "Assistant de Direction",
            organization: "Ministère de l'Intérieur",
            location: userProfile.location,
            contract: "CDI",
            requirements: ["Management", "Communication", "Bureautique", "Organisation"],
            description: "Support administratif et coordination des activités",
            deadline: "2024-07-30",
            salary: "100,000 - 180,000 FCFA"
        }
    ];
    
    const recommendations = jobs.map(job => {
        const compatibility = calculateCompatibility(job.requirements);
        return { ...job, compatibility };
    }).sort((a, b) => b.compatibility - a.compatibility);
    
    const html = `
        <div style="margin-bottom: 20px; text-align: center;">
            <h4 style="color: #1e40af; margin: 0;">📊 ${recommendations.length} offres analysées pour vous</h4>
        </div>
        ${recommendations.map(job => `
            <div style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 20px; margin-bottom: 20px; ${job.compatibility >= 70 ? 'border-color: #10b981; background: #f0fdf4;' : job.compatibility >= 50 ? 'border-color: #f59e0b; background: #fffbeb;' : 'background: #f9fafb;'}">
                <div style="display: flex; justify-content: between; align-items: start; margin-bottom: 15px;">
                    <div style="flex: 1;">
                        <h4 style="margin: 0 0 5px 0; color: #1f2937; font-size: 18px;">${job.title}</h4>
                        <p style="margin: 0; color: #1e40af; font-weight: 600;">${job.organization}</p>
                    </div>
                    <div style="text-align: right;">
                        <div style="background: ${job.compatibility >= 70 ? '#10b981' : job.compatibility >= 50 ? '#f59e0b' : '#6b7280'}; color: white; padding: 8px 16px; border-radius: 20px; font-weight: 600; margin-bottom: 5px;">
                            ${job.compatibility}% compatible
                        </div>
                    </div>
                </div>
                
                <div style="display: flex; gap: 20px; margin-bottom: 15px; font-size: 14px; color: #6b7280;">
                    <span>📍 ${job.location}</span>
                    <span>💼 ${job.contract}</span>
                    <span>💰 ${job.salary}</span>
                    <span>📅 Expire le ${job.deadline}</span>
                </div>
                
                <p style="margin: 0 0 15px 0; color: #4b5563;">${job.description}</p>
                
                <div style="margin-bottom: 15px;">
                    <strong style="color: #374151;">Compétences requises :</strong><br>
                    <div style="display: flex; flex-wrap: gap: 6px; margin-top: 8px;">
                        ${job.requirements.map(req => {
                            const isMatch = userProfile.skills.some(skill => 
                                skill.toLowerCase().includes(req.toLowerCase()) || 
                                req.toLowerCase().includes(skill.toLowerCase())
                            );
                            return `<span style="padding: 4px 8px; border-radius: 12px; font-size: 12px; ${isMatch ? 'background: #dcfce7; color: #166534;' : 'background: #f1f5f9; color: #475569;'}">${req}</span>`;
                        }).join('')}
                    </div>
                </div>
                
                <button style="width: 100%; padding: 12px; background: #1e40af; color: white; border: none; border-radius: 8px; cursor: pointer; font-weight: 600;">
                    📤 Postuler maintenant
                </button>
            </div>
        `).join('')}
    `;
    
    document.getElementById('recommendations-content').innerHTML = html;
}

function calculateCompatibility(jobRequirements) {
    if (userProfile.skills.length === 0) return 0;
    
    const matches = jobRequirements.filter(req => 
        userProfile.skills.some(skill => 
            skill.toLowerCase().includes(req.toLowerCase()) || 
            req.toLowerCase().includes(skill.toLowerCase())
        )
    );
    
    let score = (matches.length / jobRequirements.length) * 100;
    
    // Bonus localisation
    if (userProfile.location && userProfile.location !== 'Cotonou') {
        score += 5;
    }
    
    // Bonus expérience
    if (userProfile.experience === '5-10' || userProfile.experience === '10+') {
        score += 10;
    }
    
    return Math.min(100, Math.round(score));
}

// ASSISTANT CV
function analyzeCv() {
    const analysis = {
        score: Math.floor(Math.random() * 20) + 75, // Score entre 75-95
        strengths: [
            "Profil bien structuré et complet",
            "Compétences techniques solides",
            "Expérience pertinente pour le secteur public",
            "Présentation claire et professionnelle"
        ],
        suggestions: [
            "Ajoutez des mots-clés spécifiques au secteur public béninois",
            "Mentionnez votre connaissance des procédures administratives",
            "Incluez vos certifications ou formations continues",
            "Précisez vos compétences linguistiques (français, langues locales)",
            "Ajoutez des références de professionnels basés au Bénin",
            "Mettez en avant votre engagement communautaire"
        ],
        beninTips: [
            "Mentionnez votre connaissance des enjeux de développement du Bénin",
            "Incluez vos compétences en langues locales (Fon, Yoruba, Dendi, etc.)",
            "Précisez votre familiarité avec l'administration publique béninoise",
            "Ajoutez vos activités bénévoles ou associatives locales"
        ]
    };
    
    const html = `
        <div style="margin-bottom: 30px;">
            <div style="background: linear-gradient(135deg, #1e40af, #3b82f6); color: white; padding: 20px; border-radius: 12px; text-align: center; margin-bottom: 20px;">
                <h4 style="margin: 0 0 10px 0; font-size: 18px;">📊 Score Global de votre CV</h4>
                <div style="font-size: 36px; font-weight: bold; margin-bottom: 10px;">${analysis.score}/100</div>
                <div style="background: rgba(255,255,255,0.2); border-radius: 10px; height: 10px; position: relative; overflow: hidden;">
                    <div style="background: ${analysis.score >= 85 ? '#10b981' : analysis.score >= 70 ? '#f59e0b' : '#ef4444'}; height: 100%; width: ${analysis.score}%; transition: width 1s ease;"></div>
                </div>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div style="background: #f0fdf4; border: 2px solid #bbf7d0; border-radius: 12px; padding: 20px;">
                    <h5 style="margin: 0 0 15px 0; color: #166534; display: flex; align-items: center; gap: 8px;">
                        ✅ Points Forts
                    </h5>
                    <ul style="margin: 0; padding-left: 20px; color: #166534;">
                        ${analysis.strengths.map(strength => `<li style="margin-bottom: 8px;">${strength}</li>`).join('')}
                    </ul>
                </div>
                
                <div style="background: #fff7ed; border: 2px solid #fed7aa; border-radius: 12px; padding: 20px;">
                    <h5 style="margin: 0 0 15px 0; color: #c2410c; display: flex; align-items: center; gap: 8px;">
                        💡 Suggestions d'Amélioration
                    </h5>
                    <ul style="margin: 0; padding-left: 20px; color: #c2410c;">
                        ${analysis.suggestions.slice(0, 4).map(suggestion => `<li style="margin-bottom: 8px;">${suggestion}</li>`).join('')}
                    </ul>
                </div>
            </div>
            
            <div style="background: #f8fafc; border: 2px solid #cbd5e1; border-radius: 12px; padding: 20px;">
                <h5 style="margin: 0 0 15px 0; color: #475569; display: flex; align-items: center; gap: 8px;">
                    🇧🇯 Conseils Spécifiques au Bénin
                </h5>
                <ul style="margin: 0; padding-left: 20px; color: #475569;">
                    ${analysis.beninTips.map(tip => `<li style="margin-bottom: 8px;">${tip}</li>`).join('')}
                </ul>
            </div>
            
            <div style="text-align: center; margin-top: 20px;">
                <button onclick="analyzeCv()" style="padding: 12px 24px; background: #f59e0b; color: white; border: none; border-radius: 8px; cursor: pointer; margin-right: 10px;">
                    🔄 Nouvelle analyse
                </button>
                <button onclick="downloadCvTips()" style="padding: 12px 24px; background: #10b981; color: white; border: none; border-radius: 8px; cursor: pointer;">
                    📥 Télécharger les conseils
                </button>
            </div>
        </div>
    `;
    
    document.getElementById('cv-analysis-result').innerHTML = html;
    document.getElementById('cv-analysis-result').style.display = 'block';
    
    showNotification('✅ Analyse CV terminée !', 'success');
}

function downloadCvTips() {
    showNotification('📥 Fonction de téléchargement en développement !', 'info');
}

// CHAT (fonction existante)
function sendHomeMessage() {
    const input = document.getElementById('home-chat-input');
    const chatBox = document.getElementById('home-chat-box');
    const message = input.value.trim();
    
    if (!message) return;
    
    chatBox.innerHTML += `<div style="background: #dbeafe; padding: 12px; border-radius: 8px; margin-bottom: 10px; text-align: right;"><strong>Vous :</strong> ${message}</div>`;
    
    setTimeout(() => {
        const response = getSmartResponse(message);
        chatBox.innerHTML += `<div style="background: white; padding: 12px; border-radius: 8px; margin-bottom: 10px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);"><strong style="color: #1e40af;">Assistant :</strong> ${response}</div>`;
        chatBox.scrollTop = chatBox.scrollHeight;
    }, 1000);
    
    input.value = '';
    chatBox.scrollTop = chatBox.scrollHeight;
}

function getSmartResponse(message) {
    const lower = message.toLowerCase();
    
    if (lower.includes('délai') || lower.includes('concours')) {
        return "Les délais de concours varient selon l'organisme :<br>• Ministères : 15-30 jours<br>• OB : 21 jours<br>• Autres : 14-45 jours<br><br>Je recommande de postuler dans les 7 premiers jours.";
    } else if (lower.includes('salaire') || lower.includes('grille')) {
        return "Grilles salariales du secteur public béninois :<br>• Catégorie A : 80,000 - 300,000 FCFA<br>• Catégorie B : 60,000 - 150,000 FCFA<br>• Catégorie C : 45,000 - 100,000 FCFA";
    } else if (lower.includes('procédure') || lower.includes('candidature')) {
        return "Procédures de candidature :<br>1. Vérifiez votre éligibilité<br>2. Constituez votre dossier complet<br>3. Déposez avant la date limite<br>4. Passez les épreuves écrites puis orales<br>5. Attendez les résultats";
    } else if (lower.includes('bonjour') || lower.includes('salut')) {
        return "Bonjour ! Je suis votre assistant IA pour l'emploi au Bénin. Je peux vous aider avec les procédures, délais et critères des concours. Que souhaitez-vous savoir ?";
    } else {
        return "Je peux vous aider avec :<br>• Les procédures de candidature<br>• Les délais et dates limites<br>• Les critères d'éligibilité<br>• Les grilles salariales<br>• Les étapes des concours<br><br>Que souhaitez-vous savoir ?";
    }
}

// Notifications
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 20px;
        border-radius: 8px;
        color: white;
        font-weight: 600;
        z-index: 1000001;
        max-width: 300px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        ${type === 'success' ? 'background: #10b981;' : 
          type === 'error' ? 'background: #ef4444;' : 
          'background: #3b82f6;'}
    `;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Event listeners
document.getElementById('skill-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        addSkill();
    }
});

document.getElementById('home-chat-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        sendHomeMessage();
    }
});

// Initialisation
document.addEventListener('DOMContentLoaded', function() {
    loadProfile();
});