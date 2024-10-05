<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCursoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'img' => 'nullable|string|max:255',
            'in_stock' => 'nullable|integer',
            'workload' => 'nullable|integer',
        ];
    }
}
