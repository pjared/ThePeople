@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        {{-- TODO: Add the state, city, zip feature on 
            this page also while hovering left div--}}
        <div class="row">
            {{-- LEFT SIDE - LOCATION AND OFFICES LIST --}}
            <div class="col-3 mt-5 pt-5">
                <form method="GET" action="/ballot" class="officeList">   
                    {{-- LOCATION INPUT --}}
                    <div class="row">
                        {{-- TODO: Center this fkin div in it's component --}}
                        <div class="d-flex mx-auto" style="width: 60%">
                            @include('components.locationInput')
                        </div>  
                    </div>    
                    {{-- PUBLIC OFFICES --}}
                    <div class="row">
                        <div class="mt-5">
                            @include('components.publicOfficeList')
                        </div>  
                    </div>  
                </form>
            </div>
            {{-- RIGHT SIDE - BALLOT BOX --}}
            <div class="col-8 mt-4 pt-4">
                <div class="card" style="width:90%;">
                    {{-- CANDIDATE LIST --}}
                    <div class="card-body" style="box-shadow:1px 1px 3px black, 0 0 125px #e7e7e7 inset;">
                        <div class="text-center" style="font-family: 'Courier M', monospace; font-size:large;">
                            Plan your choice for the upcoming election                            
                        </div>
                        <div class="text-center text-uppercase mt-2" style="font-size:small;">
                            {{ $location }} {{ $position }}, VOTING DATE: {{$ballot->voting_date}}
                        </div>          
                        <div class="form-check mt-2">
                            @foreach ($ballot->candidates as $running_candidate)
                                <div class="row pt-2 h-100">
                                    {{-- CANDIDATE NAME, PICTURE, AND PAGE LINK --}}
                                    <div class="col-10">
                                        <div class="card candidate-card">
                                            <div class="card-body" style="padding-bottom: .25rem; padding-top: .25rem">
                                                <div class="row align-items-center">
                                                    <div class="col-2 text-center">
                                                        <img style="height:90px;width:100%;object-fit: cover;" src="{{ Storage::url('images/' . $running_candidate->candidate->image_id  . '.jpg') }}">
                                                    </div>
                                                    <div class="col-9 offset-1">
                                                        <div class="" style="font-family: 'Courier M', monospace; font-size:medium;">
                                                            {{ $running_candidate->candidate->name }}
                                                        </div>
                                                        <div class="text-end pt-4" style="font-family: 'Courier M', monospace; font-size:small;">
                                                            <a class="stretched-link" href="/profile/candidate/{{$running_candidate->candidate_id}}">More about {{ $running_candidate->candidate->name }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- CHECKBOX FOR CANDIDATE --}}
                                    <div class="col-1 ms-4 d-flex align-items-center">
                                        <div class="w-100">
                                            <input type="checkbox" class="check" name="check{{$running_candidate->candidate_id}}" id="check{{$running_candidate->candidate_id}}">
                                            <label for="check{{$running_candidate->candidate_id}}" style="--d: 75%;">
                                                <svg viewBox="0, 0, 50, 50">
                                                    <rect x="10%" y="10%"/>
                                                    <path d="M5 30 L 20 40 L 55 -15"></path>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('input.check').on('change', function() {
            $('input.check').not(this).prop('checked', false);  
        });

        //If a user has a candidate checked, check it when page loads
        $(document).ready(function() {            
            
        })
    </script>
@endpush