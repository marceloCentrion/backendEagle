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
        Schema::create('permissoes', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->enum('criar', ['SIM','NAO'])->default('NAO');
            $table->enum('editar', ['SIM','NAO'])->default('NAO');
            $table->enum('excluir', ['SIM','NAO'])->default('NAO');
            $table->enum('salva', ['SIM','NAO'])->default('NAO');
            $table->enum('ver', ['SIM','NAO'])->default('NAO');
            $table->enum('menu', [
                'DASHBOARD',
                'ALUNOS', 
                'AVALIACAO FISICA', 
                'ACADEMIAS', 
                'USUARIOS',
                'PARCEIROS', 
                'RELATORIOS', 
                'PUBLICIDADE', 
                'MINHA CONTA', 
                'CONFIGURACOES', 
                'SAIR', 
                'INDICACOES', 
                'AGENDAR'
            ]);
            $table->integer('ordem');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissoes');
    }
};
