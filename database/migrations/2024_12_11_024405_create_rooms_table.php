<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('room_id'); // Primary key
            $table->string('room_number', 10)->unique(); // Unique room number
            $table->string('room_type', 50); // Room type
            $table->decimal('price_per_night', 10, 2); // Price per night
            $table->integer('max_occupancy'); // Maximum occupancy
            $table->enum('status', ['available', 'booked', 'maintenance'])->default('available'); // Room status
            $table->timestamps(); // Timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms'); // Drop table during rollback
    }
}
