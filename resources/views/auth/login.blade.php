<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div class="container-fluid ps-md-0">
    <div class="row g-0">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <p class="login-heading fs-2 fw-bold mb-4">{{ __('Login') }}</p>
  
                <!-- Sign In Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="form-floating mb-3">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="email">{{ __('Email') }}</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="current-password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password">{{ __('Password') }}</label>
                  </div>
  
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Ingat Saya') }}
                    </label>
                  </div>
  
                  <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold mb-2 text-dark" type="submit">{{ __('Login') }}</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Lupa Password?') }}
                        </a>
                    @endif
                    <div class="text-center mt-3">
                      <p>Sudah punya akun?</p>
                      <a href="{{route('register')}}" class="text-primary">Registrasi</a>
                    </div>
                  </div>
  
                </form>
                <style>
                    .login {
                    min-height: 100vh;
                    }

                    .bg-image {
                    background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');
                    background-size: cover;
                    background-position: center;
                    }

                    .login-heading {
                    font-weight: 300;
                    }

                    .btn-login {
                    font-size: 0.9rem;
                    letter-spacing: 0.05rem;
                    padding: 0.75rem 1rem;
                    }
                </style>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

