<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|min:10|max:10|unique:users,phone',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'term' => 'required'
        ];
    }
    public function attributes()
    {
        return [
            'term' => 'term and condition',
        ];
    }
}
