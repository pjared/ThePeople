<input type="checkbox" id="new-promise" class="modal-toggle" />
<label for="new-promise" class="modal cursor-pointer">
    <label class="modal-box relative" for="">
        <label for="new-promise" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <div class="flex grow flex-col items-center">
            {{-- PROMISE NAME --}}
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">The promise</span>
                </label>
                <input type="text" wire:model.defer="promise.promise" class="input input-bordered w-full max-w-xs" />
            </div>
            @error('promise.promise') <span class="error">{{ $message }}</span> @enderror
            {{-- PROMISE PLAN --}}
            <label class="label">
                <span class="label-text">Tell The People how you plan to implement that promise</span>
            </label> 
            <textarea class="textarea textarea-bordered flex grow w-11/12" wire:model.defer="promise.plan" rows="3" placeholder=""></textarea>
            @error('promise.plan') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="modal-action">
            <label for="new-promise" class="btn btn-primary" wire:click='add_promise'>Add Promise</label>
        </div>
    </label>
</label>                         
