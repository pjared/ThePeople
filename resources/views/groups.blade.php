<x-app-layout>
    <div class="grid grid-flow-row bg-gray-100 gap-4">
        <div class="mt-16 h-12 flex col-span-1 justify-center">
            <div class="text-2xl font-roboto_mono md:text-4xl md:type-out">
                Find Political Groups Near You!
            </div>
        </div>
        <div>
            <livewire:ballot.ballot-list />
        </div>
    </div>

    @section('page-title')
        Political Groups
    @endsection
</x-app-layout>

@include('components.footer')
