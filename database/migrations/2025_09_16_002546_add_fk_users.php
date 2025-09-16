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
        Schema::table('users', function (Blueprint $table) {
            $table->string('academia_id',36)->nullable();
            $table->foreign('academia_id')->references('id')->on('academias');

            $table->string('cidade_id',36)->nullable();
            $table->foreign('cidade_id')->references('id')->on('cidades');

            $table->string('parceiro_id',36)->nullable();
            $table->foreign('parceiro_id')->references('id')->on('parceiros');
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
