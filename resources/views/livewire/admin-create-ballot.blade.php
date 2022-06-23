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
        <div class="flex grow flex-row">
            <form class="flex grow flex-col gap-6 items-center" wire:submit.prevent="createLocation">
                <div class="flex flex-col card w-11/12 items-center gap-2">
                    <div class="text-center">
                        Create a Location
                    </div>
                    <div class="flex-row  w-11/12">                
                        <div class="flex flex-col">
                            <label>State</label>
                            <input class="text-input" type="text" wire:model="state">
                        </div>
                        @error('state') <span class="error">{{ $message }}</span> @enderror
                        <div class="flex flex-col">
                            <label>Location Name</label>
                            <input class="text-input" type="text" wire:model="location_name">
                        </div>
                        @error('location_name') <span class="error">{{ $message }}</span> @enderror
                        <div class="flex flex-col">
                            <label>Location Type</label>
                            <input class="text-input" type="text" wire:model="location_type">
                        </div>
                        @error('location_type') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex justify-center w-11/12">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Create</button>
                    </div>
                </div>
            </form>
        
            <form class="flex grow flex-col gap-6 items-center" wire:submit.prevent="createOffice">
                <div class="flex flex-col card w-3/4 items-center gap-2">
                    <div class="text-center">
                        Create an office
                    </div>
                    <div class="flex-row w-11/12">                
                        <div class="flex flex-col">
                            <label>Office Name</label>
                            <input class="text-input" type="text" wire:model="office_name">
                        </div>
                        @error('office_name') <span class="error">{{ $message }}</span> @enderror
                        <div class="flex flex-row">
                            <div class="flex flex-col">
                                <label>Years Per Term</label>
                                <input class="text-input w-1/2" type="number" wire:model="years_per_term">
                            </div>
                            @error('years_per_term') <span class="error">{{ $message }}</span> @enderror
                            <div class="flex flex-col">
                                <label>Term Limits</label>
                                <input class="text-input w-1/2" type="number" wire:model="term_limits">
                            </div>
                            @error('term_limits') <span class="error">{{ $message }}</span> @enderror
                        </div>  
                    </div>
                    <div class="flex justify-center w-11/12">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Create</button>
                    </div>
                </div>
            </form>
        
            <form class="flex grow flex-col gap-6 items-center" wire:submit.prevent="createBallot">
                <div class="flex flex-col card w-11/12 items-center gap-2">
                    <div class="text-center">
                        Create a Ballot
                    </div>
                    <div class="flex-row w-11/12">                
                        <div class="flex flex-col">
                            <label>State</label>
                            <input class="text-input" type="text" wire:model="ballot_state">
                        </div>
                        @error('ballot_state') <span class="error">{{ $message }}</span> @enderror   
                        <div class="flex flex-col">
                            <label>Location Name</label>
                            <input class="text-input" type="text" wire:model="ballot_location">
                        </div>
                        @error('ballot_location') <span class="error">{{ $message }}</span> @enderror                
                        <div class="flex flex-col">
                            <label>Office Name</label>
                            <input class="text-input" type="text" wire:model="ballot_office">
                        </div>
                        @error('ballot_office') <span class="error">{{ $message }}</span> @enderror     
                    </div>
                    <div class="flex justify-center w-11/12">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Create</button>
                    </div>
                </div>        
            </form>
        </div>    
    @endrole
</div>
