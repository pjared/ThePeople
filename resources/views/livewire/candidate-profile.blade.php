<div class="flex grow">
    <form class="flex grow" wire:submit.prevent="save">
        <div class="flex grow justify-center">            
            {{-- LEFT COLUMN --}}
            <div class="flex flex-col w-1/2 gap-2 p-4">
                {{-- CANDIDATE PERSONAL INFO --}}
                <div class="flex flex-row gap-2 w-11/12 justify-center">
                    {{-- PROFILE PIC, NAME, LEANING --}}
                    <div class="flex flex-col gap-2">
                        {{-- PROFILE PICTURE --}}
                        <div class="flex flex-col gap-2">
                            @if ($photo)
                                Photo Preview:
                                <img class="h-44 w-44" src="{{ $photo->temporaryUrl() }}">
                            @endif
                            <label>Candidate Profile Picture</label>
                            <input type="file" wire:model="photo">
                            @error('photo') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        {{-- NAME --}}
                        <div class="flex flex-row gap-1">
                            <div class="flex flex-col w-1/2">
                                <label>Name</label>
                                <input class="text-input" type="text" placeholder="Name" value="{{$name}}" wire:model="name" disabled>
                            </div>
                            
                        </div>
                        <div class="flex flex-col">
                            <label>Date Of Birth</label>
                            <input class="text-input w-1/2" type="date" wire:model="dob">
                        </div>
                        
                        {{-- POLITICAL LEANING --}}
                        <div class="flex flex-row gap-2">
                            <div class="flex flex-col">
                                <label for="politicalLeaning">Political leaning</label>
                                <select class="select-input" wire:model="pol_leaning">
                                    <option value="moderate" selected>Moderate</option>
                                    <option value="authoritarian">Authoritarian</option>
                                    <option value="libertarian">Libertarian</option>
                                    <option value="left">Left</option>
                                    <option value="right">Right</option>
                                </select>
                                <label for="politicalLeaning">Sub-Political leaning</label>
                                <select class="select-input" wire:model="sub_pol_leaning">
                                    <option value="moderate" selected>Moderate</option>
                                    <option value="authoritarian">Authoritarian</option>
                                    <option value="libertarian">Libertarian</option>
                                    <option value="left">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="flex flex-col">
                                <label for="politicalLeaning">Political Party</label>
                                <select class="select-input" wire:model="political_party_id">
                                    <option value="0" selected>Republican</option>
                                    <option value="1">Democrat</option>
                                    <option value="2">Independant</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    {{-- OFFICE LEVEL, LOCATION, OFFICE, EMAIL --}}
                    <div class="flex flex-col gap-1">
                        {{-- TODO: Make this an autofill --}}
                        <div class="flex flex-col">
                            <label>Office Level</label>
                            <select class="select-input" wire:model="office_level">
                                <option value="local" selected>Local</option>
                                <option value="district">District</option>
                                <option value="county">County</option>
                                <option value="state">State</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label>Location</label>
                            <input class="text-input" type="text" placeholder="Location" wire:model="location">
                        </div>
                        <div class="flex flex-col">
                            <label>Name of office</label>
                            <input class="text-input" type="text" placeholder="Office Running For" wire:model="office_name">
                        </div>
                        <div class="flex flex-col">
                            <label>Email</label>
                            <input class="text-input" type="text" placeholder="Email" value="{{$email}}" wire:model="email">
                        </div>
                    </div>
                </div>        

                {{-- DROPDOWNS: DONORS AND PREVIOUS POSITIONS --}}
                <div class="flex flex-col p-2 w-11/12 items-center gap-6">
                    <div class="flex grow form-group w-11/12">
                        <label for="candidateBio"></label>
                        <textarea class="text-input flex grow" wire:model="bio" rows="3" placeholder="Candidate bio">{{$bio}}</textarea>
                    </div>
                    {{-- PREVIOUS POSITIONS --}}
                    <div class="flex flex-col card w-11/12 items-center">
                        <div class="">
                            Previous Poisitons in Public Office
                            <i class="bi bi-bank"></i>
                        </div>
                        <div>
                            TODO: Allow to put in previous positions
                        </div>    
                    </div>
                </div>
            </div> 
            {{-- RIGHT COLUMN --}}
            <div class="flex flex-col w-1/2 p-5 gap-6">
                {{-- CONTROVERSIAL OPINIONS --}}
                <div id="opinionsInfo" class="flex flex-col card w-11/12 items-center gap-4">
                    <div class="flex flex-row grow justify-center">
                            Controversial Opinions
                            {{-- <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5067 1.50804C10.6884 1.29895 10.9706 1.20705 11.2406 1.26954C14.8494 2.09755 16.6735 6.05217 16.2445 9.5953C16.0778 10.9657 15.6658 12.0439 15.0592 12.9518C15.0555 12.9571 15.0517 12.9123 15.048 12.9175C15.1858 12.8498 15.3129 12.7767 15.4319 12.6995C16.0238 12.3153 16.4583 11.8083 17.0239 11.1481C17.0923 11.0683 17.1626 10.9863 17.2353 10.952C17.3987 10.7125 17.6459 10.6169 17.8942 10.6473C18.1426 10.6776 18.3595 10.8299 18.4725 11.0531C18.97 12.0363 19.25 13.1479 19.25 14.3226C19.25 18.3267 16.0041 21.5726 12 21.5726C7.99594 21.5726 4.75 18.3267 4.75 14.3226C4.75 11.7856 6.05371 9.5535 8.02431 8.25956L8.09187 8.19598C8.12658 8.15601 8.16464 8.12454 8.20552 8.09703C9.07138 7.5144 9.69312 7.03786 10.1117 6.47743C10.5071 5.94801 10.75 5.3022 10.75 4.32264C10.75 3.59736 10.6161 2.95512 10.3723 2.26809C10.2733 2.00936 10.3249 1.71713 10.5067 1.50804ZM12.1712 3.25081C12.2231 3.60079 12.25 3.95872 12.25 4.32264C12.25 5.59106 11.9223 6.55995 11.3135 7.37505C10.7417 8.14054 9.95028 8.72847 9.10466 9.2999L9.03236 9.37275C8.99362 9.41179 8.95071 9.44644 8.95439 9.4761C7.30648 10.4991 6.25 12.2877 6.25 14.3226C6.25 17.4983 8.82436 20.0726 12 20.0726C15.1756 20.0726 17.75 17.4983 17.75 14.3226C17.75 13.8028 17.6812 13.2997 17.5523 12.8217C17.1721 13.2334 16.7524 13.6307 16.2485 13.9577C15.3253 14.5569 14.1699 14.899 12.5 14.899C12.1577 14.899 11.8589 14.6673 11.7736 14.3358C11.6884 14.0044 11.8383 13.6572 12.1381 13.4921C12.8169 13.1181 13.3923 12.661 13.8345 12.0357C14.2757 11.4118 14.6137 10.5787 14.7555 9.40975C15.0623 6.879 14.0149 4.38107 12.1712 3.25081Z" fill="black"/>
                            </svg> --}}
                    </div>
                    <div class="flex flex-col text-center gap-8">
                        @foreach ($controversial_opinions as $controversial_opinion)
                            <div>
                                <label for="{{$controversial_opinion->name}}-range" class="form-label">{{$controversial_opinion->name}}</label>
                                <div class="flex flex-row">
                                    <div class="w-1/4 text-start">
                                        {{$controversial_opinion->first_side}}
                                    </div>
                                    <div class="w-1/2 flex justify-center">
                                        <input type="range" step="10" value="50" class="form-range" wire:model="opinion_vals.{{$loop->index}}">
                                    </div>
                                    <div class="w-1/4 text-start">
                                        {{$controversial_opinion->second_side}}
                                    </div>    
                                </div>  
                            </div>       
                        @endforeach
                    </div>
                    
                    {{-- @foreach ($candidate->stances as $candidate_stance)
                        
                        @if(is_null($candidate_stance->value))
                            We're still searching for the stance, sorry!                                        
                        @else
                            <label for="{{$candidate_stance->opinion->name}}-range" class="form-label">{{$candidate_stance->opinion->name}}</label>
                            <div class="row">
                                <div class="col-3 text-start">
                                    {{$candidate_stance->opinion->first_side}}
                                </div>
                                <div class="col-6">
                                    <input type="range" value="{{$candidate_stance->value}}" class="form-range" id="{{$candidate_stance->opinion->name}}-range">
                                </div>
                                <div class="col-3 text-start">
                                    {{$candidate_stance->opinion->second_side}}
                                </div>    
                            </div>                                                                    
                        @endif
                        <br>
                    @endforeach --}}
                </div>
                
                {{-- OTHER OPINIONS --}}
                {{-- <div class="mt-4" id="opinionsInfo">
                    <div style="width:95%" class="card card-body" type="button" data-bs-toggle="collapse" data-bs-target="#opinionsInfoCollapse" aria-expanded="false" aria-controls="multiCollapseExample2">
                        <div class="row">
                            <div class="col text-center">
                                Other Opinions
                                <i class="bi bi-lightning-charge"></i>
                            </div>
                        </div>
                        TODO: Allow to add for an other opinions
                    </div>
                </div> --}}
                <div class="flex justify-center w-11/12">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Save</button>
                </div>

            </div>
        </div>
    </form>
</div>
