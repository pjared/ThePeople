<x-filament::widget>
    <x-filament::card>
        <div class="flex justify-center">
            {{-- @include('candidate.component.stances', ['opinions' => $opinions, 'candidate' => $candidate]) --}}
            <livewire:candidate.stances :opinions="$opinions" :candidate="$candidate" />
        </div>
    </x-filament::card>
</x-filament::widget>
