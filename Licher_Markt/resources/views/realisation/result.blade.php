<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licher Markt - Résultats de recherche</title>
    <link rel="icon" type="image/png" href="/market_info.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
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

        /* Actions bar */
        .actions-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .btn-action {
            background: #1976d2 !important;
            border-color: #1976d2 !important;
            color: white !important;
            padding: 12px 20px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(25, 118, 210, 0.3);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
        }

        .btn-action:hover {
            background: #f59e0b !important;
            border-color: #f59e0b !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
            text-decoration: none;
            color: white !important;
        }

        .btn-secondary {
            background: #6b7280 !important;
            border-color: #6b7280 !important;
        }

        .btn-secondary:hover {
            background: #4b5563 !important;
            border-color: #4b5563 !important;
        }

        .btn-success {
            background: #059669 !important;
            border-color: #059669 !important;
        }

        .btn-success:hover {
            background: #047857 !important;
            border-color: #047857 !important;
        }

        /* Summary card */
        .summary-card {
            background: white;
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #059669;
        }

        .summary-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #1976d2;
            margin-bottom: 15px;
        }

        .summary-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .stat-item {
            text-align: center;
            padding: 15px;
            background: #f8fafc;
            border-radius: 12px;
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: bold;
            color: #059669;
            margin: 0;
        }

        .stat-label {
            color: #64748b;
            font-size: 0.9rem;
            margin: 5px 0 0 0;
        }

        /* Chart container */
        .chart-container {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .chart-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #1976d2;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Tableau moderne */
        .table-container {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        table {
            width: 100% !important;
            border-collapse: collapse;
            margin: 0;
            min-width: 1200px;
        }

        /* Headers du tableau */
        th {
            background: linear-gradient(135deg, #1976d2, #1565c0) !important;
            color: white !important;
            padding: 15px 10px !important;
            font-weight: 600;
            text-align: left;
            border: none !important;
            position: sticky;
            top: 0;
            font-size: 13px;
            z-index: 10;
        }

        th:first-child {
            border-top-left-radius: 12px;
        }

        th:last-child {
            border-top-right-radius: 12px;
        }

        /* Cellules du tableau */
        td {
            padding: 15px 10px !important;
            border: none !important;
            border-bottom: 1px solid #e2e8f0 !important;
            vertical-align: middle;
            font-size: 13px;
        }

        /* Effet hover sur les lignes */
        tbody tr:hover {
            background: linear-gradient(135deg, #f1f9ff 0%, #e3f2fd 100%) !important;
        }

        /* Lignes alternées */
        tbody tr:nth-child(even) {
            background-color: #f8fafc;
        }

        /* Badges pour les codes */
        .code-badge {
            background: linear-gradient(135deg, #1976d2, #1565c0);
            color: white;
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 11px;
            font-weight: 600;
        }

        /* Structure styling */
        .structure-sigle {
            background: #f1f9ff;
            color: #1976d2;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 5px;
        }

        .structure-name {
            font-weight: 500;
            color: #374151;
        }

        /* Montants */
        .montant {
            font-weight: 600;
            color: #059669;
            text-align: right;
            white-space: nowrap;
        }

        /* Dates */
        .date-cell {
            color: #64748b;
            font-size: 12px;
            white-space: nowrap;
        }

        /* Délai */
        .delai-badge {
            background: #fef3c7;
            color: #d97706;
            padding: 3px 8px;
            border-radius: 10px;
            font-size: 11px;
            font-weight: 500;
            white-space: nowrap;
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

        /* Responsive */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
            }
            
            .main-container {
                padding: 20px 10px;
            }
            
            .table-container,
            .chart-container,
            .summary-card {
                padding: 15px;
            }
            
            .actions-bar {
                justify-content: center;
                text-align: center;
            }
            
            .summary-stats {
                grid-template-columns: 1fr;
            }
        }

        /* Scrollbar custom */
        .table-container::-webkit-scrollbar {
            height: 8px;
        }

        .table-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .table-container::-webkit-scrollbar-thumb {
            background: #1976d2;
            border-radius: 10px;
        }

        .table-container::-webkit-scrollbar-thumb:hover {
            background: #1565c0;
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
            <h1 class="page-title">Résultats de recherche</h1>
            <p class="subtitle">Offres d'emploi correspondant à vos critères</p>
        </div>
    </div>

    <!-- Container principal -->
    <div class="main-container">
        
        <!-- Actions bar -->
        <div class="actions-bar">
            <div>
                <button type="button" class="btn btn-action" onclick="window.location.href='/'">
                    Accueil
                </button>
            </div>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <button type="button" class="btn btn-action btn-secondary" onclick="window.location.href='realisations'">
                    Retour à la liste
                </button>
                <button type="button" class="btn btn-action btn-success" onclick="window.location.href='find'">
                    Nouvelle recherche
                </button>
            </div>
        </div>

        <!-- Summary card -->
        <div class="summary-card">
            <div class="summary-title">Résumé des résultats</div>
            <div class="summary-stats">
                <div class="stat-item">
                    <p class="stat-number">{{ count($realisations) }}</p>
                    <p class="stat-label">offres trouvées</p>
                </div>
                <div class="stat-item">
                    <p class="stat-number">{{ number_format($montantTotal, 0, ',', ' ') }}</p>
                    <p class="stat-label">FCFA au total</p>
                </div>
                <div class="stat-item">
                    <p class="stat-number" id="avgAmount">-</p>
                    <p class="stat-label">FCFA en moyenne</p>
                </div>
                <div class="stat-item">
                    <p class="stat-number" id="uniqueOrgs">-</p>
                    <p class="stat-label">organismes différents</p>
                </div>
            </div>
        </div>

        <!-- Chart -->
        <div class="chart-container">
            <h3 class="chart-title">📊 Distribution des budgets par période</h3>
            <canvas id="montantsHistogramme" width="400" height="150"></canvas>
        </div>

        <!-- Tableau -->
        <div class="table-container">
            <table id="dataTable" class="display">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Référence</th>
                        <th>Organisme</th>
                        <th>Département</th>
                        <th>Description</th>
                        <th>Démarrage</th>
                        <th>Lancement</th>
                        <th>Durée</th>
                        <th>Budget</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($realisations as $realisation)
                    <tr>
                        <td><span class="code-badge">{{$realisation->id}}</span></td>
                        <td>{{$realisation->num_reference}}</td>
                        <td>
                            <span class="structure-sigle">{{$realisation->autorite->sigle}}</span>
                            <span class="structure-name">{{$realisation->autorite->denomination}}</span>
                        </td>
                        <td>{{$realisation->servicemaitreoeuvre->libelleService}}</td>
                        <td>{{$realisation->libelle}}</td>
                        <td class="date-cell">{{$realisation->datedemarrage}}</td>
                        <td class="date-cell">{{$realisation->datelancement}}</td>
                        <td><span class="delai-badge">{{$realisation->delaiexecution}} mois</span></td>
                        <td class="montant">{{ number_format($realisation->montantEstime, 0, ',', ' ') }} FCFA</td>  
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
                    { "width": "120px", "targets": 7 },
                    { "width": "120px", "targets": 8 }
                ]
            });

            // Calculer statistiques additionnelles
            const rows = $('#dataTable tbody tr');
            const totalOffers = {{ count($realisations) }};
            const totalAmount = {{ $montantTotal }};
            const avgAmount = totalOffers > 0 ? Math.round(totalAmount / totalOffers) : 0;
            
            // Compter organismes uniques
            const organisms = new Set();
            rows.each(function() {
                const organism = $(this).find('td:nth-child(3)').text().trim();
                organisms.add(organism);
            });

            $('#avgAmount').text(formatAmount(avgAmount));
            $('#uniqueOrgs').text(organisms.size);

            // Graphique moderne
            var ctx = document.getElementById('montantsHistogramme').getContext('2d');
            var montants = @json(array_values($montantsHistogramme));
            var mois = @json(array_keys($montantsHistogramme));

            var histogramme = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: mois,
                    datasets: [{
                        label: 'Budget Total (FCFA)',
                        data: montants,
                        backgroundColor: 'rgba(25, 118, 210, 0.7)',
                        borderColor: 'rgba(25, 118, 210, 1)',
                        borderWidth: 2,
                        borderRadius: 8,
                        borderSkipped: false,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                usePointStyle: true,
                                padding: 20,
                                color: '#374151'
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#64748b',
                                callback: function(value) {
                                    return formatAmount(value) + ' FCFA';
                                }
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        },
                        x: {
                            ticks: {
                                color: '#64748b'
                            },
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        });

        function formatAmount(amount) {
            if (amount >= 1000000000) {
                return (amount / 1000000000).toFixed(1) + 'Md';
            } else if (amount >= 1000000) {
                return (amount / 1000000).toFixed(1) + 'M';
            } else if (amount >= 1000) {
                return (amount / 1000).toFixed(0) + 'K';
            }
            return amount.toString();
        }
    </script>
</body>
</html>