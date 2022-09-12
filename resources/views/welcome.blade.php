<x-app-layout>
    <div class="grid grid-flow-row bg-gray-50 gap-4">
        <div class="mt-16 h-12 flex col-span-1 justify-center">
            <div class="text-xl font-roboto_mono md:text-4xl type-out">
                <h1>See Who's Running For ...</h1>
            </div>
        </div>
        <div>
            <livewire:ballot.ballot-list />
        </div>
    </div>
    @section('page-title')
        Home
    @endsection
</x-app-layout>

@include('components.footer')
