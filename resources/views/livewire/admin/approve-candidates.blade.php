<div class="flex flex-col pb-6 justify-center items-center">
    @role('admin')
        <div class="flex flex-col background-card w-3/4 items-center">
            <h1>List of Applications</h1>
            @foreach ($applications as $application)
                <div class="card shadow-xl outline outline-1 outline-black">
                    <div class="card-body">
                        <div class="grid grid-cols-12 gap-2">
                            <div class="col-span-4">
                                <div class="flex flex-col">
                                    <div>
                                        Name: {{$application->name}}
                                    </div>
                                    <div>
                                        Email: {{$application->email}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div>
                                    State: {{$application->state}}
                                </div>
                                <div>
                                    Office: {{$application->office_name}}, {{$application->location}}
                                </div>
                            </div>
                            <div class="col-span-1">
                                Status: {{$application->status}}
                            </div>
                            <div class="col-span-3 flex grow items-center">
                                <div class="card-actions flex grow flex-row justify-end">
                                    <button
                                        class="btn btn-primary"
                                        wire:click="acceptCandidate({{ $application->user_id }})"
                                        name="Accept-{{ $application->user_id }}">
                                        Accept
                                    </button>
                                    <button class="btn btn-error" wire:click="rejectCandidate({{ $application->user_id }})">
                                        Reject
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    @endrole
</div>
