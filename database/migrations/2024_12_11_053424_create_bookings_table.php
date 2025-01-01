<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id'); // Primary key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users table
            $table->foreignId('room_id')->constrained('rooms', 'room_id')->onDelete('cascade'); // Foreign key to rooms table
            $table->date('check_in_date'); // Check-in date
            $table->date('check_out_date'); // Check-out date
            $table->decimal('total_price', 10, 2); // Total price
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending'); // Booking status
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
