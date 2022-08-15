<div class="flex flex-col w-11/12 h-5/6 items-center background-card">
    <p class="text-center font-courier text-xl">
        Plan your choice for the upcoming election
    </p>
    <p class="uppercase mt-2 text-sm">
        {{ $ballot->location->name }} {{ $ballot->office->name }} - VOTING DATE: {{ $ballot->voting_date->format('m/d/Y')}}
    </p>
    <div class="flex flex-wrap grow w-11/12 mt-2">
        @foreach ($ballot->candidates as $running_candidate)
            <div class="flex grow flex-row pt-2 w-11/12">
                {{-- CANDIDATE NAME, PICTURE, AND PAGE LINK --}}
                <form action="/candidate/profile/{{$running_candidate->candidate->slug}}" method="GET" class="w-11/12 md:hover:scale-110">
                    <button class="card flex grow lg:card-side bg-white shadow-xl w-full"
                    x-data="{ show: false }" @mouseleave="show = false" @mouseover="show = true">
                        {{-- :class="{ 'h-28 w-28': show }" --}}
                        <figure>
                            <img src="{{ $running_candidate->candidate->user->profile_photo_url ?? ''}} " alt="{{ $running_candidate->candidate->name }}" class="h-28 w-28" :class="{ 'rounded-xl': show }">
                            {{-- class="rounded-full object-cover" --}}
                        </figure>
                        <div class="card-body flex flex-row flex-wrap" :class="{ 'p-3': show }">
                            <div class="flex grow flex-col md:flex-row font-courier">
                                <div class="flex">
                                    <h3 class="card-title font-normal">{{ $running_candidate->candidate->name }}</h3>
                                </div>
                                <div class="flex grow justify-end">
                                    <a class="underline text-sky-600 visited:text-purple-600" href="/candidate/profile/{{$running_candidate->candidate->slug}}">More about {{ $running_candidate->candidate->name }}</a>
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
                        @if($candidate_vote == $running_candidate->candidate_id)
                            <input type="checkbox" class="check flex" id="check{{$running_candidate->candidate_id}}" onclick="unselectAll({{$running_candidate->candidate_id}})" wire:click='change_user_vote({{$running_candidate->candidate_id}})' checked>
                        @else
                            <input type="checkbox" class="check flex" id="check{{$running_candidate->candidate_id}}" onclick="unselectAll({{$running_candidate->candidate_id}})" wire:click='change_user_vote({{$running_candidate->candidate_id}})'>
                        @endif

                        <label class="flex grow items-center" for="check{{$running_candidate->candidate_id}}" style="--d: 60%;">
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
                //TODO: Properly hook up to backend
            }
        </script>
    @endpush

    @section('page-title')
        {{$ballot->location->name}} {{$ballot->office->name}} Ballot
    @endsection
</div>
