<?php

namespace App\Http\Controllers;

use App\Models\Autorite;
use App\Models\Realisation;
use App\Models\Typeautorite;
use Illuminate\Http\Request;

class RealisationController extends Controller
{

    public function home()
    {
        $realisations =Realisation::all();
        $libelles = $realisations->pluck('libelle')->toArray();
        return view('home', compact('realisations', 'libelles'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $realisations = Realisation::with('autorite')->get();
        return view("realisation.index", compact('realisations'));
    }

    public function find()
    {
        $realisations = Realisation::with('autorite')->get();
        $typeautorites = Typeautorite::all();
        $autorites = Autorite::all();

        return view("realisation.find", compact('realisations','typeautorites', 'autorites'));
    }

public function filtre(Request $request)
{
    $realisations = Realisation::with(['autorite']);

    if ($request->sigle) {
        $sigle = $request->sigle;
        $realisations = $realisations->whereHas('autorite', function ($query) use ($sigle) {
            $query->where('sigle', 'LIKE', "%$sigle%");
        });
    }

    if ($request->denomination) {
        $denomination = $request->denomination;           
        $realisations = $realisations->whereHas('autorite', function ($query) use ($denomination) {
            $query->where('denomination', 'LIKE', "%$denomination%");
        });
    }

    if ($request->type_autorite && $request->type_autorite !== 'all') {
        $realisations = $realisations->whereHas('autorite', function ($query) use ($request) {
            $query->where('typeautorite_id', $request->type_autorite);
        });
    }
/*
    if ($request->libelle) {
        $libelle = $request->libelle;
        $realisations = $realisations->whereHas('autorite', function ($query) use ($libelle) {
            $query->where('libelle', 'LIKE', "%$libelle%");
        });
    }
*/

if ($request->libelle) {
    $libelles = is_array($request->libelle) ? $request->libelle : explode(' ', $request->libelle);
    $realisations = $realisations->whereHas('autorite', function ($query) use ($libelles) {
        foreach ($libelles as $libelle) {
            $query->where('libelle', 'LIKE', "%$libelle%");
        }
    });
}
    if ($request->start_demarrage && $request->end_demarrage) {
        $start_demarrage = $request->start_demarrage;
        $end_demarrage = $request->end_demarrage;
        $realisations->whereBetween('datedemarrage', [$start_demarrage, $end_demarrage]);
    }

    if ($request->start_creation && $request->end_creation) {
        $start_creation = $request->start_creation;
        $end_creation = $request->end_creation;
        $realisations->whereBetween('datecreation', [$start_creation, $end_creation]);
    }

    if ($request->start_execution && $request->end_execution) {
        $start_execution = $request->start_execution;
        $end_execution = $request->end_execution;
        $realisations->whereBetween('delaiexecution', [$start_execution, $end_execution]);
    }

    if ($request->montant) {
        $minMontant = $request->montant_filtre == "compris" ? explode("-", $request->montant)[0] : $request->montant;
        $maxMontant = $request->montant_filtre == "compris" ? explode("-", $request->montant)[1] : $request->montant;
        $operator = "=";

        if ($request->montant_filtre == "compris") {
            $realisations = $realisations->where("montantEstime", ">", $minMontant)
                ->where("montantEstime", "<", $maxMontant);
        } else {
            if ($request->montant_filtre == "sup") {
                $operator = ">=";
            } else if ($request->montant_filtre == "inf") {
                $operator = "<=";
            }
            $realisations = $realisations->where("montantEstime", $operator, $minMontant);
        }
    }

    $realisations = $realisations->get();
    $montantTotal = $realisations->sum('montantEstime');

    $montantsParMois = $realisations->groupBy(function ($item) {
        return \Carbon\Carbon::parse($item->datedemarrage)->format('Y-m');
    })->map(function ($group) {
        return $group->sum('montantEstime');
    });

    $plusVielleDate = $realisations->min('datedemarrage');
    $dateDebut = \Carbon\Carbon::parse($plusVielleDate)->startOfMonth();
    $dateFin = now()->startOfMonth();

    $mois = [];
    for ($date = $dateDebut; $date->lte($dateFin); $date->addMonth()) {
        $mois[] = $date->format('Y-m');
    }
    
    $montantsHistogramme = [];
    foreach ($mois as $moisActuel) {
        $montantsHistogramme[$moisActuel] = $montantsParMois->get($moisActuel, 0);
    }

    return view("realisation.result", compact('realisations', 'montantTotal', 'montantsHistogramme'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Realisation $realisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Realisation $realisation) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Realisation $realisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Realisation $realisation)
    {
        //
    }
}
