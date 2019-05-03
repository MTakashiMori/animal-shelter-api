<?php

namespace App\Http\Requests;

class StatuRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'name' => 'Name of animal',
            'description' => 'Description of animal'
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
