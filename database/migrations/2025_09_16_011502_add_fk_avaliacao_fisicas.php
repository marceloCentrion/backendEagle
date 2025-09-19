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
    {        Schema::table('avaliacoes_fisicas', function (Blueprint $table) {
            $table->string('avaliacao_anterior', 36);
            $table->foreign('avaliacao_anterior')
                ->references('id')
                ->on('avaliacoes_fisicas');
            $table->string('registro_exec_treino_id', 36);
            $table->foreign('registro_exec_treino_id')
                ->references('id')
                ->on('registro_exec_treinos');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
