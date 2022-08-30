<x-filament::widget>
    <x-filament::card>
        <div class="flex flex-col p-4 gap-6 items-center">
            <h1 class="text-xl">Stances Preview</h1>
            @include('candidate.component.opinions', ['previous_positions' => $candidate->previous_positions])
        </div>
    </x-filament::card>
</x-filament::widget>
