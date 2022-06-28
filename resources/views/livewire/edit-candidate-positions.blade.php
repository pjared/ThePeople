<div class="flex flex-col background-card w-11/12 items-center">
    <div class="flex">
        Previous Poisitons in Public Office
    </div>
    <div class="flex flex-col flex-grow w-11/12">
        @foreach ($positions as $i => $position)
            <div class="flex grow flex-row gap-4">
                <div class="form-control w-1/2 max-w-xs">
                    <label class="label">
                        <span class="label-text">Position Name</span>
                    </label>
                    <input type="text" wire:model.defer="positions.{{ $i }}.position_name" class="input input-bordered w-full max-w-xs" />
                </div>
                @error('positions.{{ $i }}.position_name') <span class="error">{{ $message }}</span> @enderror    
                <div class="flex grow justify-end">
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Year Start</span>
                        </label>
                        <input type="number" wire:model.defer="positions.{{ $i }}.year_start" class="input input-bordered w-3/4 max-w-xs" />
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
            </div>
            <span class="error">
                @error('positions.'.$i.'.position_name') {{ $message }} @enderror
                @error('positions.'.$i.'.year_start') {{ $message }} @enderror
                @error('positions.'.$i.'.year_end') {{ $message }} @enderror
                @error('positions.'.$i.'.description') {{ $message }} @enderror
            </span>
        @endforeach
        @if(count($positions) < 5)
            <livewire:candidate-add-position :candidate_id="$candidate_id" wire:key="'candidate-add-position'.$candidate_id">
        @endif
    </div>    
</div>