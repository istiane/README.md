<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto max-w-4xl bg-white p-8 rounded-lg shadow-lg my-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Tasks</h1>
            <a href="{{ route('tasks.create') }}" class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition">+ New Task</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-6">{{ session('success') }}</div>
        @endif

        @if(count($tasks) > 0)
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-indigo-600 text-white">
                            <th class="py-3 px-4 text-left">Title</th>
                            <th class="py-3 px-4 text-left">Description</th>
                            <th class="py-3 px-4 text-left">Status</th>
                            <th class="py-3 px-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 font-semibold">{{ $task->title }}</td>
                                <td class="py-3 px-4">{{ substr($task->description, 0, 50) }}</td>
                                <td class="py-3 px-4">{{ $task->is_completed ? '✓ Done' : '○ Pending' }}</td>
                                <td class="py-3 px-4 space-x-2">
                                    <a href="{{ route('tasks.show', $task->id) }}" class="text-indigo-600 hover:underline">View</a>
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="text-indigo-600 hover:underline">Edit</a>
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600 transition" onclick="return confirm('Delete this task?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center text-gray-500 mt-8">No tasks yet. <a href="{{ route('tasks.create') }}" class="text-indigo-600 hover:underline">Create one</a></p>
        @endif

        <p class="mt-8"><a href="/hello" class="text-gray-600 hover:text-gray-800">← Back to Home</a></p>
    </div>
</body>
</html>