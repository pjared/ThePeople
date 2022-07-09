<input type="checkbox" id="new-stance-modal-{{$id}}" class="modal-toggle" />
<label for="new-stance-modal-{{$id}}" class="modal cursor-pointer">
    <label class="modal-box relative" for="">
        <label for="new-stance-modal-{{$id}}" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        {{-- STANCE LABEL --}}
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">Stance Label</span>
            </label>
            <input type="text" 
            class="input input-bordered input-primary w-full" 
            wire:model.defer="stance.stance_label" placeholder="Ex: Pro-Choice, Responsible Gun Ownership, Government Responsibility"/>
        </div>
        @error('stance.stance_label') <span class="error">{{ $message }}</span> @enderror  
        
        {{-- STANCE REASONING --}}
        <label class="label flex grow justify-center">
            <span class="label-text">Reasoning behind stance.</span>
        </label> 
        <textarea class="textarea textarea-bordered flex grow w-full" wire:model.defer="stance.stance_reasoning" rows="3"></textarea>
        <span class="error">
            @error('stance.stance_reasoning') {{ $message }} @enderror
        </span>
        <div class="modal-action">
            <button for="new-stance-modal-{{$id}}" class="btn btn-primary" wire:click='add_stance'>Save Stance</button>
        </div>
    </label>
</label>