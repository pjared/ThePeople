{{-- OTHER OPINIONS --}}
@if($this->candidate->opinions_count >= 1)
    <article class="flex flex-col md:w-11/12 items-center">
        <x-dropdown-card  :classes="'shadow-xl'">
            @isset($no_controversials)
                <x-slot:title>
                    Candidate's General Stances
                </x-slot>
            @else
                <x-slot:title>
                    Other Stances
                </x-slot>
            @endisset
            <x-slot:content>
                <div class="flex flex-col gap-4">
                    @foreach ($this->candidate->opinions as $opinion)
                        <div class="flex flex-row items-center gap-4">
                            <div class="flex flex-col w-full items-start">
                                <h3 class="w-fit capitalize text-lg font-semibold">{{ $opinion->name }}</h3>
                                <x-show-more :content="$opinion->stance" />
                            </div>
                            {{-- <p>{{$opinion->name}}</p> --}}
                            @auth
                                <livewire:flag-content
                                        :flag="$this->flags->where('flaggable_type', 'App\Models\CandidateOpinion')->firstWhere('flaggable_id', $opinion->id)"
                                        :content="$opinion"
                                        :side="'below'"
                                        :wire:key="'opinion-'.$opinion->id" />
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
