<?php

namespace App\Http\Requests\Publicidade;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePublicidadeRequest extends FormRequest
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
            'categoria' => 'sometimes|in:ANUNCIO,CUPOM,PRODUTO',
            'categoria_displ'=> 'sometimes|string|max:200',
            'cliques'=> 'sometimes|integer|min:0',
            'compartilhamentos'=> 'sometimes|integer|min:0',
            'descricao' => 'sometimes|string|max:500',
            'dt_fim' => 'sometimes|date|after:dt_inicio',
            'dt_inicio' => 'sometimes|date|after_or_equal:today',
            'imagem' => 'sometimes|string|max:200',
            'link' => 'sometimes|string|max:200',
            'link_app' => 'sometimes|string|max:200',
            'motivo_status' => 'sometimes|string|max:200',
            'parceiro_id' => 'sometimes|string|exists:parceiros,id',
            'status'=> 'sometimes|in:AGUARDANDO APROVACAO,APROVADO,EM RASCUNHO,NAO APROVADO',
            'titulo' => 'sometimes|string|max:200',
            'valor' => 'sometimes|integer|min:0',
            'creator' => 'nullable|string|max:200',
            'slug' => 'nullable|string|max:200',
        ];
    }
public function messages()
{
    return [
        'categoria.in' => 'A categoria deve ser ANUNCIO, CUPOM ou PRODUTO.',

        'categoria_displ.string' => 'O campo categoria display deve ser um texto.',
        'categoria_displ.max' => 'O campo categoria display deve ter no máximo 200 caracteres.',

        'cliques.integer' => 'O número de cliques deve ser um número inteiro.',
        'cliques.min' => 'O número de cliques não pode ser negativo.',

        'compartilhamentos.integer' => 'O número de compartilhamentos deve ser um número inteiro.',
        'compartilhamentos.min' => 'O número de compartilhamentos não pode ser negativo.',

        'descricao.string' => 'A descrição deve ser um texto.',
        'descricao.max' => 'A descrição deve ter no máximo 500 caracteres.',

        'dt_fim.date' => 'A data de fim deve ser uma data válida.',
        'dt_fim.after' => 'A data de fim deve ser posterior à data de início.',

        'dt_inicio.date' => 'A data de início deve ser uma data válida.',
        'dt_inicio.after_or_equal' => 'A data de início deve ser hoje ou posterior.',

        'imagem.string' => 'A imagem deve ser um texto.',
        'imagem.max' => 'A imagem deve ter no máximo 200 caracteres.',

        'link.string' => 'O link deve ser um texto.',
        'link.max' => 'O link deve ter no máximo 200 caracteres.',

        'link_app.string' => 'O link do app deve ser um texto.',
        'link_app.max' => 'O link do app deve ter no máximo 200 caracteres.',

        'motivo_status.string' => 'O motivo do status deve ser um texto.',
        'motivo_status.max' => 'O motivo do status deve ter no máximo 200 caracteres.',

        'parceiro_id.string' => 'O parceiro deve ser um texto.',
        'parceiro_id.exists' => 'O parceiro informado não existe.',

        'status.in' => 'O status deve ser AGUARDANDO APROVACAO, APROVADO, EM RASCUNHO ou NAO APROVADO.',

        'titulo.string' => 'O título deve ser um texto.',
        'titulo.max' => 'O título deve ter no máximo 200 caracteres.',

        'valor.integer' => 'O valor deve ser um número inteiro.',
        'valor.min' => 'O valor não pode ser negativo.',

        'creator.string' => 'O creator deve ser um texto.',
        'creator.max' => 'O creator deve ter no máximo 200 caracteres.',

        'slug.string' => 'O slug deve ser um texto.',
        'slug.max' => 'O slug deve ter no máximo 200 caracteres.',

    ];
}
}
