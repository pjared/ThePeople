<div class="flex flex-col w-full pb-6 justify-center items-center">
    {{-- OPINIONS LIST --}}
    @if (session()->has('message'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 w-3/4" role="alert">
            {{ session('message') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 w-3/4" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="flex flex-col gap-2 justify-center w-11/12">
        <livewire:tables.ballot-opinions-table />

        {{-- ADD OPINION TO BALLOT --}}
        <div class="flex flex-col text-center background-card items-center rounded-t-none w-fit" x-show="show" x-transition>
            <h1>Add Opinion to Ballot</h1>
            <div class="flex flex-row gap-6">
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Opinion ID</span>
                    </label>
                    <input type="number" wire:model.defer="new_ballot_opinion.controversial_opinion_id" class="input input-bordered w-full max-w-xs" />
                </div>
                @error('new_ballot_opinion.opinion_id') <span class="error">{{ $message }}</span> @enderror
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Ballot ID</span>
                    </label>
                    <input type="number" wire:model.defer="new_ballot_opinion.ballot_id" class="input input-bordered w-full max-w-xs" />
                </div>
                @error('new_ballot_opinion.ballot_id') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button wire:click='add_ballot_opinion' class="btn btn-primary mt-2">Add Opinion Type</button>
        </div>
    </div>
</div>
