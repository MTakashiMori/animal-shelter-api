<?php

namespace App\Http\Requests;

class ShelterRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'name' => 'Name of shelter',
            'description' => 'Description of shelter',
            'cnpj' => 'CNPJ of shelter'
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'cnpj' => 'required | min:14'
        ];
    }

    public function messages()
    {
        return [
            'name' => 'The name of shelter is required',
            'description' => 'The description is required',
            'cnpj' => 'The CNPJ ogf shelter is required'
        ];
    }
}
