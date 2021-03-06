<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CompteUpdateRequest extends FormRequest
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
        $id = Auth::user()->id_personnel;

        if ($this->operation == 'compte') {
            return [
                'login' => 'required|string|min:5|max:40|unique:personnel,login,'.$id.',id_personnel',
                'nom' => 'required|string|min:2'
            ];
        }else{
            return [
                'old_password' => 'required',
                'password' => 'required|confirmed|min:6'
            ];
        }  
    }

    public function messages()
    {
        return [
            'old_password.required' => 'Vous devez saisir votre ancien mot de passe'
        ];
    }
}
