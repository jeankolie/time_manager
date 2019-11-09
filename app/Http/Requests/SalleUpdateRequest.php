<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalleUpdateRequest extends FormRequest
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
            'nom' => 'required|string|min:2|max:40|unique:salle,nom,'.$this->id.',id_salle'
        ];
    }
}
