<?php

namespace App\Http\Requests\RegistroExecTreino;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRegistroExecTreinoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'aluno_id' => 'sometimes|string|exists:users,id|max:200',
            'calorias' => 'sometimes|integer|min:0',
            'execicios_concluidos' => 'sometimes|integer|min:0',
            'tempo' => 'sometimes|integer|min:0',
            'treino_id' => 'sometimes|string|exists:treinos,id|max:200',
            'data' => 'sometimes|date',
            'creator' => 'nullable|string|max:200',
            'slug' => 'nullable|string|max:200',
        ];
    }

    public function messages(): array
    {
        return [
            'aluno_id.exists' => 'O aluno informado não existe.',
            'calorias.integer' => 'As calorias devem ser um número inteiro.',
            'execicios_concluidos.required' => 'O número de exercícios concluídos é obrigatório.',
            'treino_id.exists' => 'O treino informado não existe.',
            'data.date' => 'A data deve estar em um formato válido.',
        ];
    }
}
