@extends('layouts.exterior')

@section('content')

<div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">

                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


              <div class="auto-form-wrapper">
                <div class="form-group">
                {{ __('Reset Password') }}
                </div>

                 <form method="POST" action="{{ route('password.email') }}">
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
                    <button class="btn btn-success submit-btn btn-block"> 
                    {{ __('Send Password Reset Link') }}
                </button>
                  </div>
                  
</form>
              </div>

              <p class="footer-text text-center">copyright © {{date('Y')}}.</p>
           </div>
          </div>
        </div>  




@endsection
