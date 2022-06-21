<div class="flex grow justify-center">
    @role('admin')
        <div class="flex flex-col card w-3/4 items-center">
            <h1>List of Applications</h1>
            @foreach ($applications as $application)
                <div class="flex flex-row card w-11/12 gap-10">
                    <div class="flex flex-col">
                        <div>
                            Name: {{$application->name}}
                        </div>
                        <div>
                            Email: {{$application->email}}
                        </div>
                    </div>        
                    <div class="flex flex-col">
                        <div>
                            State: {{$application->state}}
                        </div>
                        <div>
                            Office: {{$application->office_name}} {{$application->location}}
                        </div>                    
                    </div>        
                    <div>
                        Status: {{$application->status}}
                    </div>
                    <div class="flex grow justify-end gap-5">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" wire:click="acceptCandidate({{ $application->user_id }})">
                            Accept
                        </button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" wire:click="rejectCandidate({{ $application->user_id }})">
                            Reject
                        </button>
                    </div>                
                </div>
            @endforeach
        </div>
    @endrole
</div>
