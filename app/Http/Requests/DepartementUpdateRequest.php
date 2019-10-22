<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartementUpdateRequest extends FormRequest
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
            'nom' => 'required|string|min:5|max:40|unique:departement,nom,'.$this->id.',id_departement',
            'responsable' => 'required|string|min:5|max:40',
            'licence' => 'required',
            'matiere' => 'required'
        ];
    }
}
