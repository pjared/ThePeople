<x-app-layout>
    <div class="grid grid-flow-row gap-4">
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

    @section('meta-tags')
        <meta property="og:title" content="Welcome to ThePeople" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://whatsinyourballot.com" />
        <meta property="og:image" content="{{ url('storage/images/home-page.png') }}" />
    @endsection

    {{-- Feedback Modal --}}
    @auth
        @push('modals')
            @include('modals.feedback-modal')
        @endpush
    @endauth

</x-app-layout>




@include('components.footer')
