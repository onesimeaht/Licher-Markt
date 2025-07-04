<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des Autorités</title>
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
        input[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            width: calc(100% - 22px);
            box-sizing: border-box;
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
        <h2>Liste des Clients</h2>
        <!--<input type="text" id="searchInput" placeholder="Rechercher">-->
        <br>
        <div id="back">
            <table id="dataTable" class="display">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Sigle</th>
                        <th>Nom de la structure</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Année</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($autorites as $autorite)
                    <tr>
                        <td>{{$autorite->id}}</td>
                        <td>{{$autorite->sigle}}</td>
                        <td>{{$autorite->denomination}}</td>
                        <td>{{$autorite->email}}</td>
                        <td>{{$autorite->telephone}}</td>
                        <td>{{$autorite->annee}}</td>
                        <td>
                            <a href="{{route('autorite.show', $autorite->id)}}">Plus de détails</a>
                        </td>
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