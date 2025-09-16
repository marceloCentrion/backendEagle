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
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->string('academia_id', 36);
            $table->foreign('academia_id')
                ->references('id')
                ->on('academias');
            $table->enum('categoria', [
                'MEMBROS SUPERIORES',
                'MEMBROS INFERIORES',
                'BICEPS',
                'TRICEPS',
                'PEITORAIS',
                'DORSAIR(COSTAS)',
                'OMBROS',
                'ABDOMEN',
                'CARDIOVASCULAR',
                'FUNCIONAIS',
                'PESO CORPORAL',
                'AEROBICOS DE DANCA',
                'CROSSFIT',
                'ACESSORIOS',
                'RECUPERACAO E ALONGAMENTO'
            ]);
            $table->string('fabricante', 200);
            $table->string('imagem',200);
            $table->string('nome',200);
            $table->string('nomes_alternativos',200);
            $table->integer('qtd');
            $table->string('creator',200);
            $table->string('slug',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipamentos');
    }
};
