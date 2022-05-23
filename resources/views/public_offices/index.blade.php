<form method="POST" action="/ballot">
    @csrf
    <input type="hidden" name="location_type" id="location_type" value="state">
    <input type="hidden" name="location" id="location" value="Utah">
    <input type="hidden" name="office" id="office" value="mayor">

    {{-- Mayor Card --}}
    <button type="submit" id="mayorButton" class="card public-office-card">
        <div class="card-body">
            Mayor
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" viewBox="0 0 419.48 419.48" style="enable-background:new 0 0 419.48 419.48;" xml:space="preserve" height="50px">
                <g transform="translate(0,400)">
                <g transform="scale(1,-1)"> 
                <g>
                    <path d="M419.48,6.738H0v59.11h52.355v322.825l3.564,1.402c36.273,13.826,91.697,22.668,153.82,22.668   c62.121,0,117.547-8.842,153.82-22.668l3.563-1.402V65.848h52.355V6.738H419.48z M331.74,361.738h-22v-251.33h22V361.738z"/>
                </g>
            </svg>
        </div>
    </button>
    {{-- Govenor Card --}}
    <button type="submit" id="govenorButton" class="card public-office-card">
        <div class="card-body">
            Governor
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M489.1 264.9C480.5 207.5 450.5 32 392.3 32c-14 0-26.58 5.875-37.08 14c-20.75 15.87-49.62 15.87-70.5 0C274.2 38 261.7 32 247.7 32c-58.25 0-88.27 175.5-97.77 232.9C188.7 277.5 243.7 288 319.1 288S451.2 277.5 489.1 264.9zM632.9 227.7c-6.125-4.125-14.2-3.51-19.7 1.49c-1 .875-101.3 90.77-293.1 90.77c-190.9 0-292.2-89.99-293.2-90.86c-5.5-4.875-13.71-5.508-19.71-1.383c-6.125 4.125-8.587 11.89-6.087 18.77C1.749 248.5 78.37 448 319.1 448s318.2-199.5 318.1-201.5C641.5 239.6 639 231.9 632.9 227.7z"/>
            </svg>
        </div>
    </button>
    {{-- House Card --}}
    <button type="submit" id="houseButton" class="card public-office-card">
        <div class="card-body">
            House
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
        </div>
    </button>
    {{-- Senate Card --}}
    <button type="submit" id="senateButton" class="card public-office-card">
        <div class="card-body">
            Senate
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                <path d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z"/>
            </svg>
        </div>
    </button>
</form>