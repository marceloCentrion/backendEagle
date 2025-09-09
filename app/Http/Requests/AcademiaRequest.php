<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademiaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "cep" => "nullable|string|max:200",
            "cidade_id" => "nullable|string", // sem exists por enquanto
            "cnpj" => "nullable|string|max:200",
            "descricao" => "nullable|string|max:200",
            "email" => "nullable|string|max:200",
            "email_responsavel" => "nullable|string|max:200",
            "endereco" => "nullable|string|max:200",
            "horario" => "nullable|string|max:200",
            "info_adicionais" => "nullable|string|max:200",
            "localidade" => "nullable|string|max:200",
            "logo" => "nullable|string|max:200",
            "nome" => "required|string|max:200",
            "receber_atualizacoes_semanais" => "nullable|in:SIM,NAO",
            "responsavel" => "nullable|string|max:200",
            "site" => "nullable|string|max:200",
            "telefone" => "nullable|string|max:200",
            "telefone_mascaradao" => "nullable|string|max:200",
            "geo_location" => "nullable|string|max:200",
            "creator" => "nullable|string|max:200",
            "slug" => "nullable|string|max:200",
        ];
    }
}
