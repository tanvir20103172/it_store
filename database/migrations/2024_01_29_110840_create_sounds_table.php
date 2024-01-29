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
        Schema::create('sounds', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('brand');
            $table->string('model');
            $table->string('channel');
            $table->string('connectivity_mode');
            $table->string('memory_card_slot');
            $table->string('usb_port');
            $table->string('remote_control');
            $table->string('fm_radio');
            $table->string('voice_enable');
            $table->string('touch_controls');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sounds');
    }
};
