<footer class="footer p-10 bg-base-200 text-base-content">
    <div>
        <span class="text-3xl">ThePeople</span>
        <p>by ComnRep, LLC.</p>
    </div>
    {{-- <div>
        <span class="footer-title">Services</span>
        <a class="link link-hover">Branding</a>
        <a class="link link-hover">Design</a>
        <a class="link link-hover">Marketing</a>
        <a class="link link-hover">Advertisement</a>
    </div>  --}}
    <div>
        <span class="footer-title">Company</span>
        <a class="link link-hover" href="{{route('about-us')}}">About us</a>
        {{-- <a class="link link-hover" href="{{route('about-us')}}">Suggestions? Give Us Feedback</a> --}}
        @auth
            <label for="feedback-modal" class="link link-hover">Suggestions? Give Us Feedback</label>
        @endauth
        {{-- <a class="link link-hover">Contact</a> --}}
        {{-- <a class="link link-hover">Jobs</a>  --}}
        {{-- <a class="link link-hover">Press kit</a> --}}
    </div>
    <div>
        <span class="footer-title">Legal</span>
        <a class="link link-hover" href="{{route('terms.show')}}">Terms of use</a>
        <a class="link link-hover" href="{{route('policy.show')}}">Privacy policy</a>
        {{-- <a class="link link-hover">Cookie policy</a> --}}
    </div>
    <div>
        <span class="footer-title">Contact</span>
        <a class="">thepeople@whatsinyourballot.com</a>
    </div>
</footer>
