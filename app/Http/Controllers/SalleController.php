<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Salle};
use App\Http\Requests\{SalleCreateRequest, SalleUpdateRequest};
use App\Gestion\{GestionSalle};

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('salle', [
          'salles' => Salle::all()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.salle.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalleCreateRequest $request, GestionSalle $gestion)
    {
      $gestion->create($request);

      return back()->with('success', "Salle creer avec success");
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
      return view('forms.salle.update', [
          'salle' => Salle::where('id_salle', $id)->first()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalleUpdateRequest $request, GestionSalle $gestion, $id)
    {
      $gestion->update($request);

      return redirect('/salles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GestionSalle $gestion, $id)
    {
      $gestion->delete($id);
      return response()->json(['statut' => true]);
    }
}
