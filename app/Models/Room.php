<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $primaryKey = 'room_id';
    protected $fillable = ['room_number', 'room_type', 'price_per_night', 'max_occupancy', 'status'];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'room_id', 'room_id');
    }
}
