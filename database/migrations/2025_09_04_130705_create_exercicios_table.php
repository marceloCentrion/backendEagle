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
        Schema::create('exercicios', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('academia_id', 36);
            $table->foreign('academia_id')
                ->references('id')
                ->on('academias');

            $table->string('foto_video',200);
            $table->enum('tipo_execucao', [
                'POR REPETICOES',
                'POR TEMPO',
            ]);
        /*    $table->enum('', [
                'FORCA',
                'FLEXIBILIADE',
                'AEROBICA',
                'EQUILIBRIO',
                ]);*/
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
        Schema::dropIfExists('exercicios');
    }
};
