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
        Schema::create('avalicao_fisicas', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->integer('altura');
            $table->string('aluno_id', length:200);
            $table->foreign('aluno_id')
                ->references('id')
                ->on('users');
            $table->string('nome', length:200);
            $table->string('avaliacao_anterior', length:200);
            $table->foreign('avaliacao_anterior')
                ->references('id')
                ->on('avaliacao_fisicas');
            $table->date('data_avaliacao');
            $table->date('data_proxima_avaliacao');
            $table->integer('dc_abdominal');
            $table->integer('dc_axilar_media');
            $table->integer('dc_coxa');
            $table->integer('dc_panturrilha');
            $table->integer('dc_peitoral');
            $table->integer('dc_subscapular');
            $table->integer('dc_suprailiaca');
            $table->integer('dc_tricipital');
            $table->string('id_agendamento', length:200);
            $table->integer('imc');
            $table->integer('massa_gorda');
            $table->integer('massa_magra');
            $table->string('observaoes', length:200);
            $table->integer('per_d_antebraco');
            $table->integer('per_d_braco');
            $table->integer('per_d_coxa');
            $table->integer('per_d_panturrilha');
            $table->integer('per_e_antebraco');
            $table->integer('per_e_braco');
            $table->integer('per_e_coxa');
            $table->integer('per_e_paturrilha');
            $table->integer('per_g_abdomen');
            $table->integer('per_g_cintura');
            $table->integer('per_g_ombro');
            $table->integer('per_g_quadril');
            $table->integer('per_g_torax');
            $table->integer('peso');
            $table->integer('pgc');
            $table->integer('rcq');
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
        Schema::dropIfExists('avalicao_fisicas');
    }
};
