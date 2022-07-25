<input type="checkbox" id="new-video" class="modal-toggle" />
<label for="new-video" class="modal cursor-pointer">
    <label class="modal-box relative" for="">
        <label for="new-video" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <div class="flex grow flex-col items-center">
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Video Link</span>
                </label>
                <input type="text" wire:model.defer="video.link" class="input input-bordered w-full max-w-xs" />
            </div>
            @error('video.link') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="modal-action">
            <label for="new-video" class="btn btn-primary" wire:click='add_video'>Add Video</label>
        </div>
    </label>
</label>                         
