<x-jet-form-section submit="get_precinct">
    <x-slot name="title">
        {{ __('Find Voter Precinct') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Input your address to find what voter precinct you\'re in. When we\'ve determined your voter precinct, the home page will change to show you the ballots that you will see for the upcoming election. ThePeople will NOT store your address.') }}
    </x-slot>

    <x-slot name="form">
        @if ($precinct)
            <p class='text-gray-700 col-span-6'>
                Your current precinct is: <span class='font-semibold'>{{ $precinct }}</span>
            </p>
        @else
            <p class='text-gray-400 col-span-6'>
                This feature will only work for the state of Utah
            </p>
        @endif

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="street_addr" value="{{ __('Street Address') }}" />
            <x-jet-input id="street_addr" type="text" class="mt-1 block w-full" wire:model.defer="street_addr" />
            <x-jet-input-error for="street_addr" class="mt-2" />
        </div>

        <div class='flex flex-row gap-4 col-span-6 sm:col-span-4'>
            <div class=''>
                <x-jet-label for="city" value="{{ __('City') }}" />
                <x-jet-input id="city" type="text" class="mt-1 block w-full" wire:model.defer="city" />
                <x-jet-input-error for="city" class="mt-2" />
            </div>
            <div class=''>
                <x-jet-label for="zip" value="{{ __('Zip Code') }}" />
                <x-jet-input id="zip" type="text" class="mt-1 block w-full" wire:model.defer="zip" />
                <x-jet-input-error for="zip" class="mt-2" />
            </div>
        </div>

        <div class='divider col-span-6 sm:col-span-4'>OR</div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="manual_precinct" value="{{ __('Manually Find Your Precinct') }}" />
            <p class='text-gray-400 text-sm w-full'>
                You can manually find your precinct using a map provided by your state. For the state of Utah, the Lieutenant Governor provides <a href='https://gis.utah.gov/data/political/voter-precincts/' target="_blank" class='link underline'>https://gis.utah.gov/data/political/voter-precincts/</a>
            </p>
            <x-jet-input id="manual_precinct" type="text" class="mt-1 block w-full" wire:model.defer="manual_precinct" />
            <x-jet-input-error for="manual_precinct" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-button class='col-span-1 h-fit' wire:click="save_manual_precinct">
                {{ __('Save Precinct') }}
            </x-jet-button>
        </div>


        @if ($not_found)
            <p class='text-gray-700 col-span-6'>We couldn't find a precinct for that address. Check the fields and add a zip code.</p>
        @endif
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Precinct Found!') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled">
            {{ __('Find Precinct') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
