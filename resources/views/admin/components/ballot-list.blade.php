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