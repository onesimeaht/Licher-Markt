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
    animation: pulse 2s infinite;
}

.logo-header img {
    height: 80px;
    width: auto;
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
    justify-content: space-around;
    flex-direction: row;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
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
}

.btn-primary:nth-child(1) { animation-delay: 0.2s; opacity: 0; animation-fill-mode: forwards; }
.btn-primary:nth-child(2) { animation-delay: 0.4s; opacity: 0; animation-fill-mode: forwards; }
.btn-primary:nth-child(3) { animation-delay: 0.6s; opacity: 0; animation-fill-mode: forwards; }

.btn-primary:hover {
    background-color: #1565c0 !important;
    border-color: #1565c0 !important;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(25, 118, 210, 0.4);
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
</style>
</head>

<body>
<div id="space" >

<div class="logo-header">
    <img src="/market_info.png" alt="Market Info">
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
    ⚙️ Recherche avancée
</button>
</div>

<br><br><br><br><br><br>

<div class="center">
    <img src="/wordcloud.png" alt="Word Cloud" width="55%" height="60%">
</div>

</body>
</html>