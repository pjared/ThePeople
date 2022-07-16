<input type="checkbox" id="new-position" class="modal-toggle" />
<label for="new-position" class="modal cursor-pointer">
    <label class="modal-box relative" for="">
        <label for="new-position" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <div class="flex grow flex-col items-center gap-2">
            <div class="flex grow flex-row gap-4">
                <div class="form-control w-1/2 max-w-xs">
                    <label class="label">
                        <span class="label-text">Position Name</span>
                    </label>
                    <input type="text" wire:model.defer="position.position_name" class="input input-bordered w-full max-w-xs" />
                    @error('positions.position_name') {{ $message }} @enderror
                </div>
                <div class="flex grow justify-end">
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Year Start</span>
                        </label>
                        <input type="number" wire:model.defer="position.year_start" class="input input-bordered w-3/4 max-w-xs" />
                        @error('positions.year_start') {{ $message }} @enderror
                    </div>         
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Year End</span>
                        </label>
                        <input type="number" wire:model.defer="position.year_end" class="input input-bordered  w-3/4 max-w-xs" />
                        @error('positions.year_end') {{ $message }} @enderror
                    </div>
                </div>
            </div>
            <div class="form-control flex grow">
                <label class="label">
                    <span class="label-text">Tell The People about your best accomplishments while in that office</span>
                </label> 
                <textarea class="textarea textarea-bordered flex grow" wire:model.defer="position.description" rows="3"></textarea>
                @error('positions.description') {{ $message }} @enderror
            </div>
        </div>
        <div class="modal-action">
            <label for="new-position" class="btn btn-primary" wire:click='add_position'>Add Promise</label>
        </div>
    </label>
</label>                         
