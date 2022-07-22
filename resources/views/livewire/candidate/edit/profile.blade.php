<div class="flex grow">
    <div class="flex grow justify-center">            
        {{-- LEFT COLUMN --}}
        <div class="flex flex-col w-1/2 gap-2 p-4">
            {{-- BIO,PROMISES, PREVIOUS POSITIONS, INFO --}}
            <div class="flex flex-col p-2 w-11/12 items-center gap-6">

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
                {{-- BIO --}}
                <form class="flex background-card grow flex-col w-11/12 gap-2" wire:submit.prevent="save_bio">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Your bio</span>
                        </label> 
                        <textarea class="textarea textarea-bordered flex grow" wire:model.defer="candidate.bio" rows="3" placeholder=""></textarea>
                    </div>
                    <div class="flex justify-center">
                        <button class="btn btn-primary" type="submit">Save Bio</button>
                    </div>
                </form>
                
                {{-- PROMISE FLASH MESSAGE --}}
                @if (session()->has('update-promise-success'))
                    <div class="alert alert-success shadow-lg flex w-11/12">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>{{session('update-promise-success')}}</span>
                        </div>
                    </div>
                @elseif(session()->has('update-promise-failure'))
                    <div class="alert alert-error shadow-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>{{session('update-promise-failure')}}</span>
                        </div>
                    </div>
                @endif
                {{-- CANDIDATE PROMISES --}}
                <livewire:candidate.edit.promises :candidate_id="$candidate->id" :promises="$candidate->promises" :wire:key="'candidate-promises'.$candidate->id">

                {{-- PREVIOUS POSITIONS FLASH MESSAGE --}}
                @if (session()->has('update-position-success'))
                    <div class="alert alert-success shadow-lg flex w-11/12">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>{{session('update-position-success')}}</span>
                        </div>
                    </div>
                @elseif(session()->has('update-position-failure'))
                    <div class="alert alert-error shadow-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>{{session('update-position-failure')}}</span>
                        </div>
                    </div>
                @endif
                {{-- PREVIOUS POSITIONS --}}                
                <livewire:candidate.edit.positions :candidate_id="$candidate->id" :positions="$candidate->previous_positions" :wire:key="'candidate-positions'.$candidate->id">

                {{-- CANDIDATE INFO FLASH MESSAGE --}}
                @if (session()->has('update-info-success'))
                    <div class="alert alert-success shadow-lg flex w-11/12">
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
                {{-- CANDIDATE INFO --}}
                <form class="flex flex-col background-card w-11/12 items-center gap-4" wire:submit.prevent="save_info">                  
                    {{-- POLITICAL PARTY, CANDIDATE PERSONAL SITE --}}
                    <div class="flex flex-row gap-4">
                        {{-- POLITICAL PARTY --}}
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
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
                            </select>
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
                    <div class="flex flex-col gap-5 text-center">
                        @if($candidate->ballot)
                            <div class="form-control items-center">
                                <label class="label cursor-pointer w-2/5">
                                <span class="label-text">Show my profile on the ballot</span> 
                                <input type="checkbox" wire:model.defer="show" class="checkbox checkbox-primary" />
                                </label>
                            </div>
                            You will be placed on the {{$candidate->ballot->location->name}} {{$candidate->ballot->office->name}} ballot, in the state of {{$candidate->state}}. If this is incorrect, please contact customer support.
                        @else
                            We have not placed you on a ballot yet. You will be notified when we have done this
                        @endif
                    </div>
                    <button class="btn btn-primary" type="submit">Save Info</button>
                </form>
            </div>
        </div> 
        {{-- RIGHT COLUMN --}}
        <div class="flex flex-col w-1/2 p-5 gap-6">
            {{-- CONTROVERSIAL OPINIONS --}}
            @if ($this->candidate->ballot)
                @include('candidate.edit.opinions', ['opinions' => $candidate->ballot->opinions])
            @else 
                <div class="flex">
                    <span class="text-center justify-center">We have not placed you on a ballot yet. You will be notified when we have done this so you can fill out your controversial opinons</span>
                </div>
            @endif
            
            {{-- TODO: PUT CANDIDATE VIDEOS HERE --}}
            
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
</div>
