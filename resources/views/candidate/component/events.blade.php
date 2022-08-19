<div class="flex grow flex-col w-11/12 items-center">
    @if (count($events) >= 1)
        <div class='text-xl'>
            Meet the Candidate
        </div>

        <div class="flex flex-col gap-4">
            @foreach($events as $event)
                <div class="flex flex-row justify-center gap-4">
                    <div class="flex flex-col items-center gap-4">
                        <span><b>{{ $event->event_name }}</b></span>
                        <span>{{ $event->event_location }}</span>
                        <span>{{ $event->event_description }}</span>
                    </div>
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
