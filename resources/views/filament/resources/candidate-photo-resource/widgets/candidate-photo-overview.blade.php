<x-filament::widget>
    <x-filament::card>
        @include('candidate.component.photos', ['photos' => $candidate->photos])
    </x-filament::card>
</x-filament::widget>
