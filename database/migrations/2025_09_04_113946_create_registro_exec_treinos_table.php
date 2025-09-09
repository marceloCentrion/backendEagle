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
        Schema::create('registro_exec_treinos', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('aluno_id', 200);
            $table->foreign('aluno_id')
                ->references('id')
                ->on('users');
            $table->integer('calorias');
            $table->integer('execicios_concluidos');
            $table->integer('tempo');
            $table->string('treino_id', 200);
            $table->foreign('treino_id')
                ->references('id')
                ->on('treinos');
            $table->date('data');
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
        Schema::dropIfExists('registro_exec_treinos');
    }
};
