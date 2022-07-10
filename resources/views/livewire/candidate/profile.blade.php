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
                    <div class="flex flex-col background-card rounded-t-none w-11/12 gap-4" x-show="open" x-transition>
                        @if(count($candidate->donors) >= 1)
                            @foreach ($candidate->donors as $donor)
                                <div class="flex flex-row items-center justify-center gap-2">
                                    <span>Name:  {{$donor->name}}</span>
                                    @auth   
                                        <livewire:flag :type="'donor'" :type_id="$donor->id" :wire:key="'donor-'.$donor->id">  
                                    @else
                                        <label class="fill-transparent" for="signup-modal">
                                            @include('icons.flag')
                                        </label>  
                                    @endauth
                                    
                                </div>          
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
                            <div class="flex flex-row justify-center gap-4">
                                <div class="flex flex-col items-center">
                                    <span class="w-fit"><b>{{ $promise->promise }}</b></span>
                                    <span class="w-fit">{{ $promise->plan }}</span>
                                </div>    
                                @auth   
                                    <livewire:flag :type="'promise'" :type_id="$promise->id" :wire:key="$promise->id">
                                @else
                                    <label class="fill-transparent" for="signup-modal">
                                        @include('icons.flag')
                                    </label>  
                                @endauth
                                        
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
                            Previous Political Positions
                            <i class="bi bi-bank"></i>
                        </div>
                        <div class="col-2 offset-2 text-center">
                            <i class="bi bi-caret-down-fill"></i>
                        </div>
                    </div>
                </button>
                <div class="flex flex-col background-card rounded-t-none w-11/12" x-show="open" x-transition>
                    @if(count($candidate->previous_positions) != 0)
                        <div class="flex flex-col gap-4">
                            @foreach($candidate->previous_positions as $position)
                                <div class="flex flex-row justify-center gap-4">
                                    <div class="flex flex-col items-center gap-4">
                                        <span><b>{{ $position->position_name }}</b></span>
                                        <span>{{ $position->year_start }} - {{ $position->year_end }}</span>
                                    </div>
                                    @auth   
                                        <livewire:flag :type="'position'" :type_id="$position->id" :wire:key="'position-'.$position->id">   
                                    @else
                                        <label class="fill-transparent" for="signup-modal">
                                            @include('icons.flag')
                                        </label>  
                                    @endauth
                                </div>  
                            @endforeach                        
                        </div>
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
        <div class="flex flex-col background-card w-11/12 items-cente gap-2">
            <div class="flex flex-col justify-center">
                <div class="flex justify-center">
                    <span>Controversial Opinions</span>
                </div>
            </div>
            <div class="flex flex-col grow gap-2 text-center">
                @foreach($opinions as $opinion)
                    <span>{{$opinion->name}}</span>
                    <div class="carousel w-full">
                        @foreach ($candidate->opinion_stances($opinion->id) as $i => $candidate_stance)
                            <div id="{{$opinion->name}}-item-{{$i}}" class="carousel-item w-full">
                                <div class="flex flex-row gap-2">
                                    <div class="flex grow flex-col">
                                        <span class="text-left"><b>{{$candidate_stance->stance_label}}
                                            </b></span>
                                        <span>{{$candidate_stance->stance_reasoning}}</span>
                                    </div>
                                    <div class="flex items-center">
                                        @auth
                                            <livewire:flag :type="'controversial-stance'" :type_id="$candidate_stance->id" :wire:key="'stance-'.$candidate_stance->id"> 
                                        @else
                                            <label class="fill-transparent" for="signup-modal">
                                                @include('icons.flag')
                                            </label>  
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex justify-center w-full py-2 gap-2">
                        @if (count($candidate->opinion_stances($opinion->id)) > 1)
                            @for ($i = 1; $i <= count($candidate->opinion_stances($opinion->id)); $i++)
                                <a href="#{{$opinion->name}}-item-{{$i}}" class="btn btn-info btn-xs">{{$i}}</a>
                            @endfor
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        
        {{-- OTHER OPINIONS --}}
        @if(count($candidate->opinions) != 0) 
            <div class="flex flex-col w-11/12 items-center" x-data="{open: false}">
                <button class="background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
                    <div class="flex flex-row">
                        <div class="text-start">
                            Other Opinions
                        </div>
                    </div>
                </button>
                <div class="w-11/12 background-card rounded-t-none" x-show="open" x-transition>
                    <div class="flex flex-col gap-4">
                        @foreach ($candidate->opinions as $opinion)
                            <div class="flex flex-row justify-center gap-4">
                                <span>{{$opinion->name}}</span>
                                @auth
                                    <livewire:flag :type="'opinion'" :type_id="$opinion->id" :wire:key="'opinion-'.$opinion->id">       
                                @else
                                    <label class="fill-transparent" for="signup-modal">
                                        @include('icons.flag')
                                    </label>  
                                @endauth
                            </div>
                        @endforeach
                    </div>                    
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
                    <div class="flex flex-col gap-4">
                        @foreach ($candidate->law_involvement as $law)
                            <div class="flex flex-row justify-center gap-4">
                                <span>Name : {{ $law->name }}</span>
                                @auth
                                    <livewire:flag :type="'law'" :type_id="$law->id" :wire:key="'law-'.$law->id">         
                                @else
                                    <label class="fill-transparent" for="signup-modal">
                                        @include('icons.flag')
                                    </label>  
                                @endauth
                                    
                            </div>       
                        @endforeach                 
                    </div>
                </div>
            </div>
        @endif
    </div>

    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('nextFlag', () => ({       
                    flag: {
                        ['@click']() {
                            if(this.transparent) {
                                this.transparent = false;
                                this.black = true;
                                @this.change_flag(this.type, this.type_id, 'nuetral')
                            } else if (this.black) {
                                this.black = false;
                                this.green = true;
                                @this.change_flag(this.type, this.type_id, 'green')
                            } else if (this.green) {
                                this.green = false;
                                this.red = true;
                                @this.change_flag(this.type, this.type_id, 'red')
                            } else {
                                this.red = false;
                                this.transparent = true;
                                @this.delete_flag(this.type, this.type_id)
                            }
                        },
                    },
                }))
            });
        </script>
    @endpush
</div>