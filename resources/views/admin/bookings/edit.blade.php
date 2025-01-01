<x-admin-layout>
    <div class="py-6 px-4 max-w-lg mx-auto bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Edit Booking</h1>

        <form action="{{ route('bookings.update', $booking->booking_id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="user_id" class="block text-gray-700 font-medium">Guest Name</label>
                <select id="user_id" name="user_id" class="w-full mt-1 border-gray-300 rounded-md">
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $booking->user_id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="room_id" class="block text-gray-700 font-medium">Room</label>
                <select id="room_id" name="room_id" class="w-full mt-1 border-gray-300 rounded-md">
                    @foreach ($rooms as $room)
                    <option value="{{ $room->room_id }}" {{ $room->room_id == $booking->room_id ? 'selected' : '' }}>
                        {{ $room->room_type }} (Room {{ $room->room_number }})
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="check_in_date" class="block text-gray-700 font-medium">Check-In Date</label>
                <input type="date" id="check_in_date" name="check_in_date" class="w-full mt-1 border-gray-300 rounded-md" value="{{ $booking->check_in_date }}" required>
            </div>

            <div class="mb-4">
                <label for="check_out_date" class="block text-gray-700 font-medium">Check-Out Date</label>
                <input type="date" id="check_out_date" name="check_out_date" class="w-full mt-1 border-gray-300 rounded-md" value="{{ $booking->check_out_date }}" required>
            </div>

            <div class="mb-4">
                <label for="total_price" class="block text-gray-700 font-medium">Total Price</label>
                <input type="number" step="0.01" id="total_price" name="total_price" class="w-full mt-1 border-gray-300 rounded-md" value="{{ $booking->total_price }}" required>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-700 font-medium">Status</label>
                <select id="status" name="status" class="w-full mt-1 border-gray-300 rounded-md">
                    <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                    <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Update</button>
        </form>
    </div>
</x-admin-layout>
