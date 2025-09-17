<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTreinoRequest extends FormRequest
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
            'grupo_muscular_id' => 'sometimes|string|exists:grupos_musculares,id|max:200',
            'academia_id' => 'sometimes|string|exists:academias,id|max:200',
            'interno' => 'sometimes|in:SIM,NAO',
            'nome' => 'sometimes|string|max:200',
            'nome_treinos' => 'sometimes|string|max:200',
            'creator' => 'nullable|string|max:200',
            'slug' => 'nullable|string|max:200',
        ];
    }

    public function messages(): array
    {
        return [
            'grupo_muscular_id.exists' => 'O grupo muscular informado não existe.',
            'grupo_muscular_id.string' => 'O grupo muscular não é válido.',
            'academia_id.string' => 'Academia informada não é válida.',
            'academia_id.exists' => 'A academia informada não existe.',
            'interno.in' => 'O valor de interno deve ser SIM ou NAO.',
        ];
    }
}
