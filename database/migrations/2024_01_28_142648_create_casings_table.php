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
        Schema::create('casings', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('model');
            $table->string('case_type');
            $table->string('optical_drive_bay');
            $table->string('cooling_fan');
            $table->string('lighting_fan');
            $table->text('power_supply');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casings');
    }
};
