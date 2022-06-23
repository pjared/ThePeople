<div>
    <div class="grid gap-4 place-content-center font-roboto text-5xl">
        <!-- Mayor Card -->
        <button wire:click="$emitUp('officeClicked', 'Mayor')" id="mayorButton" name="office" value="Mayor" class="w-80 p-2 disabled:opacity-50 rounded-md hover:bg-gray-200 hover:scale-110">
            <div class="grid grid-flow-col items-center justify-center">
                <div>Mayor</div>
                <div class="flex ml-2">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" viewBox="0 0 419.48 419.48" style="enable-background:new 0 0 419.48 419.48;" xml:space="preserve" height="50px">
                        <g transform="translate(0,400)">
                        <g transform="scale(1,-1)"> 
                        <g>
                            <path d="M419.48,6.738H0v59.11h52.355v322.825l3.564,1.402c36.273,13.826,91.697,22.668,153.82,22.668   c62.121,0,117.547-8.842,153.82-22.668l3.563-1.402V65.848h52.355V6.738H419.48z M331.74,361.738h-22v-251.33h22V361.738z"/>
                        </g>
                    </svg>
                </div>
            </div>
        </button>
    
        <!-- Governor Card -->
        <button wire:click="$emitUp('officeClicked', 'Governor')" type="submit" id="govenorButton" name="office" value="Governor" class="w-80 p-2 disabled:opacity-50 rounded-md hover:bg-gray-200 hover:scale-110">
            <div class="grid grid-flow-col items-center justify-center">
                <div class="flex gap-1">
                    Governor                    
                </div>
                <div class="flex ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M489.1 264.9C480.5 207.5 450.5 32 392.3 32c-14 0-26.58 5.875-37.08 14c-20.75 15.87-49.62 15.87-70.5 0C274.2 38 261.7 32 247.7 32c-58.25 0-88.27 175.5-97.77 232.9C188.7 277.5 243.7 288 319.1 288S451.2 277.5 489.1 264.9zM632.9 227.7c-6.125-4.125-14.2-3.51-19.7 1.49c-1 .875-101.3 90.77-293.1 90.77c-190.9 0-292.2-89.99-293.2-90.86c-5.5-4.875-13.71-5.508-19.71-1.383c-6.125 4.125-8.587 11.89-6.087 18.77C1.749 248.5 78.37 448 319.1 448s318.2-199.5 318.1-201.5C641.5 239.6 639 231.9 632.9 227.7z"/>
                    </svg>
                </div>
            </div>
        </button>

        <!-- House Card -->
        <button wire:click="$emitUp('officeClicked', 'House')" type="submit" id="houseButton" name="office" value="House" class="w-80 disabled:opacity-50 p-2 rounded-md hover:bg-gray-200 hover:scale-110">
            <div class="grid grid-flow-col items-center justify-center">
                <div class="flex gap-1">
                    House
                </div>
                <div class="flex ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </div>
            </div>
        </button>

        <!-- Senate Card -->
        <button wire:click="$emitUp('officeClicked', 'Senate')" type="submit" id="senateButton" name="office" value="Senate" class="w-80 p-2 disabled:opacity-50 rounded-md hover:bg-gray-200 hover:scale-110">
            <div class="grid grid-flow-col items-center justify-center">
                <div class="flex gap-1">
                    Senate
                </div>
                <div class="flex ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-bank text-center" viewBox="0 0 16 18">
                        <path d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z"/>
                    </svg>      
                </div>
            </div>
        </button>
    </div>
</div>

@push('scripts')
    <script>
        // $(document).ready(function() {
        //     /*  --- HOVERING --- */
            
        //     /*
        //         Adds highlight effect to list of location inputs
        //     */
        //     function addHoverEffect(officeButton, affectedList) {

        //         affectedList.forEach(element => {
        //             element.css('border-color', '#86b7fe');                      
        //             element.css('outline', '0');                     
        //             element.css('box-shadow', '0 0 0 0.25rem rgba(13, 110, 253, 0.25)');                
        //         });
        //     }

        //     /*
        //         Removes highlight effect to list of location inputs
        //     */
        //     function removeHoverEffect(officeButton, affectedList) {
        //         affectedList.forEach(element => {
        //             element.css('border-color', '#ced4da');
        //             element.css('outline', '0');
        //             element.css('box-shadow', 'none');           
        //         });                
        //     }

        //     /*
        //         Functionality to highlight what locations need to be filled to view office level
        //     */
        //     $('#mayorButton').hover(
        //         function() {
        //             affectedList = [$('#cityInput'), $('#zipInput')];
        //             addHoverEffect($(this), affectedList);
                    
        //         }, function() {
        //             affectedList = [$('#cityInput'), $('#zipInput')];
        //             removeHoverEffect($(this), affectedList);
        //         }
        //     );

        //     $('#houseButton').hover(
        //         function() {
        //             affectedList = [$('#cityInput'), $('#zipInput'), $('#stateInput')];
        //             addHoverEffect($(this), affectedList);
                    
        //         }, function() {
        //             affectedList = [$('#cityInput'), $('#zipInput'), $('#stateInput')];
        //             removeHoverEffect($(this), affectedList);
        //         }
        //     );
            
        //     $('#govenorButton').hover(
        //         function() {
        //             affectedList = [$('#cityInput'), $('#zipInput'), $('#stateInput')];
        //             addHoverEffect($(this), affectedList);
                    
        //         }, function() {
        //             affectedList = [$('#cityInput'), $('#zipInput'), $('#stateInput')];
        //             removeHoverEffect($(this), affectedList);
        //         }
        //     );

        //     $('#senateButton').hover(
        //         function() {
        //             affectedList = [$('#cityInput'), $('#zipInput'), $('#stateInput')];
        //             addHoverEffect($(this), affectedList);
                    
        //         }, function() {
        //             affectedList = [$('#cityInput'), $('#zipInput'), $('#stateInput')];
        //             removeHoverEffect($(this), affectedList);
        //         }
        //     );

        //     /*  --- INPUT CRONTROL --- */
            
        //     function disableAll() {
        //         //Check to see if any values are set

        //         //City and zip unlock all
        //         if($('#zipInput').val() != "" || $('#cityInput').val() != "") {
        //             return;
        //         } else if($('#stateInput').val() != "") {
        //             //State only locks mayor
        //             $('#mayorButton').prop("disabled",true)
        //         } else {
        //             //Nothing is filled in, disable all
        //             $('#mayorButton').prop("disabled",true)
        //             $('#govenorButton').prop("disabled",true)
        //             $('#houseButton').prop("disabled",true)
        //             $('#senateButton').prop("disabled",true)
        //         }
        //     }

        //     disableAll();

        //     /*
        //         Functions to catch when a change has been made to location inputs    
        //     */
        //     $('#stateInput').keyup(function() {
        //         affectedList = [$('#govenorButton'), $('#houseButton'),  $('#senateButton')];
        //         stateHandle($('#stateInput'), affectedList);
        //     });

        //     $('#zipInput').keyup(function() {
        //         affectedList = [$('#mayorButton'), $('#govenorButton'), $('#houseButton'),  $('#senateButton')];
        //         stateHandle($('#zipInput'), affectedList);
        //     });

        //     $('#cityInput').keyup(function() {
        //         affectedList = [$('#mayorButton'), $('#govenorButton'), $('#houseButton'),  $('#senateButton')];
        //         stateHandle($('#cityInput'), affectedList);
        //     });

        //     /*
        //         Checks all location inputs to determine if any are filled

        //         If any are filled, return true
        //         else false
        //     */
        //     function checkAll() { //TODO: Finish this function to apply to specifics
        //         if($('#cityInput').val() != "") {
        //             return true;
        //         }
        //         if($('#statenput').val() != "") {
        //             return true;
        //         }
        //         if($('#zipInput').val() != "") {
        //             return true;
        //         }
        //         return false;                
        //     }

        //     /*
        //         Handles when any keychange has been made on the location inputs    
        //     */
        //     function stateHandle(stateObj, affectedList) {
        //         // if(checkAll()) {
        //         //     return;
        //         // }
        //         if (stateObj.val() === "") {
        //             affectedList.forEach(element => {
        //                 element.prop("disabled",true)                        
        //             });
        //             // setMayorIcon();
        //             // setGovenorIcon();
        //         } else {
        //             affectedList.forEach(element => {
        //                 element.prop("disabled",false)
        //             });
        //             // setMayorIcon();
        //             // setGovenorIcon();
        //         }
        //     }
        // });
    </script>
@endpush