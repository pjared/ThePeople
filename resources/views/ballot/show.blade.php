<x-app-layout>
    <div class="text-sm breadcrumbs p-4">
        <ul>
          <li><a href="{{route('welcome')}}">Home</a></li>
          <li><b>Ballot ({{ $ballot->location->name }} {{ $ballot->office->name }})</b></li>
        </ul>
    </div>
    <livewire:ballot.show-ballot :ballot="$ballot">

    @include('modals.signup', ['message' => "Please log in or register if you'd like to save information about the candidate"])

    @section('page-title')
        {{$ballot->location->name}} {{$ballot->office->name}} Ballot
    @endsection
</x-app-layout>
