<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id')->primary();

            $table->string('nome', 200);
            $table->string('sobrenome', 200)->nullable();
            $table->string('email', 200)->unique();
            $table->string('cpf_cnpj', 200);
            $table->date('dt_nascimento')->nullable();
            $table->string('telefone', 200)->nullable();

            $table->enum('tipo_usuario', [
                'ADMINISTRADOR','SUPERVISOR','OPERADOR','GESTOR',
                'OPERACIONAL','PERSONAL','USUARIOS DO APP','ALUNO','PARCEIRO'
            ]);
            $table->enum('nivel', ['BRONZE','PRATA','OURO','DIAMANTE'])->default('OURO');

            $table->string('endereco_geografico', 200)->nullable();
            $table->string('academia_id')->nullable();
            $table->foreign('academia_id')->references('id')->on('academias');

            $table->enum('alerta_noticiacao', ['SIM','NAO'])->default('NAO');
            $table->integer('altura')->nullable();
            $table->date('aluno_dt_mudanca')->nullable();
            $table->enum('aluno_status', ['ATIVO','INATIVO'])->default('ATIVO');

            $table->string('bairro', 200)->nullable();
            $table->string('biografia', 500)->nullable();
            $table->string('cargo', 200)->nullable();
            $table->string('cep', 200)->nullable();

            $table->string('cidade_id')->nullable();
            $table->foreign('cidade_id')->references('id')->on('cidades');

            $table->string('codigo_indicacao', 200)->nullable();
            $table->string('complemento', 200)->nullable();
            $table->string('condicao_fisica', 200)->nullable();
            $table->string('condicao_medica', 200)->nullable();
            $table->string('doc_identificacao', 200)->nullable();
            $table->string('endereco', 200)->nullable();

            $table->integer('frequencia_semanal')->nullable();
            $table->enum('genero', ['MASCULINO','FEMININO','OUTROS'])->nullable();
            $table->string('gosto', 200)->nullable();
            $table->string('localidade', 200)->nullable();
            $table->string('logradouro', 200)->nullable();
            $table->string('medicamentos', 200)->nullable();

            $table->integer('n_seguidores')->default(0);
            $table->integer('n_seguindo')->default(0);
            $table->string('nacionalidade', 200)->nullable();
            $table->string('nome_exibicao_perfil', 200)->nullable();

            $table->enum('objetivos', [
                'PERDER PESO','MASSA MAGRA','CONDICIONAMENTO FISICO','OUTROS'
            ])->nullable();

            $table->string('observacoes', 200)->nullable();
            $table->string('papel_parede', 200)->nullable();

            $table->string('parceiro_id')->nullable();
            $table->foreign('parceiro_id')->references('id')->on('parceiros');

            $table->integer('peso_atual')->nullable();
            $table->string('profile', 200)->nullable();
            $table->integer('qtd_publicacao')->default(0);

            $table->enum('rec_not_email', ['SIM','NAO'])->nullable();
            $table->enum('rec_not_pub', ['SIM','NAO'])->nullable();
            $table->enum('rec_yes_no', ['SIM','NAO'])->nullable();

            $table->string('reg_conselho', 200)->nullable();

            $table->string('telefone_mascarado', 200)->nullable();
            $table->enum('tipo_perfil_app', [
                'PERFIL ABERTO','APENAS AMIGOS PROXIMOS','PRIVACIDADE TOTAL'
            ])->nullable();

            $table->string('estado_id')->nullable();
            $table->foreign('estado_id')->references('id')->on('estados');

            $table->string('estado_txt', 200)->nullable();
            $table->date('ult_acesso')->nullable();

            $table->enum('verif_cpf_cnpj', ['SIM','NAO'])->default('NAO');
            $table->enum('verif_reg_conselho', ['SIM','NAO'])->default('NAO');
            $table->enum('verif_telefone', ['SIM','NAO'])->default('NAO');

            $table->string('slug', 200)->nullable();

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
