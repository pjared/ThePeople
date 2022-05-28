@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="pt-5 mt-5 d-flex justify-content-center">
                <div class="ms-5 text-center type-out">
                    See Who's Running For ...
                </div>                
            </div>
        </div>
        <div class="row justify-content-center mt-5 pt-3">
            <div class="col-5 col-offset-3 justify-content-center text-center" style="font-family: 'Roboto'; font-size:xxx-large;">
                @include('components.publicOfficeList')
            </div>
            <div class="col-3 mt-4 text-left" style="font-family: 'Roboto'; font-size:x-large;">
                <div class='width:30%'>
                    @include('components.locationInput')
                </div>                
            </div>
            {{-- @include('location.index') --}}
        </div>
    </div>
@endsection