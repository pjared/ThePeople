<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cmyk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')"/>

        <meta name="copyright" content="{{ config('app.name') }}">
        <meta name="author" content="{{ config('app.name') }}"/>
        <meta name="application-name" content="@yield('title', config('app.name'))">

        <head>
            <title>@yield('page-title') - {{ config('app.name') }}</title>
        </head>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-50">
            @auth
                @livewire('navigation-menu')
            @else
                <div class="flex px-6 py-4 bg-white w-100 shadow-sm items-center">
                    <x-jet-application-logo class="block h-12 w-auto" />
                    <x-jet-nav-link
                        href="{{ route('groups') }}"
                        :active="request()->routeIs('groups')"
                        class='ml-4'>
                        {{ __('Political Groups') }}
                    </x-jet-nav-link>
                    {{-- <div class="text-left">
                        <a href="{{ route('groups') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Groups</a>
                    </div> --}}

                    <div class="text-right ml-auto">
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    </div>
                </div>
            @endauth

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
