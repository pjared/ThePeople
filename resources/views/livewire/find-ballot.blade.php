<div class="flex flex-wrap gap-6">
    {{-- Left Column: Offices --}}            
    <div class="flex-1 h-fit">
        <livewire:level-office/> 
    </div>

    {{-- Right Column: Location Input --}}
    <div class="flex-1 text-xl">
        <livewire:location-input :state_input="$state_input" :city_input="$city_input" :zip_input="$zip_input"/> 
    </div>
</div>