<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config("app.name", "Laravel") }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    {{-- Tailwind cdn --}}
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

    <main class="p-10">
        <h1 class="text-3xl">Hello Laravel</h1>
        <nav class="my-10">
            <ul class="flex gap-5">
                <li><a href="/ideas/index" class="text-blue-400">Home</a></li>
                <li><a href="/ideas/create" class="text-blue-400">Add Idea</a></li>
                <li><a href="/about" class="text-info">About</a></li>
                <li><a href="/contact" class="text-info">Contact</a></li>
            </ul>
        </nav>

        {{ $slot }}

    </main>

</body>
</html>
