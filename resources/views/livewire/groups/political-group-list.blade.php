<div class="flex grow justify-center mt-12 p-6">
    <div class="flex flex-col md:flex-row flex-wrap gap-8 w-3/4 items-center justify-center">
        @foreach ($groups as $group)
            <form action="/groups/{{$group->slug}}" method="GET" class="hover:scale-110" x-data="{ show: false }" @mouseleave="show = false" @mouseover="show = true" >
                <button class="background-card" class="card bg-base-100 shadow-xl">
                    <div class="card-body text-center p-0">
                        <h2 class="card-title text-lg justify-center">
                            <a
                                rel="next prefetch"
                                class="underline text-sky-600"
                                type="text/html"
                                href="/groups/{{$group->slug}}">{{$group->name}}
                            </a>
                        </h2>
                    </div>
                </button>
            </form>
        @endforeach
    </div>
</div>
