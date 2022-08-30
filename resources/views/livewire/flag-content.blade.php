
<div x-cloak
    x-data="{
        dropdown_class: $wire.dropdown_class
        }"
    :class="dropdown_class"
    wire:click='flagSelected'
    >
    <div x-data="flag">
        {{-- Declare some data --}}
        <div
            x-data=
            "{
                current_color: $wire.current_color,
                note: $wire.note,
                color: $wire.set_flag,
                type: $wire.type,
                type_id: $wire.type_id
            }">
            <label
                tabindex="0"
                class="m-1 flex justify-center">
                <div
                    x-cloak
                    class="flex justify-center"
                    :class="current_color"
                    >
                    @include('icons.flag')
                </div>
            </label>

            <div
                tabindex="0"
                class="card compact dropdown-content shadow bg-base-100 rounded-box w-fit h-fit"
                @mouseleave="left()"
                >
                <div class="flex flex-col" x-data="{ open: false }">
                    <div class="card-body flex flex-row">
                        <button
                            @click="setColor('1')"
                            class='btn btn-xs btn-circle bg-red-700 border border-black hover:bg-red-900'>
                        </button>
                        <button
                            @click="setColor('2')"
                            class='btn btn-xs btn-circle bg-green-700 border border-black hover:bg-green-900'>
                        </button>
                        <button
                            @click="setColor('3')"
                            class='btn btn-xs btn-circle bg-gray-700 border border-black hover:bg-gray-900'>
                        </button>
                        <div class='flex flex-row w-fit' x-show="color != 0">
                            <div class="divider divider-horizontal"></div>
                            {{-- TRASH --}}
                            <x-heroicon-o-trash class='h-6 w-6 cursor-pointer' @click="deleteFlag()"></x-heroicon-o-trash>
                            <div class="divider divider-horizontal"></div>
                            {{-- NOTE --}}
                            <x-heroicon-o-annotation class='h-6 w-6' x-on:click="open = ! open"></x-heroicon-o-annotation>
                        </div>


                        {{-- <div class="divider divider-horizontal"></div> --}}
                        {{-- SHARE --}}
                        {{-- <button class='rounded-full btn btn-sm bg-red-700 border border-black'>
                        </button> --}}
                    </div>
                    <div
                        class='flex justify-center p-2'
                        x-show='open'
                        @mouseleave="left()">
                        <textarea
                            class="textarea textarea-info"
                            placeholder="Notes"
                            x-model="note"
                            @keydown.debounce.500ms="changedNote()"
                            ></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
