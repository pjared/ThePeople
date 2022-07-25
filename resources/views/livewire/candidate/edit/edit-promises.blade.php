<div class="flex flex-row">
    @include('candidate.aside')
    
    <div class="flex flex-col w-full h-inherit items-center justify-center">
        {{-- PROMISE FLASH MESSAGE --}}
        @include('components.flash', ['name' => 'promises'])
        
        <div class="flex flex-row w-full justify-between">
            {{-- LEFT COLUMN (Edit) --}}
            <div class="flex flex-col w-1/2 gap-2 p-4 items-center">
                <h1 class="text-xl">Add your Promises</h1>
                {{-- CANDIDATE PROMISES --}}
                <div class="flex flex-col background-card w-11/12 items-center justify-center">
                    <div class="flex">
                        Your promises for reform/promises of personal values
                    </div>
                    <div x-data="{show:false}" class="flex grow flex-col w-11/12 gap-2">
                        <div class="carousel w-full">
                            @foreach ($promises as $i => $promise)
                                <div id="promise-{{$i}}" class="carousel-item w-full">
                                    <div class="flex grow flex-col items-center">
                                        <div class="form-control w-full max-w-xs">
                                            <label class="label">
                                            <span class="label-text">Promise</span>
                                            </label>
                                            <input type="text" wire:model.defer="promises.{{ $i }}.promise" class="input input-bordered w-3/4 max-w-xs" />
                                            <label class="label">
                                                <span class="label-text">Plan</span>
                                            </label>
                                            <textarea class="textarea textarea-bordered flex grow" wire:model.defer="promises.{{ $i }}.plan"></textarea>
                                        </div>
                                        {{-- TODO: ADD DELETE AND UPDATE BUTTONS --}}
                                        <span class="error">
                                            @error('promises.'.$i.'.promise') {{ $message }} @enderror
                                            @error('promises.'.$i.'.plan') {{ $message }} @enderror
                                        </span>
                                        <div class="flex grow flex-row justify-center">
                                            <button class="btn btn-error" wire:click="delete_promise({{$promise->id}})">Delete Promise</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach            
                        </div>
                        <div class="flex justify-center w-full py-2 gap-2">
                            @foreach ($promises as $i => $promise)
                                <a href="#promise-{{$i}}" class="btn btn-xs">{{$i + 1}}</a>
                            @endforeach
                        </div>
                        
                        @if(count($promises) >= 1)
                            <div class="flex grow justify-center">
                                <button class="btn btn-primary w-1/4" wire:click='update_promises'>Update Promises</button>
                            </div>                   
                        @endif        
                        @if(count($promises) < 5)
                            <label class="btn btn-primary" for="new-promise">Add A Promise</label>
                
                            @include('modals.new-promise')
                        @endif
                    </div>
                </div>
            </div> 
            {{-- RIGHT COLUMN (Preview) --}}
            <div class="flex flex-col w-1/2 p-4 gap-6 items-center">
                <h1 class="text-xl">Promises Preview</h1>
                @include('candidate.component.promises', ['promises' => $candidate->promises])
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('nextFlag', () => ({       
                    flag: {
                        ['@click']() {
                            if(this.transparent) {
                                this.transparent = false;
                                this.black = true;
                                @this.change_flag(this.type, this.type_id, 'nuetral')
                            } else if (this.black) {
                                this.black = false;
                                this.green = true;
                                @this.change_flag(this.type, this.type_id, 'green')
                            } else if (this.green) {
                                this.green = false;
                                this.red = true;
                                @this.change_flag(this.type, this.type_id, 'red')
                            } else {
                                this.red = false;
                                this.transparent = true;
                                @this.delete_flag(this.type, this.type_id)
                            }
                        },
                    },
                }))
            });
        </script>
    @endpush
</div>
