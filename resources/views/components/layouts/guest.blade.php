<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <title>{{ $title ?? 'Chirper Redefined' }}</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
              rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-gray-950 font-sans antialiased">
        <div
             class="grid min-h-screen bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-gray-200/15 to-gray-950/20 text-white">
            <div
                 class="grid grid-cols-12 items-stretch gap-6 p-8 selection:bg-[#FF2D20] selection:text-white lg:gap-8 lg:p-16">
                <div
                     class="hidden items-center justify-center gap-8 rounded bg-red-400/20 pb-12 md:visible md:col-span-6 md:grid lg:col-span-8">
                    <div class="flex flex-col gap-4 p-4 text-center">
                        <p class="text-2xl font-bold uppercase">
                            Chirper Redefined
                        </p>
                        <p>
                            The microblogging platform that Laravel
                            Bootcamp deserves!
                        </p>
                        <p>Redisgned by <span class="font-bold uppercase">Jan
                                Carl Dampil</span></p>
                    </div>
                </div>
                <div class="col-span-12 grid md:col-span-6 lg:col-span-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>

</html>
