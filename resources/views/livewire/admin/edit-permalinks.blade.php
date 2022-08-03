<div class="flex flex-col w-11/12 pb-6 justify-center items-center" x-data="{ tab: 'links' }">
    @role('admin')
        <div class="tabs">
            <a class="tab tab-bordered" :class="tab === 'links' && 'tab-active'" x-on:click.prevent="tab = 'links'" href="#">Linked Candidates</a>
            <a class="tab tab-bordered" :class="tab === 'candidates' && 'tab-active'" x-on:click.prevent="tab = 'candidates'" href="#">Unlinked Candidates</a>
        </div>

        <div class="flex flex-col gap-4 w-11/12" x-show="tab === 'links'">
            <livewire:tables.candidate-permalinks-table />
        </div>
        <div class="flex flex-col gap-4 w-11/12" x-show="tab === 'candidates'">
            <div class="flex flex-col background-card items-center outline outline-1 outline-black">
                <h1>Unlinked Candidates</h1>
                @foreach ($candidates as $candidate)
                    <div class="flex flex-col background-card w-11/12 gap-2 outline outline-1 outline-black">
                        <div class="flex flex-row gap-6">
                            <div class="flex flex-col">
                                <div>
                                    Name: {{$candidate->name}}
                                </div>
                                <div>
                                    State: {{$candidate->state}}
                                </div>

                            </div>
                            <div class="flex flex-col">
                                <div>
                                    Office: {{$candidate->ballot->office->name}}, {{$candidate->ballot->location->name}}
                                </div>
                            </div>
                        </div>

                        <!-- TODO: Finish up a form for assigning candidate to ballot-->
                        <form class="flex grow flex-row justify-center" wire:keydown.enter="save({{$candidate->id}})">
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                <span class="label-text">Permalink</span>
                                </label>
                                <input type="text" wire:model="perma_link.{{$candidate->id}}" class="input input-bordered w-3/4 max-w-xs" />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                <span class="label-text">Link to direct to</span>
                                </label>
                                <input type="text" wire:model="candidate_link.{{$candidate->id}}" class="input input-bordered w-3/4 max-w-xs" />
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    @endrole
</div>
