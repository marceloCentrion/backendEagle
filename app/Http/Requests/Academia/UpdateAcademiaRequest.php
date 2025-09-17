<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAcademiaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "cep" => "sometimes|string|size:8",
            "cidade_id" => "sometimes|string|exists:cidades,id",
            "cnpj" => "sometimes|string|size:14",
            "descricao" => "sometimes|string|max:200",
            "email" => "sometimes|string|max:200",
            "email_responsavel" => "sometimes|string|max:200",
            "endereco" => "sometimes|string|max:200",
            "horario" => "sometimes|string|max:200",
            "info_adicionais" => "sometimes|string|max:200",
            "localidade" => "sometimes|string|max:200",
            "logo" => "sometimes|string|max:200",
            "nome" => "sometimes|string|max:200",
            "receber_atualizacoes_semanais" => "sometimes|in:SIM,NAO",
            "responsavel" => "sometimes|string|max:200",
            "site" => "sometimes|string|max:200",
            "telefone" => "sometimes|string|size:11",
            "telefone_mascaradao" => "sometimes|string|max:15",
            "geo_location" => "sometimes|string|max:200",
            "creator" => "sometimes|string|max:200",
            "slug" => "sometimes|string|max:200",
        ];
    }

public function messages()
{
    return [
        'cep.string' => 'O CEP deve ser um texto válido.',
        'cep.size' => 'O CEP deve ter exatamente 8 dígitos.',

        'cidade_id.integer' => 'A cidade deve ser um identificador numérico válido.',
        'cidade_id.exists' => 'A cidade selecionada não é válida.',

        'cnpj.string' => 'O CNPJ deve ser um texto válido.',
        'cnpj.size' => 'O CNPJ deve ter exatamente 14 dígitos.',

        'descricao.string' => 'A descrição deve ser um texto válido.',
        'descricao.max' => 'A descrição não pode ter mais de 200 caracteres.',

        'email.string' => 'O e-mail deve ser um texto válido.',
        'email.email' => 'O e-mail deve ser um endereço válido.',
        'email.max' => 'O e-mail não pode ter mais de 200 caracteres.',

        'email_responsavel.string' => 'O e-mail do responsável deve ser um texto válido.',
        'email_responsavel.email' => 'O e-mail do responsável deve ser um endereço válido.',
        'email_responsavel.max' => 'O e-mail do responsável não pode ter mais de 200 caracteres.',

        'endereco.string' => 'O endereço deve ser um texto válido.',
        'endereco.max' => 'O endereço não pode ter mais de 200 caracteres.',

        'horario.string' => 'O horário deve ser um texto válido.',
        'horario.max' => 'O horário não pode ter mais de 100 caracteres.',

        'info_adicionais.string' => 'As informações adicionais devem ser um texto válido.',
        'info_adicionais.max' => 'As informações adicionais não podem ter mais de 200 caracteres.',

        'localidade.string' => 'A localidade deve ser um texto válido.',
        'localidade.max' => 'A localidade não pode ter mais de 200 caracteres.',

        'logo.string' => 'O logo deve ser um texto válido.',
        'logo.max' => 'O logo não pode ter mais de 255 caracteres.',

        'nome.string' => 'O nome deve ser um texto válido.',
        'nome.max' => 'O nome não pode ter mais de 150 caracteres.',

        'receber_atualizacoes_semanais.in' => 'O campo "Receber atualizações semanais" deve ser SIM ou NAO.',

        'responsavel.string' => 'O responsável deve ser um texto válido.',
        'responsavel.max' => 'O responsável não pode ter mais de 150 caracteres.',

        'site.string' => 'O site deve ser um texto válido.',
        'site.url' => 'O site deve ser uma URL válida.',
        'site.max' => 'O site não pode ter mais de 255 caracteres.',

        'telefone.string' => 'O telefone deve ser um texto válido.',
        'telefone.size' => 'O telefone deve ter exatamente 11 dígitos (DDD + número).',

        'telefone_mascaradao.string' => 'O telefone mascarado deve ser um texto válido.',
        'telefone_mascaradao.max' => 'O telefone mascarado não pode ter mais de 15 caracteres.',

        'geo_location.string' => 'A localização geográfica deve ser um texto válido.',
        'geo_location.max' => 'A localização geográfica não pode ter mais de 100 caracteres.',

        'creator.string' => 'O criador deve ser um texto válido.',
        'creator.max' => 'O criador não pode ter mais de 100 caracteres.',

        'slug.string' => 'O slug deve ser um texto válido.',
        'slug.max' => 'O slug não pode ter mais de 100 caracteres.',
    ];
}

}
