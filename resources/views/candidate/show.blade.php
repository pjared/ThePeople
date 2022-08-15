<x-app-layout>
    <div class="text-sm breadcrumbs p-4">
        <ul>
          <li><a href='/'>Home</a></li>
          <li><a href="/ballot/{{$candidate->ballot->slug}}">Ballot ({{ $candidate->ballot->location->name }} {{ $candidate->ballot->office->name }})</a></li>
          <li><b>{{ $candidate->name }}</b></li>
        </ul>
    </div>
    <livewire:candidate.profile :candidate="$candidate">

    @include('modals.signup', ['message' => "Please log in or register if you'd like to save information about the candidate. A candiate comparison page will be implemented soon!"])

    @section('page-title')
        {{ $candidate->name }}'s Profile
    @endsection
</x-app-layout>
