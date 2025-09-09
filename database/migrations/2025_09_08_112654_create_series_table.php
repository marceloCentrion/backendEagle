<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('series', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('aluno_id', 200);
            $table->foreign('aluno_id')
                ->references('id')
                ->on('users');
            $table->date('data_inicio');
            $table->date('data_reavaliacao');
            $table->string('id_agendamento', 200);
            $table->string('descricao', 500);
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
        Schema::dropIfExists('series');
    }
};
