<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licher Markt - Secteurs d'activité</title>
    <link rel="icon" type="image/png" href="/market_info.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('/TreatInfo.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        /* Header avec logo */
        .header {
            background: linear-gradient(135deg, #1976d2 0%, #1565c0 100%);
            color: white;
            padding: 20px 0;
            box-shadow: 0 4px 20px rgba(25, 118, 210, 0.3);
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .logo-container a {
            display: inline-block;
            transition: all 0.3s ease;
        }

        .logo-container a:hover {
            transform: scale(1.1);
        }

        .logo-container img {
            height: 60px;
            width: auto;
            filter: brightness(0) invert(1);
            cursor: pointer;
        }

        .page-title {
            text-align: center;
            margin: 0;
            font-size: 2.5rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .subtitle {
            text-align: center;
            margin: 5px 0 0 0;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Container principal */
        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        /* Bouton retour */
        .back-btn-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 30px;
        }

        .btn-back {
            background: #1976d2 !important;
            border-color: #1976d2 !important;
            color: white !important;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(25, 118, 210, 0.3);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-back:hover {
            background: #f59e0b !important;
            border-color: #f59e0b !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
            text-decoration: none;
            color: white !important;
        }

        /* Tableau moderne */
        .table-container {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.8s ease-out;
        }

        table {
            width: 100% !important;
            border-collapse: collapse;
            margin: 0;
        }

        /* Headers du tableau */
        th {
            background: linear-gradient(135deg, #1976d2, #1565c0) !important;
            color: white !important;
            padding: 15px 12px !important;
            font-weight: 600;
            text-align: left;
            border: none !important;
            position: sticky;
            top: 0;
            font-size: 14px;
        }

        th:first-child {
            border-top-left-radius: 12px;
        }

        th:last-child {
            border-top-right-radius: 12px;
        }

        /* Cellules du tableau */
        td {
            padding: 15px 12px !important;
            border: none !important;
            border-bottom: 1px solid #e2e8f0 !important;
            vertical-align: middle;
        }

        /* Effet hover sur les lignes */
        tbody tr {
            transition: all 0.3s ease;
        }

        tbody tr:hover {
            background: linear-gradient(135deg, #f1f9ff 0%, #e3f2fd 100%) !important;
            transform: translateX(5px);
            box-shadow: 0 4px 15px rgba(25, 118, 210, 0.1);
        }

        /* Lignes alternées */
        tbody tr:nth-child(even) {
            background-color: #f8fafc;
        }

        /* Boutons "Plus de détails" */
        .details-btn {
            background: #1976d2;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .details-btn:hover {
            background: #f59e0b;
            color: white;
            text-decoration: none;
            transform: scale(1.05);
        }

        /* Style DataTables */
        .dataTables_wrapper {
            padding: 0;
        }

        .dataTables_length select,
        .dataTables_filter input {
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            padding: 8px 12px;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }

        .dataTables_filter input:focus,
        .dataTables_length select:focus {
            border-color: #1976d2;
            outline: none;
            box-shadow: 0 0 0 3px rgba(25, 118, 210, 0.1);
        }

        .dataTables_info {
            color: #64748b;
            font-size: 14px;
        }

        /* Pagination */
        .dataTables_paginate .paginate_button {
            padding: 8px 12px !important;
            margin: 0 2px;
            border-radius: 8px !important;
            border: 1px solid #e2e8f0 !important;
            background: white !important;
            color: #1976d2 !important;
            transition: all 0.3s ease;
        }

        .dataTables_paginate .paginate_button:hover {
            background: #1976d2 !important;
            color: white !important;
            border-color: #1976d2 !important;
        }

        .dataTables_paginate .paginate_button.current {
            background: #1976d2 !important;
            color: white !important;
            border-color: #1976d2 !important;
        }

        /* Animations */
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

        /* Responsive */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
            }
            
            .main-container {
                padding: 20px 10px;
            }
            
            .table-container {
                padding: 20px;
                overflow-x: auto;
            }
            
            table {
                min-width: 800px;
            }
        }

        /* Badges pour les secteurs */
        .sector-badge {
            background: linear-gradient(135deg, #1976d2, #1565c0);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 5px;
        }

        /* Stats card */
        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .stats-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1976d2;
            margin: 0;
        }

        .stats-label {
            color: #64748b;
            font-size: 0.9rem;
            margin: 5px 0 0 0;
        }
    </style>
</head>
<body>
    <!-- Header avec logo -->
    <div class="header">
        <div class="container">
            <div class="logo-container">
                <a href="/" onclick="location.reload()">
                    <img src="/market_info.png" alt="Licher Markt">
                </a>
            </div>
            <h1 class="page-title">Secteurs d'activité</h1>
            <p class="subtitle">Explorez les organismes recruteurs au Bénin</p>
        </div>
    </div>

    <!-- Container principal -->
    <div class="main-container">
        <!-- Bouton retour -->
        <div class="back-btn-container">
            <a href="/" class="btn btn-back">
                ← Retour à l'accueil
            </a>
        </div>

        <!-- Stats card -->
        <div class="row">
            <div class="col-md-12">
                <div class="stats-card">
                    <p class="stats-number" id="totalCount">-</p>
                    <p class="stats-label">organismes recensés</p>
                </div>
            </div>
        </div>

        <!-- Tableau -->
        <div class="table-container">
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
                        <td><span class="sector-badge">{{$autorite->id}}</span></td>
                        <td><strong>{{$autorite->sigle}}</strong></td>
                        <td>{{$autorite->denomination}}</td>
                        <td>{{$autorite->email}}</td>
                        <td>{{$autorite->telephone}}</td>
                        <td>{{$autorite->annee}}</td>
                        <td>
                            <a href="{{route('autorite.show', $autorite->id)}}" class="details-btn">
                                📋 Plus de détails
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var table = $('#dataTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json"
                },
                "pageLength": 10,
                "responsive": true,
                "order": [[ 0, "asc" ]],
                "columnDefs": [
                    { "width": "80px", "targets": 0 },
                    { "width": "100px", "targets": 1 },
                    { "width": "120px", "targets": 6 }
                ]
            });
            
            // Mettre à jour le compteur
            function updateCount() {
                var info = table.page.info();
                $('#totalCount').text(info.recordsTotal);
            }
            
            updateCount();
            
            table.on('draw', function() {
                updateCount();
            });
        });
    </script>
</body>
</html>