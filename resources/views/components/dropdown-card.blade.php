<div class='background-card w-11/12 h-fit p-2' x-data="{ show_flow : false}">
    <div class="collapse collapse-arrow" :class="show_flow && 'overflow-visible'" x-transition>
        <input type="checkbox" x-on:click="show_flow = ! show_flow"/>
        <div class="flex collapse-title text-md font-medium items-center">
            <span>{{$title}}</span>
        </div>
        <div class="collapse-content" :class="show_flow && 'overflow-visible'">
            {{$content}}
        </div>
    </div>

    {{--
        This is the button for my original collapse. I think the animation here is much nice and i'm keeping it to replicate it in the futrue

      x-data="{open: false}"
    <button class="flex background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
        <div class="row">
            <div class="col-8 text-start">
                <span>{{$title}}</span>
            </div>
            <div class="col-2 offset-2 text-center">
                <i class="bi bi-caret-down-fill"></i>
            </div>
        </div>
    </button>
    <div x-cloak class="flex flex-col background-card rounded-t-none w-11/12 items-center gap-2" x-show="open" x-transition>
        {{$content}}
    </div>
    --}}
</div>
