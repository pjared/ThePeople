{{-- PREVIOUS EDUCATION --}}
<article class="flex grow flex-col w-11/12 items-center">
    <x-dropdown-card :classes="'shadow-md'">
        <x-slot:title>
            Education
        </x-slot>
        <x-slot:content>
            @if($this->candidate->educations_count >= 1)
                <div class="flex flex-col gap-4">
                    @foreach($this->candidate->educations as $education)
                        <div class="flex flex-row justify-center items-center gap-6">
                            <div class="flex flex-col w-full items-start">
                                <h3 class="w-fit capitalize text-lg font-semibold">
                                    {{ $education->school_name }}
                                    <span class='text-sm text-gray-400'>{{ $education->year_start }} - {{ $education->year_end }}</span>
                                </h3>
                                <div><b>{{$education->degree_type}}</b> in {{$education->degree_field}}</div>
                            </div>
                            @auth
                                <livewire:flag-content
                                    :flag="$this->flags->where('flaggable_type', 'App\Models\CandidateEducation')->firstWhere('flaggable_id', $education->id)"
                                    :content="$education"
                                    :side="'below'"
                                    :wire:key="'education-'.$education->id" />
                            @else
                                <label class="fill-transparent" for="signup-modal">
                                    @include('icons.flag')
                                </label>
                            @endauth
                        </div>
                    @endforeach
                </div>
            @else
                This Candidate has not held office before
            @endif
        </x-slot>
    </x-dropdown-card>
</article>
