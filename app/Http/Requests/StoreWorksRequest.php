<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorksRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'curso_id' => 'required|exists:cursos,id',
            'work' => 'required|string|max:255',
            'value' => 'required|numeric',
            'valid_until' => 'required|date',
        ];
    }
}
