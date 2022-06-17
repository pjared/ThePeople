<x-app-layout>
    {{-- <div class="flex-1 flex-col"> --}}
        <div class="flex flex-1 items-center grow pt-12">
            <div class="w-1/5 flex flex-initial ml-6 col-span-2">
                <livewire:ballot-list />
            </div>
            
            {{-- TODO: Might have to make this it's own scrollable div --}}
            <div class="flex-1 w-4/5 ml-16">
                <livewire:ballot :id="$id"/>
            </div>
        </div>
    {{-- </div>     --}}
</x-app-layout>
