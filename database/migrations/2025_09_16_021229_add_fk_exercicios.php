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
        Schema::table('exercicios', function (Blueprint $table) {
            $table->string('equipamento_id',36);
            $table->foreign('equipamento_id')
                ->references('id')
                ->on('equipamentos');

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
