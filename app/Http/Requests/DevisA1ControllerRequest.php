<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DevisA1ControllerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ['nom_client' => 'required|string|unique:nom_client'];
        return ['adresse_client' => 'required|string'];
        return ['tel_client' => 'string'];
        return ['fax_client' => 'string'];
        return ['pays_client' => 'string'];
        return ['categorie_client' => 'string'];
        return ['secteur_client' => 'string'];
        return ['sousecteur_client' => 'string'];
        return ['type_client' => 'string'];
        return ['siret_client' => 'integer'];
    }
}
