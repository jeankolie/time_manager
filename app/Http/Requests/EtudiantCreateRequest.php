<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'matricule' => 'required|string|min:5|unique:etudiant',
            'telephone' => 'required|string|min:9|unique:etudiant',
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'annee' => 'required',
            'licence' => 'required'
        ];
    }
}
