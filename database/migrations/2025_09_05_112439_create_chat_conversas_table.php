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
        Schema::create('chat_conversas', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('destinatario');
            $table->foreign('destinatario')
                ->references('id')
                ->on('users');
            $table->string('responsavel');
            $table->foreign('responsavel')
                ->references('id')
                ->on('users');
            $table->enum('destinatario_typing', ['SIM', 'NAO']);
            $table->enum('responsavel_typing', ['SIM', 'NAO']);
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
        Schema::dropIfExists('chat_conversas');
    }
};
