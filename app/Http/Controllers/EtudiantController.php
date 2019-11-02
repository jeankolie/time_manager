<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Etudiant, Annee};
use App\Http\Requests\{EtudiantCreateRequest, EtudiantUpdateRequest};
use App\Gestion\{GestionEtudiant};
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etudiant', [
            'etudiants' => Etudiant::all(),
            'l' => Auth::user()->departement->licences,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.etudiant.add', [
            'licences' => Auth::user()->departement->licences,
            'annees' => Annee::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtudiantCreateRequest $request, GestionEtudiant $gestion)
    {
        $gestion->create($request);
        return back()->with('success', "Etudiant inscrit avec success");
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
        return view('forms.etudiant.update', [
            'etudiant' => Etudiant::whereMatricule($id)->first(),
            'licences' => Auth::user()->departement->licences,
            'annees' => Annee::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EtudiantUpdateRequest $request, GestionEtudiant $gestion, $id)
    {
        $gestion->update($request);

        return redirect('/etudiants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
