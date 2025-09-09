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
        Schema::create('treinos', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('grupo_muscular_id');
            $table->foreign('grupo_muscular_id')
                ->references('id')
                ->on('grupos_musculares');
            $table->string('academia_id', 200);
            $table->foreign('academia_id')
                ->references('id')
                ->on('academias');
            $table->enum('interno', ['SIM', 'NAO']);
            $table->string('nome', 200);
            $table->string('nome_treinos', 200);
            $table->string('creator', 200);
            $table->string('slug', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treinos');
    }
};
