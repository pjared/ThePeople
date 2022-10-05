{{-- PREVIOUS POSITIONS --}}
@if ($this->candidate->backgrounds_count >= 1)
    <article class="flex grow flex-col md:w-11/12 items-center">
        <x-dropdown-card :classes="'shadow-md'">
            <x-slot:title>
                Background Experience
            </x-slot>
            <x-slot:content>
                    <div class="flex flex-col gap-4">
                        @foreach($this->candidate->backgrounds as $background)
                            <div class="flex flex-row justify-center items-center gap-2">
                                <div class="flex flex-col w-full items-start">
                                    <h3 class="w-fit capitalize text-lg font-semibold">
                                        {{ $background->name }}
                                        @if ($background->year_end)
                                            <span class='text-sm text-gray-400'>{{ $background->year_start }} - {{ $background->year_end }} </span>
                                        @else
                                            <span class='text-sm text-gray-400'>{{ $background->year_start }} - present </span>
                                        @endif
                                    </h3>
                                    <x-show-more :content="$background->description" />
                                </div>
                                @auth
                                    {{-- {{dd($flags->where('flaggable_type', 'App\Models\CandidateOfficePositions')->where('flaggable_id', 2), $previous_positions)}} --}}
                                    <livewire:flag-content
                                        :flag_id="$this->flags->where('flaggable_type', 'App\Models\CandidateBackground')->firstWhere('flaggable_id', $background->id) ? $this->flags->where('flaggable_type', 'App\Models\CandidateBackground')->firstWhere('flaggable_id', $background->id)->id : null"
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
            </x-slot>
        </x-dropdown-card>
    </article>
@endif
