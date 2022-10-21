{{-- OTHER OPINIONS --}}
@if ($this->candidate->bill_votes_count >= 1)
    <article class="flex flex-col md:w-11/12 items-center">
        <x-dropdown-card :classes="'shadow-xl'">
            <x-slot:title>
                Voting Record
            </x-slot>
            <x-slot:content>
                <div class="flex flex-col gap-4">
                    @foreach ($this->candidate->bill_votes as $vote)
                        {{-- {{dd($vote)}} --}}
                        <div class="flex flex-row items-center gap-2">
                            <div class="flex flex-col w-full items-start gap-2">
                                <div class='flex flex-col md:flex-row w-full items-center gap-2'>
                                    <h3 class="md:w-4/5 capitalize text-lg font-semibold">{{ $vote->law->bill_title }}</h3>
                                    @if( $vote->vote == 'nay')
                                        <span class='md:w-1/5 stamp-box border-red-500 text-red-500'>Voted No</span>
                                    @elseif( $vote->vote == 'not voting')
                                        <span class='md:w-1/5 stamp-box'>Did Not Vote</span>
                                    @elseif( $vote->vote == 'yea')
                                        <span class='md:w-1/5 stamp-box border-green-600 text-green-600'>Voted Yes</span>
                                    @endif

                                </div>

                                <x-show-more :content="$vote->law->bill_summary" />
                            </div>
                            {{-- <p>{{ $opinion->name }}</p> --}}
                            @auth
                                <livewire:flag-content
                                        :flag_id="$this->flags->where('flaggable_type', 'App\Models\CandidateVote')->firstWhere('flaggable_id', $vote->id) ? $this->flags->where('flaggable_type', 'App\Models\CandidateVote')->firstWhere('flaggable_id', $vote->id)->id : null"
                                        :content="$vote"
                                        :side="'below'"
                                        :wire:key="'bill-vote-' . $vote->id" />
                            @else
                                <label class="fill-transparent" for="signup-modal">
                                    @include('icons.flag')
                                </label>
                            @endauth
                        </div>
                        <div class='flex flex-row w-full text-sm text-center text-gray-400 gap-6 justify-center'>
                            <div class='flex flex-col'>
                                <a class='link' href='{{ $vote->law->bill_link }}'>Bill Link</a>
                                <a class='link' href='{{ $vote->law->senate_roll_link }}'>Senate Roll Call</a>
                                @if( $vote->law->house_roll_link )
                                    <a class='link' href='{{ $vote->law->house_roll_link }}'>House Roll Call</a>
                                @endif
                            </div>
                            <div class='grid grid-cols-3 grid-rows-4'>
                                <div class='col-span-1 row-start-2 row-span-3'>
                                    <p>Not Voting</p>
                                    <p>Yes</p>
                                    <p>No</p>
                                </div>
                                @if( $vote->law->house_roll_link )
                                    <div class='col-span-1 row-span-4'>
                                        <p class='underline'>House</p>
                                        <p>{{$vote->law->house_not_voting}}</p>
                                        <p>{{$vote->law->house_yeas}}</p>
                                        <p>{{$vote->law->house_nays}}</p>
                                    </div>
                                @endif
                                <div class='col-span-1 row-span-4'>
                                    <p class='underline text-center'>Senate</p>
                                    <p>{{$vote->law->senate_not_voting}}</p>
                                    <p>{{$vote->law->senate_yeas}}</p>
                                    <p>{{$vote->law->senate_nays}}</p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </x-slot>
        </x-dropdown-card>
    </article>
@endif

{{-- @if (count($this->candidate->law_involvement) != 0)
                <div class="flex flex-col w-11/12 items-center">
                    <x-dropdown-card>
                        <x-slot:title>
                            Laws Passed in office
                        </x-slot>
                        <x-slot:content>
                            <div class="flex flex-col gap-4">
                                @foreach ($this->candidate->law_involvement as $law)
                                    <div class="flex flex-row justify-center gap-4">
                                        <span>Name : {{ $law->name }}</span>
                                        @auth
                                            <livewire:flag :type="'law'" :type_id="$law->id" :wire:key="'law-flag-' .$law->id">
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
            --}}
