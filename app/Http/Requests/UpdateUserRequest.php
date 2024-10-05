<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:6|max:8',
            'email' => 'nullable|string|email|max:255|unique:users,email,' . $this->route('user'),
            'img' => 'nullable|string|max:255',
            'access_level' => 'nullable|integer|in:0,1,2,3,4',
        ];
    }
}
