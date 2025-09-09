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
        Schema::create('chat_mensagens', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->date('data');
            $table->string('mensagem', 200);
            $table->enum('msg_lida', ['SIM', 'NAO']);
            $table->string('pertence_a_conversa', 200);
            $table->foreign('pertence_a_conversa')
                ->references('id')
                ->on('chat_conversas');
            $table->string('quem_enviou', 200);
            $table->foreign('quem_enviou')
                ->references('id')
                ->on('users');
            $table->string('quem_recebeu', 200);
            $table->foreign('quem_recebeu')
                ->references('id')
                ->on('users');
            $table->string('msg_audio', 200);
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
        Schema::dropIfExists('chat_mensagens');
    }
};
