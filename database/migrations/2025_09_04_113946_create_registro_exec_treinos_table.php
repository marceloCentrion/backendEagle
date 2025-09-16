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
            $table->string('id',36)->primary();
            $table->string('aluno_id', 36);
            $table->foreign('aluno_id')
                ->references('id')
                ->on('users');
            $table->integer('calorias')->notNullable();
            $table->integer('execicios_concluidos')->notNullable();
            $table->integer('tempo')->notNullable();

            $table->date('data')->notNullable();
            $table->string('creator', 200)->nullable();
            $table->string('slug', 200)->nullable();
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
