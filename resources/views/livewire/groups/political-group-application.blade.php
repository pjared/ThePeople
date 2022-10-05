<div class="flex grow flex-col items-center pt-4">
    <div class="w-2/5">
        @if (session()->has('message'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert"">
                {{ session('message') }}
            </div>
        @endif
    </div>
    @if ($previous_application)
        <div class="card flex flex-col w-2/5 gap-12">
            <p>
                You submitted an application at {{ $previous_application->created_at }}.
            </p>
            <p>
                The current status is: <b>{{ $previous_application->status }}</b>.
                <br>
                You will be notified when this is updated.
            </p>
        </div>
    @else
        <form class="flex flex-col background-card gap-2 w-1/4" wire:submit.prevent="apply">
            <div class="flex flex-col gap-6">
                <div class="row-span-1">
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Name of Group</span>
                        </label>
                        <input
                            type="text"
                            class="input input-bordered input-primary w-full max-w-xs"
                            name='name'
                            wire:model.defer="application.name"/>
                    </div>
                </div>
                @error('application.name') <span class="error">{{ $message }}</span> @enderror
                <div class="row-span-1">
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Description of Group</span>
                        </label>
                        <textarea
                            type="text"
                            class="textarea textarea-bordered textarea-primary"
                            name='name'
                            wire:model.defer="application.description"></textarea>
                    </div>
                </div>
                @error('application.description') <span class="error">{{ $message }}</span> @enderror
                <div class="row-span-1">
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Primary Email Address</span>
                        </label>
                        <input
                            type="text"
                            class="input input-bordered input-primary w-fit max-w-xs"
                            name='email'
                            wire:model.defer="application.email"/>
                    </div>
                </div>
                @error('application.email') <span class="error">{{ $message }}</span> @enderror
                <div class="row-span-1">
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Your Group's Home State</span>
                        </label>
                        <input
                            type="text"
                            class="input input-bordered input-primary w-fit max-w-xs"
                            name='state'
                            wire:model.defer="application.state"/>
                    </div>
                </div>
                @error('application.state') <span class="error">{{ $message }}</span> @enderror

                <div class="row-span-1">
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Group's Origin city</span>
                        </label>
                        <input
                            type="text"
                            class="input input-bordered input-primary w-fit max-w-xs"
                            name='location'
                            wire:model.defer="application.location"/>
                    </div>
                </div>
                @error('application.location') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="flex justify-center w-11/12">
                <button class="btn btn-primary btn-blue" type="submit">Apply</button>
            </div>
        </form>
    @endif
</div>
