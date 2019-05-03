<?php

namespace App\Http\Requests;

class AnimalRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'name' => 'Name of animal',
            'age' => 'Age of animal',
            'description' => 'Description of animal',
            'status_id' => 'Status of animal',
            'types_id' => 'Type of animal',
            'shelters_id' => 'Shelter'
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'age' => 'required',
            'description' => 'required',
            'status_id' => 'required',
            'types_id' => 'required',
            'shelters_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required.name' => 'The name of animal is required',
            'required.age' => 'The age of animal is required',
            'required.description' => 'The description of animal is required',
            'required.status_id' => 'The status of animal is required',
            'required.types_id' => 'The type of animal is required',
            'required.shelters_id' => 'The shelter is required'
        ];
    }
}
