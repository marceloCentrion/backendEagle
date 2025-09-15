<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RedeSocialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tipo' => 'required|in:INSTAGRAM,TIKTOK,FACEBOOK,X (TWITTER),SPOTIFY',
            'creator' => 'nullable|string|max:200',
            'slug' => 'nullable|string|max:200',
        ];
    }

    public function messages(): array
    {
        return [
            'tipo.required' => 'O campo tipo é obrigatório.',
            'tipo.in' => 'O campo tipo deve ser um dos seguintes valores: INSTAGRAM, TIKTOK, FACEBOOK, X (TWITTER), SPOTIFY.',
            'creator.string' => 'O campo creator deve ser uma string.',
            'slug.max' => 'O campo slug não pode ter mais de 200 caracteres.',
        ];
    }
}
