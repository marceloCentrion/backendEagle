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
        Schema::create('medalhas', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->string('nome',45)->nullable();
            $table->string('xp_minimo',45)->nullable();
            $table->string('icone',45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medalhas');
    }
};
