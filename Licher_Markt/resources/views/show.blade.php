<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails(Autorités)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-repeat: no-repeat;
            background-size: cover;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
            
        }

        th {
            background-color: #343a40;
            color: white;
            text-align: left;
            position: sticky;
            top: 0;
        }

        tr:hover {
            background-color: #ddd;
        }

        #back{
            background-color: white;
        }

        .right {
            display: flex;
            justify-content: flex-end;

        }
    </style>
</head>
<body>
    <div class="container">
    <div class="right">
    <button type="button" class="btn btn-primary" onclick="window.location.href='/'">Revenir à la page principale</button>
    <button type="button" class="btn btn-primary" onclick="window.location.href='/autorites'">Revenir à la liste des autorités</button>

    </div>
        <h2>Réalisation de la structure </h2>
      <!--  <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Rechercher...">-->
      <div id="back">
        <table id="dataTable">
            <thead>
            <tr>
                    <th>Code</th>
                    <th>Num. de reference</th>
                    <th>Structure</th>
                    <th>Departement</th>
                    <th>Libelle</th>
                    <th>Date de démarrage</th>
                    <th>Date de lancement</th>
                    <th>Delai d'exécution </th>
                    <th>Montant estime</th>
                </tr>
            </thead>
            <tbody>
            @foreach($realisations as $realisation)
            <tr>
            <td>{{$realisation->id}}</td>
            <td>{{$realisation->num_reference}}</td>
            <td><b>{{$realisation->autorite->sigle}}</b> - {{$realisation->autorite->denomination}}</td>
            <td>{{$realisation->servicemaitreoeuvre->libelleService}}</td>
            <td>{{$realisation->libelle}}</td>
            <td>{{$realisation->datedemarrage}}</td>
            <td>{{$realisation->datelancement}}</td>
            <td>{{$realisation->delaiexecution}} mois</td>
            <td>{{ number_format($realisation->montantEstime) }} </td>  
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>

    <script>
        function searchTable() {
            let input = document.getElementById('searchInput');
            let filter = input.value.toLowerCase();
            let table = document.getElementById('dataTable');
            let tr = table.getElementsByTagName('tr');

            for (let i = 1; i < tr.length; i++) {
                tr[i].style.display = 'none';
                let td = tr[i].getElementsByTagName('td');
                for (let j = 0; j < td.length; j++) {
                    if (td[j]) {
                        if (td[j].innerHTML.toLowerCase().indexOf(filter) > -1) {
                            tr[i].style.display = '';
                            break;
                        }
                    }
                }
            }
        }
    </script>
        
</body>
</html>