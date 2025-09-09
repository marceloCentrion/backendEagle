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
        $rules = [
            'nome' => $this->isMethod('post') ? 'required|string|max:200' : 'sometimes|string|max:200',
            'sobrenome' => 'sometimes|string|max:200',
            'cpf_cnpj' => $this->isMethod('post') ? 'required|string|max:200' : 'sometimes|string|max:200',
            'telefone' => 'sometimes|string|max:200',
            'tipo_usuario' => $this->isMethod('post') ? 'required|in:ADMINISTRADOR,SUPERVISOR,OPERADOR,GESTOR,OPERACIONAL,PERSONAL,USUARIOS DO APP,ALUNO,PARCEIRO' : 'sometimes|in:ADMINISTRADOR,SUPERVISOR,OPERADOR,GESTOR,OPERACIONAL,PERSONAL,USUARIOS DO APP,ALUNO,PARCEIRO',
            'nivel' => 'sometimes|in:BRONZE,PRATA,OURO,DIAMANTE',
            'endereco_geografico' => 'sometimes|string|max:200',
            'academia_id' => 'nullable|sometimes|string|exists:academias,id',
            'alerta_noticiacao' => 'sometimes|in:SIM,NAO',
            'altura' => 'sometimes|integer',
            'aluno_dt_mudanca' => 'sometimes|date',
            'aluno_status' => 'sometimes|in:ATIVO,INATIVO',
            'bairro' => 'sometimes|string|max:200',
            'biografia' => 'sometimes|string|max:500',
            'cargo' => 'sometimes|string|max:200',
            'cep' => 'sometimes|string|max:200',
            'cidade_id' => 'sometimes|nullable|string|exists:cidades,id',
            'codigo_indicacao' => 'sometimes|string|max:200',
            'complemento' => 'sometimes|string|max:200',
            'condicao_fisica' => 'sometimes|string|max:200',
            'condicao_medica' => 'sometimes|string|max:200',
            'doc_identificacao' => 'sometimes|string|max:200',
            'endereco' => 'sometimes|string|max:200',
            'frequencia_semanal' => 'sometimes|integer',
            'genero' => 'sometimes|in:MASCULINO,FEMININO,OUTROS',
            'gosto' => 'sometimes|string|max:200',
            'localidade' => 'sometimes|string|max:200',
            'logradouro' => 'sometimes|string|max:200',
            'medicamentos' => 'sometimes|string|max:200',
            'n_seguidores' => 'sometimes|integer',
            'n_seguindo' => 'sometimes|integer',
            'nacionalidade' => 'sometimes|string|max:200',
            'nome_exibicao_perfil' => 'sometimes|string|max:200',
            'objetivos' => 'sometimes|in:PERDER PESO,MASSA MAGRA,CONDICIONAMENTO FISICO,OUTROS',
            'observacoes' => 'sometimes|string|max:200',
            'papel_parede' => 'sometimes|string|max:200',
            'parceiro_id' => 'sometimes|nullable|string|exists:parceiros,id',
            'peso_atual' => 'sometimes|integer',
            'profile' => 'sometimes|string|max:200',
            'qtd_publicacao' => 'sometimes|integer',
            'rec_not_email' => 'sometimes|in:SIM,NAO',
            'rec_not_pub' => 'sometimes|in:SIM,NAO',
            'rec_yes_no' => 'sometimes|in:SIM,NAO',
            'reg_conselho' => 'sometimes|string|max:200',
            'telefone_mascarado' => 'sometimes|string|max:200',
            'tipo_perfil_app' => 'sometimes|in:PERFIL ABERTO,APENAS AMIGOS PROXIMOS,PRIVACIDADE TOTAL',
            'estado_id' => 'sometimes|nullable|string|exists:estados,id',
            'estado_txt' => 'sometimes|string|max:200',
            'ult_acesso' => 'sometimes|date',
            'verif_cpf_cnpj' => 'sometimes|in:SIM,NAO',
            'verif_reg_conselho' => 'sometimes|in:SIM,NAO',
            'verif_telefone' => 'sometimes|in:SIM,NAO',
            'slug' => 'sometimes|string|max:200',
        ];

        // Configuração do email
        if ($this->isMethod('post')) {
            $rules['email'] = 'required|email|max:200|unique:users,email';
        } else {
            $userId = $this->route('user'); // pega o ID da rota
            $rules['email'] = 'sometimes|email|max:200|unique:users,email,' . $userId;
        }


        return $rules;
    }
}
