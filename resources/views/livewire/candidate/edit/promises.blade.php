<div class="flex flex-col background-card w-11/12 items-center justify-center">
    <div class="flex">
        Your promises for reform/promises of personal values
    </div>
    <div x-data="{show:false}" class="flex grow flex-col w-11/12 gap-2">
        <div class="carousel w-full">
            @foreach ($promises as $i => $promise)
                <div id="promise-{{$i}}" class="carousel-item w-full">
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
                </div>
            @endforeach            
        </div>
        <div class="flex justify-center w-full py-2 gap-2">
            @foreach ($promises as $i => $promise)
                <a href="#promise-{{$i}}" class="btn btn-xs">{{$i + 1}}</a>
            @endforeach
        </div>
        
        @if(count($promises) >= 1)
            <div class="flex grow justify-center">
                <button class="btn btn-primary w-1/4" wire:click='update_promises'>Update Promises</button>
            </div>                   
        @endif        
        @if(count($promises) < 5)
            <label class="btn btn-primary" for="new-promise">Add A Promise</label>

            @include('modals.new-promise')
            {{-- <livewire:candidate-edit.add-promise :candidate_id="$candidate_id" :wire:key="'add-promise'.$candidate_id">                         --}}
        @endif
    </div>
</div>

