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
        Schema::create('player_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('post');
            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')->references('id')->on('team');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_models');
    }
};
