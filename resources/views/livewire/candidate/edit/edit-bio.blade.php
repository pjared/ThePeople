<div class="flex flex-row">
    @include('candidate.aside')
    {{-- The best athlete wants his opponent at his best. --}}

    <div class="flex flex-col w-full h-inherit items-center justify-center">
        {{-- BIO FLASH MESSAGE --}}
        @include('components.flash', ['name' => 'bio'])

        <div class="flex flex-row w-full justify-between">
            {{-- LEFT COLUMN (Edit) --}}
            <div class="flex flex-col w-1/2 gap-2 p-4 items-center">
                <h1 class="text-xl">Edit Your Bio</h1>
                <form class="flex flex-col background-card h-fit w-full justify-center items-center gap-4" wire:submit.prevent="save_bio">
                    <div class="form-control w-11/12">
                        <label class="label">
                            <span class="label-text">Your bio</span>
                        </label> 
                        <textarea class="textarea textarea-bordered" wire:model.defer="candidate.bio" rows="3" placeholder=""></textarea>
                    </div>
                    <div class="flex justify-center">
                        <button class="btn btn-primary" type="submit">Save Bio</button>
                    </div>
                </form>
            </div> 
            {{-- RIGHT COLUMN (Preview) --}}
            <div class="flex flex-col w-1/2 p-4 gap-6 items-center">
                <h1 class="text-xl">Bio Preview</h1>
                @include('candidate.component.bio', ['bio' => $candidate->bio])
            </div>
        </div>
    </div>
</div>
