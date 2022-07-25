<div class="flex flex-col pb-6 justify-center items-center">
    @include('admin.admin-nav')
    <div class="flex flex-row w-full">
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
                    </div>
                    <button wire:click='add_opinion' class="btn btn-primary mt-2">Add Opinion</button>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-1/2 items-center gap-6">
            {{-- BALLOT OPINIONS --}}
            {{-- TODO: Create a place to edit controversial opinions --}}
            <div class="flex flex-col text-center w-full gap-4">
                <span class="text-2xl">Opinions</span>
                <form class="flex flex-col gap-2" wire:submit.prevent="save_opinions">
                    <button class="btn btn-primary" type='submit'>Save Opinions</button>
                    @foreach ($opinions as $i => $opinion)
                        <div class="flex flex-col w-full gap-2 items-center justify-center">
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text">Change Opinion Name</span>
                                </label>
                                <input type="text" wire:model.defer="opinions.{{$i}}.name" class="input input-bordered w-full max-w-xs" />
                            </div>
                            {{-- <span class="text-xl">
                                
                            </span> --}}
                            <div class="form-control w-full">
                                <label class="label">
                                  <span class="label-text">Change Opinion Description</span>
                                </label> 
                                {{-- {{$opinion->description}} --}}
                                <textarea class="textarea textarea-bordered h-24 w-full" wire:model.defer="opinions.{{$i}}.description"></textarea>
                            </div>
                        </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
