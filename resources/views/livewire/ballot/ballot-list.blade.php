<div class="flex flex-col grow justify-center items-center gap-4 md:gap-10">
    {{-- SEARCHING --}}
    <div class="pt-2 relative mx-auto text-gray-600 w-4/5 md:w-2/5"
        x-data="{ show: false,
        mobile: window.innerWidth <= 768 }"
        @click="show = true"
        @click.outside="show = false">
        <input class="border-2 border-gray-300 bg-white h-12 pl-5 pr-10 w-full rounded-lg text-sm md:text-md focus:outline-none"
            type="search" wire:model='search'  name="search" placeholder="Search for a Candidate, Public Office, or District">
        <button class="absolute right-0 top-1 mt-5 mr-4">
            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
            width="512px" height="512px">
            <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>



        <ul x-show='show' class='absolute z-10 w-full bg-white rounded-t-none rounded-md shadow-lg list-group'>
            <li class='list-item border-b-2 border-l-2 border-r-2 border-gray-300' x-show='show && mobile'>
                <p>Search for a Candidate, Public Office, or District</p>
            </li>
            @foreach ($candidate_searches as $result)
                <li class='list-item border-b-2 border-l-2 border-r-2 border-gray-300'>
                    <form class='p-2' action="/candidate/profile/{{ $result->slug }}" method="GET">
                        <button class='flex flex-col pl-2 w-full h-full text-start'>
                            <a href='/candidate/profile/{{ $result->slug }}' class='link underline'>{{ $result->name }}</a>
                            <p class='text-gray-400'>{{ $result->state }}</p>
                        </button>
                    </form>
                </li>
            @endforeach
            @foreach ($ballot_searches as $result)
                <li class='list-item border-b-2 border-l-2 border-r-2 border-gray-300 p-2'>
                    <form class='p-2' action="/ballot/{{ $result->slug }}" method="GET">
                        <button class='w-full h-full text-start'>
                            <a href='/ballot/{{ $result->slug }}' class='link underline'>{{ $result->name }}</a>
                        </button>
                    </form>
                </li>
            @endforeach
            @if (count($candidate_searches) == 0 && count($ballot_searches) == 0 && !empty($search))
                <p class='p-2'>We couldn't find any results for your search. For the upcoming elections on November 8th, 2022 we are focusing pimarily on the elections for the Provo/Orem area. If you'd like to see your upcoming election appear here, please contact us at thepeople@whatsinyourballot.com and we'll see what we can do!</p>
            @endif
        </ul>
    </div>

    {{-- YOUR LIST --}}
    @auth
        @if ($this->user_precinct)
            <div class="text-xl font-roboto_mono text-gray-400 text-center">
                Ballots for Your Precinct
            </div>
            <div class="flex flex-col md:flex-row flex-wrap gap-8 w-3/4 items-center justify-center">
                @foreach ($this->state_ballots as $ballot)
                    @if ($ballot->candidates_count >= 1)
                        <form action="/ballot/{{ $ballot->slug }}" method="GET" class="hover:scale-110" x-data="{ show: false }" @mouseleave="show = false" @mouseover="show = true">
                            <button class="background-card shadow-md">
                                <div class="text-center p-0">
                                    <h2 class="card-title justify-center">
                                        <a
                                            rel="next prefetch"
                                            class="underline text-inherit font-mono tracking-tighter font-light"
                                            type="text/html"
                                            href="/ballot/{{ $ballot->slug }}">{{ $ballot->location->state }} {{ $ballot->office->name }}, {{ $ballot->location->name }}</a>
                                    </h2>
                                    <div x-show="show" class="uppercase mt-2 text-sm font-mono text-gray-400 justify-center">
                                        <p>
                                            VOTING DATE: {{ $ballot->voting_date->format('m/d/Y') }}
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </form>
                    @endif
                @endforeach
                @foreach ($this->user_ballots as $precinct)
                    @if ($precinct->ballot->candidates_count >= 1)
                        <form action="/ballot/{{ $precinct->ballot->slug }}" method="GET" class="hover:scale-110" x-data="{ show: false }" @mouseleave="show = false" @mouseover="show = true">
                            <button class="background-card shadow-md">
                                <div class="text-center p-0">
                                    <h2 class="card-title justify-center">
                                        <a
                                            rel="next prefetch"
                                            class="underline text-inherit font-mono tracking-tighter font-light"
                                            type="text/html"
                                            href="/ballot/{{ $precinct->ballot->slug }}">{{ $precinct->ballot->location->state }} {{ $precinct->ballot->office->name }}, {{ $precinct->ballot->location->name }}</a>
                                    </h2>
                                    <div x-show="show" class="uppercase mt-2 text-sm font-mono text-gray-400 justify-center">
                                        <p>
                                            VOTING DATE: {{ $precinct->ballot->voting_date->format('m/d/Y') }}
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </form>
                    @endif
                @endforeach
                @if (count($this->user_ballots) == 0)
                    <div class="text-lg font-roboto_mono text-gray-400 text-center">
                        We don't have any ballots for your precinct. Either there are no elections going on in your area, or your precinct is incorrect. If resetting your precinct doesn't work, contact us.
                    </div>
                @endif
            </div>
            <div class='w-11/12'>
            <div class='divider'></div></div>
        @else
            <div class="text-md font-roboto_mono text-gray-700 text-center">
                Want to know which elections will appear on your ballot? Go to the <a class='underline text-sky-600' href='/user/profile'>profile</a> page to set your voter precinct!
            </div>
        @endif
    @endauth

    {{-- BALLOT LIST --}}
    @if (count($ballots) >= 1)
        <div class="flex flex-col md:flex-row flex-wrap gap-8 items-center justify-center w-4/5 lg:w-3/4 md:pb-4">
            @foreach ($ballots as $ballot)
                @if ($ballot->candidates_count >= 1)
                    <form action="{{ route('ballot', ['ballot' => $ballot->slug]) }}" method="GET" class="hover:scale-110" x-data="{ show: window.innerWidth <= 768 }" @mouseleave="show = window.innerWidth <= 768" @mouseover="show = true">
                        <button class="background-card shadow-md ">
                            <h2 class="card-title justify-center text-center">
                                <a
                                    rel="next prefetch"
                                    class="underline text-inherit font-mono tracking-tighter font-light"
                                    type="text/html"
                                    href="{{ route('ballot', ['ballot' => $ballot->slug]) }}">{{ $ballot->location->state }} {{ $ballot->office->name }}, {{ $ballot->location->name }}</a>
                            </h2>
                            <div x-show="show" class="uppercase mt-2 text-sm font-mono text-gray-400 justify-center">
                                <p>
                                    VOTING DATE: {{ $ballot->voting_date->format('m/d/Y') }}
                                </p>
                            </div>
                        </button>
                    </form>
                @endif
            @endforeach
        </div>
    @endif
    @if ($more_ballots)
        <div class='text-center mb-8 link' wire:click='load_ballots'>
            Load More
        </div>
    @else
        <div class='text-center' wire:click='load_ballots'>
            All Ballots Loaded. Want to add another one? Contact us
        </div>
    @endif

    @guest
        <div class='text-center text-gray-400' wire:click='load_ballots'>
            <p>Don't know which elections will appear on your ballot? <a class='link' href='{{ route('register') }}'>Register</a> to find your voter precinct and upcoming elections</p>
        </div>
    @endguest


    @if (request()->routeIs('welcome') || request()->routeIs('home'))
        @section('description')
            Welcome to the home page of ThePeople! Here you can navigate to a ballot from the list provided. The current ballots we have are:
            {{ $this->ballot_list }}
        @endsection
        @section('keywords')
            ThePeople, thepeople, utah senate ballots, utah congress ballots, utah senate elections, utah congress elections, utah political candidates
        @endsection
    @endif
</div>
