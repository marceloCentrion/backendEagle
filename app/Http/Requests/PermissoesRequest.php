<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissoesRequest extends FormRequest
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
            "criar"=>"required|in:SIM,NAO",
            "editar"=>"required|in:SIM,NAO",
            "excluir"=>"required|in:SIM,NAO",
            "salva"=>"required|in:SIM,NAO",
            "ver"=>"required|in:SIM,NAO",
            "menu"=>"required|in:DASHBOARD,ALUNOS,AVALIACAO FISICA,ACADEMIAS,USUARIOS,PARCEIROS,RELATORIOS,PUBLICIDADE,MINHA CONTA,CONFIGURACOES,SAIR,INDICACOES,AGENDAR",
            "ordem"=>"required|integer",
        ];
    }
    public function messages(): array
    {
        return [
            'criar.required' => 'O campo criar é obrigatório.',
            'criar.in' => 'O campo criar deve ser SIM ou NAO.',
            'editar.required' => 'O campo editar é obrigatório.',
            'editar.in' => 'O campo editar deve ser SIM ou NAO.',
            'excluir.required' => 'O campo excluir é obrigatório.',
            'excluir.in' => 'O campo excluir deve ser SIM ou NAO.',
            'salva.required' => 'O campo salva é obrigatório.',
            'salva.in' => 'O campo salva deve ser SIM ou NAO.',
            'ver.required' => 'O campo ver é obrigatório.',
            'ver.in' => 'O campo ver deve ser SIM ou NAO.',
            'menu.required' => 'O campo menu é obrigatório.',
            'menu.in' => 'O campo menu deve ser um dos valores permitidos.',
            'ordem.required' => 'O campo ordem é obrigatório.',
            'ordem.integer' => 'O campo ordem deve ser um número inteiro.',
        ];
    }
}
