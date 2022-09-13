<input type="checkbox" id="my-modal" class="modal-toggle" />
<label for="my-modal" class="modal cursor-pointer">
    <label class="modal-box relative" for="">
        <label for="my-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <div class='flex flex-col gap-4'>
            <form class='flex flex-col gap-4' action="/submit-feedback" method="POST">
                @csrf
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">What's the feedback about?</span>
                    </label>
                    <select name='feedback_type' class="select select-bordered">
                        <option disabled selected>Pick one</option>
                        <option value='general'>General</option>
                        <option value='feature'>Feature Suggestion</option>
                        <option value='other'>Other</option>
                        {{-- <option>Lord of the Rings</option>
                        <option>Planet of the Apes</option>
                        <option>Star Trek</option> --}}
                    </select>
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Feedback</span>
                    </label>
                    <textarea name='feedback' class="textarea textarea-bordered h-24" placeholder="Feedback"></textarea>
                </div>

                <button type='submit' class='justify-center btn btn-primary'>
                    Submit Feedback
                </button>
            </form>
        </div>
    </label>
</label>
