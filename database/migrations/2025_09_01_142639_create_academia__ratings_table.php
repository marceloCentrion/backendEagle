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
        Schema::create('academia__ratings', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('academia_id', length:200);
            $table->foreign('academia_id')
                ->references('id')
                ->on('academias');
            $table->integer('rating');
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
        Schema::dropIfExists('academia__ratings');
    }
};
