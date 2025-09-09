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
        Schema::create('publicidades', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->enum('categoria', [
                'ANUNCIO',
                'CUPOM',
                'PRODUTO'
            ]);
            $table->string('categoria_displ');
            $table->integer('cliques');
            $table->integer('compartilhamentos');
            $table->string('descricao', length:500);
            $table->date('dt_fim');
            $table->date('dt_inicio');
            $table->string('imagem', length:200);
            $table->string('link', length:200);
            $table->string('link_app', length:200);
            $table->string('motivo_status', length:200);
            $table->string('parceiro_id', length:200);
            $table->foreign('parceiro_id')
                ->references('id')
                ->on('parceiros');
            $table->enum('status', [
                'AGUARDANDO APROVACAO',
                'APROVADO', 
                'EM RASCUNHO',
                'NAO APROVADO']);
            $table->string('titulo', length:200);
            $table->integer('valor');
            $table->string('creator', length:200);
            $table->string('slug', length:200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicidades');
    }
};
