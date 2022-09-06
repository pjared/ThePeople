{{-- OTHER OPINIONS --}}
@if($this->candidate->opinions_count >= 1)
    <article class="flex grow flex-col w-11/12 items-center">
        <x-dropdown-card>
            <x-slot:title>
                Other Opinions
            </x-slot>
            <x-slot:content>
                <div class="flex flex-col gap-4">
                    @foreach ($this->candidate->opinions as $opinion)
                        <div class="flex flex-row justify-center gap-4">
                            <p>{{$opinion->name}}</p>
                            @auth
                                <livewire:flag-content
                                        :flag="$flags->where('flaggable_type', 'App\Models\CandidateOpinion')->firstWhere('flaggable_id', $opinion->id)"
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
    </div>
@endif
