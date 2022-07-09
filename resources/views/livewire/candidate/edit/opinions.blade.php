<form class="flex flex-col background-card w-11/12 items-center gap-4" wire:submit.prevent="save_stances">
    <div class="flex flex-row grow justify-center">
            Controversial Opinions
    </div>
    <div class="flex flex-col text-center w-11/12 gap-8">
        {{-- Future problem, need to do top 5 by votes. --}}
        @foreach ($stances as $i => $stance)
            <div class="flex grow flex-col items-center" wire:key="stance-field-{{ $i }}">
                <div class="flex flex-col grow gap-2 w-11/12">
                    <label class="form-label flex grow justify-center">{{$stance->opinion->name}}</label>
                </div>
                <div class="form-control flex grow w-11/12">
                    <div class="form-control w-full">
                        <label class="label">
                          <span class="label-text">Stance Label</span>
                        </label>
                        <input type="text" 
                        class="input input-bordered input-primary w-full" 
                        wire:model.defer="stances.{{ $i }}.stance_label" placeholder="Ex: Pro-Choice, Responsible Gun Ownership, Government Responsibility"/>
                    </div>
                    @error('stances.{{ $i }}.stance_label') <span class="error">{{ $message }}</span> @enderror  
                    <label class="label flex grow justify-center">
                        <span class="label-text">Reasoning behind stance.</span>
                    </label> 
                    <textarea class="textarea textarea-bordered flex grow w-full" wire:model.defer="stances.{{ $i }}.stance_info" rows="3"></textarea>
                </div>

                <span class="error">
                    @error('stances.'.$i.'.stance_info') {{ $message }} @enderror
                </span>

                {{-- ADD THE CAROUSEL FUNCTIONALITY HERE --}}
                <div class="carousel w-full">
                    <div id="item1" class="carousel-item w-full">

                    </div>
                </div>
                <div class="flex justify-center w-full py-2 gap-2">
                    <a href="#item1" class="btn btn-xs">1</a>
                </div>

                <button class="btn btn-primary mt-2">Add Another Stance</button>
            </div>
        @endforeach
    </div>
    <div class="flex justify-center">
        <button class="btn btn-primary" type="submit">Save Stances</button>
    </div>
</form>