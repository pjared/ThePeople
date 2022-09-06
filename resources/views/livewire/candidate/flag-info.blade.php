<div class='flex flex-col items-center'>
    @if ($total_flag_count == 0)
        <p class='w-3/4 text-center'>You haven't flagged anything from this candidates profile. Click on their name to start.</p>
    @endif

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
                            <x-show-reasoning
                                :label="$flag->flaggable->promise"
                                :reasoning="$flag->flaggable->plan"
                                :type="$flag->flag_type"
                                :note="$flag->note" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($opinion_flags) >= 1)
        <div class='w-full h-fit p-2' x-data="{ show_flow : false}">
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
                                <x-show-reasoning
                                    :label="$flag->flaggable->stance_label"
                                    :reasoning="$flag->flaggable->stance_reasoning"
                                    :type="$flag->flag_type"
                                    :note="$flag->note" />
                            @endforeach
                            <div class="divider"></div>
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
                            <x-show-reasoning
                                :label="$flag->flaggable->name"
                                :reasoning="$flag->flaggable->stance"
                                :type="$flag->flag_type"
                                :note="$flag->note" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($position_flags) >= 1)
        <div class='w-full h-fit p-2' x-data="{ show_flow : false}">
            <div class="collapse collapse-arrow" :class="show_flow && 'overflow-visible'" x-transition>
                <input type="checkbox" x-on:click="show_flow = ! show_flow"/>
                <div class="divider"></div>
                <div class="flex collapse-title text-md font-medium items-center underline">
                    <span>Office Positions</span>
                </div>
                <div class="collapse-content" :class="show_flow && 'overflow-visible'">
                    <div class="flex flex-col gap-4">
                        @foreach ($position_flags as $flag)
                            <x-show-reasoning
                                :label="$flag->flaggable->position_name . ', ' . $flag->flaggable->year_start . ' - ' .$flag->flaggable->year_end"
                                :reasoning="$flag->flaggable->stance"
                                :type="$flag->flag_type"
                                :note="$flag->note" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
