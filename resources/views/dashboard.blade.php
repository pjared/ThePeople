<x-app-layout>
    <div class="grid grid-flow-row gap-4">
        <div class="mt-16 h-12 flex col-span-1 justify-center">
            <div class="text-4xl font-roboto_mono type-out">
                See Who's Running For ...
            </div>
        </div>

        <div class="grid grow grid-cols-4 grid-flow-col gap-6 mt-12">
            {{-- Left Column: Offices --}}
            <div class="col-start-2 col-span-1">
                <livewire:level-office /> 
            </div>
    
            {{-- Right Column: Location Input --}}
            <div class="col-start-3 col-span-1 text-xl grow">
                <livewire:location-input /> 
            </div>
        </div>
    </div>
</x-app-layout>
