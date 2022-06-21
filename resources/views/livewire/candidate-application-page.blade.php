<div class="flex grow flex-col items-center">
    <div class="w-2/5">
        @if (session()->has('message'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert"">
                {{ session('message') }}
            </div>
        @endif
    </div>
    @if($previous_application)
        <div class="card flex flex-col w-2/5 gap-12">
            <p>
                You submitted an application at {{$previous_application->created_at}}.
            </p>
            <p>
                The current status is: <b>{{$previous_application->status}}</b>.
                <br>
                You will be notified when this is updated.
            </p>
        </div>
    @else
        <form class="flex card justify-center w-2/5" wire:submit.prevent="apply">
            <div class="flex grow flex-col gap-6">
                <div class="flex flex-row gap-6">
                    <div class="flex flex-col gap-1 w-1/2">
                        <div class="flex flex-col">
                            <label>First and Last Name</label>
                            <input class="text-input w-max" type="text" placeholder="Name" value="{{$name}}" wire:model="name">
                        </div>
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                        <div class="flex flex-col">
                            <label>Date Of Birth</label>
                            <input class="text-input w-max" type="date" wire:model="dob">
                        </div>
                        @error('dob') <span class="error">{{ $message }}</span> @enderror
                        <div class="flex grow flex-col">
                            <label>Email</label>
                            <input class="text-input w-max" type="text" placeholder="Email" value="{{$email}}" wire:model="email">
                        </div> 
                        @error('email') <span class="error">{{ $message }}</span> @enderror            
                    </div>
                    <div class="flex flex-col gap-1 w-1/2">
                        <div class="flex flex-col">
                            <label>Name of office</label>
                            <input class="text-input w-max" type="text" placeholder="Senate, School Board" wire:model="office_name">
                        </div>
                        @error('office_name') <span class="error">{{ $message }}</span> @enderror   
                        <div class="flex flex-col">
                            <label>State</label>
                            <input class="text-input w-max" type="text" placeholder="" wire:model="state">
                        </div>
                        @error('state') <span class="error">{{ $message }}</span> @enderror   
                        <div class="flex flex-col">
                            <label>Location</label>
                            <input class="text-input w-max" type="text" placeholder="District, City, County, State" wire:model="location">
                        </div>
                        @error('location') <span class="error">{{ $message }}</span> @enderror   
                    </div>
                </div>
                
                <div class="flex justify-center w-11/12">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Apply</button>
                </div>
            </div>
            {{-- <div class="flex flex-col card gap-2 w-11/12 justify-center"> --}}
                {{-- PROFILE PIC, NAME, LEANING --}}
                {{-- <div class="flex  gap-2"> --}}
                    {{-- TODO: ADD A PHOTO APPROVAL SYSTEM --}}
                    {{-- <div class="flex flex-col gap-2">
                        @if ($photo)
                            Photo Preview:
                            <img class="h-44 w-44" src="{{ $photo->temporaryUrl() }}">
                        @endif
                        <label>Candidate Profile Picture</label>
                        <input type="file" wire:model="photo">
                        @error('photo') <span class="error">{{ $message }}</span> @enderror
                    </div> --}}
                    {{-- NAME --}}
                
                
                {{-- </div> --}}
                {{-- OFFICE LEVEL, LOCATION, OFFICE, EMAIL --}}
                
                
            {{-- </div>  --}}
        </form>
    @endif
</div>
