<form class="flex flex-col background-card w-11/12 items-center gap-4" wire:submit.prevent="save_stances">
    <div class="flex flex-row grow justify-center">
            Controversial Opinions
    </div>
    <div class="flex flex-col text-center gap-8">
        {{-- Future problem, need to do top 5 by votes. --}}
        @foreach ($stances as $i => $stance)
            <div class="flex grow flex-col items-center" wire:key="stance-field-{{ $i }}">
                <div class="flex flex-col grow gap-2 w-11/12">
                    <label class="form-label flex grow justify-center">{{$stance->opinion->name}}</label>
                    <div class="flex grow flex-row gap-4">
                        <div class="w-1/4 text-center">
                            {{$stance->opinion->first_side}}
                        </div>
                        <div class="w-1/2 flex justify-center">
                            <input type="range" wire:key="range-input-{{ $i }}" wire:model.defer="stances.{{ $i }}.value" step="10" class="range range-sm range-secondary"/>
                        </div>
                        <div class="w-1/4 text-center">
                            {{$stance->opinion->second_side}}
                        </div>
                    </div>  
                </div>
                <div class="form-control flex grow w-11/12">
                    <label class="label flex grow justify-center">
                        <span class="label-text">Tell The People why you have this stance</span>
                    </label> 
                    <textarea class="textarea textarea-bordered flex grow" wire:model.defer="stances.{{ $i }}.info" rows="3" ></textarea>
                </div>

                <span class="error">
                    @error('stances.'.$i.'.value') {{ $message }} @enderror
                    @error('stances.'.$i.'.info') {{ $message }} @enderror
                </span>
            </div>
        @endforeach
    </div>
    <div class="flex justify-center">
        <button class="btn btn-primary" type="submit">Save Stances</button>
    </div>
</form>