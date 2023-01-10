<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full select-none">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tabadol Amn</title>

        @vite('resources/js/app.js')

    </head>
    <body class="h-full">
        <div id="app" class="h-full"></div>
    </body>
</html>
