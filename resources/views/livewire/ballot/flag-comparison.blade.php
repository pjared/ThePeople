<div class='w-full flex flex-row pt-4'>
    @foreach ($candidates as $candidate)
        <div class='w-full'>
            <div class="flex flex-col items-center">
                {{-- PROFILE PICTURE --}}
                <figure>
                    <img
                        src="{{ $candidate->profile_photo_url ?? ''}} "
                        alt="{{ $candidate->name }}"
                        class="h-28 w-28 mask mask-circle"
                        loading='lazy'>
                </figure>
                {{-- NAME --}}
                <div class="flex grow flex-col md:flex-row font-courier">
                    <h3 class="text-xl"><a class='link' href="/candidate/profile/{{$candidate->slug}}">{{ $candidate->name }}</a></h3>
                </div>

                {{-- CHECKBOX --}}
                @include('components.checkbox')

                <livewire:candidate.flag-info
                    :flags="$flags->where('candidate_id', $candidate->id)"
                    :opinions="$opinions" />
            </div>

        </div>
    @endforeach
</div>
