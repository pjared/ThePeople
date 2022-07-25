<div class="flex flex-row">
    @include('candidate.aside')
    <div class="flex flex-col w-full h-inherit items-center justify-center">
        {{-- VIDEO FLASH MESSAGE --}}
        @include('components.flash', ['name' => 'videos'])
        
        <div class="flex flex-row w-full justify-between">
            {{-- LEFT COLUMN (Edit) --}}
            <div class="flex flex-col w-1/2 gap-2 p-4 items-center">
                <h1 class="text-xl">Add your Videos</h1>
                {{-- CANDIDATE CAMPAIGN VIDEOS --}}
                <div class="flex flex-col background-card w-11/12 items-center justify-center">
                    <div class="flex">
                        Your campaign videos
                    </div>
                    <div x-data="{show:false}" class="flex grow flex-col w-11/12 gap-2">
                        <div class="carousel w-full">
                            @foreach ($videos as $i => $video)
                                <div id="video-list-{{$i}}" class="carousel-item w-full">
                                    <div class="flex grow flex-col items-center">
                                        <div class="form-control w-full max-w-xs">
                                            <label class="label">
                                                <span class="label-text">{{$video->link}}</span>
                                            </label>
                                            <div class="relative" style="padding-top: 56.25%">
                                                <iframe class="absolute inset-0 w-full h-full" src="{{$video->link}}" frameborder="0"></iframe>
                                            </div>
                                        </div>
                                        <div class="flex grow flex-row justify-center">
                                            <button class="btn btn-error" wire:click="delete_video({{$video->id}})">Delete Video</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach            
                        </div>
                        <div class="flex justify-center w-full py-2 gap-2">
                            @foreach ($videos as $i => $video)
                                <a href="#video-list-{{$i}}" class="btn btn-xs">{{$i + 1}}</a>
                            @endforeach
                        </div>
                           
                        @if(count($videos) < 5)
                            <label class="btn btn-primary" for="new-video">Add A Video</label>
                            @include('modals.new-video')
                        @endif
                    </div>
                </div>
            </div> 
            {{-- RIGHT COLUMN (Preview) --}}
            <div class="flex flex-col w-1/2 p-4 gap-6 items-center">
                <h1 class="text-xl">Campaign Videos Preview</h1>
                @include('candidate.component.videos', ['vidoes' => $candidate->videos])
            </div>
        </div>
    </div>
</div>
