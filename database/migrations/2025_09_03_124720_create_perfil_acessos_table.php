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
        Schema::create('perfil_acessos', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('academia_id', length:200);
            $table->foreign('academia_id')
                ->references('id')
                ->on('academias');
            $table->enum('ativo', ['SIM','NAO']);
            $table->string( 'perfil', length:200);
            $table->enum('salvo', ['SIM','NAO']);
            $table->enum('tipo_perfil', ['ACESSO TOTAL','PERSONALIZADO']);
            $table->enum('tipo_usuario', [
                'ADMINISTRADOR',
                'SUPERVISO',
                'OPERADOR',
                'GESTOR',
                'OPERACIONAL', 
                'PERSONAL',
                'USUARIO DO APP',
                'ALUNO',
                'PARCEIRO'
            ]);
            $table->string('tipo_usuario_display', 200);
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
        Schema::dropIfExists('perfil_acessos');
    }
};
