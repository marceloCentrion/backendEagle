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
        Schema::create('historico_seguidores', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->enum('pendente', ['SIM', 'NAO']);
            $table->string('seguido', 36);
            $table->foreign('seguido')
                ->references('id')
                ->on('users');
            $table->string('seguidor', 36);
            $table->foreign('seguidor')
                ->references('id')
                ->on('users');
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
        Schema::dropIfExists('historico_seguidores');
    }
};
