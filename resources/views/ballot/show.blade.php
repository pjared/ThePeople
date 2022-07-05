<x-app-layout>
    <div class="text-sm breadcrumbs p-4">
        <ul>
          <li><a href='/'>Home</a></li> 
          <li><b>Ballot ({{ $ballot->location->name }} {{ $ballot->office->name }})</b></li>
        </ul>
    </div>

    <div class="flex flex-1 items-center grow py-12">
        <div class="w-1/5 ml-6">
            <livewire:ballot-list />
        </div>
        
        {{-- TODO: Might have to make this it's own scrollable div --}}
        <div class="flex flex-1 w-4/5 mr-8 justify-center">
            <div class="flex flex-col w-11/12 h-5/6 items-center background-card">
                <p class="text-center font-courier text-xl">
                    Plan your choice for the upcoming election                            
                </p>
                <p class="uppercase mt-2 text-sm">
                    {{ $ballot->location->name }} {{ $ballot->office->name }} - VOTING DATE: {{ $ballot->voting_date->format('m/d/Y')}}
                </p>
                <div class="flex flex-wrap grow w-11/12 mt-2">                    
                    @foreach ($ballot->candidates as $running_candidate)
                        
                        <div class="flex grow flex-row pt-2 w-11/12">
                            {{-- CANDIDATE NAME, PICTURE, AND PAGE LINK --}}
                            <form action="/candidate/profile/{{$running_candidate->candidate_id}}" method="GET" class="w-11/12 hover:scale-110">
                                <button class="card flex grow lg:card-side bg-white shadow-xl w-full">
                                    <figure>
                                        <img src="{{ $running_candidate->candidate->user->profile_photo_url }}" alt="{{ $running_candidate->candidate->name }}" class="h-28 w-28">
                                        {{-- class="rounded-full object-cover" --}}
                                    </figure>
                                    <div class="card-body flex grow">
                                        <div class="flex grow flex-row font-courier">
                                            <div class="flex">
                                                <h3 class="card-title font-normal">{{ $running_candidate->candidate->name }}</h3>
                                            </div>                                        
                                            <div class="flex grow justify-end">
                                                <a class="underline text-sky-600 visited:text-purple-600" href="/candidate/profile/{{$running_candidate->candidate_id}}">More about {{ $running_candidate->candidate->name }}</a>
                                            </div>
                                        </div>
                                        {{-- TODO: Put the badges here --}}
                                        <p></p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </button>
                            </form>

                            {{-- CHECKBOX FOR CANDIDATE --}}
                            <div class="flex grow items-center pl-4">
                                {{-- This Checkbox is wack. Good luck to the future person who has to deal with this --}}
                                @auth
                                    <input type="checkbox" class="check flex" name="check{{$running_candidate->candidate_id}}" id="check{{$running_candidate->candidate_id}}" onclick="unselectAll({{$running_candidate->candidate_id}})">
                                    <label class="flex grow items-center" for="check{{$running_candidate->candidate_id}}" style="--d: 60%;">
                                        <svg class="h-12 w-12" viewBox="0, 0, 60, 60">
                                            <rect x="10%" y="10%"/>
                                            <path d="M5 30 L 20 40 L 55 -15"></path>
                                        </svg>
                                    </label>
                                @else
                                    <input type="checkbox" class="check flex">
                                    <label class="flex grow items-center" for="signup-modal" style="--d: 60%;">
                                        <svg class="h-12 w-12" viewBox="0, 0, 60, 60">
                                            <rect x="10%" y="10%"/>
                                            <path d="M5 30 L 20 40 L 55 -15"></path>
                                        </svg>
                                    </label>
                                @endauth                                
                            </div>
                        </div>                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- SIGNUP PROMPT MODAL --}}
    <input type="checkbox" id="signup-modal" class="modal-toggle" />
    <label for="signup-modal" class="modal cursor-pointer">
        <label class="modal-box relative" for="">
            <label for="signup-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
            <h3 class="font-bold text-lg">This feature is for logged in users only!</h3>
            <p class="py-4">Please log in or register if you'd like to save your vote for the candidate. You can print the list of candidates for your state from your profile.</p>
            <div class="modal-action">
                <a href="/login"><button for="signup-modal" class="btn btn-primary">Sign in</button></a>
                <a href="/register"><button for="signup-modal" class="btn btn-primary">Register</button></a>
            </div>
        </label>
    </label>

    @push('scripts')
        <script>
            function unselectAll(candidate_id)
            {
                nodes = document.querySelectorAll('input.check');
                nodes.forEach(element => {
                    element.checked = false;
                });
                document.getElementById('check' + candidate_id).checked = true;
                //TODO: Properly hook up to backend
            }
        </script>
    @endpush
</x-app-layout>

