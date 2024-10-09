<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'sometimes|string|max:255',
            'password' => 'sometimes|string|min:6|max:8',
            'email' => 'sometimes|string|email|max:255' . $this->route('user'),
            'img' => 'sometimes|string|max:255',
            'access_level' => 'sometimes|integer|in:0,1,2,3,4',
        ];
    }
}
