<x-app-layout>
    <div class="text-sm breadcrumbs p-4">
        <ul>
          <li><a href="{{route('welcome')}}">Home</a></li>
          <li><a href="{{route('ballot', ['ballot' => $candidate->ballot->slug])}}">Ballot ({{ $candidate->ballot->location->name }} {{ $candidate->ballot->office->name }})</a></li>
          <li><b>{{ $candidate->name }}</b></li>
        </ul>
    </div>
    @if ($candidate->ballot->has_single_runner)
        <div class='text-center text-xl text-gray-400'>
            This is the only candidate for this ballot so we have not fully researched this candidate. If you'd like to read more about the candidate, you can see their site at <a href='{{ $candidate->site_link}}' class='underline'>{{ $candidate->site_link}}</a>
        </div>
    @endif
    <livewire:candidate.profile :candidate_slug="$candidate->slug">

    @include('modals.signup', ['message' => "Please log in or register if you'd like to save information about the candidate."])

    @section('page-title')
        {{ $candidate->name }}'s Profile
    @endsection
</x-app-layout>
