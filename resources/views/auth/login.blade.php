@extends('layouts.exterior')

@section('content')

<div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <div class="form-group">
                {{ __('Login') }}
                </div>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                  <div class="form-group">
                    <label class="label">{{ __('E-Mail Address') }}</label>
                    <div class="input-group">

                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">{{ __('Password') }}</label>
                    <div class="input-group">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success submit-btn btn-block"> {{ __('Login') }}</button>
                  </div>

                  <div class="form-group d-flex justify-content-between" style="display: none!important;">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">

                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>


                    </div>

                    <a href="{{ route('password.request') }}" class="text-small forgot-password text-black">{{ __('Forgot Your Password?') }}</a>
                  </div>

                  <div class="text-block text-center my-3">
                     @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                  </div>
                </form>
              </div>

              <p class="footer-text text-center">copyright © {{date('Y')}}.</p>
            </div>
          </div>
        </div>
@endsection
