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
        Schema::table('perfil_acessos', function (Blueprint $table) {
            $table->string('perfil_acesso_id',36);
            $table->foreign('perfil_acesso_id')
                ->references('id')
                ->on('perfil_acessos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
