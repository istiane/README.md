<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto max-w-lg bg-white p-8 rounded-lg shadow-lg my-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Create New Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="title" class="block mb-2 font-bold text-gray-700">Title *</label>
                <input type="text" id="title" name="title" placeholder="Enter task title" value="{{ old('title') }}" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 font-bold text-gray-700">Description</label>
                <textarea id="description" name="description" placeholder="Enter task description" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent min-h-[100px] resize-vertical">{{ old('description') }}</textarea>
            </div>
            <div class="mb-6 flex items-center">
                <input type="checkbox" id="is_completed" name="is_completed" value="1" class="mr-3 w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 rounded focus:ring-indigo-500">
                <label for="is_completed" class="font-bold text-gray-700">Mark as Completed</label>
            </div>
            <div class="flex gap-3 mt-8">
                <button type="submit" class="bg-indigo-600 text-white py-3 px-6 rounded-lg hover:bg-indigo-700 transition font-semibold">Create Task</button>
                <a href="{{ route('tasks.index') }}" class="bg-gray-500 text-white py-3 px-6 rounded-lg hover:bg-gray-600 transition font-semibold text-center">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
