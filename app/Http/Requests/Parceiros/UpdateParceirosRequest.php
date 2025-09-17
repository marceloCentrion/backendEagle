<?php

namespace App\Http\Requests\Parceiros;

use Illuminate\Foundation\Http\FormRequest;


class UpdateParceirosRequest extends FormRequest
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
protected function rules(): array
{
    return [
        "cidade_id" => "sometimes|required|string|max:200|exists:cidades,id",
        "cnpj" => "sometimes|required|string|max:14",
        "descricao" => "nullable|string|max:500",
        "email" => "sometimes|required|string|email|max:200",
        "email_responsavel" => "sometimes|string|email|max:200",
        "fim_periodo" => "sometimes|date",
        "inicio_periodo" => "sometimes|date",
        "logo" => "sometimes|string|max:200",
        "nome" => "sometimes|string|max:200",
        "nome_responsavel" => "sometimes|string|max:200",
        "segmento" => "sometimes|in:SUPLEMENTOS ALIMENTARES,MODA FITNESS,NUTRICIONISTA OU CONSULTOR DE SAUDE,ALIMENTACAO SAUDAVEL",
        "site" => "sometimes|string|max:200",
        "telefone" => "sometimes|string|max:200",
        "estado_id" => "sometimes|string|max:200|exists:estados,id",
        "creator" => "nullable|string|max:200",
        "slug" => "nullable|string|max:200",
    ];
}

public function messages(): array
{
    return [
        "cidade_id.required" => "O campo cidade é obrigatório.",
        "cidade_id.string" => "O campo cidade deve ser um texto válido.",
        "cidade_id.max" => "O campo cidade deve ter no máximo 200 caracteres.",
        "cidade_id.exists" => "A cidade informada não existe na base de dados.",

        "cnpj.required" => "O campo CNPJ é obrigatório.",
        "cnpj.max" => "O campo CNPJ é inválido.",

        "descricao.string" => "A descrição deve ser um texto válido.",
        "descricao.max" => "A descrição deve ter no máximo 500 caracteres.",

        "email.required" => "O campo e-mail é obrigatório.",
        "email.max" => "O campo e-mail deve ter no máximo 200 caracteres.",
        "email.email"=> "Email inválido ou incorreto",

        "email_responsavel.required" => "O campo e-mail do responsável é obrigatório.",
        "email_responsavel.max" => "O campo e-mail do responsável deve ter no máximo 200 caracteres.",
        "email_responsavel.email"=> "Email inválido ou incorreto",

        "fim_periodo.required" => "O campo fim do período é obrigatório.",
        "fim_periodo.date" => "O campo fim do período deve ser uma data válida.",

        "inicio_periodo.required" => "O campo início do período é obrigatório.",
        "inicio_periodo.date" => "O campo início do período deve ser uma data válida.",

        "logo.required" => "O campo logo é obrigatório.",
        "logo.max" => "O campo logo deve ter no máximo 200 caracteres.",

        "nome.required" => "O campo nome é obrigatório.",
        "nome.max" => "O campo nome deve ter no máximo 200 caracteres.",

        "nome_responsavel.required" => "O campo nome do responsável é obrigatório.",
        "nome_responsavel.max" => "O campo nome do responsável deve ter no máximo 200 caracteres.",

        "segmento.required" => "O campo segmento é obrigatório.",
        "segmento.in" => "O segmento deve ser um dos seguintes valores: SUPLEMENTOS ALIMENTARES, MODA FITNESS, NUTRICIONISTA OU CONSULTOR DE SAUDE, ALIMENTACAO SAUDAVEL.",

        "site.required" => "O campo site é obrigatório.",
        "site.max" => "O campo site deve ter no máximo 200 caracteres.",

        "telefone.required" => "O campo telefone é obrigatório.",
        "telefone.max" => "O campo telefone deve ter no máximo 200 caracteres.",

        "estado_id.required" => "O campo estado é obrigatório.",
        "estado_id.max" => "O campo estado deve ter no máximo 200 caracteres.",
        "estado_id.exists" => "O estado informado não existe na base de dados.",

        "creator.max" => "O campo creator deve ter no máximo 200 caracteres.",

        "slug.max" => "O campo slug deve ter no máximo 200 caracteres.",
    ];
}

}
