<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Salle, Annee, Inscrire};
use App\Http\Requests\{EnseignerCreateRequest, EnseignerUpdateRequest};
use App\Gestion\{GestionEmplois};
use App\Mail\{SendNotification};
use Illuminate\Support\Facades\Mail;

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
            'annee' => lastYear()->id_annee,
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

    public function envoyerMessage(Request $request)
    {
        if (empty($request->message)) {
            return back()->with('erreur', 'Saisisser le message a envoyer');
        }

        $inscriptions = Inscrire::where('id_licence', $request->licence)->get();
        dd($inscriptions);
        foreach ($inscriptions as $inscription) {
            $tel = $inscription->etudiant->telephone;
            $msg = $request->message;
            sendSMS($tel, $msg);
            //Email
            if (!empty($inscription->etudiant->email)) {
                Mail::to($inscription->etudiant->email)->send(new SendNotification($msg));
            }
        }

        return back()->with('msg', 'Message envoye avec succes');
    }
}
