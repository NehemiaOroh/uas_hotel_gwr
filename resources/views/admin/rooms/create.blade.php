<x-admin-layout>
    <div class="py-6 px-4 max-w-lg mx-auto bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Add Room</h1>

        <form action="{{ route('rooms.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="room_number" class="block text-gray-700 font-medium">Room Number</label>
                <input type="text" id="room_number" name="room_number" class="w-full mt-1 border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="room_type" class="block text-gray-700 font-medium">Room Type</label>
                <input type="text" id="room_type" name="room_type" class="w-full mt-1 border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="price_per_night" class="block text-gray-700 font-medium">Price Per Night</label>
                <input type="number" step="0.01" id="price_per_night" name="price_per_night" class="w-full mt-1 border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="max_occupancy" class="block text-gray-700 font-medium">Max Occupancy</label>
                <input type="number" id="max_occupancy" name="max_occupancy" class="w-full mt-1 border-gray-300 rounded-md" required>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Save</button>
        </form>
    </div>
</x-admin-layout>
