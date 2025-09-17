<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePerfilAcessosRequest extends FormRequest
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
            "academia_id" => "sometimes|string|exists:academias,id",
            "ativo"=> "sometimes|in:SIM,NAO",
            "perfil"=> "sometimes|string|max:200",
            "salvo"=> "sometimes|in:SIM,NAO",
            "tipo_perfil"=> "sometimes|in:ACESSO TOTAL,PERSONALIZADO",
            "tipo_usuario"=> "sometimes|in:ADMINISTRADOR,SUPERVISO,OPERADOR,GESTOR,OPERACIONAL,PERSONAL,USUARIO DO APP,ALUNO,PARCEIRO",
            "tipo_usuario_display"=> "sometimes|string|max:200",
            "creator"=> "nullable|string|max:200",
            "slug"=> "nullable|string|max:200",
        ];
    }
    public function messages(): array
    {
        return [
            "academia_id.string" => "O campo academia_id deve ser uma string.",
            "academia_id.exists" => "O valor do campo academia_id não existe na tabela academias.",
            "ativo.in" => "O campo ativo deve ser SIM ou NAO.",
            "perfil.string" => "O campo perfil deve ser uma string.",
            "perfil.max" => "O campo perfil não deve exceder 200 caracteres.",
            "salvo.in" => "O campo salvo deve ser SIM ou NAO.",
            "tipo_perfil.in" => "O campo tipo_perfil deve ser ACESSO TOTAL ou PERSONALIZADO.",
            "tipo_usuario.in" => "O campo tipo_usuario deve ser um dos seguintes valores: ADMINISTRADOR, SUPERVISO, OPERADOR, GESTOR, OPERACIONAL, PERSONAL, USUARIO DO APP, ALUNO, PARCEIRO.",
            "tipo_usuario_display.string" => "O campo tipo_usuario_display deve ser uma string.",
            "tipo_usuario_display.max" => "O campo tipo_usuario_display não deve exceder 200 caracteres.",
        ];
    }
}
