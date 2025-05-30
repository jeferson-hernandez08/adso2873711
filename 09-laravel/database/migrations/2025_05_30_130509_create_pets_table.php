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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->default('no-pet.webp');
            $table->string('kind');
            $table->double('weight');
            $table->string('age');
            $table->string('breed');
            $table->string('location');
            $table->boolean('active')->default(1);
            $table->boolean('status')->default(0); // 0: Available, 1: Adopted
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
