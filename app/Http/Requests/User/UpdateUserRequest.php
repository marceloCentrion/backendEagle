<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

public function rules(): array
{
      /** @var \Illuminate\Http\Request $this */
    $rules = [
        'nome' => 'sometimes|string|max:150' ,
        'sobrenome' => 'sometimes|string|max:150',
        'email'=> 'sometimes|email|max:200|unique:users,email,' . request()->route('user'),
        'cpf_cnpj' => 'sometimes|string|max:14',
        'telefone' => 'sometimes|string|size:11', 
        'tipo_usuario' => 'sometimes|in:ADMINISTRADOR,SUPERVISOR,OPERADOR,GESTOR,OPERACIONAL,PERSONAL,USUARIOS DO APP,ALUNO,PARCEIRO',
        'nivel' => 'sometimes|in:BRONZE,PRATA,OURO,DIAMANTE',
        'endereco_geografico' => 'sometimes|string|max:100',
        'academia_id' => 'nullable|sometimes|string|exists:academias,id',
        'alerta_noticiacao' => 'sometimes|in:SIM,NAO',
        'altura' => 'sometimes|integer',
        'aluno_dt_mudanca' => 'sometimes|date',
        'aluno_status' => 'sometimes|in:ATIVO,INATIVO',
        'bairro' => 'sometimes|string|max:150',
        'biografia' => 'sometimes|string|max:500',
        'cargo' => 'sometimes|string|max:150',
        'cep' => 'sometimes|string|size:8',
        'cidade_id' => 'sometimes|nullable|string|exists:cidades,id',
        'codigo_indicacao' => 'sometimes|string|max:50',
        'complemento' => 'sometimes|string|max:150',
        'condicao_fisica' => 'sometimes|string|max:200',
        'condicao_medica' => 'sometimes|string|max:200',
        'doc_identificacao' => 'sometimes|string|max:20',
        'endereco' => 'sometimes|string|max:200',
        'frequencia_semanal' => 'sometimes|integer',
        'genero' => 'sometimes|in:MASCULINO,FEMININO,OUTROS',
        'gosto' => 'sometimes|string|max:200',
        'localidade' => 'sometimes|string|max:200',
        'logradouro' => 'sometimes|string|max:200',
        'medicamentos' => 'sometimes|string|max:200',
        'n_seguidores' => 'sometimes|integer',
        'n_seguindo' => 'sometimes|integer',
        'nacionalidade' => 'sometimes|string|max:100',
        'nome_exibicao_perfil' => 'sometimes|string|max:150',
        'objetivos' => 'sometimes|in:PERDER PESO,MASSA MAGRA,CONDICIONAMENTO FISICO,OUTROS',
        'observacoes' => 'sometimes|string|max:200',
        'papel_parede' => 'sometimes|string|max:200',
        'parceiro_id' => 'sometimes|nullable|string|exists:parceiros,id',
        'peso_atual' => 'sometimes|integer',
        'profile' => 'sometimes|string|max:255', 
        'qtd_publicacao' => 'sometimes|integer',
        'rec_not_email' => 'sometimes|in:SIM,NAO',
        'rec_not_pub' => 'sometimes|in:SIM,NAO',
        'rec_yes_no' => 'sometimes|in:SIM,NAO',
        'reg_conselho' => 'sometimes|string|max:50',
        'telefone_mascarado' => 'sometimes|string|max:15', 
        'tipo_perfil_app' => 'sometimes|in:PERFIL ABERTO,APENAS AMIGOS PROXIMOS,PRIVACIDADE TOTAL',
        'estado_txt' => 'sometimes|string|max:100',
        'ult_acesso' => 'sometimes|date',
        'verif_cpf_cnpj' => 'sometimes|in:SIM,NAO',
        'verif_reg_conselho' => 'sometimes|in:SIM,NAO',
        'verif_telefone' => 'sometimes|in:SIM,NAO',
        'slug' => 'sometimes|string|max:100',
    ];

    return $rules;
}

public function messages()
{
    return [
        'nome.string' => 'O nome deve ser um texto.',
        'nome.max' => 'O nome deve ter no máximo 150 caracteres.',

        'sobrenome.string' => 'O sobrenome deve ser um texto.',
        'sobrenome.max' => 'O sobrenome deve ter no máximo 150 caracteres.',

        'email.email' => 'O e-mail deve ser válido.',
        'email.max' => 'O e-mail deve ter no máximo 200 caracteres.',
        'email.unique' => 'Este e-mail já está em uso.',

        'cpf_cnpj.string' => 'O CPF/CNPJ deve ser um texto.',
        'cpf_cnpj.max' => 'O CPF/CNPJ deve ter no máximo 14 caracteres.',

        'telefone.string' => 'O telefone deve ser um texto.',
        'telefone.size' => 'O telefone deve ter exatamente 11 dígitos.',

        'tipo_usuario.in' => 'O tipo de usuário informado é inválido.',

        'nivel.in' => 'O nível informado é inválido.',

        'endereco_geografico.string' => 'O endereço geográfico deve ser um texto.',
        'endereco_geografico.max' => 'O endereço geográfico deve ter no máximo 100 caracteres.',

        'academia_id.exists' => 'A academia informada não existe.',

        'alerta_noticiacao.in' => 'O alerta de notificação deve ser SIM ou NAO.',

        'altura.integer' => 'A altura deve ser um número inteiro.',

        'aluno_dt_mudanca.date' => 'A data de mudança deve ser válida.',

        'aluno_status.in' => 'O status deve ser ATIVO ou INATIVO.',

        'bairro.string' => 'O bairro deve ser um texto.',
        'bairro.max' => 'O bairro deve ter no máximo 150 caracteres.',

        'biografia.string' => 'A biografia deve ser um texto.',
        'biografia.max' => 'A biografia deve ter no máximo 500 caracteres.',

        'cargo.string' => 'O cargo deve ser um texto.',
        'cargo.max' => 'O cargo deve ter no máximo 150 caracteres.',

        'cep.string' => 'O CEP deve ser um texto.',
        'cep.size' => 'O CEP deve ter exatamente 8 caracteres.',

        'cidade_id.exists' => 'A cidade informada não existe.',

        'codigo_indicacao.string' => 'O código de indicação deve ser um texto.',
        'codigo_indicacao.max' => 'O código de indicação deve ter no máximo 50 caracteres.',

        'complemento.string' => 'O complemento deve ser um texto.',
        'complemento.max' => 'O complemento deve ter no máximo 150 caracteres.',

        'condicao_fisica.string' => 'A condição física deve ser um texto.',
        'condicao_fisica.max' => 'A condição física deve ter no máximo 200 caracteres.',

        'condicao_medica.string' => 'A condição médica deve ser um texto.',
        'condicao_medica.max' => 'A condição médica deve ter no máximo 200 caracteres.',

        'doc_identificacao.string' => 'O documento de identificação deve ser um texto.',
        'doc_identificacao.max' => 'O documento de identificação deve ter no máximo 20 caracteres.',

        'endereco.string' => 'O endereço deve ser um texto.',
        'endereco.max' => 'O endereço deve ter no máximo 200 caracteres.',

        'frequencia_semanal.integer' => 'A frequência semanal deve ser um número inteiro.',

        'genero.in' => 'O gênero informado é inválido.',

        'gosto.string' => 'O gosto deve ser um texto.',
        'gosto.max' => 'O gosto deve ter no máximo 200 caracteres.',

        'localidade.string' => 'A localidade deve ser um texto.',
        'localidade.max' => 'A localidade deve ter no máximo 200 caracteres.',

        'logradouro.string' => 'O logradouro deve ser um texto.',
        'logradouro.max' => 'O logradouro deve ter no máximo 200 caracteres.',

        'medicamentos.string' => 'Os medicamentos devem ser um texto.',
        'medicamentos.max' => 'Os medicamentos devem ter no máximo 200 caracteres.',

        'n_seguidores.integer' => 'O número de seguidores deve ser um número inteiro.',

        'n_seguindo.integer' => 'O número de seguindo deve ser um número inteiro.',

        'nacionalidade.string' => 'A nacionalidade deve ser um texto.',
        'nacionalidade.max' => 'A nacionalidade deve ter no máximo 100 caracteres.',

        'nome_exibicao_perfil.string' => 'O nome de exibição do perfil deve ser um texto.',
        'nome_exibicao_perfil.max' => 'O nome de exibição do perfil deve ter no máximo 150 caracteres.',

        'objetivos.in' => 'O objetivo informado é inválido.',

        'observacoes.string' => 'As observações devem ser um texto.',
        'observacoes.max' => 'As observações devem ter no máximo 200 caracteres.',

        'papel_parede.string' => 'O papel de parede deve ser um texto.',
        'papel_parede.max' => 'O papel de parede deve ter no máximo 200 caracteres.',

        'parceiro_id.exists' => 'O parceiro informado não existe.',

        'peso_atual.integer' => 'O peso atual deve ser um número inteiro.',

        'profile.string' => 'O profile deve ser um texto.',
        'profile.max' => 'O profile deve ter no máximo 255 caracteres.',

        'qtd_publicacao.integer' => 'A quantidade de publicações deve ser um número inteiro.',

        'rec_not_email.in' => 'A notificação por e-mail deve ser SIM ou NAO.',

        'rec_not_pub.in' => 'A notificação de publicações deve ser SIM ou NAO.',

        'rec_yes_no.in' => 'A configuração deve ser SIM ou NAO.',

        'reg_conselho.string' => 'O registro no conselho deve ser um texto.',
        'reg_conselho.max' => 'O registro no conselho deve ter no máximo 50 caracteres.',

        'telefone_mascarado.string' => 'O telefone mascarado deve ser um texto.',
        'telefone_mascarado.max' => 'O telefone mascarado deve ter no máximo 15 caracteres.',

        'tipo_perfil_app.in' => 'O tipo de perfil informado é inválido.',

        'estado_txt.string' => 'O estado deve ser um texto.',
        'estado_txt.max' => 'O estado deve ter no máximo 100 caracteres.',

        'ult_acesso.date' => 'A data do último acesso deve ser válida.',

        'verif_cpf_cnpj.in' => 'A verificação de CPF/CNPJ deve ser SIM ou NAO.',

        'verif_reg_conselho.in' => 'A verificação do registro deve ser SIM ou NAO.',

        'verif_telefone.in' => 'A verificação do telefone deve ser SIM ou NAO.',

        'slug.string' => 'O slug deve ser um texto.',
        'slug.max' => 'O slug deve ter no máximo 100 caracteres.',
    ];
}



}
