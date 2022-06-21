<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center h-20">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:flex text-lg">
                    <x-jet-nav-link href="{{ route('admin') }}" :active="request()->routeIs('admin')">
                        {{ __('Admin Home') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('approve_candidates') }}" :active="request()->routeIs('approve_candidates')">
                        {{ __('Approve New Candidates') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('assign_candidates') }}" :active="request()->routeIs('assign_candidates')">
                        {{ __('Candidate Ballot Assignment') }}
                    </x-jet-nav-link>
                    {{-- <x-jet-nav-link href="{{ route('admin') }}" :active="request()->routeIs('admin')">
                        {{ __('Public Office Position Creation') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('admin') }}" :active="request()->routeIs('admin')">
                        {{ __('Location Creation') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('admin') }}" :active="request()->routeIs('admin')">
                        {{ __('Public Office Position Creation') }}
                    </x-jet-nav-link> --}}
                </div>
            </div>
        </div>
    </div>

</nav>
