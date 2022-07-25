<div class="flex flex-row">
    @include('candidate.aside')

    {{-- CANDIDATE INFO --}}
    <div class="flex flex-col w-full h-inherit items-center justify-center">
        {{-- CANDIDATE INFO FLASH MESSAGE --}}
        @if (session()->has('update-info-success'))
        <div class="alert alert-success shadow-lg flex w-2/5">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>Your info has been updated!</span>
            </div>
        </div>
        @elseif(session()->has('update-info-failure'))
            <div class="alert alert-error shadow-lg">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>Error! Your info did not updated. Please check your input and try again</span>
                </div>
            </div>
        @endif
    
        <form class="flex flex-col background-card h-fit w-fit justify-center items-center gap-4" wire:submit.prevent="save_info">                  
            {{-- POLITICAL PARTY, CANDIDATE PERSONAL SITE --}}
            <div class="flex flex-row gap-4">
                {{-- POLITICAL PARTY --}}
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Political Party</span>
                    </label>
                    <input type="text" wire:model.defer="candidate.party_name" class="input input-bordered w-full max-w-xs" />
                    @error('video_link') {{ $message }} @enderror
                    {{-- <label class="label">
                        <span class="label-text">Political Party</span>
                    </label>
                    <select class="select select-bordered" wire:model.defer="candidate.party_id">
                        @foreach($political_parties as $party)
                            @if($party->id == $candidate->party_id)
                                <option value="{{$party->id}}" selected>{{$party->name}}</option>
                            @else
                                <option value="{{$party->id}}">{{$party->name}}</option>
                            @endif
                        @endforeach
                    </select> --}}
                    <span class="error">
                        @error('candidate.party_id') {{ $message }} @enderror
                    </span> 
                </div>
                {{-- SITE LINK --}}
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Your Website Link</span>
                        <span class="label-text-alt">(optional)</span>
                    </label>
                    <input type="text" wire:model.defer="candidate.site_link" class="input input-bordered w-full max-w-xs" />
                    <span class="error">
                        @error('candidate.site_link') {{ $message }} @enderror
                    </span> 
                </div>
            </div>

            {{-- CONTACT EMAIL, PHONE --}}
            <div class="flex flex-row gap-5">
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Contact Email</span>
                    </label>
                    <input type="text" wire:model.defer="candidate.contact_email" class="input input-bordered w-full max-w-xs" />
                </div>
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Contact Phone</span>
                        <span class="label-text-alt">(optional)</span>
                    </label>
                    <input type="text" wire:model.defer="candidate.contact_phone" class="input input-bordered w-full max-w-xs" />
                </div>
                <span class="error">
                    @error('candidate.contact_email') {{ $message }} @enderror
                    @error('candidate.contact_phone') {{ $message }} @enderror
                </span>  
            </div>

            {{-- PUBLIC EMAIL, PHONE --}}
            <div class="flex flex-row gap-5">
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Public Email</span>
                        <span class="label-text-alt">(optional)</span>
                    </label>
                    <input type="text" wire:model.defer="candidate.email" class="input input-bordered w-full max-w-xs" />
                </div>
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Public Phone</span>
                        <span class="label-text-alt">(optional)</span>
                    </label>
                    <input type="text" wire:model.defer="candidate.phone" class="input input-bordered w-full max-w-xs" />
                </div>
                <span class="error">
                    @error('candidate.email') {{ $message }} @enderror
                    @error('candidate.phone') {{ $message }} @enderror
                </span>          
            </div>
            <button class="btn btn-primary" type="submit">Save Info</button>
        </form>
    </div>
</div>
