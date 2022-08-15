<div class="flex flex-row">
    <div class="flex flex-col w-full">
        <div class="flex flex-col w-full gap-5 text-center items">
            @if($candidate->ballot)
                <span>You will be placed on the {{$candidate->ballot->location->name}} {{$candidate->ballot->office->name}} ballot, in the state of {{$candidate->state}}. If this is incorrect, please contact support@whatsinyourballot.com.</span>
                <div class="form-control items-center">
                    <label class="label cursor-pointer">
                        <span class="label-text">Show my profile on the ballot</span>
                        <input type="checkbox" wire:click="update_show_candidate" wire:model.defer="show" class="checkbox checkbox-primary" />
                    </label>
                </div>
                @if($show)
                    <span>You are now showing on the <a class='link' href="/ballot/{{$candidate->ballot->slug}}">{{$candidate->ballot->location->name}} {{$candidate->ballot->office->name}}</a> ballot</span>
                @endif
            @else
            <span>
                We have not placed you on a ballot yet. You will be notified when we have done this
            </span>
            @endif
        </div>

        <div class="divider"></div>

        <livewire:candidate.profile :candidate="$candidate">
    </div>
</div>
