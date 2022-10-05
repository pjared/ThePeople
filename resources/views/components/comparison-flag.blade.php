<div class='dropdown dropdown-top dropdown-end'>
    <label
        tabindex="0"
        class="m-1 flex justify-center">
        @if ($type == 1)
            <div class="flex justify-center fill-red-600">
                @include('icons.flag')

            </div>
        @elseif ($type == 2)
            <div class="flex justify-center fill-green-600">
                @include('icons.flag')

            </div>
        @elseif ($type == 3)
            <div class="flex justify-center fill-gray-600">
                @include('icons.flag')
            </div>
        @else
            <p>Something went wrong. :0</p>
        @endif
    </label>
    {{-- <div
        tabindex="0"
        class="card compact dropdown-content shadow bg-base-100 rounded-box w-fit h-fit"
        >
        <div class="flex flex-col" x-data="{ open: false }">
            <div class="card-body flex flex-row">
                <button

                    class='btn btn-xs btn-circle bg-red-700 border border-black hover:bg-red-900'>
                </button>
                <button
                    class='btn btn-xs btn-circle bg-green-700 border border-black hover:bg-green-900'>
                </button>
                <button
                    class='btn btn-xs btn-circle bg-gray-700 border border-black hover:bg-gray-900'>
                </button>

            </div>
        </div>
    </div> --}}
    {{-- @click="setColor('1')" --}}
    {{-- <div class='flex flex-row w-fit' x-show="color && color != 0"> --}}
        {{-- <div class="divider divider-horizontal"></div> --}}
        {{-- SHARE --}}
        {{-- <button class='rounded-full btn btn-sm bg-red-700 border border-black'>
        </button> --}}
    {{-- </div> --}}
</div>
