<div class="flex flex-row">
    @include('candidate.aside')
    {{-- The best athlete wants his opponent at his best. --}}

    <div class="flex flex-col w-full h-inherit items-center justify-center">
        {{-- BIO FLASH MESSAGE --}}
        @if (session()->has('update-bio-success'))
            <div class="alert alert-success shadow-lg flex w-11/12">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>Your bio has been updated!</span>
                </div>
            </div>
        @elseif(session()->has('update-bio-failure'))
            <div class="alert alert-error shadow-lg">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>Error! Your bio did not updated. Please check your input and try again</span>
                </div>
            </div>
        @endif
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
