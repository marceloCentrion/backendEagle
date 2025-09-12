<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TreinoRequest extends FormRequest
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
            'grupo_muscular_id' => 'required|string|exists:grupos_musculares,id|max:200',
            'academia_id' => 'required|string|exists:academias,id|max:200',
            'interno' => 'required|in:SIM,NAO',
            'nome' => 'required|string|max:200',
            'nome_treinos' => 'required|string|max:200',
            'creator' => 'nullable|string|max:200',
            'slug' => 'nullable|string|max:200',
        ];
    }

    public function messages(): array
    {
        return [
            'grupo_muscular_id.required' => 'O grupo muscular é obrigatório.',
            'grupo_muscular_id.exists' => 'O grupo muscular informado não existe.',
            'academia_id.required' => 'A academia é obrigatória.',
            'academia_id.exists' => 'A academia informada não existe.',
            'interno.required' => 'O campo interno é obrigatório.',
            'interno.in' => 'O valor de interno deve ser SIM ou NAO.',
            'nome.required' => 'O nome é obrigatório.',
            'nome_treinos.required' => 'O campo nome_treinos é obrigatório.',
        ];
    }
}
