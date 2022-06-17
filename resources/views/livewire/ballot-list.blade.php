<div class="flex grow flex-row flex-wrap gap-8 justify-center mt-12 p-6 w-11/12">
    @foreach ($ballots as $ballot)
        {{-- TODO: Make this entire thing clickable --}}
        <form action="/ballot/{{$ballot->id}}" method="GET" class="min-w-fit w-1/4 hover:scale-110">
            <button type="submit" class="card w-full h-full">
                {{-- {{$ballot->location->name}} {{$ballot->office->name}} --}}
                <a class="underline text-sky-600 visited:text-purple-600">{{$ballot->location->name}} {{$ballot->office->name}}</a>
            </button>
        </form>
        
    @endforeach 
</div>
