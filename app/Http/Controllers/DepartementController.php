<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Departement, Matiere};
use App\Http\Requests\{DepartementCreateRequest, DepartementUpdateRequest};
use App\Gestion\{GestionDepartement};

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departement', [
            'departements' => Departement::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.departement.add', [
            'matieres' => Matiere::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartementCreateRequest $request, GestionDepartement $gestion)
    {

        $gestion->create($request);

        return back()->with('success', "Departement creer avec success");
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
         return view('forms.departement.update', [
            'departement' => Departement::whereSlug($id)->first(),
            'matieres' => Matiere::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartementUpdateRequest $request, GestionDepartement $gestion, $id)
    {
        $gestion->update($request);
        return redirect('/departements');
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
