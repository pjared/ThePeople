<div class="flex justify-center items-center w-full h-full p-12 pt-40">
    <div class="dropdown dropdown-top dropdown-open">
        <div tabindex="0" class="card compact dropdown-content shadow bg-base-100 rounded-box w-fit h-fit">
            {{--   --}}
            <div class="flex flex-col" x-data="{ open: true }">
                <div class="card-body flex flex-row">
                    {{--
                        TODO:
                            Each button should set a variable in a wire, but
                                on hover out use alpine to call wire save
                            The addition of the textare should push the div up, it should not the flag down
                    --}}
                    <button class='btn btn-xs btn-circle bg-red-700 border border-black hover:bg-red-900'>

                    </button>
                    <button class='btn btn-xs btn-circle bg-green-700 border border-black hover:bg-green-900'>

                    </button>
                    <button class='btn btn-xs btn-circle bg-gray-700 border border-black hover:bg-gray-900'>

                    </button>
                    <div class="divider divider-horizontal"></div>
                    {{-- TRASH --}}
                    <x-heroicon-o-trash class='h-6 w-6'></x-heroicon-o-trash>
                    <div class="divider divider-horizontal"></div>
                    {{-- NOTE --}}
                    <x-heroicon-o-annotation class='h-6 w-6' x-on:click="open = ! open"></x-heroicon-o-annotation>

                    {{-- <div class="divider divider-horizontal"></div> --}}
                    {{-- SHARE --}}
                    {{-- <button class='rounded-full btn btn-sm bg-red-700 border border-black'>
                    </button> --}}
                </div>
                <div class='flex justify-center p-2' x-show='open'>
                    <textarea class="textarea textarea-info" placeholder="Notes"></textarea>
                </div>
            </div>
        </div>

        <label tabindex="0" class="m-1 flex justify-center">
            <livewire:flag :type="'test'" :type_id="1" :wire:key="'test-1'">
        </label>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('nextFlag', () => ({
                    flag: {
                        ['@click']() {
                            // console.log('clicked');
                            // console.log(this.transparent, this.black, this.green, this.red);
                            // if(this.transparent) {
                            //     this.transparent = false;
                            //     this.black = true;
                            //     @this.change_flag(this.type, this.type_id, 'nuetral')
                            // } else if (this.black) {
                            //     this.black = false;
                            //     this.green = true;
                            //     @this.change_flag(this.type, this.type_id, 'green')
                            // } else if (this.green) {
                            //     this.green = false;
                            //     this.red = true;
                            //     @this.change_flag(this.type, this.type_id, 'red')
                            // } else {
                            //     this.red = false;
                            //     this.transparent = true;
                            //     @this.delete_flag(this.type, this.type_id)
                            // }
                        },
                    },
                }))
            });
        </script>
    @endpush
</div>
