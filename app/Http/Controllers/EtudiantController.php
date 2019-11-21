<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Etudiant, Annee};
use App\Http\Requests\{EtudiantCreateRequest, EtudiantUpdateRequest, EtudiantLoginRequest};
use App\Gestion\{GestionEtudiant};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function destroy(GestionEtudiant $gestion, $id)
    {
        $gestion->delete($id);
        return response()->json(['statut' => true]);
    }

    public function portail()
    {
        return view('portail');
    }

    public function login(EtudiantLoginRequest $request)
    {
        $password = Hash::make($request->password);

        if (!Etudiant::whereMatricule($request->matricule)->exists()) {
            return back()->withInput()->withErrors(['Matricule ou mot de passe invalide']);
        }

        $etudiant = Etudiant::whereMatricule($request->matricule)->first();

        if (!Hash::check($request->password, $etudiant->password)) {
           return back()->withInput()->withErrors(['Matricule ou mot de passe invalide']);
        }

        //return redirect('/emplois-du-temps')->with('etudiant', $etudiant);

        return redirect()->action(
            'EtudiantController@monEmplois', ['etudiant' => $etudiant->id_etudiant]
        );
    }

    public function monEmplois(Request $request)
    {

        $annee = Annee::orderBy('id_annee', 'DESC')->limit(1)->first()->id_annee;

        $inscription = Etudiant::find($request->etudiant)->inscrires()->where('id_annee', $annee)->first();

        $licence = $inscription->licence;

        return view('auth.emplois', [
            'licence' => [$licence],
            'departement' => $inscription->departement,
            'annee' => Annee::orderBy('id_annee', 'desc')->take(1)->first()->id_annee,
            'intervales' => ['8h-11h', '11h-14h', '14h-17h', '17h-20h'],
            'jours' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi']
        ]);
    }
}
