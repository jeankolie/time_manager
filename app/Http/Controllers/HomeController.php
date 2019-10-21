<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Matiere};
use App\Http\Requests\{MatiereCreateRequest, MatiereUpdateRequest};
use App\Gestion\{GestionMatiere};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('matiere', [
            'matieres' => Matiere::all()
        ]);
    }
}
