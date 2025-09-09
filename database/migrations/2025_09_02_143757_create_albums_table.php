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
        Schema::create('albums', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('cover', length:200);
            $table->string('cover_img', length:200);
            $table->string('nome_album', length:200);
            $table->string('publicacao_id', length:200);
            $table->foreign('publicacao_id')
                ->references('id')
                ->on('publicacaos');
            $table->string('tinyurl', length:200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
