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
        Schema::create('configuracoes_gerais', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->enum('rec_notif_publicacao', ['SIM', 'NAO']);
            $table->enum('rec_notif_semanal', ['SIM', 'NAO']);
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
        Schema::dropIfExists('configuracoes_gerais');
    }
};
