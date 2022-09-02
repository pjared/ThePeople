{{-- OTHER OPINIONS --}}
@if(count($this->candidate->opinions) != 0)
    <article class="flex grow flex-col w-11/12 items-center">
        <x-dropdown-card>
            <x-slot:title>
                Other Opinions
            </x-slot>
            <x-slot:content>
                <div class="flex flex-col gap-4">
                    @foreach ($candidate->opinions as $opinion)
                        <div class="flex flex-row justify-center gap-4">
                            <p>{{$opinion->name}}</p>
                            @auth
                                <livewire:flag-content
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
