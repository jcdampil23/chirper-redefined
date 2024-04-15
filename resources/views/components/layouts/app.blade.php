<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ $title ?? 'Chirper Redefined' }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-sans antialiased dark:bg-gray-800">
    <div class="min-h-screen text-black dark:text-white">
        <div class="flex items-stretch selection:bg-[#FF2D20] selection:text-white ">
            <livewire:shared.sidebar.left.base />
            <div class="grid w-full md:w-6/12 xl:w-4/12 border-x border-x-rose-400">
                {{ $slot }}
            </div>
            <div class="hidden md:flex w-3/12 xl:w-4/12"></div>
        </div>
    </div>
</body>

</html>
