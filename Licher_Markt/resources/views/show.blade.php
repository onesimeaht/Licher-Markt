<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licher Markt - Détails de l'organisme</title>
    <link rel="icon" type="image/png" href="/market_info.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

        /* Boutons de navigation */
        .nav-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .btn-nav {
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

        .btn-nav:hover {
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
            overflow-x: auto;
        }

        table {
            width: 100%;
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
        tbody tr {
            transition: all 0.3s ease;
        }

        tbody tr:hover {
            background: linear-gradient(135deg, #f1f9ff 0%, #e3f2fd 100%) !important;
            transform: translateX(3px);
            box-shadow: 0 4px 15px rgba(25, 118, 210, 0.1);
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

        /* Structure badge */
        .structure-name {
            font-weight: 600;
            color: #1976d2;
        }

        .structure-sigle {
            background: #f1f9ff;
            color: #1976d2;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 5px;
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

        /* Stats cards */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            border-left: 4px solid #1976d2;
        }

        .stats-number {
            font-size: 2rem;
            font-weight: bold;
            color: #1976d2;
            margin: 0;
        }

        .stats-label {
            color: #64748b;
            font-size: 0.9rem;
            margin: 5px 0 0 0;
        }

        /* Search bar */
        .search-container {
            margin-bottom: 20px;
        }

        .search-input {
            width: 100%;
            padding: 12px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 25px;
            font-size: 14px;
            transition: border-color 0.3s ease;
            background: white;
        }

        .search-input:focus {
            border-color: #1976d2;
            outline: none;
            box-shadow: 0 0 0 3px rgba(25, 118, 210, 0.1);
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
                padding: 15px;
            }
            
            .nav-buttons {
                justify-content: center;
            }
            
            .btn-nav {
                font-size: 12px;
                padding: 10px 15px;
            }
            
            .stats-container {
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
            <h1 class="page-title">Détails de l'organisme</h1>
            <p class="subtitle">Projets et contrats réalisés</p>
        </div>
    </div>

    <!-- Container principal -->
    <div class="main-container">
        <!-- Boutons de navigation -->
        <div class="nav-buttons">
            <button type="button" class="btn btn-nav" onclick="window.location.href='/'">
                Accueil
            </button>
            <button type="button" class="btn btn-nav" onclick="window.location.href='/autorites'">
                ← Liste des organismes
            </button>
        </div>

        <!-- Stats cards -->
        <div class="stats-container">
            <div class="stats-card">
                <p class="stats-number" id="totalProjects">-</p>
                <p class="stats-label">projets réalisés</p>
            </div>
            <div class="stats-card">
                <p class="stats-number" id="totalAmount">-</p>
                <p class="stats-label">montant total</p>
            </div>
            <div class="stats-card">
                <p class="stats-number" id="avgDuration">-</p>
                <p class="stats-label">durée moyenne</p>
            </div>
        </div>

        <!-- Barre de recherche -->
        <div class="search-container">
            <input type="text" id="searchInput" class="search-input" placeholder="Rechercher dans les projets..." onkeyup="searchTable()">
        </div>

        <!-- Tableau -->
        <div class="table-container">
            <table id="dataTable">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Réf.</th>
                    <th>Structure</th>
                    <th>Département</th>
                    <th>Libellé du projet</th>
                    <th>Démarrage</th>
                    <th>Lancement</th>
                    <th>Durée</th>
                    <th>Montant</th>
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

        // Calculer les statistiques
        $(document).ready(function() {
            const rows = $('#dataTable tbody tr');
            const totalProjects = rows.length;
            let totalAmount = 0;
            let totalDuration = 0;

            rows.each(function() {
                // Montant (avant-dernière colonne)
                const montantText = $(this).find('td:nth-last-child(1)').text();
                const montant = parseInt(montantText.replace(/[^0-9]/g, '')) || 0;
                totalAmount += montant;

                // Durée (avant-dernière colonne)
                const dureeText = $(this).find('td:nth-last-child(2)').text();
                const duree = parseInt(dureeText.replace(/[^0-9]/g, '')) || 0;
                totalDuration += duree;
            });

            const avgDuration = totalProjects > 0 ? Math.round(totalDuration / totalProjects) : 0;

            // Afficher les stats
            $('#totalProjects').text(totalProjects);
            $('#totalAmount').text(formatAmount(totalAmount) + ' FCFA');
            $('#avgDuration').text(avgDuration + ' mois');
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