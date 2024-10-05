<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCursoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'img' => 'nullable|string|max:255',
            'in_stock' => 'required|integer',
            'workload' => 'required|integer',
        ];
    }
}
