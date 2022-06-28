<div class="flex grow flex-col items-center" x-data="{show: false}">
    <button class="flex background-card w-11/12" type="button" x-on:click="show = ! show" :class="{ 'rounded-b-none': show }">
        <div class="flex grow justify-center">
            <span>Click on me to add a promise</span>
        </div>
    </button>
    <div class="flex background-card rounded-t-none w-11/12" x-show="show" x-transition>
        <div class="flex grow flex-col items-center">
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">The promise</span>
                </label>
                <input type="text" wire:model.defer="promise.promise" class="input input-bordered w-full max-w-xs" />
            </div>
            @error('promise.promise') <span class="error">{{ $message }}</span> @enderror
            <label class="label">
                <span class="label-text">Tell The People how you plan to implement that promise</span>
            </label> 
            <textarea class="textarea textarea-bordered flex grow w-11/12" wire:model.defer="promise.plan" rows="3" placeholder=""></textarea>
            @error('promise.plan') <span class="error">{{ $message }}</span> @enderror
            <button wire:click='add_promise' class="btn btn-primary mt-2">Add Promise</button>
        </div>
    </div>
</div>                            
