{{-- PREVIOUS POSITIONS --}}
<div class="flex grow flex-col w-11/12 items-center">
    <x-dropdown-card>
        <x-slot:title>
            Previous Political Positions
        </x-slot>
        <x-slot:content>
            @if(count($previous_positions) != 0)
                <div class="flex flex-col gap-4">
                    @foreach($previous_positions as $position)
                        <div class="flex flex-row justify-center gap-4">
                            <div class="flex flex-col items-center gap-4">
                                <span><b>{{ $position->position_name }}</b></span>
                                <span>{{ $position->year_start }} - {{ $position->year_end }}</span>
                            </div>
                            @auth
                                <livewire:flag :type="'position'" :type_id="$position->id" :wire:key="'position-'.$position->id">
                            @else
                                <label class="fill-transparent" for="signup-modal">
                                    @include('icons.flag')
                                </label>
                            @endauth
                        </div>
                    @endforeach
                </div>
            @else
                This Candidate has not held office before
            @endif
        </x-slot>
    </x-dropdown-card>
</div>
