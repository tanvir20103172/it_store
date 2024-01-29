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
        Schema::create('casing_fans', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('model');
            $table->string('type');
            $table->string('fan_size');
            $table->string('fan_spped');
            $table->string('blade_qty');
            $table->text('lighting_effect');
            $table->text('power_source');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casing_fans');
    }
};
