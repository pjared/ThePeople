# API Calls
My personal documentation about the API calls that are made

## Voter Precint
https://gis.utah.gov/data/political/voter-precincts/

1. Get the geography x,y coordinates using the census API: https://www.census.gov/programs-surveys/geography/technical-documentation/complete-technical-documentation/census-geocoder.html
    - Example: $res = Http::get('https://geocoding.geo.census.gov/geocoder/locations/onelineaddress', [
                    'address' =>  $this->address_input,
                    'benchmark' => "2020",
                    'format' => 'json'
            ]);
            $x = $res->json()['result']['addressMatches'][0]['coordinates']['x'];
            $y = $res->json()['result']['addressMatches'][0]['coordinates']['y'];
            
2. Use the X,Y coords from previous call to call on UT voter precint map, https://services1.arcgis.com/99lidPhWCzftIe9K/arcgis/rest/services/VistaBallotAreas/FeatureServer/0/query
    - Example: $res= Http::get('https://services1.arcgis.com/99lidPhWCzftIe9K/arcgis/rest/services/VistaBallotAreas/FeatureServer/0/query', [
                'where' =>  '1=1',
                'outFields' => "PrecinctID",
                'geometry' => $x . ',' . $y . ',' . $x . ',' . $y,
                'geometryType' => 'esriGeometryEnvelope',
                'inSR' => '4326',
                'spatialRel' => 'esriSpatialRelIntersects',
                'outSR' => '4326',
                'f' => 'json',
            ]);
            $precinct = $res->json()['features'][0]['attributes']['PrecinctID'];
