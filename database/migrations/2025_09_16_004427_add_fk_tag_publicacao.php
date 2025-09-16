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
        Schema::table('tag_publicacoes', function (Blueprint $table) {
            $table->string('publicacao_id', 36)-> nullable();
            $table->foreign('publicacao_id')
                ->references('id')
                ->on('publicacoes');
        });
                    
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
