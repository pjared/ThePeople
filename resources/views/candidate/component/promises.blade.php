{{-- Promises --}}
@if(count($promises) != 0)
    <div class="flex grow flex-col w-11/12 items-center" x-data="{open: false}">
        <x-dropdown-card>
            <x-slot:title>
                Candidate's Promises
            </x-slot>
            <x-slot:content>
                <div class="flex flex-col w-11/12">
                    <div class="text-center">
                        This candidate promises to make the reforms or stand for the values listed below.
                    </div>
                    @foreach($promises as $promise)
                        <div class="flex flex-row justify-center gap-4">
                            <div class="flex flex-col items-center">
                                <span class="w-fit"><b>{{ $promise->promise }}</b></span>
                                <p
                                x-data="{ isCollapsed: false, maxLength: 215, originalContent: '', content: '' }"
                                x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)"
                                >
                                {{-- + '...' --}}
                                    <span x-text="isCollapsed ? originalContent : content">{{ $promise->plan }}</span>
                                    <button
                                    @click="isCollapsed = !isCollapsed"
                                    x-show="originalContent.length > maxLength"
                                    x-text="isCollapsed ? 'Show less' : 'Show more'"
                                    class="link"
                                    ></button>
                                </p>
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
        {{-- <div x-cloak class="flex flex-col background-card rounded-t-none w-11/12 justify-center gap-2" x-show="open" x-transition>

        </div> --}}
    </div>
@endif
