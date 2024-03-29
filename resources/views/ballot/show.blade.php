<x-app-layout>
    {{-- Breadcrumbs --}}
    <div class="text-sm breadcrumbs p-4">
        <ul>
          <li><a href="{{ route('welcome') }}">Home</a></li>
          <li><b>Ballot ({{ $ballot->location->name }} {{ $ballot->office->name }})</b></li>
        </ul>
    </div>

    {{-- Ballot Section --}}
    <div class="flex flex-col-reverse md:flex-row items-start grow gap-6 md:gap-0 md:py-12">
        <div class="sm:w-11/12 md:w-1/5 md:ml-6 text-gray-400">
            <livewire:ballot.ballot-list :current_ballot_id="$ballot->id" />
        </div>

        {{-- TODO: Might have to make this it's own scrollable div --}}
        <div class="flex flex-col flex-1 sm:w-full md:mr-6 md:w-4/5 justify-center gap-4 items-center">
            @if ($ballot->has_single_runner)
                <div class='flex w-full justify-center'>
                    <div class="alert alert-info shadow-lg w-4/5">
                        <div class='w-full'>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                            <p class='w-full text-center'>
                                This ballot contains a single candidate. The candidate below is the default winner of this race.
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @include('ballot.ballot')

            @role('organizerAdmin')
                <div wire:init='init'>
                    @if ($page_loaded)
                            <livewire:groups.group-ballot :ballot="$ballot"/>
                    @endif
                </div>
            @endrole
        </div>
    </div>
    {{-- <livewire:ballot.show-ballot :ballot_slug="$ballot->slug"> --}}

    @guest
        @include('modals.signup', ['message' => "Please log in or register if you'd like to save information about the candidate"])
    @endguest

    @section('page-title')
        {{ $ballot->name }} Ballot - ThePeople
    @endsection

    @section('meta-tags')
        <meta property="og:title" content="{{ $ballot->name }} Ballot - ThePeople" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://whatsinyourballot.com/ballot/{{ $ballot->slug }}" />
        <meta property="og:image" content="{{ url('storage/images/ballot.png') }}" />
        <meta name="twitter:card" content="summary_large_image">

        <meta property="og:description" content="Directly compare the candidates that will be showing up on your ballots for the election. You can go to each individual profile of the candidate to see stances, donors, and voting record. Candidates here have the ability to create their own profiles, however if a candidate has not created a profile it's we've created one for them.">
        <meta property="og:site_name" content="ThePeople">
        <meta name="twitter:image:alt" content="ThePeople">
        {{-- <link rel="canonical" href="https://whatsinyourballot.com/candidate/profile/{{ $candidate->slug }}" /> --}}
    @endsection

    @section('description')
        The mock-ballot of {{ $ballot->name }}. Directly compare the candidates that will be showing up on your ballots for the election. You can go to each individual profile of the candidate to see stances, donors, and voting record. Candidates here have the ability to create their own profiles, however if a candidate has not created a profile it's we've created one for them.
        This ballot currently has the following candidates:
        @foreach ($ballot->candidates as $candidate)
            {{ $candidate->name }},
        @endforeach
    @endsection
    @section('keywords')
        {{ $ballot->name }}, {{ $ballot->location->name }} election, {{ $ballot->office->name }} election, {{ $ballot->location->name }} ballot, {{ $ballot->office->name }} ballot, {{ $ballot->name }} candidate comparison,
        @foreach ($ballot->candidates as $candidate)
            {{ $candidate->name }},
        @endforeach
    @endsection
</x-app-layout>
