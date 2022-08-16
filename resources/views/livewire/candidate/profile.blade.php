<div>
    @if($this->is_manual)
        <div class='flex w-full justify-center'>
            <div class="alert alert-warning shadow-lg w-1/2">
                <div class='w-full'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                    <p class='w-full text-center'>
                        This user was created by ComnRep,LLC. The information is not garunteed to be accurate.
                        <br>
                        Reason: {{$candidate->manual_candidate->note}}
                    </p>
                    <span></span>
                </div>
            </div>
        </div>
    @endif
    <div class="flex flex-col md:grid md:grid-cols-2 p-8 gap-2 justify-center w-full">
        {{-- LEFT COLUMN --}}
        <div class="flex flex-col grow gap-6 items-center">
            {{-- CANDIDATE PERSONAL INFO --}}
            <div class="flex flex-col md:flex-row gap-6 w-11/12 justify-center">
                <img src="{{ $is_manual ?? $candidate->user->profile_photo_url }}" alt="{{ $candidate->name }}" class="h-44 w-44">
                {{-- class="rounded-full object-cover" --}}
                <div class="flex flex-col">
                    <div>
                        Name: {{ $candidate->name }}
                    </div>
                    <div>
                        {{-- Party: {{ $candidate->party_name }} --}}
                    </div>
                    <div>
                        @if($candidate->ballot)
                            Running For: {{ $candidate->ballot->location->state }}
                            {{ $candidate->ballot->office->name }},
                            {{ $candidate->ballot->location->name }}
                        @endif
                    </div>
                    <div>
                        @if($candidate->public_email)
                            Email Candiate: {{ $candidate->public_email }}
                        @endif
                    </div>
                </div>
            </div>
            {{-- DROPDOWNS: DONORS AND PREVIOUS POSITIONS --}}
            <div class="flex flex-col gap-6 md:w-11/12 items-center">
                {{-- BIO COMPONENT --}}
                @include('candidate.component.bio', ['bio' => $candidate->bio])

                {{-- CAMPAIGN VIDEOS COMPONENT --}}
                @include('candidate.component.videos', ['videos' => $candidate->videos])

                {{-- PROMISES COMPONENT --}}
                @include('candidate.component.promises', ['promises' => $candidate->promises])

                {{-- PREVIOUS POSITIONS COMPONENT --}}
                @include('candidate.component.positions', ['previous_positions' => $candidate->previous_positions])
            </div>
        </div>
        {{-- RIGHT COLUMN --}}
        <div class="flex flex-col md:w-11/12 grow gap-6 items-center">
            {{-- @include('candidate.component.stances', ['opinions' => $opinions, 'candidate' => $candidate]) --}}
            <livewire:candidate.stances :opinions="$opinions" :candidate="$candidate" />

            {{-- OTHER OPINIONS --}}
            {{-- @if(count($candidate->opinions) != 0)
                <div class="flex grow flex-col w-11/12 items-center">
                    <x-dropdown-card>
                        <x-slot:title>
                            Other Opinions
                        </x-slot>
                        <x-slot:content>
                            <div class="flex flex-col gap-4">
                                @foreach ($candidate->opinions as $opinion)
                                    <div class="flex flex-row justify-center gap-4">
                                        <span>{{$opinion->name}}</span>
                                        @auth
                                            <livewire:flag :type="'opinion'" :type_id="$opinion->id" :wire:key="'opinion-'.$opinion->id">
                                        @else
                                            <label class="fill-transparent" for="signup-modal">
                                                @include('icons.flag')
                                            </label>
                                        @endauth
                                    </div>
                                @endforeach
                            </div>
                        </x-slot>
                    </x-dropdown-card>
                </div>
            @endif --}}

            {{-- DONORS --}}
            {{-- @if(count($candidate->donors) != 0)
                <div class="flex grow flex-col w-11/12 items-center">
                    <x-dropdown-card>
                        <x-slot:title>
                            Campaign Donors
                        </x-slot>
                        <x-slot:content>
                            @if(count($candidate->donors) >= 1)
                            @foreach ($candidate->donors as $donor)
                                <div class="flex flex-row items-center justify-center gap-2">
                                    <span>Name:  {{$donor->name}}</span>
                                    @auth
                                        <livewire:flag :type="'donor'" :type_id="$donor->id" :wire:key="'donor-flag-'.$donor->id">
                                    @else
                                        <label class="fill-transparent" for="signup-modal">
                                            @include('icons.flag')
                                        </label>
                                    @endauth

                                </div>
                            @endforeach
                            @else
                                No donor data as of yet.
                            @endif
                        </x-slot>
                    </x-dropdown-card>
                </div>
            @endif --}}

            {{-- LAW MAKING INVOLVEMENT  --}}
            {{-- @if(count($candidate->law_involvement) != 0)
                <div class="flex flex-col w-11/12 items-center">
                    <x-dropdown-card>
                        <x-slot:title>
                            Laws Passed in office
                        </x-slot>
                        <x-slot:content>
                            <div class="flex flex-col gap-4">
                                @foreach ($candidate->law_involvement as $law)
                                    <div class="flex flex-row justify-center gap-4">
                                        <span>Name : {{ $law->name }}</span>
                                        @auth
                                            <livewire:flag :type="'law'" :type_id="$law->id" :wire:key="'law-flag-'.$law->id">
                                        @else
                                            <label class="fill-transparent" for="signup-modal">
                                                @include('icons.flag')
                                            </label>
                                        @endauth
                                    </div>
                                @endforeach
                            </div>
                        </x-slot>
                    </x-dropdown-card>
                </div>
            @endif --}}
        </div>

        @push('scripts')
            <script>
                document.addEventListener('alpine:init', () => {
                    Alpine.data('flag', () => ({
                        new_changes: false,
                        color:0,

                        setColor(color) {
                            if(color == '1') {
                                this.color = 1;
                                this.current_color = 'fill-red-600';
                            } else if (color == '2') {
                                this.color = 2;
                                this.current_color = 'fill-green-600';
                            } else if (color == '3') {
                                this.color = 3;
                                this.current_color = 'fill-gray-600';
                            } else {
                                this.color = 0;
                                this.current_color = 'fill-transparent';
                            }
                            this.new_changes = true;
                        },
                        left() {
                            console.log('saved');
                            if(this.new_changes) {
                                @this.change_flag(this.type, this.type_id, this.color, this.note);
                                this.new_changes = false;
                            }
                        },
                        deleteFlag() {
                            @this.delete_flag(this.type, this.type_id)
                        },
                        changedNote() {
                            console.log('Changed Note');
                            this.new_changes = true;
                        },
                    }))
                });

            </script>
        @endpush
    </div>
</div>

