<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
            'nom_contact'=>'required|min:5|max:20|alpha',
            'email_contact'=>'required|email',
            'sujet'=>'required|max:30',
            'texte'=>'required|max:150',
            'g-recaptcha-response' => 'required|recaptcha',
            ];
    }
}
