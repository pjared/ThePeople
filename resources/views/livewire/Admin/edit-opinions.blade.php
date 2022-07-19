<div class="flex flex-col justify-center items-center gap-12">
    {{-- OPINIONS LIST --}}
    @if (session()->has('message'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 w-3/4" role="alert">
            {{ session('message') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 w-3/4" role="alert">
            {{ session('error') }}
        </div>
    @endif
    
    <div class="grid grid-cols-3 justify-center w-full gap-2">
        {{-- OPINION LIST --}}
        <div class="col-span-1 flex flex-col text-center gap-4">
            <span class="text-2xl">Opinions</span>
        
            <div class="flex flex-col items-center gap-2">
                @foreach ($opinions as $i => $opinion)
                    <span class="text-xl">
                        {{$opinion->name}} ({{$opinion->id}})
                    </span>
                @endforeach
            </div>
        </div>
    
        {{-- ADD OPINION TO BALLOT --}}
        <div class="col-span-1 flex flex-col text-center gap-4">
            <div class="flex flex-col background-card items-center rounded-t-none w-11/12" x-show="show" x-transition>
                <h1>Add Opinion to Ballot</h1>
                <div class="flex flex-col grow ">
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Opinion ID</span>
                        </label>
                        <input type="number" wire:model.defer="new_ballot_opinion.controversial_opinion_id" class="input input-bordered w-full max-w-xs" />
                    </div>
                    @error('new_ballot_opinion.opinion_id') <span class="error">{{ $message }}</span> @enderror
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Ballot ID</span>
                        </label>
                        <input type="number" wire:model.defer="new_ballot_opinion.ballot_id" class="input input-bordered w-full max-w-xs" />
                    </div>
                    @error('new_ballot_opinion.ballot_id') <span class="error">{{ $message }}</span> @enderror
                    <button wire:click='add_ballot_opinion' class="btn btn-primary mt-2">Add Opinion Type</button>
                </div>
            </div>
        </div>

        {{-- BALLOT LIST --}}
        <div class="col-span-1 flex grow flex-col gap-2">
            <div class="flex grow flex-col items-center">
                @foreach ($ballots as $ballot)
                    <div class="flex flex-col background-card w-11/12 items-center gap-2">
                        <div class="text-center">
                            <span>{{ $ballot->location->name }} {{ $ballot->office->name }} - {{$ballot->id}}</span>
                        </div>
                        <div class="text-center">
                            <span>{{ $ballot->voting_date->format('m/d/Y') }}</span>
                        </div>     
                        <div class="flex flex-col">
                            {{-- {{dd($ballot->opinions)}} --}}
                            @foreach ($ballot->opinions as $opinion)
                                <div class="grid grid-cols-4">
                                    <span class='col-span-3'>{{$opinion->name}}</span>
                                    <button wire:click='remove_ballot_opinion({{$ballot->id}},{{$opinion->id}})' class="btn btn-sm btn-error">Delete</button>
                                </div>
                            @endforeach
                        </div>                    
                    </div>
                @endforeach
            </div>
        </div>
    </div>    
</div>
