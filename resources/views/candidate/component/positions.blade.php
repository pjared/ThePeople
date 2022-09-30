{{-- PREVIOUS POSITIONS --}}
<article class="flex grow flex-col w-11/12 items-center">
    <x-dropdown-card :classes="'shadow-md'">
        <x-slot:title>
            Previous Political Positions
        </x-slot>
        <x-slot:content>
            @if($this->candidate->previous_positions_count >= 1)
                <div class="flex flex-col gap-4">
                    @foreach($previous_positions as $position)
                        <div class="flex flex-row justify-center items-center gap-2">
                            <div class="flex flex-col w-full items-start">
                                <h3 class="w-fit capitalize text-lg font-semibold">
                                    {{ $position->position_name }}
                                    <span class='text-sm text-gray-400'>{{ $position->year_start }} - {{ $position->year_end }}</span>
                                </h3>
                                <x-show-more :content="$position->description" />
                            </div>
                            @auth
                                {{-- {{dd($flags->where('flaggable_type', 'App\Models\CandidateOfficePositions')->where('flaggable_id', 2), $previous_positions)}} --}}
                                <livewire:flag-content
                                    :flag="$this->flags->where('flaggable_type', 'App\Models\CandidateOfficePositions')->firstWhere('flaggable_id', $position->id)"
                                    :content="$position"
                                    :side="'below'"
                                    :wire:key="'position-'.$position->id" />
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
</article>
