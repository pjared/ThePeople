
<x-app-layout>
    <div class="flex flex-row">
        @include('candidate.aside')
        <livewire:candidate.profile :candidate="$candidate">
    </div>    
    @include('modals.signup', ['message' => "Please log in or register if you'd like to save information about the candidate. A candiate comparison page will be implemented soon!"])    
</x-app-layout>