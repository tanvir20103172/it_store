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
        Schema::create('c_p_u_coolers', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('model');
            $table->string('cooler_type');
            $table->string('fan_height');
            $table->string('fan_speed');
            $table->string('led_color');
            $table->text('supported_socket');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_p_u_coolers');
    }
};
