<div class="flex flex-col w-full justify-center items-center gap-6">
    <div class="w-11/12">
        <livewire:tables.opinions-table />
    </div>
    {{-- OPINION CREATION --}}
    <div class="flex flex-col background-card items-center rounded-t-none w-11/12" x-show="show" x-transition>
        <h1>Create a new opinion</h1>
        <div class="flex flex-row gap-6">
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Name</span>
                </label>
                <input
                    type="text"
                    wire:model.defer="new_opinion.name"
                    name='new_opinion_name'
                    class="input input-bordered w-full max-w-xs" />
            </div>
            @error('new_opinion.name') <span class="error">{{ $message }}</span> @enderror
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">description</span>
                </label>
                <input
                    type="text"
                    wire:model.defer="new_opinion.description"
                    name='new_opinion_description'
                    class="input input-bordered w-full max-w-xs" />
            </div>
            @error('new_opinion.description') <span class="error">{{ $message }}</span> @enderror
            <div class="flex flex-row gap-2">
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Votes</span>
                    </label>
                    <input
                        type="number"
                        wire:model.defer="new_opinion.votes"
                        name='new_opinion_votes'
                        class="input input-bordered w-full max-w-xs" />
                </div>
                @error('new_opinion.votes') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <button
                wire:click='add_opinion'
                name='add_opinion'
                class="btn btn-primary mt-2">
                Add Opinion
            </button>
    </div>
</div>
