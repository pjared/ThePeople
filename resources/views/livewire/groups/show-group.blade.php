<div class='flex flex-col gap-4 w-full items-center justify-center h-full'>
    <div class='flex flex-col justify-center items-center w-full bg-white'>
        <div class='flex w-3/5 relative justify-center'>
            {{-- Image --}}
            <img
                class="w-full h-80"
                src="https://placeimg.com/400/300/arch"
                loading='lazy'/>
        </div>
        <div class='flex flex-row items-center justify-start pl-8 w-3/5'>
            <div class='relative w-32 h-20 items-center'>
                <img
                    class="absolute bottom-1 rounded-full border-4 border-white w-28 h-28 mask mask-circle"
                    src="https://placeimg.com/400/300/arch"
                    loading='lazy'/>
            </div>
            <h1
                class='antialiased bold text-2xl font-bold'>
                    {{ $group->name }}
            </h1>
        </div>

    </div>

    <div class='flex flex-row w-11/12 px-12'>
        <div class='w-4/5'>
            <div class='flex flex-col w-11/12 background-card items-center'>
                {{-- ABOUT US --}}
                <div class='flex flex-col text-center'>
                    <h2 class='text-xl font-semibold'>About Us</h2>
                    <p class='text-gray-700'>{{ $group->description }}</p>
                </div>
                {{-- EVENTS --}}
                @if (count($group->events) >= 1)
                    <div class='flex flex-col w-full items-center'>
                        <h2 class='text-lg font-semibold'>Upcoming Events</h2>
                        <div class='flex w-full justify-center'>
                            @foreach ($group->events as $event)
                                <div class="flex flex-col gap-4 w-1/2">
                                    <div class="flex flex-col gap-0">
                                        <span><b>{{ $event->event_name }}</b></span>
                                        <span class='text-gray-500'>{{ $event->event_location }}, {{ $event->event_date->format('M d y g:i A')}}</span>
                                    </div>
                                    <span>{{ $event->event_description }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>

        </div>
        <div class='flex mr-2'>
            {{-- SUPPORT LIST --}}
            <div class='background-card'>
                <span>Candidates We Support</span>
            </div>
        </div>
    </div>

    @section('page-title')
        {{ $this->group->name }}
    @endsection
    @section('description')
        The profile for the political group {{ $this->group->name }}. On a group's profile you can find information about the group, their upcoming events, along with their recommended voting list.
    @endsection
</div>
