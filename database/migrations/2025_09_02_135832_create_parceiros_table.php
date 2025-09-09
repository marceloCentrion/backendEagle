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
            $table->string('id')->primary();
            $table->string('cidade', length:200);
            $table->string('cnpj', length:200);
            $table->string('descricao', length:500);
            $table->string('email', length:200);
            $table->string('email_responsavel', length:200);
            $table->date('fim_periodo');
            $table->date('inicio_periodo');
            $table->string('logo', length:200);
            $table->string('nome', length:200);
            $table->string('nome_responsavel', length:200);
            $table->enum('segmento', [
                'SUPLEMENTOS ALIMENTARES',
                'MODA FITNESS',
                'NUTRICIONISTA OU CONSULTOR DE SAUDE',
                'ALIMENTACAO SAUDAVEL',
                ]);
            $table->string('site', length:200);
            $table->string('telefone', length:200);
            $table->string('estado_id', length:200);
            $table->string('creator', length:200);
            $table->string('slug', length:200);
            $table->string('rede_social_id', length:200);
            $table->foreign('rede_social_id')
                ->references('id')
                ->on('rede_sociais');
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
