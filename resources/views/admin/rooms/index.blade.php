<x-admin-layout>
    <div class="py-6 px-4">
        <h1 class="text-2xl font-bold mb-4">Manage Rooms</h1>

        <a href="{{ route('rooms.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
            Add Room
        </a>

        <table class="table-auto w-full mt-4 bg-white shadow rounded">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-4">Room Number</th>
                    <th class="p-4">Room Type</th>
                    <th class="p-4">Price/Night</th>
                    <th class="p-4">Max Occupancy</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                <tr class="border-t">
                    <td class="p-4">{{ $room->room_number }}</td>
                    <td class="p-4">{{ $room->room_type }}</td>
                    <td class="p-4">${{ number_format($room->price_per_night, 2) }}</td>
                    <td class="p-4">{{ $room->max_occupancy }}</td>
                    <td class="p-4">{{ ucfirst($room->status) }}</td>
                    <td class="p-4">
                        <a href="{{ route('rooms.edit', $room->room_id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('rooms.destroy', $room->room_id) }}" method="POST" class="inline">
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
