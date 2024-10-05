<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => 'nullable|exists:users,id',
            'status' => 'nullable|integer|in:0,1,2',
        ];
    }
}
