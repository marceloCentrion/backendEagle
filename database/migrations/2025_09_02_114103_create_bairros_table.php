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
        Schema::create('bairros', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->string('bairro', length:200)->notNullable();
            $table->string('cidade_id', length:200)->notNullable();
            $table->foreign ('cidade_id')
                ->references('id')
                ->on('cidades');
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
        Schema::dropIfExists('bairros');
    }
};
