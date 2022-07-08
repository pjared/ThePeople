<div class="flex grow flex-col items-center" x-data="{show: false}">
    <button class="flex background-card w-11/12" type="button" x-on:click="show = ! show" :class="{ 'rounded-b-none': show }">
        <div class="flex grow justify-center">
            <span>Click on me to add a position</span>
        </div>
    </button>
    <div class="flex background-card rounded-t-none w-11/12" x-show="show" x-transition>
        <div class="flex grow flex-col items-center gap-2">
            <div class="flex grow flex-row gap-4">
                <div class="form-control w-1/2 max-w-xs">
                    <label class="label">
                        <span class="label-text">Position Name</span>
                    </label>
                    <input type="text" wire:model.defer="position.position_name" class="input input-bordered w-full max-w-xs" />
                </div>
                <div class="flex grow justify-end">
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Year Start</span>
                        </label>
                        <input type="number" wire:model.defer="position.year_start" class="input input-bordered w-3/4 max-w-xs" />
                    </div>         
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Year End</span>
                        </label>
                        <input type="number" wire:model.defer="position.year_end" class="input input-bordered  w-3/4 max-w-xs" />
                    </div>
                </div>
            </div>
            <div class="form-control flex grow">
                <label class="label">
                    <span class="label-text">Tell The People about your best accomplishments while in that office</span>
                </label> 
                <textarea class="textarea textarea-bordered flex grow" wire:model.defer="position.description" rows="3"></textarea>
            </div>
            <button wire:click='add_position' class="btn btn-primary mt-2">Add Position</button>
            <span class="error">
                @error('positions.position_name') {{ $message }} @enderror
                @error('positions.year_start') {{ $message }} @enderror
                @error('positions.year_end') {{ $message }} @enderror
                @error('positions.description') {{ $message }} @enderror
            </span>
        </div>
    </div>
</div>