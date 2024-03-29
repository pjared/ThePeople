<article
    class="flex flex-col background-card shadow-xl drop-shadow-lg w-11/12 items-center gap-2"
    x-data="{
        hovering: window.innerWidth <= 768, }"
    x-on:mouseover="hovering = true"
    x-on:mouseleave="hovering = window.innerWidth <= 768">

    <div class="flex justify-center">
        <h2 class="text-xl" :class="{ 'underline': hovering }">Key Stances</h2>
    </div>
    <p class='text-gray-400 text-center' x-show="hovering">A "key stance" is a common subject addressed by candidates within the ballot.</p>
    {{-- Candidates have the ability to write about specific topics that pertain to the general controversial opinion. A red star indicates the topic is a required stance that the candidate has been asked to fill out. --}}
    <div class="flex flex-col grow gap-2 text-center w-full">
        @foreach ($this->opinions as $opinion)
            {{-- TODO: Too many stances, make it a dropdown (Need to make my own dropdown in CSS) --}}
            {{--
            @if (count($opinion->required_stances) + count($this->candidate->stances->where('controversial_opinion_id', $opinion->id)) >= 4)
                <div class="collapse collapse-arrow items-center p-0">
                    <input type="checkbox" />
                    <div class="collapse-title text-md font-medium text-center pl-0 pr-0 pb-0">
                        <h3 class="text-lg font-medium">{{ $opinion->name }}</h3>
                    </div>
                    <div class="collapse-content">
                        <div class="flex flex-col items-start justify-items-start">
                            @foreach ($opinion->required_stances as $required_stance)
                                <div class="grid grid-cols-8 gap-2 w-full items-center">
                                    <div class="col-span-7">
                                        <div class="collapse collapse-arrow">
                                            <input type="checkbox" />
                                            <div class="collapse-title text-md font-medium text-left">
                                                <h4>
                                                    <b>{{ $required_stance->label }}</b>
                                                    <span class='text-red-500'>*</span>
                                                </h4>
                                            </div>
                                            <div class="collapse-content">
                                                <x-show-more :content="$this->candidate->required_stances->firstWhere('required_stance_id', $required_stance->id)->candidate_reasoning" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-1 items-center">
                                        @auth
                                            <livewire:flag
                                                :type="$required_stance->id .'required-stance'"
                                                :type_id="$required_stance->id"
                                                :side="'right'"
                                                :wire:key="'required-flag-' .$required_stance->id">
                                        @else
                                            <label class="fill-transparent" for="signup-modal">
                                                @include('icons.flag')
                                            </label>
                                        @endauth
                                    </div>
                                </div>
                            @endforeach

                            @foreach ($this->candidate->stances->where('controversial_opinion_id', $opinion->id) as $candidate_stance)
                                <div class="grid grid-cols-8 gap-2 w-full items-center">
                                    <div class="col-span-7">
                                        <div class="collapse collapse-arrow">
                                            <input type="checkbox" />
                                            <div class="collapse-title text-md font-medium text-left">
                                                <h4><b>{{ $candidate_stance->stance_label }}</b></h4>
                                            </div>
                                            <div class="collapse-content">
                                                <x-show-more :content="$candidate_stance->stance_reasoning" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-1 items-center">
                                        @auth
                                            <livewire:flag
                                                :type="$opinion->id .'controversial-stance'"
                                                :type_id="$candidate_stance->id"
                                                :side="'right'"
                                                :wire:key="'stance-flag-' .$candidate_stance->id">
                                        @else
                                            <label class="fill-transparent" for="signup-modal">
                                                @include('icons.flag')
                                            </label>
                                        @endauth
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @else
            @endif
            --}}

            <h3 class="text-lg " :class="{ 'font-bold': hovering }">{{ $opinion->name }}</h3>
            <div class="flex flex-col items-start justify-items-start">
                {{-- Required Stances --}}
                @foreach ($opinion->required_stances as $required_stance)
                    <div class="grid grid-cols-8 gap-2 w-full items-center">
                        <div class="col-span-7">
                            <div class="collapse collapse-arrow">
                                <input type="checkbox" />
                                <div class="collapse-title text-md font-medium text-left">
                                    <h4 class="text-lg" :class="{ 'font-semibold': hovering }">{{ $required_stance->label }}
                                        <span x-show='hovering' class='text-red-500'>*</span>
                                    </h4>
                                </div>
                                <div class="collapse-content">
                                    <x-show-more :content="$this->candidate->required_stances->firstWhere('required_stance_id', $required_stance->id) ? $this->candidate->required_stances->firstWhere('required_stance_id', $required_stance->id)->candidate_reasoning : '' " />
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 items-center">
                            @auth
                                <livewire:flag-content
                                    :flag_id="$this->flags ? $this->flags->where('flaggable_type', 'App\Models\CandidateRequiredStance')->firstWhere('flaggable_id', $required_stance->id)->id : null"
                                    :content="$this->candidate->required_stances->firstWhere('required_stance_id', $required_stance->id)"
                                    :side="'right'"
                                    :wire:key="'required-flag-' . $required_stance->id" />
                            @else
                                <label class="fill-transparent" for="signup-modal">
                                    @include('icons.flag')
                                </label>
                            @endauth
                        </div>
                    </div>
                @endforeach

                @foreach ($this->candidate->stances->where('controversial_opinion_id', $opinion->id) as $candidate_stance)
                    <div class="grid grid-cols-8 gap-2 w-full items-center">
                        <div class="col-span-7">
                            <div class="collapse collapse-arrow">
                                <input type="checkbox" />
                                <div class="collapse-title text-md font-medium text-left">
                                    <h4 class="text-lg" :class="{ 'font-semibold': hovering }">{{ $candidate_stance->stance_label }}</h4>
                                </div>
                                <div class="collapse-content text-start">
                                    <x-show-more :content="$candidate_stance->stance_reasoning" />
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 items-center">
                            @auth
                            <livewire:flag-content
                                :flag_id="$this->flags->where('flaggable_type', 'App\Models\CandidateStance')->firstWhere('flaggable_id', $candidate_stance->id) ? $this->flags->where('flaggable_type', 'App\Models\CandidateStance')->firstWhere('flaggable_id', $candidate_stance->id)->id : null"
                                :content="$candidate_stance"
                                :side="'right'"
                                :wire:key="'stance-flag-' .$candidate_stance->id"/>
                            @else
                                <label class="fill-transparent" for="signup-modal">
                                    @include('icons.flag')
                                </label>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>

        @endforeach
    </div>
</article>
