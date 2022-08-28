{{-- Promises --}}
@if(count($promises) != 0)
    <article class="flex grow flex-col w-11/12 justify-center items-center" x-data="{open: false}">
        <x-dropdown-card>
            <x-slot:title>
                Candidate's Promises
            </x-slot>
            <x-slot:content>
                <div class="flex flex-col w-full gap-2">
                    <p class="text-center">
                        This candidate promises to make the reforms or stand for the values listed below.
                    </p>
                    @foreach($promises as $promise)
                        <div class="flex flex-row justify-center items-center gap-4">
                            <div class="flex flex-col items-center">
                                <h3 class="w-fit"><b>{{ $promise->promise }}</b></h3>
                                <x-show-more :content="$promise->plan" />
                            </div>
                            @auth
                                <livewire:flag :type="'promise'" :type_id="$promise->id" :side="'left'" :wire:key="'promise-flag-' . $promise->id">
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
