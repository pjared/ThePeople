<div class='flex flex-col'>
    @if(count($promise_flags) >= 1)
        <div class='w-11/12 h-fit p-2' x-data="{ show_flow : false}">
            <div class="collapse collapse-arrow" :class="show_flow && 'overflow-visible'" x-transition>
                <input type="checkbox" x-on:click="show_flow = ! show_flow"/>
                <div class="divider"></div>
                <div class="flex collapse-title text-md font-medium items-center underline">
                    <span>Promises</span>
                </div>
                <div class="collapse-content" :class="show_flow && 'overflow-visible'">
                    <div class="flex flex-col gap-4">
                        @foreach ($promise_flags as $flag)
                            <div class='font-bold text-center'>
                                <span>Promise: {{$flag->flaggable->stance_label}}</span>
                            </div>
                            {{-- Allow the user to dropdown the position overview --}}
                            <div
                                x-data="{ show_content: false }" >
                                <div x-show="show_content">
                                    <x-show-more :content="$flag->flaggable->stance" />
                                </div>
                                <button
                                    @click="show_content = !show_content"
                                    x-text="show_content ? 'Hide Promise Plan' : 'Show Promise Plan'"
                                    class="link"
                                    >
                                </button>
                            </div>
                            @include('components.comparison-flag', ['type' => $flag->flag_type])
                            <div>
                                Your Note: {{$flag->note}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($opinion_flags) >= 1)
        <div class='w-11/12 h-fit p-2' x-data="{ show_flow : false}">
            <div class="collapse collapse-arrow" :class="show_flow && 'overflow-visible'" x-transition>
                <input type="checkbox" x-on:click="show_flow = ! show_flow"/>
                <div class="divider"></div>
                <div class="flex collapse-title text-md font-medium items-center underline">
                    <span>Controversial Opinion Stances</span>
                </div>
                <div class="collapse-content" :class="show_flow && 'overflow-visible'">
                    <div class="flex flex-col gap-4">
                        @foreach ($opinion_flags as $name => $opinion_flag)
                            <div class='font-bold text-center'>
                                <span>Opinion Name: {{$name}}</span>
                            </div>
                            @foreach ($opinion_flag as $flag)
                                <div class='font-bold'>
                                    {{$flag->flaggable->stance_label}}
                                </div>
                                {{-- Allow the user to dropdown the reasoning --}}
                                <div
                                    x-data="{ show_content: false }" >
                                    <div x-show="show_content">
                                        <x-show-more :content="$flag->flaggable->stance_reasoning" />
                                    </div>
                                    <button
                                        @click="show_content = !show_content"
                                        x-text="show_content ? 'Hide Reasoning' : 'Show Candidate\'s Reasoning'"
                                        class="link"
                                        >
                                    </button>
                                </div>
                                @include('components.comparison-flag', ['type' => $flag->flag_type])
                                <div>
                                    Your Note: {{$flag->note}}
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{--
        @foreach ($candidate->opinions as $opinion)
            <div class="flex flex-row justify-center gap-4">
                <span>{{$opinion->name}}</span>
                @auth
                    <livewire:flag
                        :type="'opinion'"
                        :type_id="$opinion->id"
                        :side="'below'"
                        :wire:key="'opinion-'.$opinion->id">
                @else
                    <label class="fill-transparent" for="signup-modal">
                        @include('icons.flag')
                    </label>
                @endauth
            </div>
        @endforeach
    --}}
    @if(count($other_opinion_flags) >= 1)
        <div class='w-11/12 h-fit p-2' x-data="{ show_flow : false}">
            <div class="collapse collapse-arrow" :class="show_flow && 'overflow-visible'" x-transition>
                <input type="checkbox" x-on:click="show_flow = ! show_flow"/>
                <div class="divider"></div>
                <div class="flex collapse-title text-md font-medium items-center underline">
                    <span>Candidate Opinions</span>
                </div>
                <div class="collapse-content" :class="show_flow && 'overflow-visible'">
                    <div class="flex flex-col gap-4">
                        @foreach ($other_opinion_flags as $flag)
                            <div class='font-bold'>
                                {{$flag->flaggable->name}}

                            </div>
                            {{-- Allow the user to dropdown the reasoning --}}
                            <div
                                x-data="{ show_content: false }" >
                                <div x-show="show_content">
                                    <x-show-more :content="$flag->flaggable->stance" />
                                </div>
                                <button
                                    @click="show_content = !show_content"
                                    x-text="show_content ? 'Hide Reasoning' : 'Show Candidate\'s Reasoning'"
                                    class="link"
                                    >
                                </button>
                            </div>
                            @include('components.comparison-flag', ['type' => $flag->flag_type])
                            <div>
                                Your Note: {{$flag->note}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($position_flags) >= 1)
        <div class='w-11/12 h-fit p-2' x-data="{ show_flow : false}">
            <div class="collapse collapse-arrow" :class="show_flow && 'overflow-visible'" x-transition>
                <input type="checkbox" x-on:click="show_flow = ! show_flow"/>
                <div class="divider"></div>
                <div class="flex collapse-title text-md font-medium items-center underline">
                    <span>Office Positions</span>
                </div>
                <div class="collapse-content" :class="show_flow && 'overflow-visible'">
                    <div class="flex flex-col gap-4">
                        @foreach ($position_flags as $flag)
                            <div class='font-bold'>
                                {{$flag->flaggable->position_name}}, {{$flag->flaggable->year_start}} - {{$flag->flaggable->year_end}}
                            </div>
                            {{-- Allow the user to dropdown the position overview --}}
                            <div
                                x-data="{ show_content: false }" >
                                <div x-show="show_content">
                                    <x-show-more :content="$flag->flaggable->stance" />
                                </div>
                                <button
                                    @click="show_content = !show_content"
                                    x-text="show_content ? 'Hide Position Overview' : 'Show Candidate\'s Position Overview'"
                                    class="link"
                                    >
                                </button>
                            </div>
                            @include('components.comparison-flag', ['type' => $flag->flag_type])
                            <div>
                                Your Note: {{$flag->note}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
