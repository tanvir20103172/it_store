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
        Schema::create('smart_watches', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('brand');
            $table->string('model');
            $table->string('watch_size');
            $table->string('cellular_network');
            $table->string('display');
            $table->string('water_proof');
            $table->text('heart_rate');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smart_watches');
    }
};
