<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    
    <nav class="bg-white shadow dark:bg-gray-800">
        <div class="container flex items-center justify-between p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
            <a href="/" class="text-gray-800 transition-colors duration-200 transform dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6">Home</a>

            <a href="/articles" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Articles</a>

            <a href="/dashboard" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Dashboard</a>
        </div>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
</body>
</html>