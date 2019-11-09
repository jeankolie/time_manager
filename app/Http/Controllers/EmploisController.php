<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Salle, Annee};
use App\Http\Requests\{EnseignerCreateRequest, EnseignerUpdateRequest};
use App\Gestion\{GestionEmplois};

class EmploisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('emplois', [
            'annee' => Annee::orderBy('id_annee', 'desc')->take(1)->first()->id_annee,
            'intervales' => ['8h-11h', '11h-14h', '14h-17h', '17h-20h'],
            'jours' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      return view('forms.emplois.add', [
            'salles' => Salle::all()
      ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnseignerCreateRequest $request, GestionEmplois $gestion)
    {
        $gestion->create($request);
        return back()->with('success', "Emplois creer avec success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('forms.emplois.update', [
            'emplois' => Emplois::whereSlug($id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmploiseUpdateRequest $request, GestionEmplois $gestion, $id)
    {
        $gestion->update($request);

        return back()->with('success', "Emplois modifier avec success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, GestionEmplois $gestion, $id)
    {
        $gestion->delete($request);
        return response()->json(['statut' => true]);
    }
}
