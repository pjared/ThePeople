<div class="flex flex-col grow justify-center gap-2">
    @role('admin')
        <div class="flex w-screen justify-center">
            @if (session()->has('message'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 w-2/5" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 w-2/5" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="grid grid-cols-3">
            {{-- LOCATION CREATION --}}
            <div class="col-span-1">
                <form class="flex grow flex-col gap-6 items-center" wire:submit.prevent="createLocation">
                    <div class="flex flex-col background-card w-11/12 items-center gap-2">
                        <div class="text-center">
                            Create a Location
                        </div>
                        <div class="flex-row  w-11/12">                
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">State</span>
                                </label>
                                <input type="text" wire:model="location_state" class="input input-bordered w-3/4 max-w-xs" />
                            </div>
                            @error('state') <span class="error">{{ $message }}</span> @enderror
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">Location Name</span>
                                </label>
                                <input type="text" wire:model="location_name" class="input input-bordered w-3/4 max-w-xs" />
                            </div>
                            @error('location_name') <span class="error">{{ $message }}</span> @enderror
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">Location Type</span>
                                </label>
                                <input type="text" wire:model="location_type" class="input input-bordered w-3/4 max-w-xs" />
                            </div>
                            @error('location_type') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex justify-center w-11/12">
                            <button class="btn btn-primary" type="submit">Create</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-span-1">
                <form class="flex grow flex-col gap-6 background-card items-center" wire:submit.prevent="createOffice">
                    <div class="text-center">
                        Create an office
                    </div>
                    <div class="flex-row">                
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Office Name</span>
                            </label>
                            <input type="text" wire:model="office_name" class="input input-bordered w-3/4 max-w-xs" />
                        </div>
                        @error('office_name') <span class="error">{{ $message }}</span> @enderror
                        <div class="flex flex-row">
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">Years Per Term</span>
                                </label>
                                <input type="number" wire:model="years_per_term" class="input input-bordered w-1/2 max-w-xs" />
                            </div>
                            @error('years_per_term') <span class="error">{{ $message }}</span> @enderror
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">Term Limits</span>
                                </label>
                                <input type="number" wire:model="term_limits" class="input input-bordered w-1/2 max-w-xs" />
                            </div>
                            @error('term_limits') <span class="error">{{ $message }}</span> @enderror
                        </div>  
                    </div>
                    <div class="flex justify-center">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </form>
            </div>
            <div class="col-span-1">
                <form class="flex grow flex-col gap-6 items-center" wire:submit.prevent="createBallot">
                    <div class="flex flex-col background-card w-11/12 gap-2">
                        <div class="text-center">
                            Create a Ballot
                        </div>
                        <div class="flex-row w-11/12">                
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">State</span>
                                </label>
                                <input type="text" wire:model="ballot_state" class="input input-bordered w-3/4 max-w-xs" />
                            </div>
                            @error('ballot_state') <span class="error">{{ $message }}</span> @enderror   
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">Location Name</span>
                                </label>
                                <input type="text" wire:model="ballot_location" class="input input-bordered w-3/4 max-w-xs" />
                            </div>
                            @error('ballot_location') <span class="error">{{ $message }}</span> @enderror                
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">Office Name</span>
                                </label>
                                <input type="text" wire:model="ballot_office" class="input input-bordered w-3/4 max-w-xs" />
                            </div>
                            @error('ballot_office') <span class="error">{{ $message }}</span> @enderror   
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">Voting Date</span>
                                </label>
                                <input type="date" wire:model="ballot_date" class="input input-bordered w-fit" />
                            </div>
                            @error('ballot_date') <span class="error">{{ $message }}</span> @enderror     
                        </div>
                        <div class="flex justify-center">
                            <button class="btn btn-primary" type="submit">Create</button>
                        </div>
                    </div>        
                </form>
            </div>
        </div> 
    @endrole
</div>
