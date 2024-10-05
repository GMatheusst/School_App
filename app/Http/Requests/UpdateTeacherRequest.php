<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => 'sometimes|exists:users,id',
            'curso_id' => 'sometimes|exists:cursos,id',
        ];
    }
}
