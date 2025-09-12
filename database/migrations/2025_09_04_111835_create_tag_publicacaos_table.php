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
        Schema::create('tag_publicacaos', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('publicacao_id', length:200)-> nullable();
            $table->foreign('publicacao_id')
                ->references('id')
                ->on('publicacaos');
            $table->string('creator', length:200)->nullable();
            $table->string('slug', length:200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_publicacaos');
    }
};
