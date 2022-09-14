<div class="flex flex-col grow justify-center items-center gap-10">
    {{-- SEARCHING --}}
    {{-- <div class="pt-2 relative mx-auto text-gray-600 w-2/5">
        <input class="border-2 border-gray-300 bg-white h-12 px-5 pr-16 w-full rounded-lg text-sm focus:outline-none"
            type="search" wire:model='search'  name="search" placeholder="Search for a Candidate, Public Office, or Location">
        <button class="absolute right-0 top-1 mt-5 mr-4">
            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
            width="512px" height="512px">
            <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>

        <ul class='absolute z-10 w-full bg-white rounded-t-none rounded-md shadow-lg list-group' id="myUL">
            @foreach ($candidate_searches as $result)
                <li class='list-item border-b-2 border-gray-300'>
                    <form class='p-2' action="/candidate/profile/{{$result->slug}}" method="GET">
                        <button class='flex flex-col pl-2 w-full h-full text-start'>
                            <a href='/candidate/profile/{{$result->slug}}' class='link underline'>{{$result->name}}</a>
                            <p class='text-gray-400'>{{$result->state}}</p>
                        </button>
                    </form>
                </li>
            @endforeach
            @foreach ($ballot_searches as $result)
                <li class='list-item border-b-2 border-gray-300 p-2'>
                    <form class='p-2' action="/ballot/{{$result->slug}}" method="GET">
                        <button class='w-full h-full text-start'>
                            <a href='/ballot/{{$result->slug}}' class='link underline'>{{$result->name}}</a>
                        </button>
                    </form>
                </li>
            @endforeach
            @if(count($candidate_searches) == 0 && count($ballot_searches) == 0 && !empty($search))
                <p class='p-2'>We couldn't find any results for your search. For the upcoming elections on November 8th, 2022 we are focusing pimarily on the elections for the Provo/Orem area. If you'd like to see your upcoming election appear here, please contact us at thepeople@whatsinyourballot.com and we'll see what we can do!</p>
            @endif
        </ul>
    </div> --}}

    {{-- BALLOT LIST --}}
    <div class="flex flex-col md:flex-row flex-wrap gap-8 w-3/4 items-center justify-center">
        @foreach ($this->ballots as $ballot)
            @if($ballot->candidates_count >= 1)
                <form action="/ballot/{{$ballot->slug}}" method="GET" class="hover:scale-110" x-data="{ show: false }" @mouseleave="show = false" @mouseover="show = true" >
                    <button class="background-card shadow-md">
                        <div class="text-center p-0">
                            <h2 class="card-title justify-center">
                                <a
                                    rel="next prefetch canonical"
                                    class="underline text-inherit font-mono tracking-tighter font-light"
                                    type="text/html"
                                    href="/ballot/{{$ballot->slug}}">{{$ballot->location->state}} {{$ballot->office->name}}, {{$ballot->location->name}}</a>
                            </h2>
                            <div x-show="show" class="uppercase mt-2 text-sm font-mono text-gray-400 justify-center">
                                <p>
                                    VOTING DATE: {{$ballot->voting_date->format('m/d/Y')}}
                                </p>
                            </div>
                        </div>
                    </button>
                </form>
            @endif
        @endforeach
    </div>

    @section('description')
        Welcome to the home page of ThePeople! Here you can navigate to a ballot from the list provided. The current ballots we have are:
        @foreach ($this->ballots as $ballot)
            {{$ballot->name}},
        @endforeach
    @endsection
    {{-- @section('keywords')
        @foreach ($this->ballots as $ballot)
            {{$ballot->name}},
        @endforeach
    @endsection --}}
</div>
