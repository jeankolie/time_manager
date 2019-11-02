<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantUpdateRequest extends FormRequest
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
        $id = $this->etudiant;
        return [
            'matricule' => 'required|string|min:5|unique:etudiant,matricule,'.$id.',id_etudiant',
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'annee' => 'required',
            'licence' => 'required'
        ];
    }
}
