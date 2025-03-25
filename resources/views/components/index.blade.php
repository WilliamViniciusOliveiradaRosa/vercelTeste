<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portifolio: William</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full">
    <x-header />
    {{ $slot }}
    <x-footer />
</body>

</html>
