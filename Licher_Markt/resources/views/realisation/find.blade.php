<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtre des données</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-image: url('/TreatInfo.png');
            background-repeat: no-repeat;
            background-size: cover;
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
    <h2 class="text-center">Filtrer les informations</h2>


    <div class="container">
        <form method="POST" action="{{route("realisation.filtre")}}">
            @csrf
            <h2>Structure</h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3 form-group"><label for="" class="form-label">Sigle</label><input type="text" class="form-control" name="sigle"></div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3 form-group"><label for="" class="form-label">Dénomination</label><input type="text" class="form-control" name="denomination"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3 form-group"><label for="" class="form-label">Type de structure</label><select type="text" class="form-control" name="type_autorite">
                            <option selected value="all">Toutes</option>
                            @foreach ($typeautorites as $typeautorite)
                                <option value="{{$typeautorite->id}}">
                                    {{$typeautorite->description}}
                                </option>
                            @endforeach
                        </select></div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3 form-group"><label for="" class="form-label">Libelle</label><input type="text" class="form-control" name="libelle"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <b>Date de démarrage</b>
                </div>
                <div class="col-sm-5">
                    <div class="mb-3 form-group"><input type="datetime-local" class="form-control" name="start_demarrage"></div>
                </div>
                <div class="col-sm-1 text-center"> <b>à</b> </div>
                <div class="col-sm-6">
                    <div class="mb-3 form-group"><input type="datetime-local" class="form-control" name="end_demarrage"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <b>Date de création</b>
                </div>
                <div class="col-sm-5">
                    <div class="mb-3 form-group"><input type="datetime-local" class="form-control" name="start_creation"></div>
                </div>
                <div class="col-sm-1 text-center"> <b>à</b> </div>
                <div class="col-sm-6">
                    <div class="mb-3 form-group"><input type="datetime-local" class="form-control" name="end_creation"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <b>Délai d'éxecution</b>
                </div>
                <div class="col-sm-5">
                    <div class="mb-3 form-group"><input type="number" min="0" class="form-control" name="start_execution"></div>
                </div>
                <div class="col-sm-1 text-center"> <b>à</b> </div>
                <div class="col-sm-6">
                    <div class="mb-3 form-group"><input type="number" min="0" class="form-control" name="end_execution"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 d-flex">
                    <b>Montant</b>
                    <div for="" class="l">
                        <h6>S'il s agit d'un interval de montant separer les deux mont* avec un tirer (5000-10000000)</h6>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">

                        <select type="text" class="form-control" name="montant_filtre">
                            <option value="egale">Égale</option>
                            <option value="inf">Inferieur ou Égale</option>
                            <option value="sup">Superieur ou Égale</option>
                            <option value="compris">Compris entre (-)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-10">

                    <div class="mb-3 form-group"><input type="text" class="form-control" name="montant"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Rechercher</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='realisations'">Retour à la liste</button>
        </form>

    </div>

</body>

</html>