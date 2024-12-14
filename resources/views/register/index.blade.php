@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4">
            <main class="form-signin w-100 m-auto ">
                <form action="/register" method="post">
                  @csrf
                  <h1 class="h3 mb-3 fw-normal d-block text-center">{{ $title }}</h1>
                  <div class="form-floating my-2">
                    <input required type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            fill the name
                        </div>
                    @enderror
                  </div>
                  {{-- <input type="text" class="form-control" id="validationCustom03" required> --}}
                  <div class="form-floating my-2">
                    <input required type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{ old('username') }}">
                    <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                               Please choose a username
                            </div>
                        @enderror
                  </div>
                  <div class="form-floating my-2">
                    <input required type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            Input correct email
                        </div>
                    @enderror
                  </div>
                  <div class="form-floating my-2">
                    <input required type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            fill the password with minimal 8 character
                        </div>
                    @enderror
                  </div>
                  <button class="btn btn-primary w-100 py-2 " type="submit">Sign Up</button>
                  <p class="mt-1 mb-3 text-body-secondary text-muted">&copy; DarkNash</p>
                </form>
        </main>
    </div>
</div>
@endsection()
