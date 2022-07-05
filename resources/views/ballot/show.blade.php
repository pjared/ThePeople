<x-app-layout>
    <div class="text-sm breadcrumbs p-4">
        <ul>
          <li><a href='/'>Home</a></li> 
          <li><b>Ballot ({{ $ballot->location->name }} {{ $ballot->office->name }})</b></li>
        </ul>
    </div>

    <div class="flex flex-1 items-center grow py-12">
        <div class="w-1/5 ml-6">
            <livewire:ballot-list />
        </div>
        
        {{-- TODO: Might have to make this it's own scrollable div --}}
        <div class="flex flex-1 w-4/5 mr-8 justify-center">
            <livewire:ballot-wire :ballot="$ballot">
        </div>
    </div>

    @include('modals.signup')
</x-app-layout>

