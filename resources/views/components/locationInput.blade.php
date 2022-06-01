<div id="locationFields">
    <div class="mt-1">
        <div class="form-group row">
            <label for="stateInput" class="col-sm-2 col-form-label locationInput">State: </label>
            <div class="col-sm-3 no-padding" style="width:40%">
                <input class="form-control" id="stateInput" name="stateInput" type="text" placeholder="">
            </div>
        </div>
    </div>
    <div class="mt-1">
        <div class="form-group row">
            <label for="cityInput" class="col-sm-2 col-form-label locationInput">City:</label>
            <div class="col-sm-3 no-padding" style="width:50%">
                <input class="form-control" id="cityInput" name="cityInput" type="text" placeholder="">
            </div>
        </div>
    </div>
    <div class="mt-1">
        <div class="form-group row">
            <label for="zipInput" class="col-sm-2 col-form-label locationInput">Zip:</label>
            <div class="col-sm-2 no-padding ui-widget" style="width:30%">
                <input class="form-control" id="zipInput" name="zipInput" type="text" placeholder="">
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {   
            // AUTOCOMPLETE FOR STATE
            var statePath = "{{ route('state') }}";
            $("#stateInput").typeahead({                
                source:  function (query, process) {
                    return $.get(statePath, { query: query }, function (data) {
                            return process(data);
                        });
                    }
            });

            // PASS LOCATION FROM BALLOT
            @isset($location_type)
                var location_type = {!! json_encode($location_type, JSON_HEX_TAG) !!};
                // console.log(location_type);
                switch (location_type) {
                    case 'state':
                        $("#stateInput").val({!! json_encode($location) !!});
                        break;
                    case 'zip':
                        $("#zipInput").val({!! json_encode($location) !!});
                        break;
                    case 'city':
                        $("#cityInput").val({!! json_encode($location) !!});
                        break;
                }            
            @endisset
        });
    </script>
@endpush