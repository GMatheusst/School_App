<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorksRequest extends FormRequest
{
    public function rules()
    {
        return [
            'curso_id' => 'sometimes|exists:cursos,id',
            'work' => 'sometimes|string|max:255',
            'value' => 'sometimes|numeric',
            'valid_until' => 'sometimes|date',
        ];
    }
}
