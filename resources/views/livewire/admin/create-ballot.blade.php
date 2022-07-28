<div class="flex flex-col pb-6 justify-center items-center">
    @role('admin')
        @include('admin.admin-nav')
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
        {{-- LOCATION, OFFICE, BALLOT` --}}
        <div class="grid grid-cols-3">
            {{-- LOCATION CREATION --}}
            <div class="col-span-1 flex grow flex-col gap-2">
                <form class="flex gap-6 items-center" wire:submit.prevent="createLocation">
                    <div class="flex flex-col background-card w-11/12 items-center gap-2">
                        <div class="text-center">
                            Create a Location
                        </div>
                        <div class="flex-row w-11/12">
                            <div class="form-control w-1/2 max-w-xs">
                                <label class="label">
                                  <span class="label-text">State</span>
                                  <span class="label-text-alt">(optional)</span>
                                </label>
                                <input 
                                    type="text" 
                                    wire:model="new_location.state" 
                                    name='new_location_state'
                                    class="input input-bordered max-w-xs" />
                            </div>
                            @error('new_location.state') <span class="error">{{ $message }}</span> @enderror
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">Location Name</span>
                                </label>
                                <input 
                                    type="text" 
                                    wire:model="new_location.name" 
                                    name='new_location_name'
                                    class="input input-bordered w-3/4 max-w-xs" />
                            </div>
                            @error('new_location.name') <span class="error">{{ $message }}</span> @enderror
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">Location Type</span>
                                </label>
                                <input 
                                    type="text" 
                                    wire:model="new_location.type" 
                                    name='new_location_type'
                                    class="input input-bordered w-3/4 max-w-xs" />
                            </div>
                            @error('new_location.type') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex justify-center w-11/12">
                            <button 
                                class="btn btn-primary"
                                type="submit"
                                name='create_location'>
                                Create
                            </button>
                        </div>
                    </div>
                </form>
                {{-- LIST OF LOCATIONS --}}
                <div class="flex grow flex-col items-center">
                    @foreach ($locations as $location)
                        <div class="flex flex-col background-card w-11/12 items-center gap-2">
                            <div class="text-center">
                                <span>
                                    {{ $location->name }}
                                    @if($location->state)
                                    , {{ $location->state }}
                                    @endif
                                    - ({{$location->id}})
                                </span>
                            </div>
                            <div class="text-center">
                                <span>{{ $location->type }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- OFFICE --}}
            <div class="col-span-1 flex grow flex-col gap-2">
                {{-- CREATE OFFICE --}}
                <form class="flex flex-col gap-6 background-card items-center" wire:submit.prevent="createOffice">
                    <div class="text-center">
                        Create an office
                    </div>
                    <div class="flex-row">                
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Office Name</span>
                            </label>
                            <input 
                                type="text" 
                                wire:model.defer="new_position.name" 
                                name='new_position_name'
                                class="input input-bordered w-3/4 max-w-xs" />
                        </div>
                        @error('new_position.name') <span class="error">{{ $message }}</span> @enderror
                        <div class="flex flex-row">
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">Years Per Term</span>
                                </label>
                                <input 
                                    type="number" 
                                    wire:model.defer="new_position.years_per_term" 
                                    name='new_position_years'
                                    class="input input-bordered w-1/2 max-w-xs" />
                            </div>
                            @error('new_position.years_per_term') <span class="error">{{ $message }}</span> @enderror
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">Term Limits</span>
                                </label>
                                <input 
                                    type="number" 
                                    wire:model.defer="new_position.limit_terms" 
                                    name='new_position_limit'
                                    class="input input-bordered w-1/2 max-w-xs" />
                            </div>
                            @error('new_position.limit_terms') <span class="error">{{ $message }}</span> @enderror
                        </div>  
                    </div>
                    <div class="flex justify-center">
                        <button 
                            class="btn btn-primary" 
                            name='create_office'
                            type="submit">
                            Create
                        </button>
                    </div>
                </form>
                {{-- OFFICE LIST --}}
                <div class="flex grow flex-col items-center">
                    @foreach ($offices as $office)
                        <div class="flex flex-col background-card w-11/12 items-center gap-2">
                            <div class="text-center">
                                <span>{{ $office->name }} - ({{$office->id}})</span>
                            </div>
                            <div class="flex flex-row gap-12">
                                <div class="text-center">
                                    <span>{{ $office->years_per_term }}</span>
                                </div>
                                <div class="text-center">
                                    <span>{{ $office->limit_terms }}</span>
                                </div>
                            </div>                            
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- BALLOT --}}
            <div class="col-span-1 flex grow flex-col gap-2">
                {{-- CREATE BALLOT --}}
                <form class="flex flex-col gap-6 items-center" wire:submit.prevent="createBallot">
                    <div class="flex flex-col background-card w-11/12 gap-2">
                        <div class="text-center">
                            Create a Ballot
                        </div>
                        <div class="flex-row w-11/12">
                            <div class="flex flex-row">
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                      <span class="label-text">Location ID</span>
                                    </label>
                                    <input 
                                        type="number" 
                                        wire:model.defer="new_ballot.location_id" 
                                        name='new_ballot_location'
                                        class="input input-bordered w-11/12 max-w-xs" />
                                </div>
                                @error('new_ballot.location_id') <span class="error">{{ $message }}</span> @enderror
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                      <span class="label-text">Office ID</span>
                                    </label>
                                    <input 
                                        type="number" 
                                        wire:model.defer="new_ballot.office_id" 
                                        name='new_ballot_office'
                                        class="input input-bordered w-11/12 max-w-xs" />
                                </div>
                                @error('new_ballot.office_id') <span class="error">{{ $message }}</span> @enderror
                            </div>  
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                  <span class="label-text">Voting Date</span>
                                </label>
                                <input 
                                    type="date" 
                                    wire:model.defer="new_ballot.voting_date" 
                                    name='new_ballot_date'
                                    class="input input-bordered w-fit" />
                            </div>
                            @error('new_ballot.voting_date') <span class="error">{{ $message }}</span> @enderror     
                        </div>
                        <div class="flex justify-center">
                            <button 
                                class="btn btn-primary" 
                                name='create_ballot'
                                type="submit">
                                Create
                            </button>
                        </div>
                    </div>        
                </form>
                {{-- BALLOT LIST --}}
                <div class="flex grow flex-col items-center">
                    @include('admin.components.ballot-list')
                </div>
            </div>
        </div> 
    @endrole
</div>
