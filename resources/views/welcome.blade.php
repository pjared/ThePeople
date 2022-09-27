<x-app-layout>
    <div class="grid grid-flow-row bg-gray-50 gap-4">
        <div class="mt-16 h-8 md:h-12 flex col-span-1 justify-center">
            <div class="font-roboto_mono font-light tracking-tight text-xl md:text-4xl type-out">
                <h1>See Who's Running For ...</h1>
            </div>
        </div>
        <div class='text-sky-600'>
            <livewire:ballot.ballot-list />
        </div>
    </div>
    @section('page-title')
        Home
    @endsection

    {{-- Feedback Modal --}}
    @auth
        @push('modals')
            @include('modals.feedback-modal')
        @endpush
    @endauth

</x-app-layout>




@include('components.footer')
