<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>ShareDev</title>
    </head>
    <body class="py-6 bg-background">
        {{ $slot }}
    </body>
</html>
