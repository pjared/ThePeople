<div>
    <div class="w-100 h-100 grid gap-4 place-content-center font-roboto">
        <div>
            <label for="stateInput" class="locationInput">State: </label>
            <input type="search" wire:model="state_input" class="w-40 mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="location" name="stateInput">
            <ul>
                @if (count($states) < 10)
                    @foreach ($states as $state)
                        <li>{{ $state->name }}</li>
                    @endforeach
                @endif
            </ul>
        </div>
        <div>
            <label for="cityInput" class="">City:</label>
            <input wire:model="city_input" class="w-48 mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="cityInput" name="location" type="text">
        </div>
        {{-- <div>
            <label for="zipInput" class="">Zip:</label>
            <input wire:model="zip_input" class="w-32 mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="zipInput" name="location" type="text">
        </div> --}}
    </div>
</div>

@push('scripts')
    <script>
        // PASS LOCATION FROM BALLOT
        // @isset($location_type)
        //     var location_type = {!! json_encode($location_type, JSON_HEX_TAG) !!};
        //     switch (location_type) {
        //         case 'state':
        //             $("#stateInput").val({!! json_encode($location) !!});
        //             break;
        //         case 'zip':
        //             $("#zipInput").val({!! json_encode($location) !!});
        //             break;
        //         case 'city':
        //             $("#cityInput").val({!! json_encode($location) !!});
        //             break;
        //     }
        // @endisset
    </script>
@endpush
