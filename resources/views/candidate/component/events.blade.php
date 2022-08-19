<div class="flex grow flex-col w-11/12 items-center gap-2">
    @if (count($events) >= 1)
        <div class='text-xl'>
            Meet the Candidate
        </div>

        <div class="flex flex-row gap-4 justify-center w-full">
            @foreach($events as $event)
                <div class="flex flex-col gap-4 w-1/2">
                    <div class="flex flex-col gap-0">
                        <span><b>{{ $event->event_name }}</b></span>
                        <span class='text-gray-500'>{{ $event->event_location }}, {{$event->event_date->format('M d y g:i A')}}</span>
                    </div>
                    <span>{{ $event->event_description }}</span>
                </div>
            @endforeach
        </div>
    @else
        {{-- TODO: CHECK FOR MANUAL CANDIDATE --}}
        <div>
            Candidate does not have any events!
        </div>
    @endif

</div>
