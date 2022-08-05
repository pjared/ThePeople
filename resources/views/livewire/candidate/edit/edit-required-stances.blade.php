<div class="flex flex-row">
    @include('candidate.aside')

    <div class="flex flex-row w-full justify-between">
        {{-- LEFT COLUMN (Edit) --}}
        <div class="flex flex-col w-1/2 gap-2 p-4 items-center">
            <h1 class="text-xl">Add Your Required Stances</h1>
            <div class="flex flex-col w-full h-inherit items-center justify-center">
                {{-- REQUIRED STANCES --}}
                @if (count($required_stances) >= 1)
                    @foreach ($required_stances as $i => $stance)
                        <div class="flex flex-col w-full items-center gap-2">
                            <span class="text-2xl text-start w-full">{{$stance->required_stance->label}}</span>

                            {{-- STANCE REASONING --}}
                            <label class="label flex grow justify-center">
                                <span class="label-text">Reasoning behind stance.</span>
                            </label>
                            <textarea class="textarea textarea-bordered flex grow w-full" wire:model.defer="required_stances.{{ $i }}.candidate_reasoning" rows="3"></textarea>
                            <span class="error">
                                @error('stances.'.$i.'.stance_reasoning') {{ $message }} @enderror
                            </span>
                        </div>
                    @endforeach
                    <button class="btn btn-info" wire:click='save_stances'>Save Stances</button>
                @else
                    <div class="flex">
                        <span class="text-center justify-center">We have not placed you on a ballot yet. You will be notified when we have done this so you can fill out your controversial opinons</span>
                    </div>
                @endif
            </div>
        </div>
        {{-- RIGHT COLUMN (Preview) --}}
        <div class="flex flex-col w-1/2 p-4 gap-6 items-center">
            <h1 class="text-xl">Required Stances Preview</h1>
            @include('candidate.component.stances', ['opinions' => $required_opinions, 'candidate' => $candidate])
        </div>
    </div>
    {{-- @foreach ($required_opinions as $required_stance)

    @endforeach --}}
</div>
