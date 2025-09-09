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
        Schema::create('alcance_publicidades', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('publicidade_id', 200);
            $table->foreign('publicidade_id')
                ->references('id')
                ->on('publicidades');
            $table->string('user_id', 200);
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
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
        Schema::dropIfExists('alcance_publicidades');
    }
};
