<?php

namespace App\Http\Requests\Fabricante;

use Illuminate\Foundation\Http\FormRequest;

class StoreFabricanteRequest extends FormRequest
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
            "fabricante" => "required|string|max:200",
            "creator" => "nullable|string|max:200", 
            "slug" => "nullable|string|max:200",
        ];
    }
    public function messages(): array
    {
        return [
            'fabricante.required' => 'O campo fabricante é obrigatório.',
            'fabricante.string' => 'O campo fabricante deve ser uma string.',
            'fabricante.max' => 'O campo fabricante não deve exceder 200 caracteres.',
        ];
    }
}
