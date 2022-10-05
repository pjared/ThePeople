<x-filament::widget>
    <x-filament::card>
        <div class="flex flex-col p-4 gap-6 items-center">
            <h1 class="text-xl">Campaign Videos Preview</h1>
            @include('candidate.component.videos', ['videos' => $candidate->videos])
            @if (count($candidate->videos) == 0)
                You have no videos. Add some with the button on the top right.
            @endif
        </div>
    </x-filament::card>
</x-filament::widget>
