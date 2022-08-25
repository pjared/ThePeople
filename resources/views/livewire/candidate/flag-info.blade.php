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
                            <div>
                                Promise: {{$flag->note}}
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
                            {{-- {{dd($name, $opinion_flag)}} --}}
                            <span>Opinion Name: {{$name}}</span>
                            @foreach ($opinion_flag as $flag)
                                    <div>
                                        Your Note: {{$flag->note}}
                                    </div>
                            @endforeach

                            {{-- @if(count($flags->where('candidate_id', $candidate->id)->where('type', $opinion->id . '-controversial-stance')) >= 1)
                                <span>Opinion Name: {{$opinion->name}}</span>
                                @foreach ($flags->where('candidate_id', $candidate->id)->where('type', $opinion->id . '-controversial-stance') as $flag)
                                    <div>
                                        Your Note: {{$flag->note}}
                                    </div>
                                @endforeach
                            @endif --}}
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
                            <div>
                                Position: {{$flag->note}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
