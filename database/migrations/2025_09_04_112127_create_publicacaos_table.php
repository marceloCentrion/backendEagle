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
        Schema::create('publicacaos', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->enum('arquivada', ['SIM','NAO'])->default('NAO');
            $table->enum('excluida', ['SIM','NAO'])->default('NAO');
            $table->string('imagem', length:200);
            $table->string('registro_exec_treino_id', length:200);
            $table->foreign('registro_exec_treino_id')
                ->references('id')
                ->on('registro_exec_treinos');
            $table->string('tag_publicacaos_id', length:200);
            $table->foreign('tag_publicacaos_id')
                ->references('id')
                ->on('tag_publicacaos');
            $table->string('texto', length:500);
            $table->string('tinyurl', length:200);
            $table->string('uid_48h', length:200);
            $table->string('user_mencionado', length:200);
            $table->foreign('user_mencionado')
                ->references('id')
                ->on('users');
            $table->string('video', length:200);
            $table->string('video_file', length:200);
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
        Schema::dropIfExists('publicacaos');
    }
};
