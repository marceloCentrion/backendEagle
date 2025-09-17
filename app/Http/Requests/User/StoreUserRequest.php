<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

public function rules(): array
{
      /** @var \Illuminate\Http\Request $this */
    $rules = [
        'nome' => 'required|string|max:150' ,
        'sobrenome' => 'required|string|max:150',
        'email'=> 'required|email|max:200|unique:users,email,' . request()->route('user'),
        'cpf_cnpj' => 'required|string|max:14',
        'telefone' => 'required|string|size:11', 
        'tipo_usuario' => 'required|in:ADMINISTRADOR,SUPERVISOR,OPERADOR,GESTOR,OPERACIONAL,PERSONAL,USUARIOS DO APP,ALUNO,PARCEIRO',
        'nivel' => 'required|in:BRONZE,PRATA,OURO,DIAMANTE',
        'endereco_geografico' => 'required|string|max:100',
        'academia_id' => 'nullable|required|string|exists:academias,id',
        'alerta_noticiacao' => 'required|in:SIM,NAO',
        'altura' => 'required|integer',
        'aluno_dt_mudanca' => 'required|date',
        'aluno_status' => 'required|in:ATIVO,INATIVO',
        'bairro' => 'required|string|max:150',
        'biografia' => 'required|string|max:500',
        'cargo' => 'required|string|max:150',
        'cep' => 'required|string|size:8',
        'cidade_id' => 'required|nullable|string|exists:cidades,id',
        'codigo_indicacao' => 'required|string|max:50',
        'complemento' => 'required|string|max:150',
        'condicao_fisica' => 'required|string|max:200',
        'condicao_medica' => 'required|string|max:200',
        'doc_identificacao' => 'required|string|max:20',
        'endereco' => 'required|string|max:200',
        'frequencia_semanal' => 'required|integer',
        'genero' => 'required|in:MASCULINO,FEMININO,OUTROS',
        'gosto' => 'required|string|max:200',
        'localidade' => 'required|string|max:200',
        'logradouro' => 'required|string|max:200',
        'medicamentos' => 'required|string|max:200',
        'n_seguidores' => 'required|integer',
        'n_seguindo' => 'required|integer',
        'nacionalidade' => 'required|string|max:100',
        'nome_exibicao_perfil' => 'required|string|max:150',
        'objetivos' => 'required|in:PERDER PESO,MASSA MAGRA,CONDICIONAMENTO FISICO,OUTROS',
        'observacoes' => 'required|string|max:200',
        'papel_parede' => 'required|string|max:200',
        'parceiro_id' => 'required|nullable|string|exists:parceiros,id',
        'peso_atual' => 'required|integer',
        'profile' => 'required|string|max:255', 
        'qtd_publicacao' => 'required|integer',
        'rec_not_email' => 'required|in:SIM,NAO',
        'rec_not_pub' => 'required|in:SIM,NAO',
        'rec_yes_no' => 'required|in:SIM,NAO',
        'reg_conselho' => 'required|string|max:50',
        'telefone_mascarado' => 'required|string|max:15', 
        'tipo_perfil_app' => 'required|in:PERFIL ABERTO,APENAS AMIGOS PROXIMOS,PRIVACIDADE TOTAL',
        'estado_txt' => 'required|string|max:100',
        'ult_acesso' => 'required|date',
        'verif_cpf_cnpj' => 'required|in:SIM,NAO',
        'verif_reg_conselho' => 'required|in:SIM,NAO',
        'verif_telefone' => 'required|in:SIM,NAO',
        'slug' => 'required|string|max:100',
    ];

    return $rules;
}

public function messages()
{
    return [
        'nome.required' => 'O campo nome é obrigatório.',
        'nome.string' => 'O nome deve ser um texto.',
        'nome.max' => 'O nome deve ter no máximo 150 caracteres.',

        'sobrenome.required' => 'O campo sobrenome é obrigatório.',
        'sobrenome.string' => 'O sobrenome deve ser um texto.',
        'sobrenome.max' => 'O sobrenome deve ter no máximo 150 caracteres.',

        'email.required' => 'O campo e-mail é obrigatório.',
        'email.email' => 'O e-mail deve ser válido.',
        'email.max' => 'O e-mail deve ter no máximo 200 caracteres.',
        'email.unique' => 'Este e-mail já está em uso.',

        'cpf_cnpj.required' => 'O CPF/CNPJ é obrigatório.',
        'cpf_cnpj.string' => 'O CPF/CNPJ deve ser um texto.',
        'cpf_cnpj.max' => 'O CPF/CNPJ deve ter no máximo 14 caracteres.',

        'telefone.required' => 'O telefone é obrigatório.',
        'telefone.string' => 'O telefone deve ser um texto.',
        'telefone.size' => 'O telefone deve ter exatamente 11 dígitos.',

        'tipo_usuario.required' => 'O tipo de usuário é obrigatório.',
        'tipo_usuario.in' => 'O tipo de usuário informado é inválido.',

        'nivel.required' => 'O nível é obrigatório.',
        'nivel.in' => 'O nível informado é inválido.',

        'endereco_geografico.required' => 'O endereço geográfico é obrigatório.',
        'endereco_geografico.string' => 'O endereço geográfico deve ser um texto.',
        'endereco_geografico.max' => 'O endereço geográfico deve ter no máximo 100 caracteres.',

        'academia_id.required' => 'A academia é obrigatória.',
        'academia_id.exists' => 'A academia informada não existe.',

        'alerta_noticiacao.required' => 'O alerta de notificação é obrigatório.',
        'alerta_noticiacao.in' => 'O alerta de notificação deve ser SIM ou NAO.',

        'altura.required' => 'A altura é obrigatória.',
        'altura.integer' => 'A altura deve ser um número inteiro.',

        'aluno_dt_mudanca.required' => 'A data de mudança é obrigatória.',
        'aluno_dt_mudanca.date' => 'A data de mudança deve ser válida.',

        'aluno_status.required' => 'O status do aluno é obrigatório.',
        'aluno_status.in' => 'O status deve ser ATIVO ou INATIVO.',

        'bairro.required' => 'O bairro é obrigatório.',
        'bairro.string' => 'O bairro deve ser um texto.',
        'bairro.max' => 'O bairro deve ter no máximo 150 caracteres.',

        'biografia.required' => 'A biografia é obrigatória.',
        'biografia.string' => 'A biografia deve ser um texto.',
        'biografia.max' => 'A biografia deve ter no máximo 500 caracteres.',

        'cargo.required' => 'O cargo é obrigatório.',
        'cargo.string' => 'O cargo deve ser um texto.',
        'cargo.max' => 'O cargo deve ter no máximo 150 caracteres.',

        'cep.required' => 'O CEP é obrigatório.',
        'cep.string' => 'O CEP deve ser um texto.',
        'cep.size' => 'O CEP deve ter exatamente 8 caracteres.',

        'cidade_id.required' => 'A cidade é obrigatória.',
        'cidade_id.exists' => 'A cidade informada não existe.',

        'codigo_indicacao.required' => 'O código de indicação é obrigatório.',
        'codigo_indicacao.string' => 'O código de indicação deve ser um texto.',
        'codigo_indicacao.max' => 'O código de indicação deve ter no máximo 50 caracteres.',

        'complemento.required' => 'O complemento é obrigatório.',
        'complemento.string' => 'O complemento deve ser um texto.',
        'complemento.max' => 'O complemento deve ter no máximo 150 caracteres.',

        'condicao_fisica.required' => 'A condição física é obrigatória.',
        'condicao_fisica.string' => 'A condição física deve ser um texto.',
        'condicao_fisica.max' => 'A condição física deve ter no máximo 200 caracteres.',

        'condicao_medica.required' => 'A condição médica é obrigatória.',
        'condicao_medica.string' => 'A condição médica deve ser um texto.',
        'condicao_medica.max' => 'A condição médica deve ter no máximo 200 caracteres.',

        'doc_identificacao.required' => 'O documento de identificação é obrigatório.',
        'doc_identificacao.string' => 'O documento de identificação deve ser um texto.',
        'doc_identificacao.max' => 'O documento de identificação deve ter no máximo 20 caracteres.',

        'endereco.required' => 'O endereço é obrigatório.',
        'endereco.string' => 'O endereço deve ser um texto.',
        'endereco.max' => 'O endereço deve ter no máximo 200 caracteres.',

        'frequencia_semanal.required' => 'A frequência semanal é obrigatória.',
        'frequencia_semanal.integer' => 'A frequência semanal deve ser um número inteiro.',

        'genero.required' => 'O gênero é obrigatório.',
        'genero.in' => 'O gênero informado é inválido.',

        'gosto.required' => 'O campo gosto é obrigatório.',
        'gosto.string' => 'O gosto deve ser um texto.',
        'gosto.max' => 'O gosto deve ter no máximo 200 caracteres.',

        'localidade.required' => 'A localidade é obrigatória.',
        'localidade.string' => 'A localidade deve ser um texto.',
        'localidade.max' => 'A localidade deve ter no máximo 200 caracteres.',

        'logradouro.required' => 'O logradouro é obrigatório.',
        'logradouro.string' => 'O logradouro deve ser um texto.',
        'logradouro.max' => 'O logradouro deve ter no máximo 200 caracteres.',

        'medicamentos.required' => 'Os medicamentos são obrigatórios.',
        'medicamentos.string' => 'Os medicamentos devem ser um texto.',
        'medicamentos.max' => 'Os medicamentos devem ter no máximo 200 caracteres.',

        'n_seguidores.required' => 'O número de seguidores é obrigatório.',
        'n_seguidores.integer' => 'O número de seguidores deve ser um número inteiro.',

        'n_seguindo.required' => 'O número de seguindo é obrigatório.',
        'n_seguindo.integer' => 'O número de seguindo deve ser um número inteiro.',

        'nacionalidade.required' => 'A nacionalidade é obrigatória.',
        'nacionalidade.string' => 'A nacionalidade deve ser um texto.',
        'nacionalidade.max' => 'A nacionalidade deve ter no máximo 100 caracteres.',

        'nome_exibicao_perfil.required' => 'O nome de exibição do perfil é obrigatório.',
        'nome_exibicao_perfil.string' => 'O nome de exibição do perfil deve ser um texto.',
        'nome_exibicao_perfil.max' => 'O nome de exibição do perfil deve ter no máximo 150 caracteres.',

        'objetivos.required' => 'O objetivo é obrigatório.',
        'objetivos.in' => 'O objetivo informado é inválido.',

        'observacoes.required' => 'As observações são obrigatórias.',
        'observacoes.string' => 'As observações devem ser um texto.',
        'observacoes.max' => 'As observações devem ter no máximo 200 caracteres.',

        'papel_parede.required' => 'O papel de parede é obrigatório.',
        'papel_parede.string' => 'O papel de parede deve ser um texto.',
        'papel_parede.max' => 'O papel de parede deve ter no máximo 200 caracteres.',

        'parceiro_id.required' => 'O parceiro é obrigatório.',
        'parceiro_id.exists' => 'O parceiro informado não existe.',

        'peso_atual.required' => 'O peso atual é obrigatório.',
        'peso_atual.integer' => 'O peso atual deve ser um número inteiro.',

        'profile.required' => 'O profile é obrigatório.',
        'profile.string' => 'O profile deve ser um texto.',
        'profile.max' => 'O profile deve ter no máximo 255 caracteres.',

        'qtd_publicacao.required' => 'A quantidade de publicações é obrigatória.',
        'qtd_publicacao.integer' => 'A quantidade de publicações deve ser um número inteiro.',

        'rec_not_email.required' => 'A notificação por e-mail é obrigatória.',
        'rec_not_email.in' => 'A notificação por e-mail deve ser SIM ou NAO.',

        'rec_not_pub.required' => 'A notificação de publicações é obrigatória.',
        'rec_not_pub.in' => 'A notificação de publicações deve ser SIM ou NAO.',

        'rec_yes_no.required' => 'A configuração de rec_yes_no é obrigatória.',
        'rec_yes_no.in' => 'A configuração deve ser SIM ou NAO.',

        'reg_conselho.required' => 'O registro no conselho é obrigatório.',
        'reg_conselho.string' => 'O registro no conselho deve ser um texto.',
        'reg_conselho.max' => 'O registro no conselho deve ter no máximo 50 caracteres.',

        'telefone_mascarado.required' => 'O telefone mascarado é obrigatório.',
        'telefone_mascarado.string' => 'O telefone mascarado deve ser um texto.',
        'telefone_mascarado.max' => 'O telefone mascarado deve ter no máximo 15 caracteres.',

        'tipo_perfil_app.required' => 'O tipo de perfil no app é obrigatório.',
        'tipo_perfil_app.in' => 'O tipo de perfil informado é inválido.',

        'estado_txt.required' => 'O estado é obrigatório.',
        'estado_txt.string' => 'O estado deve ser um texto.',
        'estado_txt.max' => 'O estado deve ter no máximo 100 caracteres.',

        'ult_acesso.required' => 'A data do último acesso é obrigatória.',
        'ult_acesso.date' => 'A data do último acesso deve ser válida.',

        'verif_cpf_cnpj.required' => 'A verificação de CPF/CNPJ é obrigatória.',
        'verif_cpf_cnpj.in' => 'A verificação de CPF/CNPJ deve ser SIM ou NAO.',

        'verif_reg_conselho.required' => 'A verificação do registro no conselho é obrigatória.',
        'verif_reg_conselho.in' => 'A verificação do registro deve ser SIM ou NAO.',

        'verif_telefone.required' => 'A verificação do telefone é obrigatória.',
        'verif_telefone.in' => 'A verificação do telefone deve ser SIM ou NAO.',

        'slug.required' => 'O slug é obrigatório.',
        'slug.string' => 'O slug deve ser um texto.',
        'slug.max' => 'O slug deve ter no máximo 100 caracteres.',
    ];
}



}
