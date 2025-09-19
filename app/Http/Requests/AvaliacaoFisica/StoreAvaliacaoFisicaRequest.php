<?php

namespace App\Http\Requests\AvaliacaoFisica;

use Illuminate\Foundation\Http\FormRequest;

class StoreAvaliacaoFisicaRequest extends FormRequest
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
            'altura' => 'required|integer',
            'aluno_id' => 'required|string|exists:users,id',
            'nome' => 'required|string|max:200',
            'data_avaliacao' => 'required|date',
            'data_proxima_avaliacao' => 'required|date',
            'dc_abdominal' => 'required|integer',
            'dc_axilar_media' => 'required|integer',
            'dc_coxa' => 'required|integer',
            'dc_panturrilha' => 'required|integer',
            'dc_peitoral' => 'required|integer',
            'dc_subscapular' => 'required|integer',
            'dc_suprailiaca' => 'required|integer',
            'dc_tricipital' => 'required|integer',
            'id_agendamento' => 'required|string|max:200',
            'imc' => 'required|integer',
            'massa_gorda' => 'required|integer',
            'massa_magra' => 'required|integer',
            'observaoes' => 'nullable|string|max:200',
            'per_d_antebraco' => 'required|integer',
            'per_d_braco' => 'required|integer',
            'per_d_coxa' => 'required|integer',
            'per_d_panturrilha' => 'required|integer',
            'per_e_antebraco' => 'required|integer',
            'per_e_braco' => 'required|integer',
            'per_e_coxa' => 'required|integer',
            'per_e_paturrilha' => 'required|integer',
            'per_g_abdomen' => 'required|integer',
            'per_g_cintura' => 'required|integer',
            'per_g_ombro' => 'required|integer',
            'per_g_quadril' => 'required|integer',
            'per_g_torax' => 'required|integer',
            'peso' => 'required|integer',
            'pgc' => 'required|integer',
            'rcq' => 'required|integer',
            'registro_exec_treino_id' => 'nullable|string|exists:registro_exec_treinos,id',
            'avaliacao_anterior' => 'nullable|string|max:36',
            'creator' => 'nullable|string|max:200',
            'slug' => 'nullable|string|max:200',
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
