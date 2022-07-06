<div x-data="nextFlag()">
    {{-- Lord forgive me for this monstrosity I am creating. I know not what I have done. Amen --}}
    @if ($set_flag == "nuetral")
        <div x-data="{ 
            transparent: false, 
            green: false, 
            red: false, 
            black: true, 
            type: '{{$type}}',
            type_id: {{$type_id}}
            }">
    @elseif($set_flag == "red")
        <div x-data="{ 
            transparent: false, 
            green: false, 
            red: true, 
            black: false, 
            type: '{{$type}}',
            type_id: {{$type_id}}
            }">
    @elseif($set_flag == "green")
        <div x-data="{ 
            transparent: false, 
            green: true, 
            red: false, 
            black: false, 
            type: '{{$type}}',
            type_id: {{$type_id}}
            }">
    @else 
        <div x-data="{ 
            transparent: true, 
            green: false, 
            red: false, 
            black: false, 
            type: '{{$type}}',
            type_id: {{$type_id}}
            }">
    @endif
            <div x-bind="flag" class="flex justify-center" :class="{ 'fill-transparent': transparent, 'fill-green-600': green,'fill-red-600': red ,'fill-black': black }">
                @include('icons.flag')
        </div>
    </div>
</div>
