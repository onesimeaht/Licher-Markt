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

<!-- BOUTON IA URGENT - À ajouter à la fin de home.blade.php -->
<button id="home-ai-btn" style="
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
" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
    🤖
</button>

<div id="home-ai-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 1000000;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 30px; border-radius: 20px; width: 90%; max-width: 600px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; background: #1e40af; color: white; padding: 15px; border-radius: 10px; margin: -30px -30px 20px -30px;">
            <h2 style="margin: 0; font-size: 24px;">🤖 Assistant IA Licher_Markt</h2>
            <button id="home-close-btn" style="background: none; border: none; color: white; font-size: 30px; cursor: pointer;">×</button>
        </div>
        
        <div style="text-align: center; margin-bottom: 20px;">
            <h3>Votre Assistant IA pour l'Emploi au Bénin</h3>
            <p style="color: #666;">Posez vos questions sur les concours et procédures !</p>
        </div>
        
        <div id="home-chat-box" style="height: 250px; overflow-y: auto; border: 2px solid #e5e7eb; border-radius: 10px; padding: 15px; margin-bottom: 15px; background: #f9fafb;">
            <div style="background: white; padding: 12px; border-radius: 8px; margin-bottom: 10px;">
                <strong style="color: #1e40af;">Assistant :</strong> Bonjour ! Comment puis-je vous aider avec votre recherche d'emploi au Bénin ?
            </div>
        </div>
        
        <div style="display: flex; gap: 10px;">
            <input type="text" id="home-chat-input" placeholder="Tapez votre question..." style="flex: 1; padding: 12px; border: 2px solid #d1d5db; border-radius: 8px;">
            <button onclick="sendHomeMessage()" style="padding: 12px 20px; background: #1e40af; color: white; border: none; border-radius: 8px; cursor: pointer;">Envoyer</button>
        </div>
    </div>
</div>

<script>
document.getElementById('home-ai-btn').onclick = function() {
    document.getElementById('home-ai-modal').style.display = 'block';
};

document.getElementById('home-close-btn').onclick = function() {
    document.getElementById('home-ai-modal').style.display = 'none';
};

function sendHomeMessage() {
    const input = document.getElementById('home-chat-input');
    const chatBox = document.getElementById('home-chat-box');
    const message = input.value.trim();
    
    if (!message) return;
    
    chatBox.innerHTML += `<div style="background: #dbeafe; padding: 12px; border-radius: 8px; margin-bottom: 10px; text-align: right;"><strong>Vous :</strong> ${message}</div>`;
    
    setTimeout(() => {
        const response = getSmartResponse(message);
        chatBox.innerHTML += `<div style="background: white; padding: 12px; border-radius: 8px; margin-bottom: 10px;"><strong style="color: #1e40af;">Assistant :</strong> ${response}</div>`;
        chatBox.scrollTop = chatBox.scrollHeight;
    }, 1000);
    
    input.value = '';
}

function getSmartResponse(message) {
    const lower = message.toLowerCase();
    
    // Salutations
    if (lower.includes('bonjour') || lower.includes('salut') || lower.includes('hello')) {
        return "👋 Bonjour ! Je suis votre assistant IA spécialisé dans l'emploi public au Bénin. Comment puis-je vous aider aujourd'hui ?";
    }
    
    // Qui es-tu / Présentation
    if (lower.includes('qui es') || lower.includes('qui êtes') || lower.includes('présente')) {
        return "🤖 Je suis l'Assistant IA de Licher_Markt ! Je vous aide à naviguer dans le monde de l'emploi public béninois. Je connais les procédures, délais, salaires et critères des concours.";
    }
    
    // Comment postuler / Procédures
    if (lower.includes('comment postuler') || lower.includes('procédure') || lower.includes('candidature') || lower.includes('postuler')) {
        return "📋 <strong>Procédures de candidature :</strong><br>1️⃣ Vérifiez les critères d'éligibilité<br>2️⃣ Préparez vos documents (CV, diplômes, certificats)<br>3️⃣ Déposez votre dossier avant la date limite<br>4️⃣ Passez les épreuves écrites puis orales<br>5️⃣ Attendez les résultats<br><br>💡 <em>Conseil : Postulez dès les premiers jours !</em>";
    }
    
    // Délais
    if (lower.includes('délai') || lower.includes('temps') || lower.includes('combien de jours')) {
        return "🕒 <strong>Délais de candidature :</strong><br>• <strong>Ministères :</strong> 15-30 jours après publication<br>• <strong>Office du Baccalauréat :</strong> 21 jours<br>• <strong>Autres organismes :</strong> 14-45 jours<br><br>⚡ <em>Recommandation : Postulez dans les 7 premiers jours pour maximiser vos chances !</em>";
    }
    
    // Salaires
    if (lower.includes('salaire') || lower.includes('grille') || lower.includes('combien') || lower.includes('rémunération') || lower.includes('paye')) {
        return "💰 <strong>Grilles salariales secteur public béninois :</strong><br>• <strong>Catégorie A :</strong> 80,000 - 300,000 FCFA<br>• <strong>Catégorie B :</strong> 60,000 - 150,000 FCFA<br>• <strong>Catégorie C :</strong> 45,000 - 100,000 FCFA<br><br>📈 <em>Note : Les montants varient selon l'expérience et les primes.</em>";
    }
    
    // Critères / Conditions
    if (lower.includes('critère') || lower.includes('condition') || lower.includes('exigence') || lower.includes('requis')) {
        return "📋 <strong>Critères généraux :</strong><br>• Nationalité béninoise<br>• Âge : généralement 18-35 ans<br>• Diplôme requis selon le poste<br>• Casier judiciaire vierge<br>• Aptitude physique<br><br>🎯 <em>Chaque concours a ses critères spécifiques !</em>";
    }
    
    // Concours
    if (lower.includes('concours') || lower.includes('épreuve') || lower.includes('examen')) {
        return "📚 <strong>Déroulement des concours :</strong><br>• <strong>Épreuves écrites :</strong> Culture générale, français, matières spécialisées<br>• <strong>Épreuves orales :</strong> Entretien, présentation<br>• <strong>Durée :</strong> 2-6 mois selon l'organisme<br><br>💪 <em>Préparez-vous bien à l'avance !</em>";
    }
    
    // Aide / Assistance
    if (lower.includes('aide') || lower.includes('aidez') || lower.includes('aider') || lower.includes('assistance')) {
        return "🆘 <strong>Je peux vous aider avec :</strong><br>• Les procédures de candidature<br>• Les délais et dates limites<br>• Les grilles salariales<br>• Les critères d'éligibilité<br>• Le déroulement des concours<br>• Les conseils de préparation<br><br>❓ <em>Posez-moi une question spécifique !</em>";
    }
    
    // Merci
    if (lower.includes('merci') || lower.includes('remercie')) {
        return "😊 De rien ! C'est un plaisir de vous aider. N'hésitez pas si vous avez d'autres questions sur l'emploi public au Bénin !";
    }
    
    // Au revoir
    if (lower.includes('au revoir') || lower.includes('bye') || lower.includes('à bientôt')) {
        return "👋 Au revoir ! Bonne chance dans vos démarches professionnelles. Revenez quand vous voulez !";
    }
    
    // Réponse par défaut plus intelligente
    return "🤔 Je n'ai pas bien compris votre question. Je peux vous renseigner sur :<br><br>• <strong>Procédures</strong> de candidature<br>• <strong>Délais</strong> de concours<br>• <strong>Grilles salariales</strong><br>• <strong>Critères</strong> d'éligibilité<br>• <strong>Concours</strong> et épreuves<br><br>💡 <em>Essayez de reformuler votre question !</em>";
}
</script>