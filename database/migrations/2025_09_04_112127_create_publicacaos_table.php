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
        Schema::create('publicacoes', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->enum('arquivada', ['SIM','NAO'])->default('NAO'); 
            $table->enum('excluida', ['SIM','NAO'])->default('NAO');  
            $table->string('imagem', 200)->nullable(); 

            $table->string('texto', 500)->nullable(); 
            $table->string('tinyurl', 200)->nullable(); 
            $table->string('uid_48h', 200)->nullable(); 
            $table->string('user_mencionado', 36)->nullable();
            $table->foreign('user_mencionado')
                ->references('id')
                ->on('users');

            $table->string('video', 200)->nullable();
            $table->string('video_file', 200)->nullable();

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
        Schema::dropIfExists('publicacoes');
    }
};
