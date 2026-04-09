<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $task->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto max-w-lg bg-white p-8 rounded-lg shadow-lg my-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $task->title }}</h1>
        <div class="mb-6">
            <div class="text-sm font-bold text-indigo-600 uppercase mb-2">Description</div>
            <div class="bg-gray-50 p-4 rounded-lg leading-relaxed">{{ $task->description ?: 'No description' }}</div>
        </div>
        <div class="mb-6">
            <div class="text-sm font-bold text-indigo-600 uppercase mb-2">Status</div>
            <div>
                @if($task->is_completed)
                    <span class="inline-block py-2 px-4 bg-green-100 text-green-800 rounded-full text-sm font-bold">✓ Completed</span>
                @else
                    <span class="inline-block py-2 px-4 bg-yellow-100 text-yellow-800 rounded-full text-sm font-bold">○ Pending</span>
                @endif
            </div>
        </div>
        <div class="flex gap-3 mt-8">
            <a href="{{ route('tasks.edit', $task->id) }}" class="bg-indigo-600 text-white py-3 px-6 rounded-lg hover:bg-indigo-700 transition font-semibold flex-1 text-center">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="flex-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white py-3 px-6 rounded-lg hover:bg-red-600 transition font-semibold w-full" onclick="return confirm('Delete this task?')">Delete</button>
            </form>
        </div>
    </div>
    <div class="text-center mt-8">
        <a href="{{ route('tasks.index') }}" class="text-indigo-600 hover:text-indigo-800">← Back to Tasks</a>
    </div>
</body>
</html>