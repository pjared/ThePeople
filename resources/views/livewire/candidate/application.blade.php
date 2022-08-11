<div class="flex grow flex-col items-center pt-4">
    <div class="w-2/5">
        @if (session()->has('message'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert"">
                {{ session('message') }}
            </div>
        @endif
    </div>
    @if($previous_application)
        <div class="card flex flex-col w-2/5 gap-12">
            <p>
                You submitted an application at {{$previous_application->created_at}}.
            </p>
            <p>
                The current status is: <b>{{$previous_application->status}}</b>.
                <br>
                You will be notified when this is updated.
            </p>
        </div>
    @else
        <form class="flex flex-col background-card gap-2" wire:submit.prevent="apply">
            <div class="grid grid-cols-2 gap-6">
                <div class="col-span-1 grid grid-rows-6">
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">First Name</span>
                            </label>
                            <input
                                type="text"
                                class="input input-bordered input-primary w-full max-w-xs"
                                name='name'
                                wire:model.defer="first_name"/>
                        </div>
                    </div>
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Date of Birth</span>
                            </label>
                            <input
                                type="date"
                                class="input input-bordered input-primary w-fit max-w-xs"
                                name='dob'
                                wire:model.defer="application.dob"/>
                        </div>
                    </div>
                    @error('dob') <span class="error">{{ $message }}</span> @enderror
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Email</span>
                            </label>
                            <input
                                type="text"
                                class="input input-bordered input-primary w-fit max-w-xs"
                                name='email'
                                wire:model.defer="application.email"/>
                        </div>
                    </div>
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Your Home State</span>
                            </label>
                            <input
                                type="text"
                                class="input input-bordered input-primary w-fit max-w-xs"
                                name='state'
                                wire:model.defer="application.state"/>
                        </div>
                    </div>
                    @error('state') <span class="error">{{ $message }}</span> @enderror

                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Name of Office</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Senate, School District, Congress"
                                class="input input-bordered input-primary w-fit max-w-xs"
                                name='office_name'
                                wire:model.defer="application.office_name"/>
                        </div>
                    </div>
                    @error('office_name') <span class="error">{{ $message }}</span> @enderror
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Date Officially Began Race</span>
                              <span class="label-text-alt">
                                    <div
                                    class="tooltip tooltip-info"
                                    data-tip="This will be used for a faster verification. If you don't know the date - or haven't registered yet - you can leave this blank.">
                                        <button class="">
                                            <svg height="16" viewBox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h48v48h-48z" fill="none"/>
                                                <path d="M24 4c-11.05 0-20 8.95-20 20s8.95 20 20 20 20-8.95 20-20-8.95-20-20-20zm2 30h-4v-12h4v12zm0-16h-4v-4h4v4z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </span>
                            </label>
                            <input
                                type="date"
                                class="input input-bordered input-primary w-fit max-w-xs"
                                wire:model.defer="application.entered_race_date"/>
                        </div>
                    </div>
                    @error('application.entered_race_date') <span class="error">{{ $message }}</span> @enderror

                </div>
                <div class="col-span-1 grid grid-rows-6">
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Last Name</span>
                            </label>
                            <input
                                type="text"
                                class="input input-bordered input-primary w-full max-w-xs"
                                name='last_name'
                                wire:model.defer="last_name"/>
                        </div>
                    </div>
                    <div class="row-span-1"></div>
                    @error('last_name') <span class="error">{{ $message }}</span> @enderror
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Phone Number (optional)</span>
                              <span class="label-text-alt">
                                    <div
                                        class="tooltip tooltip-info"
                                        data-tip="We'd like your phone number to call and verify that you are the person you say you are. This is optional, but heavily recommended for a quicker approval">
                                        <button class="">
                                            <svg height="16" viewBox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h48v48h-48z" fill="none"/>
                                                <path d="M24 4c-11.05 0-20 8.95-20 20s8.95 20 20 20 20-8.95 20-20-8.95-20-20-20zm2 30h-4v-12h4v12zm0-16h-4v-4h4v4z"/>
                                            </svg>
                                        </button>
                                    </div>
                              </span>
                            </label>
                            <input
                                type="text"
                                class="input input-bordered input-primary w-fit max-w-xs"
                                name='phone_number'
                                wire:model.defer="application.phone_number"/>
                        </div>
                    </div>
                    <div class="row-span-1"></div>
                    @error('phone_number') <span class="error">{{ $message }}</span> @enderror
                    <div class="row-span-1">
                        <div class="form-control w-full max-w-xs">
                            <label class="label">
                              <span class="label-text">Location of Office</span>
                            </label>
                            <input
                                type="text"
                                placeholder="District, City, County"
                                class="input input-bordered input-primary w-fit max-w-xs"
                                name='location'
                                wire:model.defer="application.location"/>
                        </div>
                    </div>
                    @error('location') <span class="error">{{ $message }}</span> @enderror
                    <div class="row-span-1"></div>
                </div>
            </div>
            <div class="flex justify-center w-11/12">
                <button class="btn btn-primary btn-blue" type="submit">Apply</button>
            </div>
        </form>
    @endif
</div>
