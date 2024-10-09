<form action="{{ $action }}" method="POST" class="max-w-lg mx-auto bg-white p-8 shadow-lg rounded-lg space-y-6">
    @csrf

    <!-- Title Field -->
    <div>
        <label for="title" class="block text-lg font-semibold text-gray-700 mb-2">Title:</label>
        <input 
            type="text" 
            id="title" 
            name="title" 
            required 
            class="block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
            placeholder="Enter the title"
        >
    </div>

    <!-- Body Field -->
    <div>
        <label for="body" class="block text-lg font-semibold text-gray-700 mb-2">Body:</label>
        <textarea 
            id="body" 
            name="body" 
            required 
            rows="4" 
            class="block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
            placeholder="Enter the body text"
        ></textarea>
    </div>

    <!-- Submit Button -->
    <div class="flex justify-center">
        <button 
            type="submit" 
            class="bg-sky-500 text-white p-2 rounded transition duration-300 ease-in-out "
            style="background-color: skyblue;"
        >
            Submit
        </button>
    </div>
</form>
