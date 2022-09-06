<div class='flex flex-col justify-center items-center w-full h-fit p-2' x-data="{ show_reasoning : false}">
    <div class="collapse collapse-arrow w-full" :class="show_reasoning && 'overflow-visible'" x-transition>
        <input type="checkbox" x-on:click="show_reasoning = ! show_reasoning"/>
        <div class="flex collapse-title text-md font-medium items-center underline">
            {{$label}}
        </div>
        @if($reasoning)
            <div class="collapse-content" :class="show_reasoning && 'overflow-visible'">
                <x-show-more :content="$reasoning"/>
            </div>
        @endif

    </div>
    @include('components.comparison-flag')
    <div>
        Your Note: {{$note}}
    </div>
</div>
