<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

public function rules(): array
{
       /** @var \Illuminate\Foundation\Http\FormRequest $this */
    $rules = [
        'nome' => request()->isMethod('post') 
            ? 'required|string|max:150' 
            : 'sometimes|string|max:150',

        'sobrenome' => 'sometimes|string|max:150',
        'email'=> 'required|email|max:200|unique:users,email,' . request()->route('user'),

        'cpf_cnpj' => request()->isMethod('post') 
            ? 'required|string|max:14'   
            : 'sometimes|string|max:14',

        'telefone' => 'sometimes|string|size:11', 

        'tipo_usuario' => request()->isMethod('post') 
            ? 'required|in:ADMINISTRADOR,SUPERVISOR,OPERADOR,GESTOR,OPERACIONAL,PERSONAL,USUARIOS DO APP,ALUNO,PARCEIRO' 
            : 'sometimes|in:ADMINISTRADOR,SUPERVISOR,OPERADOR,GESTOR,OPERACIONAL,PERSONAL,USUARIOS DO APP,ALUNO,PARCEIRO',

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

        'parceiro_id' => 'sometimes|nullable|integer|exists:parceiros,id',

        'peso_atual' => 'sometimes|integer',

        'profile' => 'sometimes|string|max:255', 

        'qtd_publicacao' => 'sometimes|integer',

        'rec_not_email' => 'sometimes|in:SIM,NAO',

        'rec_not_pub' => 'sometimes|in:SIM,NAO',

        'rec_yes_no' => 'sometimes|in:SIM,NAO',

        'reg_conselho' => 'sometimes|string|max:50',

        'telefone_mascarado' => 'sometimes|string|max:15', 

        'tipo_perfil_app' => 'sometimes|in:PERFIL ABERTO,APENAS AMIGOS PROXIMOS,PRIVACIDADE TOTAL',

        'estado_id' => 'sometimes|nullable|exists:estados,id',

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
        'nome.required' => 'O nome é obrigatório.',
        'nome.string' => 'O nome deve ser um texto válido.',
        'nome.max' => 'O nome não pode ter mais de 150 caracteres.',

        'sobrenome.string' => 'O sobrenome deve ser um texto válido.',
        'sobrenome.max' => 'O sobrenome não pode ter mais de 150 caracteres.',

        'cpf_cnpj.required' => 'O CPF/CNPJ é obrigatório.',
        'cpf_cnpj.string' => 'O CPF/CNPJ deve ser um texto válido.',
        'cpf_cnpj.size' => 'O CPF/CNPJ deve ter no máximo 14 dígitos.',

        'telefone.string' => 'O telefone deve ser um texto válido.',
        'telefone.size' => 'O telefone deve ter exatamente 11 dígitos (DDD + número).',

        'tipo_usuario.required' => 'O tipo de usuário é obrigatório.',
        'tipo_usuario.in' => 'O tipo de usuário deve ser um dos seguintes: ADMINISTRADOR, SUPERVISOR, OPERADOR, GESTOR, OPERACIONAL, PERSONAL, USUARIOS DO APP, ALUNO ou PARCEIRO.',

        'nivel.in' => 'O nível deve ser BRONZE, PRATA, OURO ou DIAMANTE.',

        'endereco_geografico.string' => 'O endereço geográfico deve ser um texto válido.',
        'endereco_geografico.max' => 'O endereço geográfico não pode ter mais de 100 caracteres.',

        'academia_id.integer' => 'A academia deve ser um identificador numérico válido.',
        'academia_id.exists' => 'A academia selecionada não é válida.',

        'alerta_noticiacao.in' => 'O alerta de notificação deve ser SIM ou NAO.',

        'altura.integer' => 'A altura deve ser um número inteiro válido.',

        'aluno_dt_mudanca.date' => 'A data de mudança deve estar em um formato válido.',

        'aluno_status.in' => 'O status do aluno deve ser ATIVO ou INATIVO.',

        'bairro.string' => 'O bairro deve ser um texto válido.',
        'bairro.max' => 'O bairro não pode ter mais de 150 caracteres.',

        'biografia.string' => 'A biografia deve ser um texto válido.',
        'biografia.max' => 'A biografia não pode ter mais de 500 caracteres.',

        'cargo.string' => 'O cargo deve ser um texto válido.',
        'cargo.max' => 'O cargo não pode ter mais de 150 caracteres.',

        'cep.string' => 'O CEP deve ser um texto válido.',
        'cep.size' => 'O CEP deve ter exatamente 8 dígitos.',

        'cidade_id.integer' => 'A cidade deve ser um identificador numérico válido.',
        'cidade_id.exists' => 'A cidade selecionada não é válida.',

        'codigo_indicacao.string' => 'O código de indicação deve ser um texto válido.',
        'codigo_indicacao.max' => 'O código de indicação não pode ter mais de 50 caracteres.',

        'complemento.string' => 'O complemento deve ser um texto válido.',
        'complemento.max' => 'O complemento não pode ter mais de 150 caracteres.',

        'condicao_fisica.string' => 'A condição física deve ser um texto válido.',
        'condicao_fisica.max' => 'A condição física não pode ter mais de 200 caracteres.',

        'condicao_medica.string' => 'A condição médica deve ser um texto válido.',
        'condicao_medica.max' => 'A condição médica não pode ter mais de 200 caracteres.',

        'doc_identificacao.string' => 'O documento de identificação deve ser um texto válido.',
        'doc_identificacao.max' => 'O documento de identificação não pode ter mais de 20 caracteres.',

        'endereco.string' => 'O endereço deve ser um texto válido.',
        'endereco.max' => 'O endereço não pode ter mais de 200 caracteres.',

        'frequencia_semanal.integer' => 'A frequência semanal deve ser um número inteiro.',

        'genero.in' => 'O gênero deve ser MASCULINO, FEMININO ou OUTROS.',

        'gosto.string' => 'O gosto deve ser um texto válido.',
        'gosto.max' => 'O gosto não pode ter mais de 200 caracteres.',

        'localidade.string' => 'A localidade deve ser um texto válido.',
        'localidade.max' => 'A localidade não pode ter mais de 200 caracteres.',

        'logradouro.string' => 'O logradouro deve ser um texto válido.',
        'logradouro.max' => 'O logradouro não pode ter mais de 200 caracteres.',

        'medicamentos.string' => 'Os medicamentos devem ser um texto válido.',
        'medicamentos.max' => 'Os medicamentos não podem ter mais de 200 caracteres.',

        'n_seguidores.integer' => 'O número de seguidores deve ser um número inteiro válido.',
        'n_seguindo.integer' => 'O número de seguindo deve ser um número inteiro válido.',

        'nacionalidade.string' => 'A nacionalidade deve ser um texto válido.',
        'nacionalidade.max' => 'A nacionalidade não pode ter mais de 100 caracteres.',

        'nome_exibicao_perfil.string' => 'O nome de exibição deve ser um texto válido.',
        'nome_exibicao_perfil.max' => 'O nome de exibição não pode ter mais de 150 caracteres.',

        'objetivos.in' => 'Os objetivos devem ser PERDER PESO, MASSA MAGRA, CONDICIONAMENTO FISICO ou OUTROS.',

        'observacoes.string' => 'As observações devem ser um texto válido.',
        'observacoes.max' => 'As observações não podem ter mais de 200 caracteres.',

        'papel_parede.string' => 'O papel de parede deve ser um texto válido.',
        'papel_parede.max' => 'O papel de parede não pode ter mais de 200 caracteres.',

        'parceiro_id.integer' => 'O parceiro deve ser um identificador numérico válido.',
        'parceiro_id.exists' => 'O parceiro selecionado não é válido.',

        'peso_atual.integer' => 'O peso atual deve ser um número inteiro válido.',

        'profile.string' => 'O profile deve ser um texto válido.',
        'profile.max' => 'O profile não pode ter mais de 255 caracteres.',

        'qtd_publicacao.integer' => 'A quantidade de publicações deve ser um número inteiro válido.',

        'rec_not_email.in' => 'A preferência de receber notificações por e-mail deve ser SIM ou NAO.',
        'rec_not_pub.in' => 'A preferência de receber notificações de publicações deve ser SIM ou NAO.',
        'rec_yes_no.in' => 'A preferência deve ser SIM ou NAO.',

        'reg_conselho.string' => 'O registro do conselho deve ser um texto válido.',
        'reg_conselho.max' => 'O registro do conselho não pode ter mais de 50 caracteres.',

        'telefone_mascarado.string' => 'O telefone mascarado deve ser um texto válido.',
        'telefone_mascarado.max' => 'O telefone mascarado não pode ter mais de 15 caracteres.',

        'tipo_perfil_app.in' => 'O tipo de perfil deve ser PERFIL ABERTO, APENAS AMIGOS PROXIMOS ou PRIVACIDADE TOTAL.',

        'estado_id.integer' => 'O estado deve ser um identificador numérico válido.',
        'estado_id.exists' => 'O estado selecionado não é válido.',

        'estado_txt.string' => 'O estado deve ser um texto válido.',
        'estado_txt.max' => 'O estado não pode ter mais de 100 caracteres.',

        'ult_acesso.date' => 'A data de último acesso deve estar em um formato válido.',

        'verif_cpf_cnpj.in' => 'A verificação de CPF/CNPJ deve ser SIM ou NAO.',
        'verif_reg_conselho.in' => 'A verificação de registro no conselho deve ser SIM ou NAO.',
        'verif_telefone.in' => 'A verificação de telefone deve ser SIM ou NAO.',

        'slug.string' => 'O slug deve ser um texto válido.',
        'slug.max' => 'O slug não pode ter mais de 100 caracteres.',
    ];
}


}
