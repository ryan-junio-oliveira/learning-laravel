<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'My Laravel App' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-custom-white overflow-hidden">

    @include('components.layouts.navbar')
    @include('components.layouts.sidebar')

    <main class="h-full max-h-screen top-32 md:top-16 absolute translate-x-0 md:ml-64 ml-0 transition-transform duration-300 ease-in-out w-full md:w-[calc(100%-16rem)] flex flex-col bg-neutral-gray overflow-y-auto mb-5">

        <header class="sticky top-0 z-10">
            {{ $header ?? '' }}
        </header>

        <div class="container mt-24 md:mt-12 m-auto gap-6 flex flex-col">
            {{ $main }}
        </div>
    </main>

    <footer class="bg-neutral-gray bottom-0 z-30 absolute md:ml-64 ml-0 text-end w-full md:w-[calc(100%-16rem)]">
        <p class="mr-4">&copy; {{ date('Y') }} - {{ env('APP_NAME') }}</p>
    </footer>
</body>

</html>
