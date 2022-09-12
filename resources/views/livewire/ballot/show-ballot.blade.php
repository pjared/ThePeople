<div>
    {{-- {{dd($this->ballot)}} --}}
    <div class="text-sm breadcrumbs p-4">
        <ul>
          <li><a href='/'>Home</a></li>
          <li><b>Ballot ({{ $this->ballot->location->name }} {{ $this->ballot->office->name }})</b></li>
        </ul>
    </div>

    <div class="flex flex-col-reverse md:flex-row items-center grow py-12">
        <div class="w-1/5 ml-6">
            <livewire:ballot.ballot-list />
        </div>

        {{-- TODO: Might have to make this it's own scrollable div --}}
        <div class="flex flex-col flex-1 w-4/5 justify-center gap-4">
            @if($this->ballot->has_single_runner)
                <div class='flex w-full justify-center'>
                    <div class="alert alert-warning shadow-lg w-1/2">
                        <div class='w-full'>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                            <p class='w-full text-center'>
                                This ballot contains a single candidate. The candidate below is the default winner of this race.
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            @include('ballot.show')

            @role('organizerAdmin')
                <livewire:groups.group-ballot :ballot="$this->ballot"/>
            @endrole
        </div>
    </div>

    @include('modals.signup', ['message' => "Please log in or register if you'd like to save your vote for the candidate. You can print the list of candidates for your state from your profile."])
    @section('page-title')
        {{$this->ballot->location->name}} {{$this->ballot->office->name}} Ballot
    @endsection
</div>
