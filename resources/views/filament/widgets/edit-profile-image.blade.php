<x-filament::widget>
    <x-filament::card>
        <div class="flex flex-col p-4 gap-6 items-center">
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body bg-white">
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
                                {{-- <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-full h-20 w-20 object-cover"> --}}
                                <img
                                    src="{{ $candidate->profile_photo_url }}"
                                    alt="{{ $candidate->name }}"
                                    class="rounded-full h-20 w-20 object-cover">
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
    </x-filament::card>
</x-filament::widget>
