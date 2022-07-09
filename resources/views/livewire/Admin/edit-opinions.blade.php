<div class="flex flex-col justify-center items-center gap-12">
    {{-- OPINIONS LIST --}}
    @if (session()->has('message'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 w-3/4" role="alert">
            {{ session('message') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 w-3/4" role="alert">
            {{ session('error') }}
        </div>
    @endif
    
    <div class="grid grid-cols-3 justify-center gap-8">
        {{-- OPINION LIST --}}
        <div class="col-span-1 flex flex-col text-center gap-4">
            <span class="text-2xl">Opinions</span>
        
            <form class="flex flex-col items-center" wire:keydown.enter="save_opinions">
                @foreach ($opinions as $i => $opinion)
                    <div class="grid grid-cols-2 gap-6 items-center justify-center">
                        <div class="col-span-1 flex flex-col">
                            <span class="text-xl">
                                {{$opinion->name}}
                            </span>
                            <span>
                                @if($opinion->type)
                                    {{$opinion->type->name}}
                                @else
                                    (No Opinion Type)
                                @endif
                            </span>
                        </div>
                        
                        {{-- <div class="col-span-1 flex flex-col items-center form-control">
                            <label class="label">
                                <span class="label-text">type_id</span>
                            </label>
                            <input type="number" wire:model.defer="opinions.{{$i}}.type_id" class="input input-bordered w-2/5" />
                        </div>
                        @error("opinions.{{$i}}.type_id") <span class="error">{{ $message }}</span> @enderror --}}
                    </div>
                @endforeach
            </form>
        </div>
    
        {{-- OPINION TYPE LIST --}}
        <div class="col-span-1 flex flex-col text-center gap-4">
            <span class="text-2xl">Opinion Types</span>
            @foreach ($opinion_types as $type)
                <div class="flex flex-col">
                    <span class="text-xl">
                        {{$type->name}} ({{$type->id}})
                    </span>
                    <span>
                        {{$type->description}}
                    </span>
                </div>
            @endforeach
        </div>

        {{-- LOCATION LIST --}}
        <form class="col-span-1 flex flex-col items-center" wire:keydown.enter="save_locations">
            <span class="text-2xl">Location & Types</span>
            @foreach ($locations as $i => $location)
                <div class="grid grid-cols-2 gap-6 items-center justify-center">
                    <div class="col-span-1 flex flex-col items-center">
                        <span class="text-xl">
                            {{$location->name}}, {{$location->state}}
                        </span>
                        <span>
                            {{$location->type}}
                        </span>
                    </div>
                    
                    {{-- <div class="col-span-1 flex flex-col form-control items-center">
                        <label class="label">
                            <span class="label-text">type_id</span>
                        </label>
                        <input type="number" wire:model.defer="locations.{{$i}}.opinion_type_id" class="input input-bordered w-2/5" />
                    </div>
                    @error("locations.{{$i}}.opinion_type_id") <span class="error">{{ $message }}</span> @enderror --}}
                </div>
            @endforeach
        </form>
    </div>    
</div>
