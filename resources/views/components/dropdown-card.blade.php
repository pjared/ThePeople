@props(['classes', 'no_controversials'])

<div {{ $attributes->merge(['class' => 'background-card w-11/12 h-fit p-2 ' . $classes]) }}
    x-data="{open : '{{ isset($no_controversials) && $no_controversials }}' }">
    <div class="collapse collapse-arrow" x-on:click="open = ! open">
        @if(isset($no_controversials) && $no_controversials)
            <input type="checkbox" checked/>
        @else
            <input type="checkbox"/>
        @endif

        <div class="flex collapse-title text-md font-medium items-center">
            <h2 class='text-lg capitalize' :class="{ 'underline': open }">{{ $title }}</h2>
        </div>
        <div class="collapse-content">
            {{ $content }}
        </div>
    </div>

    {{--
        This is the button for my original collapse. I think the animation here is much nice and i'm keeping it to replicate it in the futrue

      x-data="{open: false}"
    <button class="flex background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
        <div class="row">
            <div class="col-8 text-start">
                <span>{{ $title }}</span>
            </div>
            <div class="col-2 offset-2 text-center">
                <i class="bi bi-caret-down-fill"></i>
            </div>
        </div>
    </button>
    <div x-cloak class="flex flex-col background-card rounded-t-none w-11/12 items-center gap-2" x-show="open" x-transition>
        {{ $content }}
    </div>
    --}}
</div>
