<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body class="flex flex-col items-center">
    <header class="w-full flex justify-center">
        <div class="bg-gray-900 py-5 text-gray-200 w-full">
            <div class="container flex items-center justify-between mx-auto">
                <h1 class="text-2xl text-teal-300 hover:text-teal-500 cursor-pointer"><a href="/">CustomerApp</a></h1>
                <ul class="flex items-center">
                    <li class="mr-6"><a class="hover:text-gray-500" href="/customers">Customers</a></li>
                    <li class="mr-6"><a class="hover:text-gray-500" href="/about">About</a></li>
                    <li class="mr-6"><a class="hover:text-gray-500" href="/services">Services</a></li>
                    <li class="mr-6"><a class="hover:text-gray-500" href="/products">Products</a></li>
                    <li class="mr-4 ml-4"><a class="bg-teal-500 py-2 uppercase px-4 rounded hover:bg-teal-700 transition
                    ease-in-out" href="/contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="mt-6 bg-gray-200 w-full flex justify-center py-6">
        <p class="text-gray-600 text-sm">&copy; CustomerAmpp, 2020. Developed by Amkam.</p>
    </footer>
</body>
</html>
