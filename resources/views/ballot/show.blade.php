<div class="flex flex-col w-11/12 h-5/6 items-center background-card shadow-lg drop-shadow-lg">
    <div class='flex flex-row gap-12'>
        <div class='flex flex-col text-center'>
            <p class="font-roboto_mono text-lg tracking-tight">
                Plan your choice for the upcoming election
            </p>
            <h1 class="uppercase font-roboto_mono mt-2 text-sm text-gray-400">
                {{ $this->ballot->location->name }} {{ $this->ballot->office->name }} - VOTING DATE: {{ $this->ballot->voting_date->format('m/d/Y')}}
            </h1>
        </div>
        @auth
            <div class='flex items-center justify-end gap-1'>
                <a class='link font-roboto_mono text-gray-700 text-sm' href="/flag-comparison/{{$this->ballot->slug}}">Compare Candidate Flags</a>
                <div class="flex items-center fill-green-400 h-6 w-6">
                    @include('icons.flag')
                </div>
            </div>
        @endauth

    </div>

    <div class="flex flex-wrap grow w-11/12 mt-2">
        {{-- wire:init="load_candidates" --}}
        @foreach ($this->ballot->candidates as $running_candidate)
            <div class="flex grow flex-row pt-2 w-11/12">
                {{-- CANDIDATE NAME, PICTURE, AND PAGE LINK --}}
                <form action="/candidate/profile/{{$running_candidate->candidate->slug}}" method="GET" class="w-11/12 md:hover:scale-110">
                    <button class="card flex grow lg:card-side bg-white drop-shadow-md shadow-md w-full"
                    x-data="{ show: false }" @mouseleave="show = false" @mouseover="show = true">
                        {{-- :class="{ 'h-28 w-28': show }" --}}
                        <figure>
                            <img
                                src="{{ $running_candidate->candidate->profile_photo_url ?? ''}} "
                                alt="{{ $running_candidate->candidate->name }}"
                                class="h-28 w-28"
                                :class="{ 'rounded-xl': show }"
                                loading='lazy'>
                            {{-- class="rounded-full object-cover" --}}
                        </figure>
                        <div class="card-body flex flex-row flex-wrap" :class="{ 'p-3': show }">
                            <div class="flex grow flex-col md:flex-row font-courier">
                                <div class="flex">
                                    <h2 class="card-title tracking-tight font-roboto_mono font-light">{{ $running_candidate->candidate->name }}</h2>
                                </div>
                                <div class="flex grow justify-end">
                                    <a
                                        rel="next prefetch"
                                        class="underline font-roboto_mono font-light text-sm text-sky-500 visited:text-purple-500"
                                        href="/candidate/profile/{{$running_candidate->candidate->slug}}">More about {{ $running_candidate->candidate->name }}</a>
                                </div>
                            </div>
                            {{-- Badges --}}
                            {{-- <div x-show="show" class="grid grid-cols-3 gap-2">
                                @foreach ($running_candidate->candidate->badges as $badge)
                                    <div class="tooltip tooltip-info col-span-1" data-tip="{{$badge->description}}">
                                        <div>
                                            {{ $badge->name }}
                                        </div>
                                    </div>
                                @endforeach
                            </div> --}}
                        </div>
                    </button>
                </form>
                {{-- CHECKBOX --}}
                <div class="flex grow items-center pl-4">
                    {{-- This Checkbox is wack. Good luck to the future person who has to deal with this --}}
                    @auth
                        {{-- If the user is logged in, we want to save their vote --}}
                        @if($candidate_vote == $running_candidate->id)
                            <input type="checkbox" class="check flex" id="check{{$running_candidate->id}}" onclick="unselectAll({{$running_candidate->id}})" wire:click='change_user_vote({{$running_candidate->candidate_id}})' checked>
                        @else
                            <input type="checkbox" class="check flex" id="check{{$running_candidate->id}}" onclick="unselectAll({{$running_candidate->id}})" wire:click='change_user_vote({{$running_candidate->id}})'>
                        @endif

                        <label class="flex grow items-center" for="check{{$running_candidate->id}}" style="--d: 60%;">
                            <svg class="h-12 w-12" viewBox="0, 0, 60, 60">
                                <rect x="10%" y="10%"/>
                                <path d="M5 30 L 20 40 L 55 -15"></path>
                            </svg>
                        </label>
                    @else
                        {{-- If the user is not logged in, we want to prompt them instead --}}
                        <input type="checkbox" class="check flex">
                        <label class="flex grow items-center" for="signup-modal" style="--d: 60%;">
                            <svg class="h-12 w-12" viewBox="0, 0, 60, 60">
                                <rect x="10%" y="10%"/>
                                <path d="M5 30 L 20 40 L 55 -15"></path>
                            </svg>
                        </label>
                    @endauth
                </div>
            </div>
        @endforeach
    </div>

    @push('scripts')
        <script>
            function unselectAll(candidate_id)
            {
                nodes = document.querySelectorAll('input.check');
                nodes.forEach(element => {
                    element.checked = false;
                });
                document.getElementById('check' + candidate_id).checked = true;
            }
        </script>
    @endpush

    @section('description')
        The mock-ballot of {{$this->ballot->name}}. Candidates here have the ability to create their own profiles, however if a candidate has not created a profile it's possible that we have created one for them.
        This ballot currently has the following candidates:
        @foreach ($this->ballot->candidates as $candidate)
            {{$candidate->name}} - {{$this->ballot->name}},
        @endforeach
    @endsection
    {{-- @section('keywords')
        @foreach ($this->ballot->candidates as $candidate)
            {{$candidate->name}} - {{$this->ballot->name}},
        @endforeach
    @endsection --}}
</div>
