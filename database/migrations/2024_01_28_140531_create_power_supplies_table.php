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
        Schema::create('power_supplies', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('model');
            $table->string('psu_category');
            $table->string('type');
            $table->string('maximum_power');
            $table->string('efficency_rating');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('power_supplies');
    }
};
