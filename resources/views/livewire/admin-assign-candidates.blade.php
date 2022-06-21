<div class="flex grow justify-center">
    @role('admin')
        <div class="w-11/12">
            <div class="flex grow flex-row gap-6">
                <div class="w-3/5 text-center">
                    <div class="flex grow flex-col">
                        <h1 class="text-xl">
                            Candidates To Place
                        </h1>
                        <div class="flex card grow flex-col gap-1">
                            @foreach ($candidates as $candidate)
                                <div class="flex flex-row card grow outline outline-1 outline-black gap-6 text-left">
                                    <div class="flex flex-col">
                                        <div>
                                            Name: {{$candidate->name}}
                                        </div>
                                        <div>
                                            Email: {{$candidate->email}}
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <div>
                                            State: {{$candidate->state}}
                                        </div>
                                        <div>
                                            Office: {{$candidate->office_name}} {{$candidate->location}}
                                        </div>   
                                    </div>
                                </div>        
                                
                            @endforeach
                        </div>
                    </div>                    
                </div>
                <div class="w-1/5">
                    <div class="flex grow flex-col">
                        <h1 class="text-xl">
                            Ballots
                        </h1>
                        <div class="flex card grow flex-col gap-1">
                            @foreach ($ballots as $ballot)
                                <div class="flex flex-row card grow outline outline-1 outline-black gap-6 text-left">
                                    <div class="flex flex-col">
                                        <div>
                                            Office Name: {{$ballot->office->name}}
                                        </div>
                                        <div>
                                            Location: {{$ballot->location->name}}
                                        </div>
                                        <div>
                                            ID: {{$ballot->id}}
                                        </div>                                   
                                    </div>
                                </div>                               
                            @endforeach
                        </div>
                    </div>     
                </div>
                <div class="w-1/5 gap-6">
                    <div class="flex grow flex-col gap-6">
                        <div class="flex flex-col w-11/12 items-center" x-data="{ open : false}">
                            <button class="flex-row card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
                                <div class="col-8 text-start">
                                    Create a Ballot
                                </div>
                                <div class="col-2 offset-2 text-center">
                                    <i class="bi bi-caret-down-fill"></i>
                                </div>
                            </button>
                            <div class="card rounded-t-none w-11/12" x-show="open" x-transition>
                                {{-- TODO: Location name & type, Public office name, years per term, term limits --}}
                                <div class="flex flex-col">
                                    <label>Location Name</label>
                                    <input class="text-input" type="text" wire:model="location_name">
                                </div>
                                @error('location_name') <span class="error">{{ $message }}</span> @enderror
                                <div class="flex flex-col">
                                    <label>Location Type</label>
                                    <input class="text-input" type="text" wire:model="location_type">
                                </div>
                                @error('location_name') <span class="error">{{ $message }}</span> @enderror
                                <div class="flex flex-col">
                                    <label>Office Name</label>
                                    <input class="text-input" type="text" wire:model="office_name">
                                </div>
                                @error('location_name') <span class="error">{{ $message }}</span> @enderror
                                <div class="flex flex-row">
                                    <div class="flex flex-col">
                                        <label>Years Per Term</label>
                                        <input class="text-input w-4/5" type="number" wire:model="years_per_term">
                                    </div>
                                    @error('location_name') <span class="error">{{ $message }}</span> @enderror
                                    <div class="flex flex-col">
                                        <label>Term Limits</label>
                                        <input class="text-input w-4/5" type="number" wire:model="term_limits">
                                    </div>
                                    @error('location_name') <span class="error">{{ $message }}</span> @enderror
                                </div>                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>            
    @endrole
</div>
