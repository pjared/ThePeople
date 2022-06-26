<div class="flex grow justify-center">
    @role('admin')
        <div class="grid grid-cols-2 gap-12">
            <div class="col-span-1">
                <div class="flex flex-col background-card items-center outline outline-1 outline-black">
                    <h1>Linked Candidates</h1>
                    @foreach ($candidates_linked as $candidate)-
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
                                        Office: {{$candidate->office_name}} {{$candidate->location}}
                                    </div>              
                                </div>
                            </div>
                            
                            <form class="flex grow flex-row justify-center" wire:keydown.enter="update({{$candidate->id}})">
                                <div class="flex flex-col">
                                    <label>Permalink</label>
                                    <input class="text-input w-3/4" type="text" wire:model="perma_link.{{$candidate->id}}" value="{{$candidate->permalink->perma_link}}">
                                </div>
                                <div class="flex flex-col">
                                    <label>Link to direct to</label>
                                    <input class="text-input w-3/4" type="text" wire:model="candidate_link.{{$candidate->id}}" value="{{$candidate->permalink->candidate_link}}">
                                </div>
                            </form>
                        </div>
                    @endforeach  
                </div>
            </div>
            <div class="col-span-1">
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
                                        {{-- TODO: Get their location for this --}}
                                        Office: {{$candidate->office_name}} {{$candidate->location}}
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
        </div>
    @endrole
</div>
