<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('images/jsicon.png') }}" sizes="16x16" type="image/png">

        <title>Jacqueline Suowari</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script defer src="https://unpkg.com/alpinejs@3.1.0/dist/cdn.min.js"></script>

        <style>
            body {
                font-family: 'Work Sans', sans-serif;
            }
        </style>
    </head>
    <body x-data="{ menu : false }" x-ref="body" class="relative min-h-screen pb-36 antialiased">
      
        {{ $slot }}
        <x-layouts.menu />
    </body>
</html>
