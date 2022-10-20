@if ($this->candidate->donors)
    <div class="flex grow flex-col w-11/12 items-center">
        <x-dropdown-card :classes="'shadow-md'">
            <x-slot:title>
                Campaign Donors
            </x-slot>
            <x-slot:content>
                @if($this->candidate->donors->total != 0.00)
                    <p class="text-center">{{$this->candidate->name}} has received <span class='font-semibold text-md'>${{ number_format($this->candidate->donors->total) }}</span> <span class='text-gray-400 text-sm'>(as of {{ $this->candidate->donors->last_fec_updated_at }})</span></p>
                    <h3 class='text-center capitalize text-xl font-bold'>Top 5 Donors</h3>

                    @foreach ($this->top_5_donors as $name => $donor)
                        <p><span class='font-semibold text-md'>${{ number_format($donor["Amount"], 2) }}</span> <span class='text-gray-400 text-sm'>({{ $donor["Percent_Total"] }}%)</span> - {{ $name }}</p>
                    @endforeach
                    <h3 class='text-center capitalize text-xl font-bold'>Top 5 States</h3>
                    @foreach ($this->top_5_state_donors as $name => $donor)
                        <p><span class='font-semibold text-md'>${{ number_format($donor["Amount"], 2) }}</span> <span class='text-gray-400 text-sm'>({{ $donor["Percent_Total"] }}%)</span> - {{ $name }}</p>
                    @endforeach

                    <div class='flex flex-row justify-center'>
                        <h3 class='text-center capitalize text-xl font-bold'>Top 5 Donor Groupings</h3>
                        <div
                            class="tooltip tooltip-info h-fit"
                            data-tip="Disclaimer: We've determined the 'donor group' by setting up filters for the occupation of the donor. For example if the donor has an occupation with the word 'finance', we've put them in the 'banking' group. While it may be concerning that specific industries have donated large amounts to a candidate, please remember that all individual donors of an industry are grouped together.">
                            <button class="">
                                <svg height="16" viewBox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h48v48h-48z" fill="none"/>
                                    <path d="M24 4c-11.05 0-20 8.95-20 20s8.95 20 20 20 20-8.95 20-20-8.95-20-20-20zm2 30h-4v-12h4v12zm0-16h-4v-4h4v4z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    @foreach ($this->top_5_group_donors as $name => $donor)
                        <p><span class='font-semibold text-md'>${{ number_format($donor["Amount"], 2) }}</span> <span class='text-gray-400 text-sm'>({{ $donor["Percent_Total"] }}%)</span> - {{ $name }}</p>
                    @endforeach
                @else
                    <p class="text-center">This candidate does not have their donor data listed on the fec.gov website. It's likely that they haven't received enough donations to file.</p>
                @endif
            </x-slot>
        </x-dropdown-card>
    </div>
@endif

