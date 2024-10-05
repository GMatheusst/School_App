<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorksRequest extends FormRequest
{
    public function rules()
    {
        return [
            'curso_id' => 'nullable|exists:cursos,id',
            'work' => 'nullable|string|max:255',
            'value' => 'nullable|numeric',
            'valid_until' => 'nullable|date',
        ];
    }
}
