<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Annee};
use App\Http\Requests\{AnneeCreateRequest, AnneeUpdateRequest};
use App\Gestion\{GestionAnnee};

class AnneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('annee', [
            'annees' => Annee::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.annee.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnneeCreateRequest $request, GestionAnnee $gestion)
    {
        $gestion->create($request);

        return back()->with('success', "Annee creer avec success");
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

        return view('forms.annee.update', [
            'annee' => Annee::where('id_annee', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnneeUpdateRequest $request, GestionAnnee $gestion, $id)
    {
        $gestion->update($request);

        return redirect('/annees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(GestionAnnee $gestion, $id)
    {
        $gestion->delete($id);
        return response()->json(['statut' => true]);
    }
}
