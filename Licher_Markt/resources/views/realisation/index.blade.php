<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des Réalisations</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    
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

        #back {
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
        </div>
        <h2>Réalisations</h2>
        <button type="button" class="btn btn-primary" onclick="window.location.href='find'">Filtrer</button>
        <br>
        <div id="back">
            <!--<input type="text" id="searchInput" placeholder="Rechercher" style="margin-bottom: 20px; width: 100%; padding: 10px; box-sizing: border-box;">-->
            <table id="dataTable" class="display">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Num. de reference</th>
                        <th>Structure</th>
                        <th>Departement</th>
                        <th>Libelle</th>
                        <th>Date de démarrage</th>
                        <th>Date de lancement</th>
                        <th>Delai d'exécution</th>
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
        $(document).ready(function() {

            var table = $('#dataTable').DataTable();

            $('#searchInput').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>
</body>
</html>