<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Seminuevos y usados a buen precio">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @isset($pagetitle)
            {{ $pagetitle }} |
        @endisset
        {{ config('app.name', 'Laravel') }}
    </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body
    class="font-sans antialiased bg-gradient-to-tr from-gray-300 via-white to-gray-300 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
    <x-jet-banner />


    <div class="min-h-screen ">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-gray-100 dark:bg-gray-700 shadow">
                <div class="text-gray-700 dark:text-white max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <button
            class="hover:scale-125 ease-in duration-300 fixed rounded-md bottom-5 right-3 p-2 z-50 bg-sky-700 dark:bg-sky-600"
            type="button" onclick="javascript:window.scrollTo(0, 0)">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-white -6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
            </svg>
        </button>

        <!-- Page Content -->
        <main id="main" class="relative">
            {{ $slot }}
        </main>

    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
