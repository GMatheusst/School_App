<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => 'sometimes|exists:users,id',
            'status' => 'sometimes|integer|in:0,1,2',
        ];
    }
}
