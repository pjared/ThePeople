<div>
    <div class="text-sm breadcrumbs p-4">
        <ul>
          <li><a href='/'>Home</a></li>
          <li><b>Ballot ({{ $ballot->location->name }} {{ $ballot->office->name }})</b></li>
        </ul>
    </div>

    <div class="flex flex-col-reverse md:flex-row items-center grow py-12">
        <div class="w-1/5 ml-6">
            <livewire:ballot.ballot-list />
        </div>

        {{-- TODO: Might have to make this it's own scrollable div --}}
        <div class="flex flex-col flex-1 w-4/5 justify-center gap-4">
            {{-- <livewire:ballot.show :ballot="$ballot"> --}}
            @include('ballot.show')
            @role('organizerAdmin')
                <div class='flex flex-row'>
                    <div class="flex flex-col grow gap-6 items-center w-1/2">
                        <h2>Submit a question to the ballot</h2>
                        <textarea wire:model.defer="group_question" class="textarea textarea-primary w-3/4" placeholder="Your question"></textarea>
                        <button wire:click="add_question" class="btn btn-primary">Submit</button>
                    </div>

                    <div class='flex flex-col w-1/2 justify-center items-center gap-4'>
                        {{-- <span>Currently Backing: </span> --}}
                        {{-- {{dd('hi', $backed_candidate)}} --}}
                        <select wire:model.defer='backed_candidate' class="select select-bordered w-full max-w-xs">
                            <option selected value="">Back a Candidate</option>
                            @foreach ($ballot->candidates as $running_candidate)
                                <option value="{{$running_candidate->candidate->id}}">{{$running_candidate->candidate->name}}</option>
                            @endforeach
                        </select>
                        <div class='flex flex-row gap-4'>
                            <button wire:click="change_backing" class="btn btn-primary">Submit</button>
                            @if($backed_candidate)
                                <button wire:click="remove_backing" class="btn btn-error">Remove Current</button>
                            @endif
                        </div>
                    </div>
                </div>


                {{--  --}}
            @endrole
        </div>
    </div>

    @include('modals.signup', ['message' => "Please log in or register if you'd like to save your vote for the candidate. You can print the list of candidates for your state from your profile."])
    @section('page-title')
        {{$ballot->location->name}} {{$ballot->office->name}} Ballot
    @endsection
</div>
