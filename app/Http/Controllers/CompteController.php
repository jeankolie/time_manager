<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Personnel};
use App\Http\Requests\{CompteCreateRequest, CompteUpdateRequest};
use App\Gestion\{GestionCompte};
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('compte', [
            'profil' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.compte.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompteCreateRequest $request, GestionCompte $gestion)
    {
        $gestion->create($request);
        return back()->with('success', "Compte creer avec success");
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
        return view('forms.compte.update', [
            'compte' => Compte::whereSlug($id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompteUpdateRequest $request, GestionCompte $gestion, $id)
    {
        if ($request->operation == 'password') {
            if (!Hash::check($request->old_password, Auth::user()->password)) {
                return back()->with('success', "Ancien mot de passe invalide");
            }
        }
        $gestion->update($request, $id);
        return back()->with('success', "Compte modifier avec success");
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
