<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">ComnRep</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        {{-- Left side tabs --}}
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item"> 
            {{-- TODO: Finsh this --}}
            <a class="nav-link active" href="/">About Us</a>
          </li>
        </ul>

        {{-- <ul class="navbar-nav ms-auto">
          @if(Auth::check())
            <li class="nav-item"> 
              <a class="nav-link active" href="#" tabindex="-1">My Profile</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link active" href="/logout" tabindex="-1">Sign Out</a>
            </li>
          @else
            <li class="nav-item"> 
              <a class="nav-link active" href="#" tabindex="-1">Sign Up</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link active" href="/login-page" tabindex="-1">Login</a>
            </li>
          @endif
        </ul> --}}

        
        
        {{-- Search Bar --}}
        {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>