<div class="flex flex-col w-11/12 h-5/6 items-center background-card shadow-lg drop-shadow-lg">
    <div class='flex flex-col md:flex-row gap-2 md:gap-12'>
        <div class='flex flex-col text-center'>
            <p class="font-roboto_mono text-lg tracking-tight">
                Plan your choice for the upcoming election
            </p>
            <h1 class="uppercase font-roboto_mono mt-2 text-sm text-gray-400">
                {{ $ballot->location->state }} {{ $ballot->location->name }} {{ $ballot->office->name }} - VOTING DATE: {{ $ballot->voting_date->format('m/d/Y') }}
            </h1>
        </div>
        @auth
            @if (! $ballot->has_single_runner)
            <div class='flex justify-center items-center md:justify-end gap-1'>
                    <a class='link font-roboto_mono text-gray-700 text-sm' href="/flag-comparison/{{ $ballot->slug }}">Compare Candidate Flags</a>
                    <div class="flex items-center fill-green-400 h-6 w-6">
                        @include('icons.flag')
                    </div>
                </div>
            @endif
        @endauth

    </div>

    <div class="flex flex-wrap grow w-full md:w-11/12 mt-2">
        @foreach ($ballot->candidates as $i => $candidate)
            <div class="flex grow flex-row pt-2 w-11/12 gap-4">
                {{-- CANDIDATE NAME, PICTURE, AND PAGE LINK --}}
                <a rel="next prefetch" href="{{ route('candidate.show', ['candidate' => $candidate->slug]) }}" class="w-11/12 md:hover:scale-110 md:scale-100">
                    <button class="card flex lg:card-side bg-white drop-shadow-md shadow-md w-full items-center">
                        <figure class='h-fit w-fit'>
                            <img
                                src="{{ $candidate->profile_photo_url ?? '' }} "
                                alt="{{ $candidate->name }}"
                                class="h-28 w-28"
                                loading='lazy'>
                        </figure>
                        <div class="card-body flex flex-row flex-wrap p-3 md:p-inherit" >
                            <div class="flex grow flex-col md:flex-row font-courier">
                                <div class="flex justify-center">
                                    <h2 class="card-title tracking-tight font-roboto_mono font-light">{{ $candidate->name }}</h2>
                                </div>
                                <p
                                    class="underline font-roboto_mono font-light text-center md:text-end text-sm text-sky-500 visited:text-purple-500">
                                    More about {{ $candidate->name }}</p>
                            </div>
                            {{-- Badges --}}
                            {{-- <div x-show="show" class="grid grid-cols-3 gap-2">
                                @foreach ($candidate->badges as $badge)
                                    <div class="tooltip tooltip-info col-span-1" data-tip="{{ $badge->description }}">
                                        <div>
                                            {{ $badge->name }}
                                        </div>
                                    </div>
                                @endforeach
                            </div> --}}
                        </div>
                    </button>
                </a>
                {{-- CHECKBOX --}}
                <div class="flex items-center md:pl-4">
                    {{-- This Checkbox is wack. Good luck to the future person who has to deal with this --}}
                    @auth
                        <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
                        <form action="{{ route('ballot.vote', ['ballot' => $ballot->slug]) }}" target="dummyframe" method="POST" class="flex">
                            @csrf
                            <input type="radio" class="check" id="check{{ $i }}" value="{{ $candidate->slug }}" name='vote' {{ ($vote==$candidate->slug) ? "checked" : "" }} onchange="this.form.submit()" onclick="unselectAll({{ $i }})">

                            <label class="flex grow items-center" for="check{{ $i }}" style="--d: 60%;">
                                <svg class="h-12 w-12" viewBox="0, 0, 60, 60">
                                    <rect x="10%" y="10%"/>
                                    <path d="M5 30 L 20 40 L 55 -15"></path>
                                </svg>
                            </label>
                        </form>
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
        The mock-ballot of {{ $ballot->name }}. Candidates here have the ability to create their own profiles, however if a candidate has not created a profile it's possible that we have created one for them.
        This ballot currently has the following candidates:
        @foreach ($ballot->candidates as $candidate)
            {{ $candidate->name }},
        @endforeach
    @endsection
    @section('keywords')
        {{ $ballot->name }}
        @foreach ($ballot->candidates as $candidate)
            {{ $candidate->name }},
        @endforeach
    @endsection
</div>
