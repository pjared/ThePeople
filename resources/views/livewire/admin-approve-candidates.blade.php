<div class="flex grow justify-center">
    @role('admin')
        <div class="flex flex-col card w-3/4 items-center">
            <h1>List of Applications</h1>
            @foreach ($applications as $application)
                <div class="grid grid-cols-10 card outline outline-1 outline-black w-11/12 gap-2">
                    <div class="col-span-3">
                        <div class="flex flex-col">
                            <div>
                                Name: {{$application->name}}
                            </div>
                            <div>
                                Email: {{$application->email}}
                            </div>
                        </div>   
                    </div>
                    <div class="col-span-3">
                        <div>
                            State: {{$application->state}}
                        </div>
                        <div>
                            Office: {{$application->office_name}}, {{$application->location}}
                        </div>   
                    </div>
                    <div class="col-span-2">
                        Status: {{$application->status}}
                    </div>
                    <div class="col-span-1">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" wire:click="acceptCandidate({{ $application->user_id }})">
                            Accept
                        </button>
                    </div>
                    <div class="col-span-1">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" wire:click="rejectCandidate({{ $application->user_id }})">
                            Reject
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    @endrole
</div>
