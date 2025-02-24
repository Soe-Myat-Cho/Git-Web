<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite ('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">
    <header class="bg-blue-500 text-white text-center p-4 text-xl font-bold">
        Simple Webpage
    </header>
    <main class="container mx-auto p-4 flex-grow flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <h1 class="text-2xl font-bold mb-2">Welcome to My Page</h1>
            <p class="text-gray-700">This is a simple webpage designed with Tailwind CSS.</p>
            <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Click Me</button>
        </div>
    </main>
    
</body>
</html>