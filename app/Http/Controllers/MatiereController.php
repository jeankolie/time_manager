<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Matiere};
use App\Http\Requests\{MatiereCreateRequest, MatiereUpdateRequest};
use App\Gestion\{GestionMatiere};

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('matiere', [
            'matieres' => Matiere::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.matiere.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MatiereCreateRequest $request, GestionMatiere $gestion)
    {
        $gestion->create($request);

        return back()->with('success', "Matiere creer avec success");
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
        return view('forms.matiere.update', [
            'matiere' => Matiere::whereSlug($id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MatiereUpdateRequest $request, GestionMatiere $gestion, $id)
    {
        $gestion->update($request);

        return back()->with('success', "Matiere modifier avec success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GestionMatiere $gestion, $id)
    {
        $gestion->delete($id);
        return response()->json(['statut' => true]);
    }
}
