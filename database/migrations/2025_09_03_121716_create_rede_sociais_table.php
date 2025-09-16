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
        Schema::create('rede_sociais', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->enum('tipo', [
                'INSTAGRAM',
                'TIKTOK', 
                'FACEBOOK', 
                'X (TWITTER)', 
                'SPOTIFY'
            ])->noNullable();
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
        Schema::dropIfExists('rede_sociais');
    }
};
