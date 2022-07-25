{{-- Promises --}}
@if(count($promises) != 0)
<div class="flex grow flex-col w-11/12 items-center" x-data="{open: false}">
    <button class="flex background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
        <div class="row">
            <div class="col-8 text-start">
                Candidate's Promises
            </div>
            <div class="col-2 offset-2 text-center">
                <i class="bi bi-caret-down-fill"></i>
            </div>
        </div>
    </button>
    <div class="flex flex-col background-card rounded-t-none w-11/12 justify-center gap-2" x-show="open" x-transition>
        <div class="text-center">
            This candidate promises to make the reforms or stand for the values listed below.
        </div>
        @foreach($promises as $promise)
            <div class="flex flex-row justify-center gap-4">
                <div class="flex flex-col items-center">
                    <span class="w-fit"><b>{{ $promise->promise }}</b></span>
                    <p
                    x-data="{ isCollapsed: false, maxLength: 215, originalContent: '', content: '' }"
                    x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)"
                    >
                    {{-- + '...' --}}
                        <span x-text="isCollapsed ? originalContent : content">{{ $promise->plan }}</span>
                        <button
                        @click="isCollapsed = !isCollapsed"
                        x-show="originalContent.length > maxLength"
                        x-text="isCollapsed ? 'Show less' : 'Show more'"
                        class="link"
                        ></button>
                    </p>
                </div>    
                @auth   
                    <livewire:flag :type="'promise'" :type_id="$promise->id" :wire:key="$promise->id">
                @else
                    <label class="fill-transparent" for="signup-modal">
                        @include('icons.flag')
                    </label>  
                @endauth
            </div>
        @endforeach
    </div>
</div>
@endif