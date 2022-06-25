<x-app-layout>
    <div class="grid grid-flow-row bg-gray-100 gap-4">
        @include('admin.admin-nav')

        <div class="mt-8">
            <livewire:admin-approve-candidates />
        </div>
    </div>
</x-app-layout>
