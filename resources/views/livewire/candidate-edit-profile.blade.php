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
                    </div>
                    {{-- OFFICE LEVEL, LOCATION, OFFICE, EMAIL --}}
                    {{-- <div class="flex flex-col gap-1">
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
                        
                    </div> --}}
                </div>        

                {{-- DROPDOWNS: DONORS AND PREVIOUS POSITIONS --}}
                <div class="flex flex-col p-2 w-11/12 items-center gap-6">
                    <div class="flex grow form-group w-11/12">
                        <label for="candidateBio"></label>
                        <textarea class="text-input flex grow" wire:model="bio" rows="3" placeholder="Candidate bio">{{$bio}}</textarea>
                    </div>
                    {{-- CANDIDATE PROMISES --}}
                    <div class="flex flex-col card w-11/12 items-center">
                        <div class="">
                            Your promises for this term in office
                            <i class="bi bi-bank"></i>
                        </div>
                        <div>
                            @foreach ($candidate->promises as $promise)
                                <div class="flex grow flex-col items-center">
                                    {{-- {{$promise}} --}}
                                    {{$promise->promise}}, {{$promise->plan}}
                                </div>
                            @endforeach
                            {{-- TODO: Make this a dropdown --}}
                            @if(count($candidate->promises) < 5)
                                <div class="flex grow flex-col items-center">
                                    <label>Add a promise</label>
                                    <input class="text-input w-11/12" wire:model="new_promise" type="text" >
                                    @error('new_promise') <span class="error">{{ $message }}</span> @enderror
                                    <label>Tell The People how you plan to implement that promise</label>
                                    <textarea class="text-input flex grow w-11/12" wire:model="promise_plan" rows="3">{{$promise_plan}}</textarea>
                                    @error('promise_plan') <span class="error">{{ $message }}</span> @enderror
                                    <button wire:click='add_promise' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-1/2">Add Promise</button>
                                </div>
                            @endif
                        </div>    
                    </div>
                    {{-- PREVIOUS POSITIONS --}}
                    <div class="flex flex-col card w-11/12 items-center">
                        <div class="">
                            Previous Poisitons in Public Office
                            <i class="bi bi-bank"></i>
                        </div>
                        <div>
                            @foreach ($candidate->previous_positions as $position)
                                <div class="flex grow flex-row">
                                    <div class="flex flex-col w-1/2">
                                        {{$position->position_name}}
                                    </div>                                    
                                    <div class="flex flex-col w-1/4">
                                        {{$position->year_start}} {{$position->year_end}}
                                    </div>
                                    <div class="flex flex-col w-1/4">
                                        {{$position->description}}
                                    </div>  
                                </div>
                            @endforeach
                            @if(count($candidate->previous_positions) < 5)
                                <div class="flex grow flex-col items-center gap-2">
                                    <label>Add a new position</label>
                                    <div class="flex grow flex-row">
                                        <div class="flex flex-col w-1/2">
                                            <label>Position Name</label>
                                            <input class="text-input" wire:model="new_position" type="text">
                                            @error('new_position') <span class="error">{{ $message }}</span> @enderror
                                        </div>                                    
                                        <div class="flex flex-col w-1/4">
                                            <label>Year Start</label>
                                            <input class="text-input flex w-1/2" wire:model="start_year" type="text">
                                            @error('start_year') <span class="error">{{ $message }}</span> @enderror
    
                                        </div>
                                        <div class="flex flex-col w-1/4">
                                            <label>Year End</label>
                                            <input class="text-input flex w-1/2" wire:model="end_year" type="text">
                                            @error('end_year') <span class="error">{{ $message }}</span> @enderror
    
                                        </div>  
                                    </div>
                                    <div class="flex flex-col">
                                        <label>Tell The People about your best accomplishments while in that office</label>
                                        <textarea class="text-input flex grow w-11/12" wire:model="position_text" rows="3">{{$position_text}}</textarea>
                                    </div>
                                    @error('position_text') <span class="error">{{ $message }}</span> @enderror
                                </div>                               
                                <button wire:click='add_position' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-1/2">Add Position</button>
                            @endif
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

                <div class="flex flex-col card w-11/12 items-center gap-4">                  
                    {{-- NAME, DOB, POLITICAL PARTY --}}
                    <div class="flex flex-row gap-5">
                        <div class="flex flex-col">
                            <label>Name</label>
                            <input class="text-input" type="text" placeholder="Name" value="{{$candidate->name}}" wire:model="name" disabled>
                        </div>
                        <div class="flex flex-col">
                            <label>Date Of Birth</label>
                            <input class="text-input" type="text" value="{{$candidate->dob}}">
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

                    {{-- CONTACT EMAIL, PHONE, POLITICAL LEANING --}}
                    <div class="flex flex-row gap-5">
                        <div class="flex flex-col">
                            <label>Contact Email</label>
                            <input class="text-input" type="text" placeholder="Email" value="{{$email}}" wire:model="email">
                        </div>
                        <div class="flex flex-col">
                            <label>Contact Phone</label>
                            <input class="text-input" type="text" placeholder="Email" value="{{$email}}" wire:model="email">
                        </div>
                        <div class="flex flex-col">
                            <label for="politicalLeaning">Political leaning</label>
                            <select class="select-input" wire:model="pol_leaning">
                                <option value="moderate" selected>Moderate</option>
                                <option value="authoritarian">Authoritarian</option>
                                <option value="libertarian">Libertarian</option>
                                <option value="left">Left</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                    </div>

                    {{-- PUBLIC EMAIL, PHONE, SUB-POLITICAL LEANING --}}
                    <div class="flex flex-row gap-5">
                        <div class="flex flex-col">
                            <label>Public Email</label>
                            <input class="text-input" type="text" placeholder="Email" value="{{$email}}" wire:model="email">
                        </div>
                        <div class="flex flex-col">
                            <label>Public Phone</label>
                            <input class="text-input" type="text" placeholder="Email" value="{{$email}}" wire:model="email">
                        </div>
                        <div class="flex flex-col">
                            <label for="politicalLeaning">Sub-Political leaning</label>
                            <select class="select-input" wire:model="sub_pol_leaning">
                                <option value="moderate" selected>Moderate</option>
                                <option value="authoritarian">Authoritarian</option>
                                <option value="libertarian">Libertarian</option>
                                <option value="left">Left</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-row gap-5 text-center">
                        @if($candidate->ballot)
                            You will be placed on the {{$candidate->ballot->location->name}} {{$candidate->ballot->office->name}} ballot, in the state of {{$candidate->state}}. If this is incorrect, please contact customer support.
                        @else
                            We have not placed you on a ballot yet. You will be notified when we have done this
                        @endif
                    </div>
                </div>
                <div class="flex justify-center w-11/12">
                    {{-- TODO: Put a checkmark here that they are ready for the ballot --}}
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
