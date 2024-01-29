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
        Schema::create('cc_cameras', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('brand');
            $table->string('model');
            $table->string('usage');
            $table->string('form_factor');
            $table->string('mega_pixel');
            $table->text('night_version');
            $table->text('ir_range');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cc_cameras');
    }
};
