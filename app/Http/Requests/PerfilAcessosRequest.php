<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerfilAcessosRequest extends FormRequest
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
            "academia_id" => "required|string|exists:academias,id",
            "ativo"=> "required|in:SIM,NAO",
            "perfil"=> "required|string|max:200",
            "salvo"=> "required|in:SIM,NAO",
            "tipo_perfil"=> "required|in:ACESSO TOTAL,PERSONALIZADO",
            "tipo_usuario"=> "required|in:ADMINISTRADOR,SUPERVISO,OPERADOR,GESTOR,OPERACIONAL,PERSONAL,USUARIO DO APP,ALUNO,PARCEIRO",
            "tipo_usuario_display"=> "required|string|max:200",
            "creator"=> "nullable|string|max:200",
            "slug"=> "nullable|string|max:200",
        ];
    }
    public function messages(): array
    {
        return [
            "academia_id.required" => "O campo academia_id é obrigatório.",
            "academia_id.string" => "O campo academia_id deve ser uma string.",
            "academia_id.exists" => "O valor do campo academia_id não existe na tabela academias.",
            "ativo.required" => "O campo ativo é obrigatório.",
            "ativo.in" => "O campo ativo deve ser SIM ou NAO.",
            "perfil.required" => "O campo perfil é obrigatório.",
            "perfil.string" => "O campo perfil deve ser uma string.",
            "perfil.max" => "O campo perfil não deve exceder 200 caracteres.",
            "salvo.required" => "O campo salvo é obrigatório.",
            "salvo.in" => "O campo salvo deve ser SIM ou NAO.",
            "tipo_perfil.required" => "O campo tipo_perfil é obrigatório.",
            "tipo_perfil.in" => "O campo tipo_perfil deve ser ACESSO TOTAL ou PERSONALIZADO.",
            "tipo_usuario.required" => "O campo tipo_usuario é obrigatório.",
            "tipo_usuario.in" => "O campo tipo_usuario deve ser um dos seguintes valores: ADMINISTRADOR, SUPERVISO, OPERADOR, GESTOR, OPERACIONAL, PERSONAL, USUARIO DO APP, ALUNO, PARCEIRO.",
            "tipo_usuario_display.required" => "O campo tipo_usuario_display é obrigatório.",
            "tipo_usuario_display.string" => "O campo tipo_usuario_display deve ser uma string.",
            "tipo_usuario_display.max" => "O campo tipo_usuario_display não deve exceder 200 caracteres.",
        ];
    }
}
