<div class='w-full flex flex-row pt-4'>
    @foreach ($candidates as $candidate)
        <div class='w-full'>
            <div class="flex flex-col items-center">
                {{-- PROFILE PICTURE --}}
                <figure>
                    <img
                        src="{{ $candidate->user->profile_photo_url ?? ''}} "
                        alt="{{ $candidate->name }}"
                        class="h-28 w-28 mask mask-circle"
                        loading='lazy'>
                </figure>
                {{-- NAME --}}
                <div class="flex grow flex-col md:flex-row font-courier">
                    <h3 class="text-xl">{{ $candidate->name }}</h3>
                </div>

                <livewire:candidate.flag-info
                    {{-- :candidate_id="$candidate->id" --}}
                    :flags="$flags->where('candidate_id', $candidate->id)"
                    :opinions="$opinions" />

                {{-- CHECKBOX --}}
                <div class="flex items-center pl-4">
                    {{-- This Checkbox is wack. Good luck to the future person who has to deal with this --}}
                    @if($candidate_vote == $candidate->id)
                        <input type="checkbox" class="check flex" id="check{{$candidate->id}}" onclick="unselectAll({{$candidate->id}})" wire:click='change_user_vote({{$candidate->id}})' checked>
                    @else
                        <input type="checkbox" class="check flex" id="check{{$candidate->_id}}" onclick="unselectAll({{$candidate->id}})" wire:click='change_user_vote({{$candidate->id}})'>
                    @endif

                    <label class="flex grow items-center" for="check{{$candidate->id}}" style="--d: 60%;">
                        <svg class="h-12 w-12" viewBox="0, 0, 60, 60">
                            <rect x="10%" y="10%"/>
                            <path d="M5 30 L 20 40 L 55 -15"></path>
                        </svg>
                    </label>
                </div>
            </div>

        </div>
    @endforeach
</div>
