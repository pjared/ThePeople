<x-app-layout>
    <div class="grid grid-flow-row bg-gray-100 gap-4">
        {{-- TODO: Put in an admin navbar --}}
        @include('admin.admin-nav')

        <div class="flex flex-row flex-wrap justify-center gap-6 mt-12">
            <livewire:admin-approve-candidates />
        </div>
    </div>
</x-app-layout>
