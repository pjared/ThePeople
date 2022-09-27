<x-app-layout>
    <div class="grid grid-flow-row gap-4">
        <div class="mt-16 h-8 md:h-12 flex col-span-1 justify-center">
            <div class="font-roboto_mono font-light tracking-tight text-xl md:text-4xl type-out">
                See Who's Running For ...
            </div>
        </div>

        {{-- TODO: Keep this for expansion --}}
        <div class="flex flex-row flex-wrap justify-center gap-6 mt-12">
            {{-- <livewire:find-ballot class="flex flex-row gap-6 mt-12"/> --}}
            <livewire:ballot.ballot-list />
        </div>
    </div>
</x-app-layout>
