<x-filament::widget>
    <x-filament::card>
        {{ $this->form }}

        <button wire:click='save' class='btn'>
            Save
        </button>
    </x-filament::card>
</x-filament::widget>
