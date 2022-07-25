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
    
        <div class="flex flex-row w-full justify-between">
            {{-- LEFT COLUMN (Edit) --}}
            <div class="flex flex-col w-1/2 gap-2 p-4 items-center">
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
                            <span class="error">
                                @error('candidate.party_name') {{ $message }} @enderror
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
            {{-- RIGHT COLUMN (Preview) --}}
            <div class="flex flex-col w-1/2 p-4 gap-6 items-center">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <div class="card-body">
                        <form wire:submit.prevent="update_photo">                            
                            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                                <!-- Profile Photo File Input -->
                                <input type="file" class="hidden"
                                            wire:model="photo"
                                            x-ref="photo"
                                            x-on:change="
                                                    photoName = $refs.photo.files[0].name;
                                                    const reader = new FileReader();
                                                    reader.onload = (e) => {
                                                        photoPreview = e.target.result;
                                                    };
                                                    reader.readAsDataURL($refs.photo.files[0]);
                                            " />
                                <x-jet-label for="photo" value="{{ __('Photo') }}" />
        
                                <!-- Current Profile Photo -->
                                <div class="mt-2" x-show="! photoPreview">
                                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-full h-20 w-20 object-cover">
                                </div>
        
                                <!-- New Profile Photo Preview -->
                                <div class="mt-2" x-show="photoPreview" style="display: none;">
                                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                        x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                    </span>
                                </div>
        
                                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                                    {{ __('Select A New Photo') }}
                                </x-jet-secondary-button>
        
                                @if (Auth::user()->profile_photo_path)
                                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                                        {{ __('Remove Photo') }}
                                    </x-jet-secondary-button>
                                @endif
        
                                <x-jet-input-error for="photo" class="mt-2" />
                            </div>
                            <div class="card-actions justify-end mt-2">
                                <button class='btn' type='submit'>Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
