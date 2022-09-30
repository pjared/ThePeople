{{-- PREVIOUS EDUCATION --}}
@if($this->candidate->educations_count >= 1)
    <article class="flex grow flex-col md:w-11/12 items-center">
        <x-dropdown-card :classes="'shadow-md'">
            <x-slot:title>
                Education
            </x-slot>
            <x-slot:content>
                    <div class="flex flex-col justify-center items-center gap-4">
                        @foreach($this->candidate->educations as $education)
                            <div class="flex flex-col w-full items-start">
                                <h3 class="w-fit capitalize text-lg font-semibold">
                                    {{ $education->school_name }}
                                    @if($education->year_received == 1901)
                                        <span class='text-sm text-gray-400'>Unfinished</span>
                                    @else
                                    <span class='text-sm text-gray-400'>{{ $education->year_received }}</span>
                                    @endif

                                </h3>
                                <div><b>{{$education->degree_type}}</b> in {{$education->degree_field}}</div>
                            </div>
                        @endforeach
                    </div>
            </x-slot>
        </x-dropdown-card>
    </article>
@endif
