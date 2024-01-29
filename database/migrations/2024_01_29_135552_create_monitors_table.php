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
        Schema::create('monitors', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('brand');
            $table->string('model');
            $table->string('display_size');
            $table->string('touch_screen');
            $table->string('display_resolution');
            $table->string('hdmi_port');
            $table->string('thunderbolt');
            $table->string('rotatable');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitors');
    }
};
