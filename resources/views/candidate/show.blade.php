<x-app-layout>
    <div class="grid grid-cols-2 p-8 justify-center">
        {{-- LEFT COLUMN --}}
        <div class="flex grow flex-col gap-6 items-center">
            {{-- CANDIDATE PERSONAL INFO --}}
            <div class="flex flex-row gap-6 w-11/12 justify-center">
                <img src="{{ $candidate->user->profile_photo_url }}" alt="{{ $candidate->name }}" class="h-44 w-44">
                {{-- class="rounded-full object-cover" --}}
                <div class="flex flex-col">                            
                    <div>
                        Name: {{ $candidate->name }}
                    </div>
                    <div>
                        {{-- Party: {{ $candidate->party->name }} --}}
                    </div>
                    <div>
                        Running For: {{ $candidate->ballot->location->state }}
                        {{ $candidate->ballot->office->name }}, 
                        {{ $candidate->ballot->location->name }} 
                    </div>
                    <div>
                        @if($candidate->public_email)
                            Email Candiate: {{ $candidate->public_email }}
                        @endif
                    </div>
                </div>
            </div>
            {{-- DROPDOWNS: DONORS AND PREVIOUS POSITIONS --}}
            <div class="flex flex-col gap-6 w-11/12 items-center">
                @if($candidate->bio != "")
                    <div class="flex grow flex-col background-card">
                        {{-- TODO: make this information look nice --}}
                        {{$candidate->bio}}
                    </div>
                @endif
                {{-- DONORS --}}
                @if(count($candidate->donors) != 0) 
                    <div class="flex grow flex-col w-11/12 items-center" x-data="{open: false}">
                        <button class="flex background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
                            <div class="text-start">
                                Campaign Donors
                            </div>
                        </button>
                        <div class="flex background-card rounded-t-none w-11/12" x-show="open" x-transition>
                            @if(count($candidate->donors) >= 1) 
                                @foreach ($candidate->donors as $donor)
                                    Name:  {{$donor->name}}
                                    <br>
                                @endforeach
                            @else
                                No donor data as of yet.
                            @endif
                        </div>
                    </div>
                @endif
                
                {{-- Promises --}}
                @if(count($candidate->promises) != 0)
                    <div class="flex grow flex-col w-11/12 items-center" x-data="{open: false}">
                        <button class="flex background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
                            <div class="row">
                                <div class="col-8 text-start">
                                    Candidate's Promises
                                </div>
                                <div class="col-2 offset-2 text-center">
                                    <i class="bi bi-caret-down-fill"></i>
                                </div>
                            </div>
                        </button>
                        <div class="flex flex-col background-card rounded-t-none w-11/12 justify-center" x-show="open" x-transition>
                            @foreach($candidate->promises as $promise)
                                <div class="flex flex-col items-center">
                                    <span class="w-fit"><b>{{ $promise->promise }}</b></span>
                                    <span class="w-fit">{{ $promise->plan }}</span>
                                </div>                                
                            @endforeach
                        </div>
                    </div>
                @endif
                

                {{-- PREVIOUS POSITIONS --}}
                <div class="flex grow flex-col w-11/12 items-center" x-data="{open: false}">
                    <button class="flex background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
                        <div class="row">
                            <div class="col-8 text-start">
                                Previous Poisitons in Public Office
                                <i class="bi bi-bank"></i>
                            </div>
                            <div class="col-2 offset-2 text-center">
                                <i class="bi bi-caret-down-fill"></i>
                            </div>
                        </div>
                    </button>
                    <div class="flex flex-col background-card rounded-t-none w-11/12" x-show="open" x-transition>
                        @if(count($candidate->previous_positions) != 0)
                            @foreach($candidate->previous_positions as $position)
                                <b>{{ $position->position_name }}</b>
                                <br> 
                                {{ $position->year_start }} - {{ $position->year_end }}
                            @endforeach
                        @else
                            This Candidate has not held office before
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- RIGHT COLUMN --}}
        <div class="flex flex-col w-11/12 grow gap-6 items-center">
            {{-- CONTROVERSIAL OPINIONS --}}
            <div class="flex flex-col background-card w-11/12 items-center" x-data="{show: false}">
                <div class="flex flex-col justify-center">
                    <div class="flex justify-center">
                        <span>Controversial Opinions</span>
                    </div>
                    <div class="flex">
                        <button class='btn btn-info btn-xs' x-on:click="show = ! show">show candidate reasoning</button>
                    </div>                    
                </div>
                <div class="flex flex-col grow gap-2 text-center">
                    @foreach ($candidate->stances as $candidate_stance)
                        <label for="{{$candidate_stance->opinion->name}}-range" class="form-label">{{$candidate_stance->opinion->name}}</label>
                        <div class="grid grid-cols-4">
                            <div class="col-span-1 text-center">
                                {{$candidate_stance->opinion->first_side}}
                            </div>
                            <div class="col-span-2 flex justify-center">
                                <div class="flex items-center">
                                    <input class="rs-range pointer-events-none" type="range" value="{{$candidate_stance->value}}">
                                </div>
                            </div>
                            <div class="col-span-1 text-center">
                                {{$candidate_stance->opinion->second_side}}
                            </div>    
                        </div>
                        <div x-show="show" x-transition>
                            {{$candidate_stance->info}}
                        </div>
                    @endforeach
                </div>
            </div>
            
            {{-- OTHER OPINIONS --}}
            @if(count($candidate->opinions) != 0) 
                <div class="flex grow flex-col w-11/12 items-center" x-data="{open: false}">
                    <button class="background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
                        <div class="flex flex-row">
                            <div class="text-start">
                                Other Opinions
                            </div>
                        </div>
                    </button>
                    <div class="w-11/12 background-card rounded-t-none" x-show="open" x-transition>
                        @if(count($candidate->opinions) >= 1) 
                            @foreach ($candidate->opinions as $opinion)
                                {{$opinion->name}}
                                <br>
                            @endforeach
                        @endif
                    </div>
                </div>    
            @endif 

            {{-- CAMPAIGN VIDEOS --}}
            {{-- <div class="mt-4" id="campaignInfo">
                <button style="width:95%" class="background-card background-card-body" type="button" data-bs-toggle="collapse" data-bs-target="#campaignInfoCollapse" aria-expanded="false" aria-controls="multiCollapseExample2">
                    <div class="row">
                        <div class="col-8 text-start">
                            Campaign Videos
                            <i class="bi bi-display"></i>
                        </div>
                        <div class="col-2 offset-2 text-center">
                            <i class="bi bi-caret-down-fill"></i>
                        </div>
                    </div>
                </button>
                <div class="collapse multi-collapse" id="campaignInfoCollapse">
                    <div style="width:95%" class="background-card background-card-body no-border">
                        @if(count($candidate->videos) >= 1) 
                            @foreach ($candidate->videos as $video)
                                <iframe width="100" height="100" src="{{$video->link}}">
                                </iframe>
                                <a href="{{$video->link}} ">Link</a>
                            @endforeach
                        @else
                            No campaign videos as of yet
                        @endif
                    </div>
                </div>
            </div> --}}

            {{-- LAW MAKING INVOLVEMENT  --}}
            @if(count($candidate->law_involvement) != 0) 
                <div class="flex flex-col w-11/12 items-center" x-data="{open: false}">
                    <button class="background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
                        <div class="text-start">
                            Laws Passed in office
                        </div>
                    </button>
                    <div class="w-11/12 background-card rounded-t-none" x-show="open" x-transition>
                        <div class="flex flex-col">
                            @if(count($candidate->law_involvement) >= 1) 
                                @foreach ($candidate->law_involvement as $law)
                                    <p>
                                        Name : {{ $law->name }}
                                    </p>                                                
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
