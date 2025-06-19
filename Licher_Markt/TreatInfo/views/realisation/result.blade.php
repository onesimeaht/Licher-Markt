<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        <h2>Résultats de la recherche</h2>
        <button type="button" class="btn btn-primary" onclick="window.location.href='realisations'">Retour à la liste</button>
        <button type="button" class="btn btn-primary" onclick="window.location.href='find'">Retour au filtre</button>
        <br><br>

        <div id="summary" class="alert alert-info">
            <strong>Résultats :</strong> <span id="resultCount">{{ count($realisations) }}</span> résultat(s) trouvé(s). 
            Montant total estimé : <strong>{{ number_format($montantTotal, 2, ',', ' ') }} FCFA</strong>
        </div>

        <h2>Histogramme des montants par mois</h2>
        <canvas id="montantsHistogramme" width="400" height="200"></canvas>

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

            var ctx = document.getElementById('montantsHistogramme').getContext('2d');
            var montants = @json(array_values($montantsHistogramme));
            var mois = @json(array_keys($montantsHistogramme));

            var histogramme = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: mois,
                    datasets: [{
                        label: 'Montant Total (FCFA)',
                        data: montants,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>