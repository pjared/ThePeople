<div class="flex w-full justify-center">
    <div class="carousel w-3/4 h-48">
        @foreach ($photos as $i => $photo)
            <div id="slide{{$i}}" class="carousel-item relative w-full items-center justify-center">
                <img src="{{ Storage::url($photo->attachment)}}" class="h-48" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    @if($loop->first)
                        <a href="#slide{{count($photos) - 1}}" class="btn btn-circle"><</a>
                    @else
                        <a href="#slide{{$i - 1}}" class="btn btn-circle"><</a>
                    @endif
                    @if($loop->last)
                        <a href="#slide0" class="btn btn-circle">></a>
                    @else
                        <a href="#slide{{$i + 1}}" class="btn btn-circle">></a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
