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
        Schema::create('bookings', function (Blueprint $table) {
        $table->id('bookingId');
        $table->string('full__name');
        $table->string('image');
        $table->date('order_date');
        $table->date('check_in');
        $table->date('check_out');
        $table->string('special_request');
        $table->string('room_type');
        $table->integer('room_number');
        $table->string('status');
        $table->integer('price');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
