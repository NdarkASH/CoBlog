@extends('layouts.main')

@section('container')

    <div class="row justify-content-right">
        @if (session()->has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong> Silahkan login di bawah ini
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-md-4">
            <main class="form-signin w-100 m-auto">
                <form action="/login" method="post">
                  @csrf
                  <h1 class="h3 mb-3 fw-normal d-block text-center">Sign In</h1>
                  <div class="form-floating my-2">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="name@example.com" autofocus required>
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-floating my-2">
                    <input type="password"  name="password" class="form-control" id="password" placeholder="Password">
                    <label for="password">Password</label>
                  </div>
                  <button class="btn btn-primary w-100 py-2 " type="submit">Sign in</button>
                  <p class=" my-2 d-block text-center">
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#register">
                        don't have an account
                    </a>
                    <div class="collapse" id="register">
                        <div class="card card-body">
                          <a href="/register" class="d-block text-center">Register Here</a>
                        </div>
                    </div>
                  </p>
                    <small class="d-block text-center">
                        <p class="mt-1 mb-3 text-body-secondary text-muted">&copy; DarkNash</p>
                    </small>
                </form>
            </main>
        </div>
    </div>
@endsection()


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
              {{-- style --}}
<link rel="stylesheet" href="/css/style.css">
