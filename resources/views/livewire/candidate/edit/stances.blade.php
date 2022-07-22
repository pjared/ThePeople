<div x-data="{show: false}">
    {{-- {{dd("'update-stance-success-$opinion->id'")}} --}}
    @if (session()->has('update-stance-success-' . $opinion->name))
        <div class="alert alert-success shadow-lg flex w-11/12">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>Your stances have been updated!</span>
            </div>
        </div>
    @elseif(session()->has('update-stance-failure-' . $opinion->name))
        <div class="alert alert-error shadow-lg">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>Error! Your stances did not updated. Please check your input and try again</span>
            </div>
        </div>
    @elseif(session()->has('delete-stance-' . $opinion->name))
        <div class="alert alert-error shadow-lg">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>Stance deleted</span>
            </div>
        </div>
    @endif
    <div class="carousel w-full">
        @foreach ($stances as $i => $stance)
            <div id="{{$opinion->name}}-item-{{$i}}" class="carousel-item w-full">
                {{-- STANCE LABEL --}}
                <div class="flex flex-col w-full items-center gap-2">
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Stance Label</span>
                        </label>
                        <input type="text" 
                        class="input input-bordered input-primary w-full" 
                        wire:model.defer="stances.{{ $i }}.stance_label" placeholder="Ex: Pro-Choice, Responsible Gun Ownership, Government Responsibility"/>
                    </div>
                    @error('stances.{{ $i }}.stance_label') <span class="error">{{ $message }}</span> @enderror  
    
                    {{-- STANCE REASONING --}}
                    <label class="label flex grow justify-center">
                        <span class="label-text">Reasoning behind stance.</span>
                    </label> 
                    <textarea class="textarea textarea-bordered flex grow w-full" wire:model.defer="stances.{{ $i }}.stance_reasoning" rows="3"></textarea>
                    <span class="error">
                        @error('stances.'.$i.'.stance_reasoning') {{ $message }} @enderror
                    </span>
                    <button class="btn btn-error w-2/5" wire:click="delete_stance({{$stance->id}})">Delete Stance</button>
                </div>
            </div>
        @endforeach   
    </div>
    <div class="flex justify-center w-full py-2 gap-2">
        @foreach ($stances as $i => $stance)
            <a href="#{{$opinion->name}}-item-{{$i}}" class="btn btn-xs">{{$i}}</a>
        @endforeach
    </div>

    <div class="flex flex-row justify-center gap-2">
    @if (count($stances) < 3)
            <label class="btn btn-primary" for="new-stance-modal-{{$opinion->id}}">Add Another Stance</label>
        
        @include('modals.new-stance', ['id' => $opinion->id])
    @endif
    @if (count($stances) >= 1)
        <button class="btn btn-info" wire:click='save_stances'>Save Stances</button>
    @endif
    </div>
</div>
