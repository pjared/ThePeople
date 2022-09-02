<section class='p-4 h-fit'>
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
            <article class="flex flex-col md:flex-row gap-6 w-11/12 justify-center">
                <img
                    src="{{ $candidate->profile_photo_url }}"
                    alt="{{ $candidate->name }}"
                    class="h-44 w-44 shadow-2xl"
                    style='border: 6px solid #f8f8f8;'
                    loading='lazy'>
                {{-- class="rounded-full object-cover" --}}
                <div class="flex flex-col">
                    <h1>{{ $candidate->name }}</h1>
                    {{-- <div>
                        Party: {{ $candidate->party_name }}
                    </div> --}}
                    @if($candidate->ballot)
                        <p>
                            Running For: {{ $candidate->ballot->location->state }}
                            {{ $candidate->ballot->office->name }},
                            {{ $candidate->ballot->location->name }}
                        </p>
                    @endif
                    @if($candidate->public_email)
                        <p>
                            Email Candiate: {{ $candidate->public_email }}
                        </p>
                    @endif
                </div>
            </article>
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

            @include('candidate.component.opinions')

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
    </div>

    {{-- BOTTOM AREA --}}
    <div class='divider w-full'></div>

    <div class="flex flex-col gap-2 justify-center w-full">
        <div class="flex flex-row p-8 gap-2 justify-center w-full">
            <div class="flex flex-col grow gap-6 items-center w-1/2">
                <h2>Message the Candidate</h2>
                @auth
                    <textarea wire:model.defer="user_comment" class="textarea textarea-primary w-1/2" placeholder="Your question/comment"></textarea>
                    <button wire:click="add_comment" class="btn btn-primary">Submit</button>
                @else
                    <label class="fill-transparent w-1/2 text-center" for="signup-modal">
                        <textarea class="textarea textarea-primary w-full h-full" placeholder="Your question/comment" disabled></textarea>
                        {{-- TODO: MAKE THIS APPEAR ON HOVER OF TA --}}
                        <span>Sign up to submit a comment</span>
                    </label>
                @endauth
            </div>
            <div class="flex flex-col grow gap-6 items-center w-1/2">
                @include('candidate.component.events', ['events' => $candidate->events])
            </div>

        </div>
        {{-- CANDIDATE PHOTOS --}}
        {{-- <div class="flex flex-row w-full grow gap-6 items-center h-fit">
            @foreach ($candidate->comments()->approved()->get() as $pinned_comment)
                <div class='border border-slate-400 bg-white p-4 w-11/12 overflow-visible'>
                    <p>{{$pinned_comment->comment}}</p>
                    @if($pinned_comment->reply)
                        <div class='absolute ml-6 mt-1 w-1/5'>
                            <div class='border border-slate-400 p-4 bg-white w-fit'>
                                <p>{{$pinned_comment->reply}}</p>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div> --}}
    </div>

    {{-- @if($flags_loaded)

    @endif --}}

    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('flag', () => ({
                    new_changes: false,
                    color: 0,

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
                        if(this.new_changes) {
                            @this.change_flag(this.type, this.type_id, this.color, this.note);
                            this.new_changes = false;
                        }
                    },
                    deleteFlag() {
                        @this.delete_flag(this.type, this.type_id)
                        this.color = 0;
                        this.current_color = 'fill-transparent';
                        this.note = '';
                        this.open = false;
                    },
                    changedNote() {
                        this.new_changes = true;
                    },
                }))
            });
        </script>
    @endpush

    @section('description')
        Candidate {{$candidate->name}}'s profile. Here you can view the stances that {{$candidate->name}} takes on controversial opinions. You can also view the additional stances that {{$candidate->name}} has added to his profile. If {{$candidate->name}} has held office, his previous positions will be listed. You can also message {{$candidate->name}} and see his upcoming events.
    @endsection
    @section('keywords')
        {{$candidate->name}} stances controversial opinion
    @endsection
</section>

