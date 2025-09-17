<?php

namespace App\Http\Requests\TagPublicacao;

use Illuminate\Foundation\Http\FormRequest;

class StoreTagPublicacaoRequest extends FormRequest
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
            'publicacao_id' => 'required|string|exists:publicacoes,id|max:200',
            'creator' => 'nullable|string|max:200',
            'slug' => 'nullable|string|max:200',
        ];
    }

    public function messages(): array
    {
        return [
            'publicacao_id.required' => 'O campo publicação é obrigatório.',
            'publicacao_id.string' => 'O campo publicação deve ser um texto válido.',
            'publicacao_id.max' => 'O campo publicação deve ter no máximo 200 caracteres.',
            'publicacao_id.exists' => 'A publicação informada não existe.',

            'creator.string' => 'O campo creator deve ser um texto válido.',
            'creator.max' => 'O campo creator deve ter no máximo 200 caracteres.',

            'slug.string' => 'O campo slug deve ser um texto válido.',
            'slug.max' => 'O campo slug deve ter no máximo 200 caracteres.',
        ];
    }
}
