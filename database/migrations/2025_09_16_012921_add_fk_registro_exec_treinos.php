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
        Schema::table('registro_exec_treinos', function (Blueprint $table) {
            $table->string('registro_exec_treino_id', 36)->nullable();
            $table->foreign('registro_exec_treino_id')->references('id')->on('registro_exec_treinos');

            $table->string('treino_id', 36);
            $table->foreign('treino_id')
                ->references('id')
                ->on('treinos');

        });


                            
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
