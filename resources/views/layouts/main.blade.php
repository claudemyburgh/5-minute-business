<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased overflow-x-clip min-h-screen bg-gray-50 dark:bg-gray-900 text-gray-700 dark:text-gray-200 selection:bg-primary-400 selection:text-white">


<x-section.navbar />
<!-- Page Content -->
<main>
    {{ $slot }}
</main>
<x-section.footer />

@stack('modals')
@livewireScripts


</body>
</html>
