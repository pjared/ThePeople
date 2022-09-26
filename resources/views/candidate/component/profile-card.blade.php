<article
    class='background-card w-fit flex flex-col md:grid md:grid-flow-col md:grid-col-3 justify-center gap-4 pb-4 shadow-md'>
        <div class='col-span-1 flex flex-col justify-center'>
            <div class='row-span-5 flex justify-center'>
                <img
                    src="{{ $this->candidate->profile_photo_url }}"
                    alt="{{ $this->candidate->name }}"
                    class="h-36 w-36 border border-black"
                    loading='lazy'>
            </div>
            <div class='row-span-1 text-center'>
                <h1 class='text-xl tracking-tighter font-roboto_mono'>{{ $this->candidate->name }}</h1>
            </div>
        </div>

        {{-- TODO: Mobile should have a show more --}}
        @if($this->candidate->bio != "")
            <div class='col-span-2'>
                <p class='max-w-prose text-base'>
                    {{$this->candidate->bio}}
                </p>
            </div>
        @endif
</article>


