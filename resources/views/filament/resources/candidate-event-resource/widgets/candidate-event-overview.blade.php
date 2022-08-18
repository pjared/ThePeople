<x-filament::widget>
    <x-filament::card>
        <div class="flex flex-col p-4 gap-6 items-center">
            <h1 class="text-xl">Event Preview</h1>
            @include('candidate.component.events', ['events' => $candidate->events])
        </div>
    </x-filament::card>
</x-filament::widget>
