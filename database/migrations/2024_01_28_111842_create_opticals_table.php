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
        Schema::create('opticals', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('model');
            $table->string('type');
            $table->string('read_speed_CD');
            $table->string('read_speed_DVD');
            $table->string('write_speed_CD');
            $table->text('write_speed_DVD');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opticals');
    }
};
