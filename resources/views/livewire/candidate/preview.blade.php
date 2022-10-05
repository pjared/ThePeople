<div class="flex flex-row">
    <div class="flex flex-col w-full">
        <div class="flex flex-col w-full gap-5 text-center items">
            @if ($this->candidate->ballot)
                <span>You will be placed on the {{ $this->candidate->ballot->location->name }} {{ $this->candidate->ballot->office->name }} ballot, in the state of {{ $this->candidate->state }}. If this is incorrect, please contact support@whatsinyourballot.com.</span>
                <div class="form-control items-center">
                    <label class="label cursor-pointer">
                        <span class="label-text">Show my profile on the ballot</span>
                        <input type="checkbox" wire:click="update_show_candidate" wire:model.defer="show" class="checkbox checkbox-primary" />
                    </label>
                </div>
                @if ($show)
                    <span>You are now showing on the <a class='link' href="/ballot/{{ $this->candidate->ballot->slug }}">{{ $this->candidate->ballot->location->name }} {{ $this->candidate->ballot->office->name }}</a> ballot</span>
                @endif
            @else
            <span>
                We have not placed you on a ballot yet. You will be notified when we have done this
            </span>
            @endif
        </div>

        <div class="divider"></div>

        <livewire:candidate.profile :candidate_slug="$this->candidate->slug">
    </div>
</div>
