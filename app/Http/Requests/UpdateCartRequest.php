<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCartRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => 'nullable|exists:users,id',
            'total_price' => 'nullable|numeric',
        ];
    }
}
