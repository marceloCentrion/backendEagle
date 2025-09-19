<?php

namespace App\Http\Requests\AvaliacaoFisica;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAvaliacaoFisicaRequest extends FormRequest
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
            'altura' => 'sometimes|required|integer',
            'aluno_id' => 'sometimes|required|string|exists:users,id',
            'nome' => 'sometimes|required|string|max:200',
            'data_avaliacao' => 'sometimes|required|date',
            'data_proxima_avaliacao' => 'sometimes|required|date',
            'dc_abdominal' => 'sometimes|required|integer',
            'dc_axilar_media' => 'sometimes|required|integer',
            'dc_coxa' => 'sometimes|required|integer',
            'dc_panturrilha' => 'sometimes|required|integer',
            'dc_peitoral' => 'sometimes|required|integer',
            'dc_subscapular' => 'sometimes|required|integer',
            'dc_suprailiaca' => 'sometimes|required|integer',
            'dc_tricipital' => 'sometimes|required|integer',
            'id_agendamento' => 'sometimes|required|string|max:200',
            'imc' => 'sometimes|required|integer',
            'massa_gorda' => 'sometimes|required|integer',
            'massa_magra' => 'sometimes|required|integer',
            'observaoes' => 'nullable|string|max:200',
            'per_d_antebraco' => 'sometimes|required|integer',
            'per_d_braco' => 'sometimes|required|integer',
            'per_d_coxa' => 'sometimes|required|integer',
            'per_d_panturrilha' => 'sometimes|required|integer',
            'per_e_antebraco' => 'sometimes|required|integer',
            'per_e_braco' => 'sometimes|required|integer',
            'per_e_coxa' => 'sometimes|required|integer',
            'per_e_paturrilha' => 'sometimes|required|integer',
            'per_g_abdomen' => 'sometimes|required|integer',
            'per_g_cintura' => 'sometimes|required|integer',
            'per_g_ombro' => 'sometimes|required|integer',
            'per_g_quadril' => 'sometimes|required|integer',
            'per_g_torax' => 'sometimes|required|integer',
            'peso' => 'sometimes|required|integer',
            'pgc' => 'sometimes|required|integer',
            'rcq' => 'sometimes|required|integer',
            'registro_exec_treino_id' => 'sometimes|string|exists:registro_exec_treinos,id',
            'avaliacao_anterior' => 'nullable|string|max:36',
            'creator' => 'sometimes|string|max:200',
            'slug' => 'sometimes|string|max:200',
        ];
    }
        public function messages(): array
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'integer' => 'O campo :attribute deve ser um número inteiro.',
            'string' => 'O campo :attribute deve ser uma string.',
            'max' => 'O campo :attribute não deve exceder :max caracteres.',
            'date' => 'O campo :attribute deve ser uma data válida.',
            'exists' => 'O valor selecionado para o campo :attribute é inválido.',
        ];
    }
}
