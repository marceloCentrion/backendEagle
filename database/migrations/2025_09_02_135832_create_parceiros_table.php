<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parceiros', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->string('cidade_id', length:200)->notNullable();
            $table->foreign('cidade_id')
                ->references('id')
                ->on('cidades');
            $table->string('cnpj', length:200)->notNullable();
            $table->string('descricao', length:500)->nullable();
            $table->string('email', length:200)->notNullable();
            $table->string('email_responsavel', length:200)->notNullable();
            $table->date('fim_periodo')->notNullable();
            $table->date('inicio_periodo')->notNullable();
            $table->string('logo', length:200)->notNullable();
            $table->string('nome', length:200)->notNullable();
            $table->string('nome_responsavel', length:200)->notNullable();
            $table->enum('segmento', [
                'SUPLEMENTOS ALIMENTARES',
                'MODA FITNESS',
                'NUTRICIONISTA OU CONSULTOR DE SAUDE',
                'ALIMENTACAO SAUDAVEL',
                ])->notNullable();
            $table->string('site', length:200)->notNullable();
            $table->string('telefone', length:200)->notNullable();
            $table->string('estado_id', 36)->notNullable();
            $table->foreign('estado_id')
                ->references('id')
                ->on('estados');
            $table->string('creator', length:200)->nullable();
            $table->string('slug', length:200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parceiros');
    }
};
