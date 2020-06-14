<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormCreateRequest extends FormRequest
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
            'nom' => 'required|max:40',
            'prenom' => 'required|max:40',
            'email' => 'required|email|max:255|unique:contact_form',
            'tel' => 'required|digits:10|max:255',
            'comp' => 'max:255',
        ];
    }
}
