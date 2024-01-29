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
        Schema::create('ups', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('model');
            $table->string('type');
            $table->string('input_voltage');
            $table->string('output_voltage');
            $table->string('load_capacity');
            $table->text('backup_time');
            $table->text('body_metarials');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ups');
    }
};
