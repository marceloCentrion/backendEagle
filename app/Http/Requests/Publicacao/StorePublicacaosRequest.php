<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePublicacaosRequest extends FormRequest
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
                'arquivada' => 'required|in:SIM,NAO',
                'excluida' => 'required|in:SIM,NAO',
                'imagem' => 'nullable|string|max:200',
                'registro_exec_treino_id' => 'nullable|string|exists:registro_exec_treinos,id',
                'tag_publicacaos_id' => 'nullable|string|exists:tag_publicacaos,id',
                'texto' => 'nullable|string|max:500',
                'tinyurl' => 'nullable|string|max:200',
                'uid_48h' => 'nullable|string|max:200',
                'user_mencionado' => 'nullable|string|exists:users,id',
                'video' => 'nullable|string|max:200',
                'video_file' => 'nullable|string|max:200',
                'creator' => 'nullable|string|max:200',
                'slug' => 'nullable|string|max:200',
                ];
    }

    public function messages(): array
    {
        return [
            'arquivada.required' => 'O campo arquivada é obrigatório.',
            'arquivada.in' => 'O campo arquivada deve ser SIM ou NAO.',

            'excluida.required' => 'O campo excluída é obrigatório.',
            'excluida.in' => 'O campo excluída deve ser SIM ou NAO.',

            'imagem.max' => 'A imagem deve ter no máximo 200 caracteres.',

            'registro_exec_treino_id.exists' => 'O registro_exec_treino informado não existe.',

            'tag_publicacaos_id.exists' => 'A tag de publicação informada não existe.',

            'texto.max' => 'O campo texto deve ter no máximo 500 caracteres.',

            'tinyurl.max' => 'O campo tinyurl deve ter no máximo 200 caracteres.',

            'uid_48h.max' => 'O campo uid_48h deve ter no máximo 200 caracteres.',

            'user_mencionado.exists' => 'O usuário mencionado não existe.',

            'video.max' => 'O campo vídeo deve ter no máximo 200 caracteres.',

            'video_file.max' => 'O campo vídeo_file deve ter no máximo 200 caracteres.',

            'creator.max' => 'O campo creator deve ter no máximo 200 caracteres.',

            'slug.max' => 'O campo slug deve ter no máximo 200 caracteres.',
        ];
    }
}
