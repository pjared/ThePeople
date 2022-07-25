<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @role('candidate')
                <div class="text-center mt-6">
                    <a href="{{Route('candidate-preview')}}"><button class="btn btn-primary">
                        Go To Candidate Dashboard
                    </button></a>
                </div>
                <x-jet-section-border />
            @endrole
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <div class="text-center mt-6">
                    {{-- TODO: Major smell here --}}
                    @role('candidate')
                    @else
                    <button class="btn btn-primary">
                        <a href="{{Route('candidate-apply')}}">Are you a candidate? Click here to apply for a profile.</a>
                    </button>
                    @endrole
                </div>
                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                {{-- <x-jet-section-border /> --}}
            @endif

            {{-- <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div> --}}

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
