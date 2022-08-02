<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cmyk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @auth
                @livewire('navigation-menu')
            @else
                <div class="flex px-6 py-4 bg-white w-100">
                    <x-jet-application-logo class="block h-12 w-auto" />
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
                <div class="drawer drawer-mobile">
                    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content flex flex-col items-center justify-center">
                        <!-- Page content here -->
                        {{ $slot }}
                        <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
                    </div>
                    <div class="drawer-side">
                      <label for="my-drawer-2" class="drawer-overlay"></label>
                      <ul class="menu p-4 overflow-y-auto w-80 bg-base-100 text-base-content">
                        <!-- Sidebar content here -->
                        {{-- <li>
                            <x-jet-nav-link href="{{ route('admin') }}" :active="request()->routeIs('admin')">
                            {{ __('Admin Home') }}
                            </x-jet-nav-link>
                        </li> --}}
                        <li>
                            <x-jet-nav-link href="{{ route('create-ballot') }}" :active="request()->routeIs('create-ballot')">
                            {{ __('Create a Location, Office, and Ballot') }}
                            </x-jet-nav-link>
                        </li>
                        <li>
                            <x-jet-nav-link href="{{ route('assign_candidates') }}" :active="request()->routeIs('assign_candidates')">
                            {{ __('Candidate Ballot Assignment') }}
                            </x-jet-nav-link>
                        </li>
                        <li>
                            <x-jet-nav-link href="{{ route('create-opinions') }}" :active="request()->routeIs('create-opinions')">
                            {{ __('Create Opinions') }}
                            </x-jet-nav-link>
                        </li>
                        <li>
                            <x-jet-nav-link href="{{ route('edit-opinions') }}" :active="request()->routeIs('edit-opinions')">
                            {{ __('Edit Opinions & Types') }}
                            </x-jet-nav-link>
                        </li>
                        <li>
                            <x-jet-nav-link href="{{ route('approve_candidates') }}" :active="request()->routeIs('approve_candidates')">
                            {{ __('Approve New Candidates') }}
                            </x-jet-nav-link>
                        </li>
                        <li>
                            <x-jet-nav-link href="{{ route('candidate-links') }}" :active="request()->routeIs('candidate-links')">
                            {{ __('Candidate Permalinks') }}
                            </x-jet-nav-link>
                        </li>
                        {{-- <li><a>Sidebar Item 2</a></li> --}}
                        <!-- Admin Home Nav Link -->

                            <!-- Admin Create Ballot Nav Link -->

                            <!-- Admin Assignment Nav Link -->
                      </ul>

                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
