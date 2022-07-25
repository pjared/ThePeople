{{-- PREVIOUS POSITIONS --}}
<div class="flex grow flex-col w-11/12 items-center" x-data="{open: false}">
    <button class="flex background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
        <div class="row">
            <div class="col-8 text-start">
                Previous Political Positions
                <i class="bi bi-bank"></i>
            </div>
            <div class="col-2 offset-2 text-center">
                <i class="bi bi-caret-down-fill"></i>
            </div>
        </div>
    </button>
    <div class="flex flex-col background-card rounded-t-none w-11/12" x-show="open" x-transition>
        @if(count($previous_positions) != 0)
            <div class="flex flex-col gap-4">
                @foreach($previous_positions as $position)
                    <div class="flex flex-row justify-center gap-4">
                        <div class="flex flex-col items-center gap-4">
                            <span><b>{{ $position->position_name }}</b></span>
                            <span>{{ $position->year_start }} - {{ $position->year_end }}</span>
                        </div>
                        @auth   
                            <livewire:flag :type="'position'" :type_id="$position->id" :wire:key="'position-'.$position->id">   
                        @else
                            <label class="fill-transparent" for="signup-modal">
                                @include('icons.flag')
                            </label>  
                        @endauth
                    </div>  
                @endforeach                        
            </div>
        @else
            This Candidate has not held office before
        @endif
    </div>
</div>