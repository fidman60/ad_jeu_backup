<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticipantRequest extends FormRequest
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
            'civilite' => 'required|min:1',
            'nom' => 'required|min:2|max:30',
            'prenom' => 'required|min:2|max:30',
            'date_naissance' => 'required',
            'email' => 'required|email|unique:participants',
            'tele' => 'required|min:10|max:30',
            'adresse' => 'required|min:5|max:255',
            'cp' => 'required|min:3|max:20',
            'ville' => 'required|min:3|max:30',
            'reparateur_ad' => 'required|numeric',
            'no_facture_code_jeu' => 'required|min:3|max:120',
            'date_facture' => 'required',
            // 'cond1' => 'required',
            // 'cond2' => 'required',
        ];
    }
}
