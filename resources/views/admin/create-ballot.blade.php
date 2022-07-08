<x-app-layout>
    <div class="grid grid-flow-row bg-gray-100 gap-4">
        {{-- TODO: Put in an admin navbar --}}
        @include('admin.admin-nav')

        <div class="mt-6">
            <livewire:admin.create-ballot />
        </div>
    </div>
</x-app-layout>
