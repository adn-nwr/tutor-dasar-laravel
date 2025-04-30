<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Tutorial Dasar - Laravel 12</title>
</head>

@props([
'title' => 'Untitled',
])

<body class="h-full">

    <div class="min-h-full">

        <x-navbar></x-navbar>

        <x-header>{{ $title }}</x-header>

        <main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>

    </div>

</body>

</html>