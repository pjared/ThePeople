<div class="flex flex-col background-card w-11/12 items-center justify-center">
    <div class="flex">
        Your promises for this term in office
    </div>
    <div x-data="{show:false}" class="flex grow flex-col w-11/12 gap-2">
        @foreach ($promises as $i => $promise)
            <div class="flex grow flex-col items-center">
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Promise</span>
                    </label>
                    <input type="text" wire:model.defer="promises.{{ $i }}.promise" class="input input-bordered w-3/4 max-w-xs" />
                    <label class="label">
                        <span class="label-text">Plan</span>
                    </label>
                    <textarea class="textarea textarea-bordered flex grow" wire:model.defer="promises.{{ $i }}.plan"></textarea>
                </div>
                {{-- TODO: ADD DELETE AND UPDATE BUTTONS --}}
                <span class="error">
                    @error('promises.'.$i.'.promise') {{ $message }} @enderror
                    @error('promises.'.$i.'.plan') {{ $message }} @enderror
                </span>
                <div class="flex grow flex-row justify-center">
                    <button class="btn btn-error" wire:click="delete_promise({{$promise->id}})">Delete Promise</button>
                </div>
            </div>
        @endforeach
        @if(count($promises) >= 1)
            <div class="flex grow justify-center">
                <button class="btn btn-primary w-1/4" wire:click='update_promises'>Update Promises</button>
            </div>                   
        @endif        
        @if(count($promises) < 5)
            <livewire:candidate-edit.add-promise :candidate_id="$candidate_id" :wire:key="'add-promise'.$candidate_id">                        
        @endif
    </div>
</div>