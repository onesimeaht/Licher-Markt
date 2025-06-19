<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licher Markt - Recherche avancée</title>
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
            max-width: 1000px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        /* Formulaire moderne */
        .form-container {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.8s ease-out;
        }

        /* Sections du formulaire */
        .form-section {
            margin-bottom: 30px;
            padding: 25px;
            background: #f8fafc;
            border-radius: 15px;
            border-left: 4px solid #1976d2;
        }

        .section-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #1976d2;
            margin: 0 0 20px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Labels modernes */
        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
            display: block;
            font-size: 14px;
        }

        /* Inputs stylés */
        .form-control {
            border: 2px solid #e5e7eb !important;
            border-radius: 10px !important;
            padding: 12px 15px !important;
            font-size: 14px !important;
            transition: all 0.3s ease !important;
            background: white !important;
        }

        .form-control:focus {
            border-color: #1976d2 !important;
            box-shadow: 0 0 0 3px rgba(25, 118, 210, 0.1) !important;
            outline: none !important;
        }

        /* Selects */
        .form-control select option {
            padding: 10px;
        }

        /* Groupes de dates */
        .date-group {
            background: white;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
        }

        .date-label {
            font-weight: 600;
            color: #1976d2;
            margin-bottom: 15px;
            font-size: 15px;
        }

        .date-separator {
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: #6b7280;
            font-size: 14px;
        }

        /* Section montant spéciale */
        .amount-section {
            background: linear-gradient(135deg, #f1f9ff 0%, #e3f2fd 100%);
            border-left-color: #f59e0b;
        }

        .amount-info {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 15px;
            font-size: 13px;
            color: #856404;
        }

        /* Boutons modernes */
        .btn-container {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .btn-modern {
            background: #1976d2 !important;
            border-color: #1976d2 !important;
            color: white !important;
            padding: 15px 30px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(25, 118, 210, 0.3);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-width: 150px;
            justify-content: center;
        }

        .btn-modern:hover {
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

        /* Icônes pour les sections */
        .icon {
            font-size: 1.2rem;
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
            
            .form-container {
                padding: 25px;
            }
            
            .form-section {
                padding: 20px;
            }
            
            .btn-container {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-modern {
                width: 100%;
                max-width: 250px;
            }
            
            .date-separator {
                margin: 10px 0;
            }
        }

        /* États de validation */
        .form-control.is-valid {
            border-color: #10b981 !important;
        }

        .form-control.is-invalid {
            border-color: #ef4444 !important;
        }

        /* Tooltips pour l'aide */
        .help-text {
            font-size: 12px;
            color: #6b7280;
            margin-top: 5px;
            font-style: italic;
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
            <h1 class="page-title">Recherche avancée</h1>
            <p class="subtitle">Trouvez exactement ce que vous cherchez</p>
        </div>
    </div>

    <!-- Container principal -->
    <div class="main-container">
        <div class="form-container">
            <form method="POST" action="{{route('realisation.filtre')}}">
                @csrf
                
                <!-- Section Structure -->
                <div class="form-section">
                    <h3 class="section-title">
                        <span class="icon">🏢</span>
                        Organisme
                    </h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Sigle</label>
                                <input type="text" class="form-control" name="sigle" placeholder="Ex: MEF, OB...">
                                <div class="help-text">Sigle de l'organisme</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Dénomination</label>
                                <input type="text" class="form-control" name="denomination" placeholder="Nom complet de l'organisme">
                                <div class="help-text">Nom complet de l'organisme</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Type de structure</label>
                                <select class="form-control" name="type_autorite">
                                    <option selected value="all">Toutes les structures</option>
                                    @foreach ($typeautorites as $typeautorite)
                                        <option value="{{$typeautorite->id}}">
                                            {{$typeautorite->description}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section Projet -->
                <div class="form-section">
                    <h3 class="section-title">
                        <span class="icon">📋</span>
                        Détails du projet
                    </h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Libellé du projet</label>
                                <input type="text" class="form-control" name="libelle" placeholder="Mots-clés du projet recherché">
                                <div class="help-text">Recherche dans la description des projets</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section Dates -->
                <div class="form-section">
                    <h3 class="section-title">
                        <span class="icon">📅</span>
                        Périodes
                    </h3>
                    
                    <!-- Date de démarrage -->
                    <div class="date-group" style="margin-bottom: 20px;">
                        <div class="date-label">Date de démarrage</div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label class="form-label">Du</label>
                                    <input type="datetime-local" class="form-control" name="start_demarrage">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="date-separator">au</div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label class="form-label">Au</label>
                                    <input type="datetime-local" class="form-control" name="end_demarrage">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Date de création -->
                    <div class="date-group">
                        <div class="date-label">Date de création</div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label class="form-label">Du</label>
                                    <input type="datetime-local" class="form-control" name="start_creation">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="date-separator">au</div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label class="form-label">Au</label>
                                    <input type="datetime-local" class="form-control" name="end_creation">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section Durée -->
                <div class="form-section">
                    <h3 class="section-title">
                        <span class="icon">⏱️</span>
                        Durée d'exécution
                    </h3>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="form-label">Durée minimale (mois)</label>
                                <input type="number" min="0" class="form-control" name="start_execution" placeholder="0">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="date-separator">à</div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="form-label">Durée maximale (mois)</label>
                                <input type="number" min="0" class="form-control" name="end_execution" placeholder="24">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section Montant -->
                <div class="form-section amount-section">
                    <h3 class="section-title">
                        <span class="icon">💰</span>
                        Budget
                    </h3>
                    <div class="amount-info">
                        <strong>💡 Astuce :</strong> Pour un intervalle, utilisez le format "5000-10000000" avec le tiret (-)
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="form-label">Critère</label>
                                <select class="form-control" name="montant_filtre">
                                    <option value="egale">Égal à</option>
                                    <option value="inf">Inférieur ou égal</option>
                                    <option value="sup">Supérieur ou égal</option>
                                    <option value="compris">Compris entre</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label class="form-label">Montant (FCFA)</label>
                                <input type="text" class="form-control" name="montant" placeholder="Ex: 1000000 ou 5000-10000000">
                                <div class="help-text">Montant en francs CFA</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="btn-container">
                    <button type="submit" class="btn btn-modern">
                        🔍 Lancer la recherche
                    </button>
                    <button type="button" class="btn btn-modern btn-secondary" onclick="window.location.href='realisations'">
                        ← Retour à la liste
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Validation en temps réel
        $(document).ready(function() {
            $('.form-control').on('input change', function() {
                if ($(this).val().trim() !== '') {
                    $(this).removeClass('is-invalid').addClass('is-valid');
                } else {
                    $(this).removeClass('is-valid is-invalid');
                }
            });

            // Validation du montant
            $('input[name="montant"]').on('input', function() {
                const value = $(this).val();
                const criteria = $('select[name="montant_filtre"]').val();
                
                if (criteria === 'compris' && value.includes('-')) {
                    const parts = value.split('-');
                    if (parts.length === 2 && !isNaN(parts[0]) && !isNaN(parts[1])) {
                        $(this).removeClass('is-invalid').addClass('is-valid');
                    } else {
                        $(this).removeClass('is-valid').addClass('is-invalid');
                    }
                } else if (criteria !== 'compris' && !isNaN(value) && value !== '') {
                    $(this).removeClass('is-invalid').addClass('is-valid');
                }
            });
        });
    </script>
</body>
</html>