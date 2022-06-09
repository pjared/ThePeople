@extends('layouts.app')

@section('content')
  <div class="container">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <div class="row">
      <div class="col"></div>
      <div class="col mt-5 pt-5">
        <form method="POST" action="/login" class="">
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="emailInput" name="email" class="form-control" />
            <label class="form-label" for="emailInput">Email address</label>
          </div>
        
          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="passwordInput" name="password" class="form-control" />
            <label class="form-label" for="passwordInput">Password</label>
          </div>
        
          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rememberCheck" name="rememberCheck" checked/>
                <label class="form-check-label" for="rememberCheck"> Remember me </label>
              </div>
            </div>
        
            <div class="col">
              <!-- Simple link -->
              <a href="#!">Forgot password?</a>
            </div>
          </div>
        
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
        
          <!-- Register buttons -->
          <div class="text-center">
            <p>Not a member? <a href="/register">Register</a></p>
            {{-- TODO: Implement sign up with other --}}
            {{-- <p>or sign up with:</p> --}}
            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="bi bi-facebook"></i>
            </button>
        
            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="bi bi-google"></i>
            </button>
        
            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="bi bi-twitter"></i>
            </button>
        
            {{-- <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-github"></i>
            </button> --}}
          </div>
        </form>
      </div>
      <div class="col"></div>
    </div>
  </div>
@endsection