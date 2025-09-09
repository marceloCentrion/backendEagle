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
        Schema::create('cidades', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nome', length:200)->notNullable();
            $table->string('estado_id')->notNullable();
            $table->foreign('estado_id')
                ->references('id')
                ->on('estados');
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
        Schema::dropIfExists('cidades');
    }
};
