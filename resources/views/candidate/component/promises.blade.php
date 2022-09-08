{{-- Promises --}}
@if($this->candidate->promises_count >= 1)
    <article class="flex flex-col w-11/12 justify-center items-center">
        <x-dropdown-card :classes="'shadow-xl'">
            <x-slot:title>
                Candidate's Promises
            </x-slot>
            <x-slot:content>
                <p class="text-center text-gray-400">
                    This candidate promises to make the reforms or stand for the values listed below.
                </p>
                <div class="flex flex-col w-full gap-6 pt-4">
                    @foreach($promises as $promise)
                        <div class="flex flex-row justify-center items-start">
                            <div class="flex flex-col w-full text-start">
                                <h3 class="w-fit capitalize"><b>{{ $promise->promise }}</b></h3>
                                <x-show-more :content="$promise->plan" />
                            </div>
                            @auth
                                <livewire:flag-content
                                        :flag="$flags->where('flaggable_type', 'App\Models\CandidatePromise')->firstWhere('flaggable_id', $promise->id)"
                                        :content="$promise"
                                        :side="'below'"
                                        :wire:key="'promise-flag-' . $promise->id" />
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
