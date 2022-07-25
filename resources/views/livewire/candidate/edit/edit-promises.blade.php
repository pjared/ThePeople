<div class="flex flex-row">
    @include('candidate.aside')
    
    <div class="flex flex-col w-full h-inherit items-center justify-center">
        {{-- PROMISE FLASH MESSAGE --}}
        @if (session()->has('update-promise-success'))
            <div class="alert alert-success shadow-lg flex w-11/12">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{session('update-promise-success')}}</span>
                </div>
            </div>
        @elseif(session()->has('update-promise-failure'))
            <div class="alert alert-error shadow-lg">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{session('update-promise-failure')}}</span>
                </div>
            </div>
        @endif
        <div class="flex flex-row w-full justify-between">
            {{-- LEFT COLUMN (Edit) --}}
            <div class="flex flex-col w-1/2 gap-2 p-4 items-center">
                <h1 class="text-xl">Add your Promises</h1>
                {{-- CANDIDATE PROMISES --}}
                <livewire:candidate.edit.promises :candidate_id="$candidate->id" :promises="$candidate->promises" :wire:key="'candidate-promises'.$candidate->id">
            </div> 
            {{-- RIGHT COLUMN (Preview) --}}
            <div class="flex flex-col w-1/2 p-4 gap-6 items-center">
                <h1 class="text-xl">Promises Preview</h1>
                @include('candidate.component.promises', ['promises' => $candidate->promises])
            </div>
        </div>
        
    </div>
</div>
