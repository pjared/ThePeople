@extends('layouts.app')

@section('content')
    <div class="container-fluid min-vh-90 mh-100">
        {{-- TODO: Add the state, city, zip feature on 
            this page also while hovering left div--}}
        <div class="row min-vh-90 mh-100">

            <div class="col-3 align-items-center mt-5 pt-5">
                {{-- LOCATION INPUT --}}
                <div class="row">
                    {{-- TODO: Center this fkin div in it's component --}}
                    <div class="justify-content-center">
                        @include('components.locationInput')
                    </div>  
                </div>    
                {{-- PUBLIC OFFICES --}}
                <div class="row">
                    <div class="mt-5 pt-5">
                        @include('components.publicOfficeList')
                    </div>  
                </div>  
            </div>
            <div class="col-9 mt-4 pt-4">
                <div class="card" style="width:75%;">
                    <div class="card-body">
                        <div class="text-center" style="font-family: 'Courier M', monospace; font-size:large;">
                            Plan your choice for the upcoming election
                        </div>
                        <div class="form-check mt-2">
                            @foreach ($candidates as $candidate)
                                <div class="row pt-2">
                                    <div class="col-10">
                                        <div class="card">
                                            <div class="card-body" style="padding-bottom: .25rem; padding-top: .75rem">
                                                <div class="row align-items-center">
                                                    <div class="col-2 text-center">
                                                        <img style="height:100%;width:100%" src="{{ Storage::url('images/' . $candidate->image_id  . '.jpg') }}">
                                                    </div>
                                                    <div class="col-9 offset-1">
                                                        <div class="" style="font-family: 'Courier M', monospace; font-size:medium;">
                                                            {{ $candidate->name }}
                                                        </div>
                                                        <div class="text-end" style="font-family: 'Courier M', monospace; font-size:small;">
                                                            <a href="/profile/candidate/{{$candidate->id}}">More about {{ $candidate->name }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 ms-4">
                                        <div class="mt-3">
                                            {{-- TODO: Fix this checkbox error --}}
                                            <input id="checkbox_{{$candidate->id}}" type="checkbox" >
                                            <label for="checkbox_{{$candidate->id}}" id="label_{{$candidate->id}}" style="--d: 75%;">
                                                <svg id="svg_{{$candidate->id}}" viewBox="0, 0, 50, 50">                                                    
                                                    <rect x="10%" y="10%"/>
                                                    <path d="M5 30 L 20 40 L 55 -15" />
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