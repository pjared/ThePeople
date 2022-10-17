@if ($this->candidate->donors)
    <div class="flex grow flex-col w-11/12 items-center">
        <x-dropdown-card :classes="'shadow-md'">
            <x-slot:title>
                Campaign Donors
            </x-slot>
            <x-slot:content>
                <p class="text-center">{{$this->candidate->name}} has received <span class='font-semibold text-md'>${{ number_format($this->candidate->donors->total) }}</span></p>
                <h3 class='text-center capitalize text-xl font-bold'>Top 5 Donors</h3>
                @foreach ($this->top_5_donors as $name => $donor)
                    <p><span class='font-semibold text-md'>${{ number_format($donor["Amount"], 2) }}</span> <span class='text-gray-400 text-sm'>({{ $donor["Percent_Total"] }}%)</span> - {{ $name }}</p>
                @endforeach
                <h3 class='text-center capitalize text-xl font-bold'>Top 5 States</h3>
                @foreach ($this->top_5_state_donors as $name => $donor)
                    <p><span class='font-semibold text-md'>${{ number_format($donor["Amount"], 2) }}</span> <span class='text-gray-400 text-sm'>({{ $donor["Percent_Total"] }}%)</span> - {{ $name }}</p>
                @endforeach
                <h3 class='text-center capitalize text-xl font-bold'>Top 5 Donor Groupings</h3>
                @foreach ($this->top_5_group_donors as $name => $donor)
                    <p><span class='font-semibold text-md'>${{ number_format($donor["Amount"], 2) }}</span> <span class='text-gray-400 text-sm'>({{ $donor["Percent_Total"] }}%)</span> - {{ $name }}</p>
                @endforeach
            </x-slot>
        </x-dropdown-card>
    </div>
@endif

