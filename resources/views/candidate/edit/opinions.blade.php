<div class="flex flex-col background-card w-11/12 items-center gap-4">
    <div class="flex flex-row grow justify-center">
            Controversial Opinions
    </div>
    <div class="flex flex-col text-center w-11/12 gap-8">
        @foreach ($opinions as $opinion)
            <div class="flex grow flex-col items-center">
                <div class="flex flex-col grow gap-2 w-11/12">
                    <label class="form-label flex grow justify-center">{{$opinion->name}}</label>
                </div>
                <div class="form-control flex grow w-11/12">
                    <livewire:candidate.edit.stances :opinion="$opinion" wire:key='opinion-{{$opinion->id}}'/>
                </div>
            </div>
        @endforeach 
    </div>
</div>
