<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('noticacaos', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->enum('arquivada', ['SIM','NAO'])
                ->default('NAO');
            $table->string('destino', 200);
            $table->enum('lida', ['SIM','NAO'])
                ->default('NAO');
            $table->string('notificacao',200);
            $table->string('publicacao_id',200);
            $table->foreign('publicacao_id')
                ->references('id')
                ->on('publicacaos');
            $table->enum('tipo', [
                'ATUALIZACOES SEMANAIS',
                'LEMBRETE',
                'MENSAGEM',
                'PUBLICIDADE',
                'NOVO SEGUIDOR',
                'COMENTARIO',
                'MENCAO',
                'CURTIDA'
            ]);
            $table->string('user_id',200);
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->string('creator',200);
            $table->string('slug',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticacaos');
    }
};
