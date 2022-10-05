<div class="flex grow flex-col w-11/12 items-center gap-2">
    @if ($this->candidate->events_count >= 1)
        <h2 class='text-xl'>
            Meet the Candidate
        </h2>

        <div class="flex flex-row gap-4 justify-center w-full">
            @foreach($events as $event)
                <div class="flex flex-col gap-4 w-1/2">
                    <div class="flex flex-col gap-0">
                        <h3><b>{{ $event->event_name }}</b></h3>
                        <p class='text-gray-500'>{{ $event->event_location }}, {{ $event->event_date->format('M d y g:i A')}}</p>
                    </div>
                    <p>{{ $event->event_description }}</p>
                </div>
            @endforeach
        </div>
    @else
        {{-- TODO: CHECK FOR MANUAL CANDIDATE --}}
        <p>
            Candidate does not have any upcoming event listed!
        </p>
    @endif

</div>
