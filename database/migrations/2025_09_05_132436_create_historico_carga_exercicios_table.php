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
        Schema::create('historico_carga_exercicios', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->string('exercicio_treino_id',36);
            $table->foreign('exercicio_treino_id')
                ->references('id')
                ->on('exercicios_treinos');
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
        Schema::dropIfExists('historico_carga_exercicios');
    }
};
