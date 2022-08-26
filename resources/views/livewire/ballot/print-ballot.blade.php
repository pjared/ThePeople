<div
    class='flex flex-row w-full justify-center pt-4 gap-4'
    x-data="{
                tags: [],
                toggle(tag) {
                    if (this.tags.includes(tag)) {
                        this.tags = this.tags.filter(x => x != tag)
                    }
                    else {
                        this.tags.push(tag)
                    }
                },
                is_selected(tag) {
                    return this.tags.includes(tag)
                }
            }">

    <div class='background-card flex flex-col form-control'>
        <span>Ballots You've Voted On</span>
        @foreach ($votes as $i => $vote)
            <label class="label cursor-pointer">
                <span class="label-text text-xl">{{$vote->ballot->name}}</span>
                <input
                    type="checkbox"
                    @click="toggle('tag{{$i}}')"
                    checked="checked{{$i}}"
                    class="checkbox checkbox-primary" />
            </label>
        @endforeach
    </div>

    <div class='background-card flex flex-col w-2/5 text-center gap-2'>
        @foreach ($votes as $i => $vote)
            <div
                class='flex flex-col'
                x-show="!is_selected('tag{{$i}}')">
                <div class='text-xl underline'>
                    {{$vote->ballot->name}}
                </div>
                <div class='text-md'>
                    {{$vote->candidate->name}}
                </div>
            </div>
        @endforeach
    </div>

    @section('title')
        Print Your Ballot
    @endsection
</div>
