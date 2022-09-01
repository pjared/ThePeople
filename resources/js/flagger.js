document.addEventListener('alpine:init', () => {
    Alpine.data('flag', () => ({
        new_changes: false,
        color: 0,

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
            if(this.new_changes) {
                @this.change_flag(this.type, this.type_id, this.color, this.note);
                this.new_changes = false;
            }
        },
        deleteFlag() {
            @this.delete_flag(this.type, this.type_id)
            this.color = 0;
            this.current_color = 'fill-transparent';
            this.note = '';
            this.open = false;
        },
        changedNote() {
            this.new_changes = true;
        },
    }))
});
