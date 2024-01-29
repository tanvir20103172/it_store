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
        Schema::create('s_s_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('brand');
            $table->string('model');
            $table->string('type');
            $table->string('storage');
            $table->string('form_factor');
            $table->string('intreface');
            $table->text('read_speed');
            $table->text('write_speed');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_s_d_s');
    }
};
