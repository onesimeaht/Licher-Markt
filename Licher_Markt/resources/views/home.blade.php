<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
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
    }
    
    h1, .page {
    text-align: center;
    }
</style>
</head>

<body>
<div id="space" >
<div class="center">
<div class="card-header">{{ __('Dashboard') }}</div>
{{ __('By Ameo') }}
</div>

<br><br><br>

<h1>Bienvenue user</h1>

<br><br><br>

<div id="centb">
<button type="button" class="btn btn-primary" onclick="window.location.href='autorites'">Accéder à la liste des autorités</button>
<button type="button" class="btn btn-primary" onclick="window.location.href='realisations'">Accéder à la liste des réalisations</button>
<button type="button" class="btn btn-primary" onclick="window.location.href='/find'">Lancer un filtre sur l'ensemble des informations</button>

</div>
<br><br><br><br><br><br>
<div class="center">
<img src="/wordcloud.png" alt="Word Cloud" width=55% height=60% >
</div>

</body>
</html>

{{--
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
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
    }
    
    h1, .page {
    text-align: center;
    }
</style>
</head>

<body>

<div id="space" >
<div class="center">
<div class="card-header">{{ __('Dashboard') }}</div>
{{ __('By Ameo') }}
</div>

<br><br><br>

<h1>Bienvenue user</h1>

<br><br><br>

<div id="centb">
<button type="button" class="btn btn-primary" onclick="window.location.href='realisations'">Accéder à la liste des réalisations</button>
</div>
<br><br><br><br><br><br>
<div class="center">
</div>
</div>

<div id="space" >
<div class="center">


<br><br><br>
<br><br><br>

<div id="centb">
<button type="button" class="btn btn-primary" onclick="window.location.href='autorites'">Accéder à la liste des autorités</button>


</div>
<br><br><br><br><br><br>
<div class="center">
</div>
</div>


<div id="space" >
<div class="center">

<br><br><br>
<br><br><br>

<div id="centb">
<button type="button" class="btn btn-primary" onclick="window.location.href='/find'">Lancer un filtre sur l'ensemble des informations</button>

</div>
<br><br><br><br><br><br>
<div class="center">
</div>

</body>
</html>
--}}