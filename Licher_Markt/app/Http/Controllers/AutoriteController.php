<?php

namespace App\Http\Controllers;

use App\Models\Autorite;
use App\Models\Realisation;
use Illuminate\Http\Request;

class AutoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autorites = Autorite::with('typeautorite')->get();
        return view("welcome", compact('autorites'));
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
    public function show($id)
    {
        $autorites = Autorite::where('id', $id)->with('typeautorite')->first();
        $realisations = Realisation::where('autorite_id', $id)->with('autorite','plan','modepassation','servicemaitreoeuvre','typebailleurs','Typemarche')->get();
      //  dd($realisations);
        return view("show", compact('autorites', 'realisations'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autorite $autorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autorite $autorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autorite $autorite)
    {
        //
    }
}
