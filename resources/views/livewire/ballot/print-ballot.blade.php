<div
    class='flex flex-row w-full justify-center pt-4 gap-4'
    x-data="ballot">

    @if (count($votes) != 0)
        <div class='background-card flex flex-col h-fit form-control'>
            <span>Ballots You've Voted On</span>
            @foreach ($votes as $i => $vote)
                <label class="label cursor-pointer">
                    <span class="label-text text-xl">{{ $vote->ballot->name }}</span>
                    <input
                        type="checkbox"
                        @click="toggle('{{ $i }}')"
                        checked="checked{{ $i }}"
                        class="checkbox checkbox-primary" />
                </label>
            @endforeach
        </div>
    @endif

    <div class='flex flex-col w-2/5 gap-2 text-center'>
        <div
            class='background-card flex flex-col h-fit text-center gap-2'
            id='ballot'>
            @foreach ($votes as $i => $vote)
                <div
                    class='flex flex-col'
                    x-show="! is_selected('{{ $i }}')">
                    <div class='text-xl underline'>
                        {{ $vote->ballot->name }}
                    </div>
                    <div class='text-md'>
                        {{ $vote->candidate->name }}
                    </div>
                </div>
            @endforeach
            @if (count($votes) == 0)
                <p>You haven't votes on any ballots yet! To get started, click on the home tab in the top bar and choose the candidates you plan to vote for. Come back to this page once you've finished</p>
            @endif
        </div>
        @if ($this->ballot_sent)
            <p class="mt-2 font-medium text-sm text-green-600">
                {{ __('Ballot has been sent!') }}
            </p>
        @endif
        @if (count($votes) != 0)
            <button
                type="button"
                {{-- wire:click="emailUserBallot" --}}
                @click="email"
                class="underline text-sm text-gray-600 hover:text-gray-900">
                {{ __('Email Yourself This Ballot') }}
            </button>
            <p>Did you like the site? Consider <label for="feedback-modal" class="underline">giving us some feedback</label> about how we can improve!</p>
        @endif
    </div>

    {{-- Feedback Modal --}}
    @push('modals')
        @include('modals.feedback-modal')
    @endpush

    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('ballot', () => ({
                    tags: [],
                    toggle(tag) {
                        if (this.tags.includes(tag)) {
                            this.tags = this.tags.filter(x => x != tag)
                        }
                        else {
                            this.tags.push(tag)
                        }
                    },
                    is_selected(tag) {
                        return this.tags.includes(tag);
                    },
                    email() {
                        @this.emailUserBallot(this.tags);
                    },
                }))
            })
        </script>
    @endpush

    @section('title')
        Print Your Ballot
    @endsection
</div>
