<div class="flex flex-col pb-6 justify-center items-center">
    @role('admin')
        <div class="flex w-screen justify-center">
            @if (session()->has('message'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 w-2/5" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 w-2/5" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>

        <div class="w-11/12">
            <div class="flex grow flex-row gap-6">
                <div class="w-3/5 text-center">
                    <div class="flex grow flex-col gap-4">
                        {{-- CANDIDATES TO PLACE --}}
                        <h1 class="text-xl">
                            Candidates To Place
                        </h1>
                        <h1 class="text-sm">
                            (Type in Ballot id and hit enter, 1 at a time)
                        </h1>
                        <div class="flex background-card grow flex-col gap-1">
                            @foreach ($candidates as $candidate)
                                <div class="grid grid-cols-3 background-card outline outline-1 outline-black gap-6 text-left">
                                    <div class="col-span-1">
                                        <div class="flex grow flex-col">
                                            <div>
                                                Name: {{$candidate->name}}
                                            </div>
                                            <div>
                                                Email: {{$candidate->email}}
                                            </div>
                                            <div>
                                                Number: {{$candidate->phone_number}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="flex grow flex-col">
                                            <div>
                                                State: {{$candidate->state}}
                                            </div>
                                            <div>
                                                Office: {{$candidate->application->office_name}} {{$candidate->application->location}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <form class="flex flex-row" wire:keydown.enter="assignCandidate({{$candidate->id}})">
                                            <div class="form-control w-full max-w-xs">
                                                <label class="label">
                                                  <span class="label-text">Ballot ID</span>
                                                </label>
                                                <input type="text" wire:model.defer="new_ballot_id" class="input input-bordered w-3/4 max-w-xs" />
                                            </div>
                                            @error('new_ballot_id') <span class="error">{{ $message }}</span> @enderror
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- PLACED CANDIDATES --}}
                        <h1 class="text-xl">
                            Candidates Placed
                        </h1>
                        <livewire:tables.running-candidates-table />
                    </div>
                </div>
                <div class="w-2/5">
                    @include('admin.components.ballot-list')
                </div>
            </div>
        </div>
    @endrole
</div>
