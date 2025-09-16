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
        Schema::create('grupo_musculares_primarios', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->string('academia_id', 36);
            $table->foreign('academia_id')
                ->references('id')
                ->on('academias');
            $table->enum('interno', ['SIM','NAO']);
            $table->string('nome',200);
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
        Schema::dropIfExists('grupo_musculares_primarios');
    }
};
