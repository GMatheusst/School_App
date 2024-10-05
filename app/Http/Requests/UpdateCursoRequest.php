<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCursoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string|max:255',
            'price' => 'sometimes|numeric',
            'img' => 'sometimes|string|max:255',
            'in_stock' => 'sometimes|integer',
            'workload' => 'sometimes|integer',
        ];
    }
}
