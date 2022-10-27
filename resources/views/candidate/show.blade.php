<x-app-layout>
    <div class="text-sm breadcrumbs p-4">
        <ul>
          <li><a href="{{ route('welcome') }}">Home</a></li>
          <li><a href="{{ route('ballot', ['ballot' => $candidate->ballot->slug]) }}">Ballot ({{ $candidate->ballot->location->name }} {{ $candidate->ballot->office->name }})</a></li>
          <li><b>{{ $candidate->name }}</b></li>
        </ul>
    </div>
    @if ($candidate->ballot->has_single_runner)
        <div class='text-center text-xl text-gray-400'>
            This is the only candidate for this ballot so we have not fully researched this candidate. If you'd like to read more about the candidate, you can see their site at <a href='{{ $candidate->site_link }}' class='underline'>{{ $candidate->site_link }}</a>
        </div>
    @endif
    <livewire:candidate.profile :candidate_slug="$candidate->slug">

    @include('modals.signup', ['message' => "Please log in or register if you'd like to save information about the candidate."])

    @section('meta-tags')
        <meta property="og:title" content="{{ $candidate->name }}'s Profile on ThePeople" />
        <meta property="og:type" content="profile" />
        <meta property="og:url" content="https://whatsinyourballot.com/candidate/profile/{{ $candidate->slug }}" />
        <meta property="og:image" content="{{ url("$candidate->profile_photo_url") }}" />
        <meta name="twitter:card" content="summary_large_image">
        <meta property="og:description" content="Here you can view stances that {{ $candidate->name }} has listed on their personal website, their campaign finance data, and legislation they've passed if they're holding office.">
        <meta property="og:site_name" content="ThePeople">
        <meta name="twitter:image:alt" content="ThePeople">
        {{-- <link rel="canonical" href="https://whatsinyourballot.com/candidate/profile/{{ $candidate->slug }}" /> --}}
    @endsection

    @section('page-title')
        {{ $candidate->name }}'s Profile on ThePeople
    @endsection
</x-app-layout>
