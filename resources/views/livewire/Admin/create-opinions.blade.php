<div class="flex grow p-6 gap-8">
    <div class="flex flex-col w-1/2 items-center gap-6r">
        {{-- OPINION CREATION --}}
        <div class="flex flex-col background-card items-center rounded-t-none w-11/12" x-show="show" x-transition>
            <h1>Create a new opinion</h1>
            <div class="flex flex-col grow ">
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input type="text" wire:model.defer="new_opinion.name" class="input input-bordered w-full max-w-xs" />
                </div>
                @error('new_opinion.name') <span class="error">{{ $message }}</span> @enderror
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">description</span>
                    </label>
                    <input type="text" wire:model.defer="new_opinion.description" class="input input-bordered w-full max-w-xs" />
                </div>
                @error('new_opinion.description') <span class="error">{{ $message }}</span> @enderror
                <div class="flex flex-row gap-2">
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Votes</span>
                        </label>
                        <input type="number" wire:model.defer="new_opinion.votes" class="input input-bordered w-full max-w-xs" />
                    </div>
                    @error('new_opinion.votes') <span class="error">{{ $message }}</span> @enderror
                    {{-- <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">type_id</span>
                        </label>
                        <input type="number" wire:model.defer="new_opinion.type_id" class="input input-bordered w-full max-w-xs" />
                    </div>
                    @error('new_opinion.type_id') <span class="error">{{ $message }}</span> @enderror --}}
                </div>
                <button wire:click='add_opinion' class="btn btn-primary mt-2">Add Opinion</button>
            </div>
        </div>
    </div>
    <div class="flex flex-col w-1/2 items-center gap-6">
        {{-- OPINION TYPES --}}
        <div class="flex flex-col background-card items-center rounded-t-none w-11/12" x-show="show" x-transition>
            <h1>Create a new opinion type</h1>
            <div class="flex flex-col grow ">
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input type="text" wire:model.defer="new_type.name" class="input input-bordered w-full max-w-xs" />
                </div>
                @error('new_type.name') <span class="error">{{ $message }}</span> @enderror
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">description</span>
                    </label>
                    <input type="text" wire:model.defer="new_type.description" class="input input-bordered w-full max-w-xs" />
                </div>
                @error('new_type.description') <span class="error">{{ $message }}</span> @enderror
                <button wire:click='add_type' class="btn btn-primary mt-2">Add Opinion Type</button>
            </div>
        </div>
    </div>
</div>
