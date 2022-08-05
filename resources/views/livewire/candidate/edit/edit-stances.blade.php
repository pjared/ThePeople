<div class="flex flex-row">
    @include('candidate.aside')

    <div class="flex flex-row w-full justify-between">
        {{-- LEFT COLUMN (Edit) --}}
        <div class="flex flex-col w-1/2 gap-2 p-4 items-center">
            <h1 class="text-xl">Add your Stances</h1>
            <div class="flex flex-col w-full h-inherit items-center justify-center">
                {{-- CONTROVERSIAL OPINIONS --}}
                @if ($candidate->ballot)
                    @include('candidate.edit.opinions', ['opinions' => $candidate->ballot->opinions])
                @else
                    <div class="flex">
                        <span class="text-center justify-center">We have not placed you on a ballot yet. You will be notified when we have done this so you can fill out your controversial opinons</span>
                    </div>
                @endif
            </div>
        </div>
        {{-- RIGHT COLUMN (Preview) --}}
        <div class="flex flex-col w-1/2 p-4 gap-6 items-center">
            <h1 class="text-xl">Stances Preview</h1>
            @include('candidate.component.stances', ['opinions' => $opinions, 'candidate' => $candidate])
        </div>
    </div>
</div>
