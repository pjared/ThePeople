@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="main-text pt-5 mt-5 text-center" style="font-family: 'Roboto Mono', monospace; font-size:xx-large;">
                See Who's Running For
            </div>
        </div>
        <div class="row justify-content-center mt-5 pt-3">
            <div class="col-5 offset-md-2 justify-content-center text-center" style="font-family: 'Roboto'; font-size:xxx-large;">
                @include('components.publicOfficeList')
            </div>
            <div class="col-5 mt-4 text-left" style="font-family: 'Roboto'; font-size:x-large;">
                @include('components.locationInput')
            </div>
            {{-- @include('location.index') --}}
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#mayorButton').prop("disabled",true)
            $('#govenorButton').prop("disabled",true)
            $('#houseButton').prop("disabled",true)
            $('#senateButton').prop("disabled",true)

            $('#stateInput').keyup(function() {
                affectedList = [$('#govenorButton'), $('#houseButton'),  $('#senateButton')];
                stateHandle($('#stateInput'), affectedList);
            });

            // zipAndCityAffectedList = 
            $('#zipInput').keyup(function() {
                affectedList = [$('#mayorButton'), $('#govenorButton'), $('#houseButton'),  $('#senateButton')];
                stateHandle($('#zipInput'), affectedList);
            });
            $('#cityInput').keyup(function() {
                affectedList = [$('#mayorButton'), $('#govenorButton'), $('#houseButton'),  $('#senateButton')];
                stateHandle($('#cityInput'), affectedList);
            });

            function stateHandle(stateObj, affectedList) {
                if (stateObj.val() === "") {
                    affectedList.forEach(element => {
                        element.prop("disabled",true)
                    });
                } else {
                    affectedList.forEach(element => {
                        element.prop("disabled",false)
                    });
                }
            }
        });
    </script>
@endsection