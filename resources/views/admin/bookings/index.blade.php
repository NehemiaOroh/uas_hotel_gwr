<x-admin-layout>





    <div class="py-6 px-4">
        <h1 class="text-2xl font-bold mb-4">Manage Bookings</h1>

        <a href="{{ route('bookings.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
            Add Booking
        </a>

        <table class="table-auto w-full mt-4 bg-white shadow rounded">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-4">Guest Name</th>
                    <th class="p-4">Room</th>
                    <th class="p-4">Check-In</th>
                    <th class="p-4">Check-Out</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr class="border-t">
                    <td class="p-4">{{ $booking->user->name }}</td>
                    <td class="p-4">{{ $booking->room->room_type }} (Room {{ $booking->room->room_number }})</td>
                    <td class="p-4">{{ $booking->check_in_date }}</td>
                    <td class="p-4">{{ $booking->check_out_date }}</td>
                    <td class="p-4">{{ ucfirst($booking->status) }}</td>
                    <td class="p-4">
                        <a href="{{ route('bookings.edit', $booking->booking_id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('bookings.destroy', $booking->booking_id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>
