<aside
    class="z-20 hidden w-64 h-full overflow-y-auto bg-white md:block flex-shrink-0"
    >
    <div class="py-2 text-gray-500 ">
        <ul>
            
            {{-- PREVIEW PROFILE --}}
            <li class="relative px-6 py-3">
                <span                
                class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg 
                {{ request()->routeIs('candidate-preview') ? 'bg-purple-600' : ''}}"
                ></span>
                <a
                class="inline-flex items-center w-full text-sm font-semibold  transition-colors duration-150 hover:text-gray-800
                {{ request()->routeIs('candidate-preview') ? ' text-gray-800' : ''}}"
                href="{{Route('candidate-preview')}}"
                >
                    <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                        ></path>
                    </svg>
                    <span class="ml-4">Preview Your Profile</span>
                </a>
            </li>
            {{-- CANDIDATE EDIT DROPDOWN --}}
            {{-- {{dd(request()->is('candidate/edit/*'))}} --}}
            <li class="relative px-6 py-3" x-data="{ isPagesMenuOpen: '{{request()->is('candidate/edit/*')}}' }">
                <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                @click="isPagesMenuOpen = !isPagesMenuOpen"
                aria-haspopup="true"
                >
                    <span class="inline-flex items-center">
                        <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                        ></path>
                        </svg>
                        <span class="ml-4">Edit Your Profile</span>
                    </span>
                    <svg
                        class="w-4 h-4"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path
                        fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <div x-show="isPagesMenuOpen" x-transition>
                    <ul
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 "
                        aria-label="submenu"
                    >
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full
                            {{ request()->is('candidate/edit/info') ? 'text-gray-800 underline' : ''}}"
                             href="/candidate/edit/info">
                                Basic Information
                            </a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full
                            {{ request()->is('candidate/edit/bio') ? 'text-gray-800 underline' : ''}}"
                             href="/candidate/edit/bio"
                             >Bio</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full
                            {{ request()->is('candidate/edit/stances') ? 'text-gray-800 underline' : ''}}"
                             href="/candidate/edit/stances"
                             >Controversial Stances
                            </a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full
                            {{ request()->is('candidate/edit/promises') ? 'text-gray-800 underline' : ''}}"
                             href="/candidate/edit/promises"
                             >Promises</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full
                            {{ request()->is('candidate/edit/videos') ? 'text-gray-800 underline' : ''}}"
                             href="/candidate/edit/videos"
                             >
                                Campaign Videos
                            </a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full
                            {{ request()->is('candidate/edit/positions') ? 'text-gray-800 underline' : ''}}"
                             href="/candidate/edit/positions"
                             >
                                Previous Political Positions
                            </a>
                        </li>                            
                    </ul>
                    </div>
            </li>

            {{-- DASHBOARD --}}
            <li class="relative px-6 py-3">
                <span                
                class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg 
                {{ request()->routeIs('candidate-dashboard') ? 'bg-purple-600' : ''}}"
                ></span>
                <a
                class="inline-flex items-center w-full text-sm font-semibold  transition-colors duration-150 hover:text-gray-800
                {{ request()->routeIs('candidate-dashboard') ? ' text-gray-800' : ''}}"
                
                >
                {{-- /candidate/dashboard --}}
                <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    ></path>
                </svg>
                <span class="ml-4">Candidate Dashboard (Upcoming Feature)</span>
                </a>
            </li>

            {{-- USER FLAGGING INFO --}}
            <li class="relative px-6 py-3">
                <a
                class="inline-flex items-center fill-transparent w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                >
                    @include('icons.flag')
                    <span class="ml-4">What's Flagged the Most (Upcoming Feature)</span>
                </a>
            </li>
            
            {{-- DEMOGRAPHIC APPEAL --}}
            <li class="relative px-6 py-3">
                <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                >
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M368 344h96c13.25 0 24-10.75 24-24s-10.75-24-24-24h-96c-13.25 0-24 10.75-24 24S354.8 344 368 344zM208 320c35.35 0 64-28.65 64-64c0-35.35-28.65-64-64-64s-64 28.65-64 64C144 291.3 172.7 320 208 320zM512 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h448c35.35 0 64-28.65 64-64V96C576 60.65 547.3 32 512 32zM528 416c0 8.822-7.178 16-16 16h-192c0-44.18-35.82-80-80-80h-64C131.8 352 96 387.8 96 432H64c-8.822 0-16-7.178-16-16V160h480V416zM368 264h96c13.25 0 24-10.75 24-24s-10.75-24-24-24h-96c-13.25 0-24 10.75-24 24S354.8 264 368 264z"/></svg>
                <span class="ml-4">Your Demographic Appeal (Upcoming Feature)</span>
                </a>
            </li>
            
            {{-- CANDIDATE COMPARISON --}}
            <li class="relative px-6 py-3">
                <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                >
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M400 224h-44l-26.12-53.25c-12.5-25.5-35.38-44.25-61.75-51L197 98.63C189.5 96.84 181.1 95.97 174.5 95.97c-20.88 0-41.33 6.81-58.26 19.78L76.5 146.3C68.31 152.5 64.01 162 64.01 171.6c0 17.11 13.67 32.02 32.02 32.02c6.808 0 13.67-2.158 19.47-6.616l39.63-30.38c5.92-4.488 13.01-6.787 19.53-6.787c2.017 0 3.981 .2196 5.841 .6623l14.62 4.25l-37.5 87.5C154.1 260.3 152.5 268.8 152.5 277.2c0 22.09 11.49 43.52 31.51 55.29l85 50.13l-27.5 87.75c-.9875 3.174-1.458 6.388-1.458 9.55c0 13.65 8.757 26.31 22.46 30.58C265.6 511.5 268.9 512 272 512c13.62 0 26.25-8.75 30.5-22.5l31.75-101c1.211-4.278 1.796-8.625 1.796-12.93c0-16.57-8.661-32.51-23.55-41.44l-61.13-36.12l31.25-78.38l20.25 41.5C310.9 277.4 327.9 288 345.1 288H400c17.62 0 32-14.38 32-32C432 238.3 417.6 224 400 224zM288 96c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48S261.5 96 288 96zM129.8 317.5L114.9 352H48c-17.62 0-32 14.38-32 32s14.38 32 32 32h77.5c19.25 0 36.5-11.5 44-29.12l8.875-20.5l-10.75-6.25C150.4 349.9 137.6 334.8 129.8 317.5z"/></svg>
                <span class="ml-4">Running Mates Comparison (Upcoming Feature)</span>
                </a>
            </li>
        </ul>
    </div>
</aside>