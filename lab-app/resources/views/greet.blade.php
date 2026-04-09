<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App - Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center font-sans">

    <div class="bg-white p-16 rounded-3xl shadow-2xl text-center max-w-md w-full mx-4">
        <h1 class="text-4xl text-blue-500 mb-4">🚀 Laravel App</h1>
        <p class="text-xl text-gray-600 mb-8 font-light">Laravel Application by PrimustEtSolus</p>
        <p class="text-gray-600 mb-12 leading-relaxed">
            This is a Laravel learning project demonstrating routing, controllers, and views.
            Explore this application and see fundamentals of Laravel.
        </p>
        <a href="/hello" class="inline-block bg-blue-500 text-white py-3 px-8 rounded-lg font-semibold transition-all hover:bg-purple-600 hover:-translate-y-1 hover:shadow-lg">Explore Routes</a>
    </div>

</body>
</html>