<x-filament::widget>
    <x-filament::card>
        <div class="flex flex-col p-4 gap-6 items-center">
            <h1 class="text-xl">Photos Preview</h1>
            @include('candidate.component.photos', ['photos' => $candidate->photos])
        </div>
    </x-filament::card>
</x-filament::widget>
