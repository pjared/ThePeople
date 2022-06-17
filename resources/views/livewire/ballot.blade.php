<div>
    <div class="flex flex-col w-11/12 h-5/6 items-center card">
        <p class="flex text-center font-courier text-xl">
            Plan your choice for the upcoming election                            
        </p>
        <p class="flex uppercase mt-2" style="font-size:small;">
            {{-- {{ $location }} {{ $position }}, VOTING DATE: {{$ballot->voting_date}} --}}
            {{ $ballot->location->name }} {{ $ballot->office->name }} - VOTING DATE: {{$ballot->voting_date}}
        </p>
        <div class="flex flex-wrap grow w-11/12 mt-2">
            @foreach ($ballot->candidates as $running_candidate)
                    <div class="flex grow flex-row min-w-fit pt-2 w-11/12 h-100">
                        {{-- CANDIDATE NAME, PICTURE, AND PAGE LINK --}}
                        <form action="/profile/candidate/{{$running_candidate->candidate_id}}" method="GET" class="w-11/12 hover:scale-110">
                            <button type="submit" class="card flex grow flex-cols w-full">
                                <div class="text-center">
                                    <img class="h-28 w-28" style="" src="{{ Storage::url('images/' . $running_candidate->candidate->image_id  . '.jpg') }}">
                                </div>
                                <div class="ml-4 flex grow">
                                    <div class="flex font-courier">
                                        {{ $running_candidate->candidate->name }}
                                    </div>
                                    <div class="flex grow place-content-end font-courier">
                                        <a class="underline text-sky-600 visited:text-purple-600" href="/profile/candidate/{{$running_candidate->candidate_id}}">More about {{ $running_candidate->candidate->name }}</a>
                                    </div>
                                </div>
                            </button>
                        </form>
                        {{-- CHECKBOX FOR CANDIDATE --}}
                        <div class="flex grow items-center pl-4">
                            <input type="checkbox" class="check flex" name="check{{$running_candidate->candidate_id}}" id="check{{$running_candidate->candidate_id}}" onclick="unselectAll({{$running_candidate->candidate_id}})">
                            <label class="flex grow items-center" for="check{{$running_candidate->candidate_id}}" style="--d: 60%;">
                                <svg class="h-12 w-12" viewBox="0, 0, 60, 60">
                                    <rect x="10%" y="10%"/>
                                    <path d="M5 30 L 20 40 L 55 -15"></path>
                                </svg>
                            </label>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>

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
</div>