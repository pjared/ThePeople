<div class='flex flex-row'>
    <div class="flex flex-col grow gap-6 items-center w-1/2">
        <h2>Submit a question to the ballot</h2>
        <textarea wire:model.defer="group_question" class="textarea textarea-primary w-3/4" placeholder="Your question"></textarea>
        <button wire:click="add_question" class="btn btn-primary">Submit</button>
    </div>

    <div class='flex flex-col w-1/2 justify-center items-center gap-4'>
        <select wire:model.defer='backed_candidate' class="select select-bordered w-full max-w-xs">
            <option selected value="">Back a Candidate</option>
            @foreach ($ballot->candidates as $candidate)
                <option value="{{$candidate->id}}">{{$candidate->name}}</option>
            @endforeach
        </select>
        <div class='flex flex-row gap-4'>
            <button wire:click="change_backing" class="btn btn-primary">Submit</button>
            @if($backed_candidate)
                <button wire:click="remove_backing" class="btn btn-error">Remove Current</button>
            @endif
        </div>
    </div>
</div>
