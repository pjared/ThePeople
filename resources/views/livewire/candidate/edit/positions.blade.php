<div class="flex flex-col background-card w-11/12 items-center">
    <div class="flex">
        Previous Political Positions
    </div>
    <div class="flex flex-col flex-grow w-11/12 gap-2">
        <div class="carousel w-full">
            @foreach ($positions as $i => $position)
                <div id="position-{{$i}}" class="carousel-item flex-col w-full">
                    <div class="flex grow flex-row gap-4">
                        <div class="form-control w-1/2 max-w-xs">
                            <label class="label">
                                <span class="label-text">Position Name</span>
                            </label>
                            <input type="text" wire:model.defer="positions.{{ $i }}.position_name" class="input input-bordered w-full max-w-xs" />
                            @error('positions.'.$i.'.position_name') {{ $message }} @enderror
                        </div>
                        @error('positions.{{ $i }}.position_name') <span class="error">{{ $message }}</span> @enderror    
                        <div class="flex grow justify-end">
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text">Year Start</span>
                                </label>
                                <input type="number" wire:model.defer="positions.{{ $i }}.year_start" class="input input-bordered w-3/4 max-w-xs" />
                                @error('positions.'.$i.'.year_start') {{ $message }} @enderror
                            </div>         
                            @error('positions.{{ $i }}.year_start') <span class="error">{{ $message }}</span> @enderror
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text">Year End</span>
                                </label>
                                <input type="number" wire:model.defer="positions.{{ $i }}.year_end" class="input input-bordered  w-3/4 max-w-xs" />
                            </div>
                            @error('positions.{{ $i }}.year_end') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-control flex grow">
                        <label class="label">
                            <span class="label-text">Tell The People about your best accomplishments while in that office</span>
                        </label> 
                        <textarea class="textarea textarea-bordered flex grow" wire:model.defer="positions.{{ $i }}.description"></textarea>
                        @error('positions.'.$i.'.description') {{ $message }} @enderror
                    </div>
                    <div class="flex grow flex-row justify-center">
                        <button class="btn btn-error" wire:click="delete_position({{$position->id}})">Delete Positions</button>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center w-full py-2 gap-2">
            @foreach ($positions as $i => $position)
                <a href="#position-{{$i}}" class="btn btn-xs">{{$i + 1}}</a>
            @endforeach
        </div>
        {{-- ADD A POSITION --}}
        @if(count($positions) >= 1)
            <div class="flex grow justify-center">
                <button class="btn btn-info w-1/4" wire:click='update_positions'>Update Positions</button>
            </div>                   
        @endif
        @if(count($positions) < 5)
            <label class="btn btn-primary" for="new-position">Add A Position</label>

            @include('modals.new-position')
        @endif
    </div>    
</div>