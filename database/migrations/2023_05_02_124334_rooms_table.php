<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('imageTwo');
            $table->string('imageThree');
            $table->string('imageFour');
            $table->string('imageFive');
            $table->string('room_type');
            $table->integer('room_number');
            $table->integer('discountPercentage');
            $table->string('discount');
            $table->string('amenities');
            $table->integer('price');
            $table->integer('offer_price');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
