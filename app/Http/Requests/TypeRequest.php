<?php

namespace App\Http\Requests;

class TypeRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'name' => 'Type of animal',
            'description' => 'Description of type'
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required.name' => 'The name is required',
            'required.description' => 'The description is required'
        ];
    }
}
