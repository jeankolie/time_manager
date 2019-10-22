<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Personnel, Departement};
use App\Http\Requests\{PersonnelCreateRequest, PersonnelUpdateRequest};
use App\Gestion\{GestionPersonnel};

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('personnel', [
            'personnels' => Personnel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('forms.personnel.add', [
            'departement' => Departement::whereSlug($request->departement)->firstOrFail()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonnelCreateRequest $request, GestionPersonnel $gestion)
    {
        $gestion->create($request);

        return back()->with('success', "Personnel creer avec success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('personnel', [
            'personnels' => Departement::whereSlug($id)->firstOrFail()->personnels,
            'departement' => Departement::whereSlug($id)->firstOrFail()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('forms.personnel.update', [
            'personnel' => Personnel::whereLogin($id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonnelUpdateRequest $request, GestionPersonnel $gestion, $id)
    {
        $gestion->update($request, $id);
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
