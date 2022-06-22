<div class="flex grow justify-center">
    @role('admin')
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
                                        <div class="flex flex-col">
                                            <div>
                                                Name: {{$candidate->name}}
                                            </div>
                                            <div>
                                                Email: {{$candidate->email}}
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <div>
                                                State: {{$candidate->state}}
                                            </div>
                                            <div>
                                                Office: {{$candidate->office_name}} {{$candidate->location}}
                                            </div>   
                                        </div>
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
