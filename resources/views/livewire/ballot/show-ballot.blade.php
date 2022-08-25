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
        <div class="flex flex-1 w-4/5 justify-center">
            {{-- <livewire:ballot.show :ballot="$ballot"> --}}
            @include('ballot.show')
        </div>
    </div>

    @include('modals.signup', ['message' => "Please log in or register if you'd like to save your vote for the candidate. You can print the list of candidates for your state from your profile."])
    @section('page-title')
        {{$ballot->location->name}} {{$ballot->office->name}} Ballot
    @endsection
</div>
