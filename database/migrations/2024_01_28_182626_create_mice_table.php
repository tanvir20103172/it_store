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
        Schema::create('mice', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('model');
            $table->string('type');
            $table->string('connection_type');
            $table->string('style_and_size');
            $table->string('click_sound');
            $table->text('lighting');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mice');
    }
};
