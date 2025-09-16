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
        Schema::create('grupos_musculares', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->string('academia_id', length:200)->notNullable();
            $table->foreign('academia_id')
                ->references('id')
                ->on('academias');
            $table->enum('interno', ['SIM','NAO'])->notNullable();
            $table->string('nome', length:200)->notNullable();
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
        Schema::dropIfExists('grupos_musculares');
    }
};
