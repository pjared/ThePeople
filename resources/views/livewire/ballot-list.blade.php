<div class="flex grow justify-center mt-12 p-6">
    <div class="flex flex-row flex-wrap gap-8 w-3/4 justify-center">
        @foreach ($ballots as $ballot)
            {{-- TODO: Make this entire thing clickable --}}
            <form action="/ballot/{{$ballot->id}}" method="GET" class="hover:scale-110" x-data="{ show: false }" @mouseleave="show = false" @mouseover="show = true" >
                <button class="background-card" class="card bg-base-100 shadow-xl">
                    <div class="card-body text-center p-0">
                        <h2 class="card-title text-lg justify-center">
                            <a class="underline text-sky-600 visited:text-purple-600" href="/ballot/{{$ballot->id}}"> {{$ballot->location->state}} {{$ballot->office->name}}, {{$ballot->location->name}} </a>
                        </h2>
                        <div x-show="show" class="uppercase mt-2 text-sm justify-center">
                            VOTING DATE: {{$ballot->voting_date}}
                        </div>
                    </div>
                </button>
            </form>
        @endforeach 
    </div>

</div>

