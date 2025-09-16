<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('academias', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->string('cep', 200)->nullable();

            $table->string('cnpj', 200)->nullable();
            $table->string('descricao', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('email_responsavel', 200)->nullable();
            $table->string('endereco', 200)->nullable();
            $table->string('horario', 200)->nullable();
            $table->string('info_adicionais', 200)->nullable();
            $table->string('localidade', 200)->nullable();
            $table->string('logo', 200)->nullable();
            $table->string('nome', 200); // obrigatório
            $table->enum('receber_atualizacoes_semanais', ['SIM', 'NAO'])->default('NAO');
            $table->string('responsavel', 200)->nullable();
            $table->string('site', 200)->nullable();
            $table->string('telefone', 200)->nullable();
            $table->string('telefone_mascaradao', 200)->nullable();
            $table->string('geo_location', 200)->nullable();
            $table->string('creator', 200)->nullable();
            $table->string('slug', 200)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('academias');
    }
};
