<div class="flex justify-center items-center w-full h-full p-12 pt-40">


    <livewire:flag :type="'test'" :type_id="1" :side="'left'" :wire:key="'test' . 1">

    <div class='w-full flex justify-end'>
        <div class='dropdown dropdown-top dropdown-end'>
            <livewire:flag :type="'test-right'" :type_id="1" :side="'right'" :wire:key="'test-right' . 1">
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('flag', () => ({
                    new_changes: false,
                    color:0,

                    setColor(color) {
                        if(color == '1') {
                            this.color = 1;
                            this.current_color = 'fill-red-600';
                        } else if (color == '2') {
                            this.color = 2;
                            this.current_color = 'fill-green-600';
                        } else if (color == '3') {
                            this.color = 3;
                            this.current_color = 'fill-gray-600';
                        } else {
                            this.color = 0;
                            this.current_color = 'fill-transparent';
                        }
                        this.new_changes = true;
                    },
                    left() {
                        console.log('saved');
                        if(this.new_changes) {
                            @this.change_flag(this.type, this.type_id, this.color, this.note);
                            this.new_changes = false;
                        }
                    },
                    deleteFlag() {
                        @this.delete_flag(this.type, this.type_id)
                    },
                    changedNote() {
                        console.log('Changed Note');
                        this.new_changes = true;
                    },
                }))
            });

        </script>
    @endpush
</div>
