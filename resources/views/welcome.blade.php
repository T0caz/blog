<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <button class="rounded-full bg-blue-500 hover:bg-blue-700 text-white font-serif py-5 px-7 rounded transition duration-300 ease-in-out transform hover:scale-110">
            Awesome Button
        </button>
        <button class="rounded-full bg-green-500 hover:bg-green-700 text-white font-bold py-5 px-7 rounded transition duration-300 ease-in-out transform hover:scale-110">
            Another Button
        </button>

    </body>
</html>
