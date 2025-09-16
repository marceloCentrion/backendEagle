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
        Schema::create("xp_user", function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->string('user_id',36);
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->notNullable();
            $table->integer('xp')->nullable();
            $table->integer('medal')->nullable();
            $table->integer('xp_next_medal')->nullable();
            $table->string('medalha_id',36);
            $table->foreign('medalha_id')
                ->references('id')
                ->on('medalhas')
                ->notNullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("xp_user");
    }
};
