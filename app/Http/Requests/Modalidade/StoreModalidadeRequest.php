<?php

namespace App\Http\Requests\Modalidade;

use Illuminate\Foundation\Http\FormRequest;

class StoreModalidadeRequest extends FormRequest
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
            "modalidade"=> "required|string|max:200",
            "creator"=> "nullable|string|max:200",
            "slug"=> "nullable|string|max:200",
        ];
    }
    public function messages(){
        return [
            ".required" => "O campo :attribute é obrigatório.",
            ".string" => "O campo :attribute deve ser uma string.",
            ".max" => "O campo :attribute não deve ser maior que :max caracteres.",
        ];
    }
}
