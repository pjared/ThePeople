{{-- CAMPAIGN VIDEOS COMPONENT --}}
@if(count($videos) != 0)
    <div class="flex grow flex-col w-11/12 items-center" x-data="{open: false}">
        <button class="flex background-card w-11/12" type="button" x-on:click="open = ! open" :class="{ 'rounded-b-none': open }">
            <div class="row">
                <div class="col-8 text-start">
                    Campaign Videos
                </div>
                <div class="col-2 offset-2 text-center">
                    <i class="bi bi-caret-down-fill"></i>
                </div>
            </div>
        </button>
        <div class="flex flex-col background-card rounded-t-none w-11/12 items-center gap-2" x-show="open" x-transition>
            <div class="carousel w-11/12">
                @foreach ($videos as $i => $video)
                    <div id="video-{{$i}}" class="carousel-item w-full">
                        <div class="flex grow flex-col justify-center items-center">
                            <div class="relative w-full h-full" style="padding-top: 56.25%">
                                <iframe class="absolute inset-0 w-full h-full" src="{{$video->link}}" frameborder="0"></iframe>
                            </div>
                            <a class='link' href="{{$video->link}}">{{$video->link}}</a>
                        </div>
                    </div>
                @endforeach            
            </div>
            <div class="flex justify-center w-full py-2 gap-2">
                @foreach ($videos as $i => $video)
                    <a href="#video-{{$i}}" class="btn btn-xs">{{$i + 1}}</a>
                @endforeach
            </div>
        </div>
    </div>
@endif