<div class="flex items-center pl-4">
    @if ($candidate_vote == $candidate->id)
        <input type="checkbox" class="check flex" id="check{{ $candidate->id }}" onclick="unselectAll({{ $candidate->id }})" wire:click='change_user_vote({{ $candidate->id }})' checked>
    @else
        <input type="checkbox" class="check flex" id="check{{ $candidate->id }}" onclick="unselectAll({{ $candidate->id }})" wire:click='change_user_vote({{ $candidate->id }})'>
    @endif

    <label class="flex grow items-center" for="check{{ $candidate->id }}" style="--d: 60%;">
        <svg class="h-12 w-12" viewBox="0, 0, 60, 60">
            <rect x="10%" y="10%"/>
            <path d="M5 30 L 20 40 L 55 -15"></path>
        </svg>
    </label>
</div>
