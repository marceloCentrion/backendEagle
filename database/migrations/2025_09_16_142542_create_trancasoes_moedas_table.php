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
        Schema::create('trancasoes_moedas', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('medalha_id',36)->notNullable();
            $table->enum('tipo', ['GANHO','GASTO'])->nullable();
            $table->integer('valor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trancasoes_moedas');
    }
};
