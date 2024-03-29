<div>
    <div class="flex flex-col-reverse md:flex-row items-start grow gap-6 md:gap-0 md:py-12">
        <div class="sm:w-11/12 md:w-1/5 md:ml-6 text-gray-400">
            <livewire:ballot.ballot-list :current_ballot_id="$this->ballot->id" />
        </div>

        {{-- TODO: Might have to make this it's own scrollable div --}}
        <div class="flex flex-col flex-1 sm:w-full md:mr-6 md:w-4/5 justify-center gap-4 items-center">
            @if ($this->ballot->has_single_runner)
                <div class='flex w-full justify-center'>
                    <div class="alert alert-info shadow-lg w-4/5">
                        <div class='w-full'>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                            <p class='w-full text-center'>
                                This ballot contains a single candidate. The candidate below is the default winner of this race.
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @include('ballot.ballot')

            @role('organizerAdmin')
                <div wire:init='init'>
                    @if ($page_loaded)
                            <livewire:groups.group-ballot :ballot="$this->ballot"/>
                    @endif
                </div>
            @endrole
        </div>
    </div>
</div>
