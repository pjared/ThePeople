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
                </div>        

                {{-- DROPDOWNS: DONORS AND PREVIOUS POSITIONS --}}
                <div class="flex flex-col p-2 w-11/12 items-center gap-6">
                    <div class="flex grow form-group w-11/12">
                        <div class="form-control flex grow">
                            <label class="label">
                                <span class="label-text">Your bio</span>
                            </label> 
                            <textarea class="textarea textarea-bordered flex grow" wire:model="bio" rows="3" placeholder="">{{$bio}}</textarea>
                        </div>
                    </div>
                    {{-- CANDIDATE PROMISES --}}
                    <div class="flex flex-col background-card w-11/12 items-center">
                        <div>
                            Your promises for this term in office
                        </div>
                        <div>
                            @foreach ($candidate->promises as $promise)
                                {{-- TODO: Give candidates a way to edit their promise --}}
                                <div class="flex grow flex-col items-center">
                                    {{-- {{$promise}} --}}
                                    {{$promise->promise}}, {{$promise->plan}}
                                </div>
                            @endforeach
                            {{-- TODO: Make this a dropdown --}}
                            @if(count($candidate->promises) < 5)
                                <div class="flex grow flex-col items-center">
                                    <div class="form-control w-full max-w-xs">
                                        <label class="label">
                                          <span class="label-text">Add a promise</span>
                                        </label>
                                        <input type="text" wire:model="new_promise" placeholder="Promise" class="input input-bordered w-full max-w-xs" />
                                    </div>
                                    @error('new_promise') <span class="error">{{ $message }}</span> @enderror
                                    <label class="label">
                                        <span class="label-text">Tell The People how you plan to implement that promise</span>
                                    </label> 
                                    <textarea class="textarea textarea-bordered flex grow w-11/12" wire:model="promise_plan" rows="3" placeholder="">{{$promise_plan}}</textarea>
                                    @error('promise_plan') <span class="error">{{ $message }}</span> @enderror
                                    <button wire:click='add_promise' class="btn btn-primary mt-2">Add Promise</button>
                                </div>
                            @endif
                        </div>    
                    </div>
                    {{-- PREVIOUS POSITIONS --}}
                    <div class="flex flex-col background-card w-11/12 items-center">
                        <div class="">
                            Previous Poisitons in Public Office
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
                                    <div class="flex grow flex-row gap-4">
                                        <div class="form-control w-1/2 max-w-xs">
                                            <label class="label">
                                              <span class="label-text">Position Name</span>
                                            </label>
                                            <input type="text" wire:model="new_position" class="input input-bordered w-full max-w-xs" />
                                        </div>
                                        @error('new_position') <span class="error">{{ $message }}</span> @enderror    
                                        <div class="flex grow justify-end">
                                            <div class="form-control w-full max-w-xs">
                                                <label class="label">
                                                  <span class="label-text">Year Start</span>
                                                </label>
                                                <input type="number" wire:model="start_year" class="input input-bordered w-3/4 max-w-xs" />
                                            </div>         
                                            @error('start_year') <span class="error">{{ $message }}</span> @enderror
                                            <div class="form-control w-full max-w-xs">
                                                <label class="label">
                                                  <span class="label-text">Year End</span>
                                                </label>
                                                <input type="number" wire:model="end_year" class="input input-bordered  w-3/4 max-w-xs" />
                                            </div>
                                            @error('end_year') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="form-control flex grow">
                                        <label class="label">
                                            <span class="label-text">Tell The People about your best accomplishments while in that office</span>
                                        </label> 
                                        <textarea class="textarea textarea-bordered flex grow" wire:model="position_text" rows="3">{{$position_text}}</textarea>
                                    </div>
                                    @error('position_text') <span class="error">{{ $message }}</span> @enderror
                                    <button wire:click='add_position' class="btn btn-primary mt-2">Add Position</button>
                                </div>             
                                
                            @endif
                        </div>    
                    </div>
                </div>
            </div> 
            {{-- RIGHT COLUMN --}}
            <div class="flex flex-col w-1/2 p-5 gap-6">
                {{-- CONTROVERSIAL OPINIONS --}}
                <div id="opinionsInfo" class="flex flex-col background-card w-11/12 items-center gap-4">
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
                                        <input type="range" step="10" value="50" class="range range-sm range-primary" wire:model="opinion_vals.{{$loop->index}}"/>
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
                    <div style="width:95%" class="background-card background-card-body" type="button" data-bs-toggle="collapse" data-bs-target="#opinionsInfoCollapse" aria-expanded="false" aria-controls="multiCollapseExample2">
                        <div class="row">
                            <div class="col text-center">
                                Other Opinions
                                <i class="bi bi-lightning-charge"></i>
                            </div>
                        </div>
                        TODO: Allow to add for an other opinions
                    </div>
                </div> --}}

                <div class="flex flex-col background-card w-11/12 items-center gap-4">                  
                    {{-- NAME, DOB, POLITICAL PARTY --}}
                    <div class="flex flex-row gap-4">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Political Party</span>
                            </label>
                            <select class="select select-bordered" wire:model="political_party_id">
                                <option value="0" selected>Republican</option>
                                <option value="1">Democrat</option>
                                <option value="2">Independant</option>
                            </select>
                        </div>
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Political Leaning</span>
                            </label>
                            <select class="select select-bordered" wire:model="pol_leaning">
                                <option value="moderate" selected>Moderate</option>
                                <option value="authoritarian">Authoritarian</option>
                                <option value="libertarian">Libertarian</option>
                                <option value="left">Left</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Sub-Political Leaning</span>
                            </label>
                            <select class="select select-bordered" wire:model="sub_pol_leaning">
                                <option value="moderate" selected>Moderate</option>
                                <option value="authoritarian">Authoritarian</option>
                                <option value="libertarian">Libertarian</option>
                                <option value="left">Left</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                    </div>

                    {{-- CONTACT EMAIL, PHONE, POLITICAL LEANING --}}
                    <div class="flex flex-row gap-5">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Contact Email</span>
                            </label>
                            <input type="text" value="{{$email}}" wire:model="email" class="input input-bordered w-full max-w-xs" />
                        </div>
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Contact Phone</span>
                            </label>
                            <input type="text" value="{{$email}}" wire:model="email" class="input input-bordered w-full max-w-xs" />
                        </div>
                    </div>

                    {{-- PUBLIC EMAIL, PHONE, SUB-POLITICAL LEANING --}}
                    <div class="flex flex-row gap-5">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Public Email</span>
                            </label>
                            <input type="text" value="{{$email}}" wire:model="email" class="input input-bordered w-full max-w-xs" />
                        </div>
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Public Phone</span>
                            </label>
                            <input type="text" value="{{$email}}" wire:model="email" class="input input-bordered w-full max-w-xs" />
                        </div>
                        
                    </div>
                    <div class="flex flex-col gap-5 text-center">
                        <div class="form-control items-center">
                            <label class="label cursor-pointer w-2/5">
                              <span class="label-text">Show my profile on the ballot</span> 
                              <input type="checkbox" wire:model="show" class="checkbox checkbox-primary" />
                            </label>
                        </div>
                        @if($candidate->ballot)
                            You will be placed on the {{$candidate->ballot->location->name}} {{$candidate->ballot->office->name}} ballot, in the state of {{$candidate->state}}. If this is incorrect, please contact customer support.
                        @else
                            We have not placed you on a ballot yet. You will be notified when we have done this
                        @endif
                    </div>
                </div>
                <div class="flex justify-center w-11/12">
                    {{-- TODO: Put a checkmark here that they are ready for the ballot --}}
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
