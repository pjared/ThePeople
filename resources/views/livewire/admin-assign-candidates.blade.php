<div class="flex flex-col grow items-center">
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
                    <div class="flex grow flex-col">
                        <h1 class="text-xl">
                            Candidates To Place
                        </h1>
                        <div class="flex card grow flex-col gap-1">
                            @foreach ($candidates as $candidate)
                                @if(!$candidate->ballot)
                                    <div class="flex flex-row card grow outline outline-1 outline-black gap-6 text-left">
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
                                        <div class="flex grow flex-col">
                                            <div>
                                                State: {{$candidate->state}}
                                            </div>
                                            <div>
                                                Office: {{$candidate->application->office_name}} {{$candidate->application->location}}
                                            </div>   
                                        </div>

                                        <!-- TODO: Finish up a form for assigning candidate to ballot-->
                                        <form class="flex justify-end w-1/4" wire:keydown.enter="assignCandidate({{$candidate->id}})">
                                            <div class="flex flex-col">
                                                <label>Office ID</label>
                                                <input class="text-input w-3/4" type="text" wire:model="office_id">
                                            </div>
                                            <div class="flex flex-col">
                                                <label>Location ID</label>
                                                <input class="text-input w-3/4" type="text" wire:model="location_id">
                                            </div>
                                        </form>
                                        
                                    </div>        
                                @endif
                            @endforeach
                        </div>
                    </div>                    
                </div>
                <div class="w-2/5">
                    <div class="flex grow flex-col">
                        <h1 class="text-xl">
                            Ballots
                        </h1>
                        <div class="flex card grow flex-col gap-1">
                            @foreach ($ballots as $ballot)
                                <div class="flex flex-row card grow outline outline-1 outline-black gap-6 text-left">
                                    <div class="flex flex-col">
                                        <div>
                                            Office Name: {{$ballot->office->name}}
                                        </div>
                                        <div>
                                            Location: {{$ballot->location->name}}
                                        </div>
                                        <div>
                                            ID: {{$ballot->id}}
                                        </div>                                   
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
