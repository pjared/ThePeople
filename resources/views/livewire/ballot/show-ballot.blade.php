<div>
    <div class="text-sm breadcrumbs p-4">
        <ul>
          <li><a href='/'>Home</a></li>
          <li><b>Ballot ({{ $ballot->location->name }} {{ $ballot->office->name }})</b></li>
        </ul>
    </div>

    <div class="flex flex-col-reverse md:flex-row items-center grow py-12">
        <div class="w-1/5 ml-6">
            @if($candidates_loaded)
                <livewire:ballot.ballot-list />
            @endif
        </div>

        {{-- TODO: Might have to make this it's own scrollable div --}}
        <div class="flex flex-col flex-1 w-4/5 justify-center gap-4">
            @include('ballot.show')


            @if($candidates_loaded)
                @role('organizerAdmin')
                    <livewire:groups.group-ballot :ballot="$ballot"/>
                @endrole
            @endif
        </div>
    </div>

    @include('modals.signup', ['message' => "Please log in or register if you'd like to save your vote for the candidate. You can print the list of candidates for your state from your profile."])
    @section('page-title')
        {{$ballot->location->name}} {{$ballot->office->name}} Ballot
    @endsection
</div>
