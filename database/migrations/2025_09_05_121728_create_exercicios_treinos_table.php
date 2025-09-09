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
        Schema::create('exercicios_treinos', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('exercicio_id');
            $table->foreign('exercicio_id')
                ->references('id')
                ->on('exercicios');
            $table->string('grupo_muscular_id');
            $table->foreign('grupo_muscular_id')
                ->references('id')
                ->on('grupo_musculares');
            $table->integer('ordem');
            $table->integer('repeticoes');
            $table->integer('series');
            $table->integer('tempo');
             $table->foreign('exercicio_id')
                ->references('id')
                ->on('exercicios');
            $table->string('treino_id');
            $table->foreign('treino_id')
                ->references('id')
                ->on('treinos');
            $table->string('creator', 200);
            $table->string('slug', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercicios_treinos');
    }
};
