<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                @if(Auth::user()->hasVerifiedEmail() && Auth::user()->hasEnabledTwoFactorAuthentication())
                    <div class="text-center mt-6">
                        @unlessrole('candidate')
                            <button class="btn btn-primary">
                                <a href="{{Route('candidate-apply')}}">Are you a candidate? Click here to apply for a profile.</a>
                            </button>
                        @endrole
                    </div>
                @else
                    @unlessrole('candidate')
                        <div class="flex flex-col items-center justify-center mt-6">
                            <span>Are you a candidate? In order to apply, please:</span>
                            <ul class='list-disc'>
                                @if(!Auth::user()->hasVerifiedEmail())
                                    <li>
                                        <span>Verify your email</span>
                                    </li>
                                @endif
                                @if(!Auth::user()->hasEnabledTwoFactorAuthentication())
                                    <li>
                                        <span>Enable two factor authentication</span>
                                    </li>
                                @endif
                            </ul>
                            <span>Once you're done, refresh this page</span>
                        </div>
                    @endrole
                @endif

                @unlessrole('organizer|organizerAdmin')
                    <div class="flex flex-col items-center justify-center mt-6">
                        <button class="btn btn-primary">
                            <a href="{{Route('group-apply')}}">Do you manage a political group? Apply Here</a>
                        </button>
                    </div>
                @endrole


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
