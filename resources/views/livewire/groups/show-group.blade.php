<div class='grid grid-rows-6 gap-4 w-full h-full'>
    <div class='row-span-2 flex w-full relative text-center'>
        {{-- Image --}}
        <span
            class='absolute antialiased text-white text-2xl font-bold'
            style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                {{$group->name}}
        </span>
        <img class="w-full h-80 " src="https://placeimg.com/400/300/arch" />
    </div>
    <div class='row-span-4 flex flex-row px-12'>
        <div class='w-4/5'>
            <div class='flex flex-col w-11/12 background-card items-center'>
                {{-- EVENTS --}}
                @if(count($group->events) >= 1)
                    <div>
                        <span>Upcoming Events</span>
                    </div>
                @endif
                {{-- ABOUT US --}}
                <div>
                    <span>About Us</span>
                    <span>{{$group->description}}</span>
                </div>
            </div>

        </div>
        <div class='flex mr-2'>
            {{-- SUPPORT LIST --}}
            <div class='background-card'>
                <span>Candidates We Support</span>
            </div>
        </div>
    </div>
</div>
