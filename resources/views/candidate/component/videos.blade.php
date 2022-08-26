{{-- CAMPAIGN VIDEOS COMPONENT --}}
@if(count($videos) != 0)
    <article class="flex grow flex-col w-11/12 items-center">
        <x-dropdown-card>
            <x-slot:title>
                Campaign Videos
            </x-slot>
            <x-slot:content>
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
            </x-slot>
        </x-dropdown-card>
    </article>
@endif
