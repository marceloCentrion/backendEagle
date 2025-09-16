<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroExecTreinoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'aluno_id' => 'required|string|exists:users,id|max:200',
            'calorias' => 'required|integer|min:0',
            'execicios_concluidos' => 'required|integer|min:0',
            'tempo' => 'required|integer|min:0',
            'treino_id' => 'required|string|exists:treinos,id|max:200',
            'data' => 'required|date',
            'creator' => 'nullable|string|max:200',
            'slug' => 'nullable|string|max:200',
        ];
    }

    public function messages(): array
    {
        return [
            'aluno_id.required' => 'O campo aluno é obrigatório.',
            'aluno_id.exists' => 'O aluno informado não existe.',
            'calorias.required' => 'As calorias são obrigatórias.',
            'calorias.integer' => 'As calorias devem ser um número inteiro.',
            'execicios_concluidos.required' => 'O número de exercícios concluídos é obrigatório.',
            'tempo.required' => 'O tempo é obrigatório.',
            'treino_id.required' => 'O treino é obrigatório.',
            'treino_id.exists' => 'O treino informado não existe.',
            'data.required' => 'A data é obrigatória.',
            'data.date' => 'A data deve estar em um formato válido.',
        ];
    }
}
