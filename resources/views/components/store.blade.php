<form action="{{ $action }}" method="POST" class="max-w-lg mx-auto bg-white p-8 shadow-lg rounded-lg space-y-6">
    @csrf

    <!-- الحقل الأول: عنوان -->
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

    <!-- الحقل الثاني: نص المقال -->
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

    <!-- زر الإرسال -->
    <div>
        <button 
            type="submit" 
            class="w-full py-3 px-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-md shadow-lg hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        >
            Submit
        </button>
    </div>
</form>
