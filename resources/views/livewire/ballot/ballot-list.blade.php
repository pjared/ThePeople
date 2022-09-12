<div class="flex grow justify-center mt-12 p-6">
    <div class="flex flex-col md:flex-row flex-wrap gap-8 w-3/4 items-center justify-center" wire:init="load_ballots">
        @foreach ($ballots as $ballot)
            @if($ballot->candidates_count >= 1)
                <form action="/ballot/{{$ballot->slug}}" method="GET" class="hover:scale-110" x-data="{ show: false }" @mouseleave="show = false" @mouseover="show = true" >
                    <button class="background-card shadow-md" class="card bg-base-100 shadow-xl">
                        <div class="text-center p-0">
                            <h2 class="card-title text-xl justify-center">
                                <a
                                    rel="next prefetch canonical"
                                    class="underline text-sky-600 font-mono tracking-tighter font-light"
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
        @foreach ($ballots as $ballot)
        {{$ballot->name}},
        @endforeach
    @endsection
    @section('keywords')
        @foreach ($ballots as $ballot)
            {{$ballot->name}},
        @endforeach
    @endsection
</div>
