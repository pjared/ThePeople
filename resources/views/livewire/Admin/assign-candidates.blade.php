<div class="flex flex-col grow items-center pb-6">
    @role('admin')
        <div class="flex w-screen justify-center">
            @if (session()->has('message'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 w-2/5" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 w-2/5" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    
        <div class="w-11/12">
            <div class="flex grow flex-row gap-6">
                <div class="w-3/5 text-center">
                    <div class="flex grow flex-col gap-4">
                        {{-- CANDIDATES TO PLACE --}}
                        <h1 class="text-xl">
                            Candidates To Place
                        </h1>
                        <div class="flex background-card grow flex-col gap-1">
                            @foreach ($candidates as $candidate)
                                <div class="grid grid-cols-3 background-card outline outline-1 outline-black gap-6 text-left">
                                    <div class="col-span-1">
                                        <div class="flex grow flex-col">
                                            <div>
                                                Name: {{$candidate->name}}
                                            </div>
                                            <div>
                                                Email: {{$candidate->email}}
                                            </div>
                                            <div>
                                                Number: {{$candidate->phone_number}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="flex grow flex-col">
                                            <div>
                                                State: {{$candidate->state}}
                                            </div>
                                            <div>
                                                Office: {{$candidate->application->office_name}} {{$candidate->application->location}}
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <form class="flex flex-row" wire:keydown.enter="assignCandidate({{$candidate->id}})">
                                            <div class="form-control w-full max-w-xs">
                                                <label class="label">
                                                  <span class="label-text">Ballot ID</span>
                                                </label>
                                                <input type="text" wire:model="new_ballot_id" class="input input-bordered w-3/4 max-w-xs" />
                                            </div>
                                            @error('new_ballot_id') <span class="error">{{ $message }}</span> @enderror

                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- PLACED CANDIDATES --}}
                        <h1 class="text-xl">
                            Candidates Placed
                        </h1>
                        <form class="flex grow flex-col background-card gap-1" wire:submit.prevent='updateBallotAssignment'>
                            @foreach ($placed_candidates as $i => $placed_candidate)
                                <div wire:key="candidate-ballot-{{ $placed_candidate->candidate->id }}" class="grid grid-cols-3 background-card outline outline-1 outline-black gap-6 text-left">
                                    <div class="col-span-1">
                                        <div class="flex grow flex-col">
                                            <div>
                                                Name: {{$placed_candidate->candidate->name}}
                                            </div>
                                            <div>
                                                Email: {{$placed_candidate->candidate->contact_email}}
                                            </div>
                                            <div>
                                                Number: {{$placed_candidate->candidate->phone_number}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="flex grow flex-col">
                                            <div>
                                                State: {{$placed_candidate->candidate->state}}
                                            </div>
                                            <div>
                                                {{-- Office: {{$placed_candidate->candidate->ballot->office->name}} {{$placed_candidate->candidate->ballot->location->name}} --}}
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="flex flex-row">
                                            <div class="form-control w-full max-w-xs">
                                                <label class="label">
                                                  <span class="label-text">Ballot ID</span>
                                                </label>                                                
                                                <input type="text" wire:model="placed_candidates.{{$i}}.ballot_id" class="input input-bordered w-3/4 max-w-xs" />
                                            </div>
                                            @error('placed_candidates.{{$i}}.ballot_id') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <button class="btn btn-primary" type="submit">Save</button>
                        </form>
                    </div>                    
                </div>
                <div class="w-2/5">
                    <div class="flex grow flex-col">
                        <h1 class="text-xl">
                            Ballots
                        </h1>
                        <div class="flex background-card grow flex-col gap-1">
                            @foreach ($ballots as $ballot)
                                <div class="grid grid-cols-2 background-card outline outline-1 outline-black gap-6 text-center">
                                    <div class="col-span-1">
                                        <div class="flex flex-col">
                                            <div>
                                                Office Name: {{$ballot->office->name}}
                                            </div>
                                            <div>
                                                Location: {{$ballot->location->name}}
                                            </div>                       
                                        </div>
                                    </div>                                    
                                    <div class="col-span-1">
                                        ID: {{$ballot->id}}
                                    </div>   
                                </div>                         
                            @endforeach
                        </div>
                    </div>     
                </div>
            </div>
        </div>            
    @endrole
</div>