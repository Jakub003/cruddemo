<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Tall Stack Dojo</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/index.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <style>
        
    </style>
</head>
<body x-data="{darkMode: false}" class="flex h-screen" x-bind:class="{ 'dark' : darkMode, '': !darkMode}" x-cloak>
    {{-- Navigation Menu --}}
    @include('layouts/nav')

    {{-- Left Sidebar --}}
    <div class="p-4 flex flex-col w-70 min-h-full border-r bg-white border-gray-200 flex-shrink-0 dark:bg-gray-500">
        @yield('sidebar')
    </div>

    {{-- Main Content --}}
    <div class="p-4 flex flex-col space-y-4 w-full bg-blueGray-100">
        @yield('content')
    </div>

</body>
</html>
