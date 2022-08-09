<x-filament::widget>
    <x-filament::card>
        @include('candidate.component.promises', ['promises' => $candidate->promises])
    </x-filament::card>
</x-filament::widget>
