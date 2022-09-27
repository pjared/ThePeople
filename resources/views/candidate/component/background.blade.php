{{-- PREVIOUS POSITIONS --}}
<article class="flex grow flex-col w-11/12 items-center">
    <x-dropdown-card :classes="'shadow-md'">
        <x-slot:title>
            Background Experience
        </x-slot>
        <x-slot:content>
            @if($this->candidate->backgrounds_count >= 1)
                <div class="flex flex-col gap-4">
                    @foreach($this->candidate->backgrounds as $background)
                        <div class="flex flex-row justify-center items-center gap-6">
                            <div class="flex flex-col w-full items-start">
                                <h3 class="w-fit capitalize text-lg font-semibold">
                                    {{ $background->name }}
                                    <span class='text-sm text-gray-400'>{{ $background->year_start }} - {{ $background->year_end }}</span>
                                </h3>
                                <x-show-more :content="$background->description" />
                            </div>
                            @auth
                                {{-- {{dd($flags->where('flaggable_type', 'App\Models\CandidateOfficePositions')->where('flaggable_id', 2), $previous_positions)}} --}}
                                <livewire:flag-content
                                    :flag="$this->flags->where('flaggable_type', 'App\Models\CandidateBackground')->firstWhere('flaggable_id', $background->id)"
                                    :content="$background"
                                    :side="'below'"
                                    :wire:key="'background-'.$background->id" />
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
