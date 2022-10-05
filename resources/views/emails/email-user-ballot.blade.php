{{-- <div>
    <div class='background-card flex flex-col h-fit text-center gap-2'>
        @foreach ($ballot_list as $ballot_name => $candidate_name)
            <div
                class='flex flex-col'>
                <div class='text-xl underline'>
                    {{ $ballot_name }}
                </div>
                <div class='text-md'>
                    {{ $candidate_name }}
                </div>
            </div>
        @endforeach
    </div>
</div> --}}
@component('mail::message')
# Your Ballot
@component('mail::table')
| Ballot Name | Candidate Name  |
|:-------------:|:-------------:|
@foreach ($ballot_list as $ballot_name => $candidate_name)
| {{ $ballot_name }} | {{ $candidate_name }} |
@endforeach
@endcomponent
@endcomponent
