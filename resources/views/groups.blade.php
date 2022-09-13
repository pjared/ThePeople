<x-app-layout>
    <div class="grid grid-flow-row bg-gray-50 gap-4">
        <div class="mt-16 h-12 flex col-span-1 justify-center">
            <div class="text-2xl font-roboto_mono md:text-4xl md:type-out">
                Find Political Groups Near You!
            </div>
        </div>

        <div>
            <livewire:groups.political-group-list />
        </div>
    </div>

    @section('page-title')
        Political Groups
    @endsection

    {{-- Feedback Modal --}}
    @auth
        @push('modals')
            @include('modals.feedback-modal')
        @endpush
    @endauth
</x-app-layout>

@include('components.footer')
