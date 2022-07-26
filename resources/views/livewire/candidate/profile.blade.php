<div class="grid grid-cols-2 p-8 justify-center w-full">
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
                    {{-- Party: {{ $candidate->party_name }} --}}
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
            {{-- BIO COMPONENT --}}
            @include('candidate.component.bio', ['bio' => $candidate->bio])

            {{-- CAMPAIGN VIDEOS COMPONENT --}}
            @include('candidate.component.videos', ['videos' => $candidate->videos])
            
            {{-- PROMISES COMPONENT --}}
            @include('candidate.component.promises', ['promises' => $candidate->promises])

            {{-- PREVIOUS POSITIONS COMPONENT --}}
            @include('candidate.component.positions', ['previous_positions' => $candidate->previous_positions])
        </div>
    </div>
    {{-- RIGHT COLUMN --}}
    <div class="flex flex-col w-11/12 grow gap-6 items-center ">
        @include('candidate.component.stances', ['opinions' => $opinions, 'candidate' => $candidate])
        
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
                <div x-cloak class="w-11/12 background-card rounded-t-none" x-show="open" x-transition>
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

        {{-- DONORS --}}
        @if(count($candidate->donors) != 0) 
            <div class="flex grow flex-col w-11/12 items-center" x-data="{open: false}">
                <button class="flex background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
                    <div class="text-start">
                        Campaign Donors
                    </div>
                </button>
                <div x-cloak  class="flex flex-col background-card rounded-t-none w-11/12 gap-4" x-show="open" x-transition>
                    @if(count($candidate->donors) >= 1)
                        @foreach ($candidate->donors as $donor)
                            <div class="flex flex-row items-center justify-center gap-2">
                                <span>Name:  {{$donor->name}}</span>
                                @auth   
                                    <livewire:flag :type="'donor'" :type_id="$donor->id" :wire:key="'donor-flag-'.$donor->id">  
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

        {{-- LAW MAKING INVOLVEMENT  --}}
        @if(count($candidate->law_involvement) != 0) 
            <div class="flex flex-col w-11/12 items-center" x-data="{open: false}">
                <button class="background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
                    <div class="text-start">
                        Laws Passed in office
                    </div>
                </button>
                <div x-cloak class="w-11/12 background-card rounded-t-none" x-show="open" x-transition>
                    <div class="flex flex-col gap-4">
                        @foreach ($candidate->law_involvement as $law)
                            <div class="flex flex-row justify-center gap-4">
                                <span>Name : {{ $law->name }}</span>
                                @auth
                                    <livewire:flag :type="'law'" :type_id="$law->id" :wire:key="'law-flag-'.$law->id">         
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
                            console.log('clicked');
                            console.log(this.transparent, this.black, this.green, this.red);
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