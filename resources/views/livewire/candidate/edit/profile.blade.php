<div class="flex grow">
    @include('candidate.aside')
    <div class="flex grow justify-center">
        {{-- LEFT COLUMN --}}
        <div class="flex flex-col w-1/2 gap-2 p-4">
            {{-- BIO,PROMISES, PREVIOUS POSITIONS, INFO --}}
            <div class="flex flex-col p-2 w-11/12 items-center gap-6">
                {{-- TODO: PUT CANDIDATE VIDEOS HERE --}}

                <div class="flex flex-col background-card w-11/12 items-center">
                    <div class="flex">
                        Campaign Videos
                    </div>
                    <div class="flex flex-col flex-grow w-11/12 gap-2">
                        <div class="form-control w-1/2 max-w-xs">
                            <label class="label">
                                <span class="label-text">Video Link</span>
                            </label>
                            <input type="text" wire:model.defer="video_link" class="input input-bordered w-full max-w-xs" />
                            @error('video_link') {{ $message }} @enderror
                        </div>
                        {{-- ADD A VIDEO --}}
                        <label class="btn btn-primary" for="new-position">Add A Video</label>
                    
                        @include('modals.new-position')
                        {{-- @if(count($positions) >= 1)
                            <div class="flex grow justify-center">
                                <button class="btn btn-info w-1/4" wire:click='update_positions'>Update Positions</button>
                            </div>                   
                        @endif
                        @if(count($positions) < 5)
                            
                        @endif --}}
                    </div>    
                </div>
            </div>
        </div> 
        {{-- RIGHT COLUMN --}}
        <div class="flex flex-col w-1/2 p-4 gap-6">          

            {{-- OTHER OPINIONS --}}
            {{-- <div class="mt-4" id="opinionsInfo">
                <div style="width:95%" class="background-card background-card-body" type="button" data-bs-toggle="collapse" data-bs-target="#opinionsInfoCollapse" aria-expanded="false" aria-controls="multiCollapseExample2">
                    <div class="row">
                        <div class="col text-center">
                            Other Opinions
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                    </div>
                    TODO: Allow to add for an other opinions
                </div>
            </div> --}}
        </div>
    </div>

    <div class="flex flex-row grow justify-center">
        {{-- LEFT COLUMN (Edit) --}}
        <div class="flex flex-col w-1/2 gap-2 p-4">
            
        </div> 
        {{-- RIGHT COLUMN (Preview) --}}
        <div class="flex flex-col w-1/2 p-4 gap-6">
        </div>
    </div>
</div>
