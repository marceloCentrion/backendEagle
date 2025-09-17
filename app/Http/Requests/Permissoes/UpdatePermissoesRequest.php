<?php

namespace App\Http\Requests\Permissoes;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePermissoesRequest extends FormRequest
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
            "criar"=> "sometimes|in:SIM,NAO",
            "editar"=> "sometimes|in:SIM,NAO",
            "excluir"=> "sometimes|in:SIM,NAO",
            "salva"=> "sometimes|in:SIM,NAO",
            "ver"=> "sometimes|in:SIM,NAO",
            "menu"=> "sometimes|in:DASHBOARD,ALUNOS,AVALIACAO FISICA,ACADEMIAS,USUARIOS,PARCEIROS,RELATORIOS,PUBLICIDADE,MINHA CONTA,CONFIGURACOES,SAIR,INDICACOES,AGENDAR",
            "ordem"=> "sometimes|integer",
        ];
    }

    public function messages(): array
    {
        return [
            "criar.in"=> "O campo criar deve ser SIM ou NAO.",
            "editar.in"=> "O campo editar deve ser SIM ou NAO.",
            "excluir.in"=> "O campo excluir deve ser SIM ou NAO.",
            "salva.in"=> "O campo salva deve ser SIM ou NAO.",
            "ver.in"=> "O campo ver deve ser SIM ou NAO.",
            "menu.in"=> "O campo menu deve ser um dos valores permitidos.",
            "ordem.integer"=> "O campo ordem deve ser um número inteiro.",
        ];
    }
}
