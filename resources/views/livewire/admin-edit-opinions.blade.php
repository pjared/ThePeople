<div class="flex flex-row justify-center gap-12">
    {{-- OPINIONS LIST --}}
    <div class="flex flex-col text-center gap-4">
        <span class="text-2xl">Opinions</span>
    

        <form class="flex flex-col" wire:keydown.enter="save_opinions">
            @foreach ($opinions as $i => $opinion)
                <div class="flex flex-row gap-6 justify-center">
                    <div class="flex flex-col">
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
                    
                    <div class="flex flex-col form-control">
                        <label class="label">
                            <span class="label-text">type_id</span>
                        </label>
                        <input type="number" wire:model.defer="opinions.{{$i}}.type_id" class="input input-bordered w-2/5" />
                    </div>
                    @error('opinions.{{$i}}.type_id') <span class="error">{{ $message }}</span> @enderror
                </div>
            @endforeach
        </form>
    </div>

    {{-- OPINION TYPE LIST --}}
    <div class="flex flex-col text-center gap-4">
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
</div>
