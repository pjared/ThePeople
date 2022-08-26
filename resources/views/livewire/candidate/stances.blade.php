<article class="flex flex-col background-card w-11/12 items-center gap-2">
    <div class="flex justify-center">
        <h2 class="text-xl font-medium">Controversial Opinions</h2>
    </div>
    <div class="flex flex-col grow gap-2 text-center w-full">
        @foreach($opinions as $opinion)
            <h3 class="text-lg font-medium">{{$opinion->name}}</h3>
            <div class="flex flex-col items-start justify-items-start">
                {{-- Required Stances --}}
                @if(count($opinion->required_stances) >= 1)
                    @foreach ($opinion->required_stances as $required_stance)
                        <div class="grid grid-cols-8 gap-2 w-full items-center">
                            <div class="col-span-7">
                                <div class="collapse collapse-arrow">
                                    <input type="checkbox" />
                                    <div class="collapse-title text-md font-medium text-left">
                                        <h4><b>{{$required_stance->label}}</b><span class='text-red-500'>*</span></h4>
                                    </div>
                                    <div class="collapse-content">
                                        <p
                                        x-data="{ isCollapsed: false, maxLength: 215, originalContent: '', content: '' }"
                                        x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)"
                                        >
                                            <span x-text="isCollapsed ? originalContent : content">{{$candidate_required_stances->firstWhere('required_stance_id')->candidate_reasoning}}</span>
                                            <button
                                                @click="isCollapsed = !isCollapsed"
                                                x-show="originalContent.length > maxLength"
                                                x-text="isCollapsed ? 'Show less' : 'Show more'"
                                                class="link"
                                                ></button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1 items-center">
                                @auth
                                    <livewire:flag
                                        :type="$required_stance->id .'required-stance'"
                                        :type_id="$required_stance->id"
                                        :side="'right'"
                                        :wire:key="'required-flag-'.$required_stance->id">
                                @else
                                    <label class="fill-transparent" for="signup-modal">
                                        @include('icons.flag')
                                    </label>
                                @endauth
                            </div>
                        </div>
                    @endforeach
                @endif

                @foreach ($candidate_stances->where('controversial_opinion_id', $opinion->id) as $i => $candidate_stance)
                    <div class="grid grid-cols-8 gap-2 w-full items-center">
                        <div class="col-span-7">
                            <div class="collapse collapse-arrow">
                                <input type="checkbox" />
                                <div class="collapse-title text-md font-medium text-left">
                                    <h4><b>{{$candidate_stance->stance_label}}</b></h4>
                                </div>
                                <div class="collapse-content">
                                    <p
                                    x-data="{ isCollapsed: false, maxLength: 215, originalContent: '', content: '' }"
                                    x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)"
                                    >
                                        <span x-text="isCollapsed ? originalContent : content">{{$candidate_stance->stance_reasoning}}</span>
                                        <button
                                        @click="isCollapsed = !isCollapsed"
                                        x-show="originalContent.length > maxLength"
                                        x-text="isCollapsed ? 'Show less' : 'Show more'"
                                        class="link"
                                        ></button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 items-center">
                            @auth
                                <livewire:flag
                                    :type="$opinion->id .'controversial-stance'"
                                    :type_id="$candidate_stance->id"
                                    :side="'right'"
                                    :wire:key="'stance-flag-'.$candidate_stance->id">
                            @else
                                <label class="fill-transparent" for="signup-modal">
                                    @include('icons.flag')
                                </label>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</article>
