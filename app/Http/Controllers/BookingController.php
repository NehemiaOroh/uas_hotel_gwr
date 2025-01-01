<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('room', 'user')->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function create()
    {
        $rooms = Room::all();
        $users = User::all();
        return view('admin.bookings.create', compact('rooms', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'room_id' => 'required|exists:rooms,room_id',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after_or_equal:check_in_date',
            'total_price' => 'required|numeric',
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        Booking::create($request->all());
        return redirect()->route('bookings.index')->with('success', 'Booking added successfully.');
    }

    public function edit(Booking $booking)
    {
        $rooms = Room::all();
        $users = User::all();
        return view('admin.bookings.edit', compact('booking', 'rooms', 'users'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'room_id' => 'required|exists:rooms,room_id',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after_or_equal:check_in_date',
            'total_price' => 'required|numeric',
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        $booking->update($request->all());
        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}

