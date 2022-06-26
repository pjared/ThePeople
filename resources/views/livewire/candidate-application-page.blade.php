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
        <form class="flex flex-col background-card gap-2">
            <div class="grid grid-cols-2 gap-12">
                <div class="col-span-1 grid grid-rows-4 w-1/2">
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">First and Last Name</span>
                            </label>
                            <input type="text" class="input input-bordered input-primary w-full max-w-xs" wire:model="name"/>
                        </div>
                    </div>
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Date Of Birth</span>
                            </label>
                            <input type="date" class="input input-bordered input-primary w-fit max-w-xs" wire:model="dob"/>
                        </div>
                    </div>
                    @error('dob') <span class="error">{{ $message }}</span> @enderror
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Email</span>
                            </label>
                            <input type="text" class="input input-bordered input-primary w-fit max-w-xs" wire:model="email"/>
                        </div>
                    </div> 
                    @error('email') <span class="error">{{ $message }}</span> @enderror      
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Phone Number</span>
                            </label>
                            <input type="text" class="input input-bordered input-primary w-fit max-w-xs" wire:model="phone_number"/>
                        </div>
                    </div> 
                    @error('phone_number') <span class="error">{{ $message }}</span> @enderror            
                </div>
                <div class="col-span-1 grid grid-rows-4 w-1/2">
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Name of office</span>
                            </label>
                            <input type="text" class="input input-bordered input-primary w-fit max-w-xs" wire:model="office_name"/>
                        </div>
                    </div>
                    @error('office_name') <span class="error">{{ $message }}</span> @enderror   
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">State</span>
                            </label>
                            <input type="text" class="input input-bordered input-primary w-fit max-w-xs" wire:model="state"/>
                        </div>
                    </div>
                    @error('state') <span class="error">{{ $message }}</span> @enderror   
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Location</span>
                            </label>
                            <input type="text" class="input input-bordered input-primary w-fit max-w-xs" wire:model="location"/>
                        </div>
                    </div>
                    @error('location') <span class="error">{{ $message }}</span> @enderror   
                </div>
            </div>
            <div class="flex justify-center w-11/12">
                <button class="btn btn-primary btn-blue" type="submit">Apply</button>
            </div>
        </form>
    @endif

    {{-- <div class="flex flex-col card gap-2 w-11/12 justify-center"> --}}
        {{-- PROFILE PIC --}}
        {{-- <div class="flex  gap-2"> --}}
            {{-- TODO: ADD A PHOTO APPROVAL SYSTEM?? --}}
            {{-- <div class="flex flex-col gap-2">
                @if ($photo)
                    Photo Preview:
                    <img class="h-44 w-44" src="{{ $photo->temporaryUrl() }}">
                @endif
                <label>Candidate Profile Picture</label>
                <input type="file" wire:model="photo">
                @error('photo') <span class="error">{{ $message }}</span> @enderror
            </div> --}}
        {{-- </div> --}}
    {{-- </div>  --}}
</div>
