<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAlbumsRequest extends FormRequest
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
            "cover"=> "sometimes|string|max:200",
            "cover_img"=> "sometimes|string|max:200",
            "nome_album"=> "sometimes|string|max:200",
            "publicacao_id"=> "sometimes|string|max:200",
            "tinyurl"=> "sometimes|string|max:200",
        ];
    }

    public function messages(): array
    {
        return [
            "cover.max" => "O campo cover não deve exceder 200 caracteres.",

            "cover_img.max" => "O campo cover_img não deve exceder 200 caracteres.",

            "nome_album.max" => "O campo nome_album não deve exceder 200 caracteres.",

            "publicacao_id.max" => "O campo publicacao_id não deve exceder 200 caracteres.",
            "publicacao_id.exists" => "O valor do campo publicacao_id não existe na tabela publicacaos.",

            "tinyurl.max" => "O campo tinyurl não deve exceder 200 caracteres.",
        ];
    }
}
