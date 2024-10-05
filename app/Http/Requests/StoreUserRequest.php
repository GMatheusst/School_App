<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
  

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|max:8',
            'email' => 'required|string|email|max:255|unique:users',
            'img' => 'nullable|string|max:255',
            'access_level' => 'required|integer|in:0,1,2,3,4',
        ];
    }
}
