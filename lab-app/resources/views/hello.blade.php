<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routes & Navigation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center font-sans">

    <div class="bg-white p-12 rounded-xl shadow-lg text-center max-w-md w-full mx-4">
        <h1 class="text-2xl text-gray-900 mb-4">🎯 Available Routes</h1>
        <p class="text-gray-600 mb-8">Click any button to explore different routes</p>
        
        <div class="flex flex-col gap-3 mt-8">
            <a href="/greet/Laravel" class="block py-3 px-6 bg-indigo-600 text-white rounded-lg font-semibold transition-all hover:bg-indigo-700 hover:translate-x-1">Greet Laravel</a>
            <a href="/greet/Developer" class="block py-3 px-6 bg-indigo-600 text-white rounded-lg font-semibold transition-all hover:bg-indigo-700 hover:translate-x-1">Greet Developer</a>
            <a href="/about" class="block py-3 px-6 bg-emerald-500 text-white rounded-lg font-semibold transition-all hover:bg-emerald-600 hover:translate-x-1">About Page</a>
            <a href="/contact" class="block py-3 px-6 bg-amber-500 text-white rounded-lg font-semibold transition-all hover:bg-amber-600 hover:translate-x-1">Contact Page</a>
            <a href="/tasks" class="block py-3 px-6 bg-emerald-500 text-white rounded-lg font-semibold transition-all hover:bg-emerald-600 hover:translate-x-1">Tasks CRUD</a>
            <a href="/" class="block py-3 px-6 bg-gray-500 text-white rounded-lg font-semibold transition-all hover:bg-gray-600 mt-4">Back to Splash</a>
        </div>
    </div>

</body>
</html>