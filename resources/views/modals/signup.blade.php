{{-- SIGNUP PROMPT MODAL --}}
<input type="checkbox" id="signup-modal" class="modal-toggle" />
<label for="signup-modal" class="modal cursor-pointer">
    <label class="modal-box relative" for="">
        <label for="signup-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <h3 class="font-bold text-lg">This feature is for logged in users only!</h3>
        <p class="py-4">Please log in or register if you'd like to save your vote for the candidate. You can print the list of candidates for your state from your profile.</p>
        <div class="modal-action">
            <a href="/login"><button for="signup-modal" class="btn btn-primary">Sign in</button></a>
            <a href="/register"><button for="signup-modal" class="btn btn-primary">Register</button></a>
        </div>
    </label>
</label>