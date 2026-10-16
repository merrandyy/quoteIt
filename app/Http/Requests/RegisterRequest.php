<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ['required', 'min:2', 'max:20'],
            "email" => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:8', 'max:255'],
            // 'avatar' => ['required', 'image', 'max:2048'], //2megabyte
        ];
    }
}
