<div class="flex flex-row">
    @include('candidate.aside')

    <div class="flex flex-col w-full">
        <div class="flex flex-col w-full gap-5 text-center items">
            @if($candidate->ballot)
                <span>You will be placed on the {{$candidate->ballot->location->name}} {{$candidate->ballot->office->name}} ballot, in the state of {{$candidate->state}}. If this is incorrect, please contact customer support.</span>
                <div class="form-control items-center">
                    <label class="label cursor-pointer">
                        <span class="label-text">Show my profile on the ballot</span>
                        <input type="checkbox" wire:model.defer="show" class="checkbox checkbox-primary" />
                    </label>
                    <button class='btn btn-primary w-fit' wire:click="update_show_candidate">Update</button>
                </div>
            @else
            <span>
                We have not placed you on a ballot yet. You will be notified when we have done this
            </span>
            @endif
        </div>

        <div class="divider"></div>

        <livewire:candidate.profile :candidate="$candidate">
    </div>

    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('nextFlag', () => ({
                    flag: {
                        ['@click']() {
                            console.log('clicked');
                            console.log(this.transparent, this.black, this.green, this.red);
                            if(this.transparent) {
                                this.transparent = false;
                                this.black = true;
                            } else if (this.black) {
                                this.black = false;
                                this.green = true;
                            } else if (this.green) {
                                this.green = false;
                                this.red = true;
                            } else {
                                this.red = false;
                                this.transparent = true;
                            }
                        },
                    },
                }))
            });
        </script>
    @endpush
</div>
