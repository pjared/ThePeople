{{-- CONTROVERSIAL OPINIONS --}}
<div class="flex flex-col background-card w-11/12 items-center gap-2">
    <div class="flex justify-center">
        <span class="text-xl font-medium">Controversial Opinions</span>
    </div>
    <div class="flex flex-col grow gap-2 text-center w-full">
        @foreach($opinions as $opinion)
            {{-- Make sure stances exist --}}
            @if(count($candidate->opinion_stances($opinion->id)) >= 1)
                <span class="text-lg font-medium">{{$opinion->name}}</span>
                <div class="flex flex-col items-start justify-items-start">
                    @foreach ($candidate->opinion_stances($opinion->id) as $i => $candidate_stance)
                        <div class="grid grid-cols-8 gap-2 w-full items-center">
                            <div class="col-span-7">
                                <div class="collapse collapse-arrow">
                                    <input type="checkbox" /> 
                                    <div class="collapse-title text-md font-medium text-left">
                                        <b>{{$candidate_stance->stance_label}}</b>
                                    </div>
                                    <div class="collapse-content"> 
                                        {{-- TODO: READ MORE HERE --}}
                                        
                                        <p
                                        x-data="{ isCollapsed: false, maxLength: 215, originalContent: '', content: '' }"
                                        x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength) + '...'"
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
                                    <livewire:flag :type="'controversial-stance'" :type_id="$candidate_stance->id" :wire:key="'stance-'.$candidate_stance->id"> 
                                @else
                                    <label class="fill-transparent" for="signup-modal">
                                        @include('icons.flag')
                                    </label>  
                                @endauth
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @endforeach
    </div>
</div>