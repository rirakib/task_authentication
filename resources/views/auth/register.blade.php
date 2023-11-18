@extends('layouts.auth')
@section('content')

        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="{{route('dashboard')}}" class="app-brand-link gap-2">
                <span class="app-brand-text demo text-body fw-bolder">Logo</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Create Account</h4>
            <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
                @csrf

              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control @error('name') is-invalid @enderror"
                  id="name"
                  name="name"
                  placeholder="Enter your name"
                  autofocus
                />
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input
                  type="text"
                  class="form-control @error('username') is-invalid @enderror"
                  id="username"
                  name="username"
                  placeholder="Enter your username"
                  autofocus
                />
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>


              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                />

                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control @error('password') is-invalid @enderror"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password"
                  />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Confirmation Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password_confirmation"
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                    name="password_confirmation"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password_confirmation"
                  />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms-conditions" required name="terms" />
                  <label class="form-check-label" for="terms-conditions">
                    I agree to
                    <a href="javascript:void(0);">privacy policy & terms</a>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary d-grid w-100">Sign up</button>
            </form>

            <p class="text-center">
              <span>Already have an account?</span>
              <a href="{{route('login')}}">
                <span>Sign in instead</span>
              </a>
            </p>


          </div>
        </div>

@endsection
