@extends('layouts.app')

@section('content')
<main class="py-4 hero">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             
                <div class="col-md-8 mt-2 text-center">

                    <a href="{{ route('landing-page') }}"><img src="http://www.oderje.com/img/oderje-logo-2.png" class="img-fluid w-50 mt-5"></a>
                </div>
               
            <div class="col-md-5  text-left">
    <br>
                    <p class="text-right">
                        <a class="text-light" href="{{ route('register') }}">Not registered? Sign up here</a>
                    </p>
    
                </div>
  

                <div class="card-body mt-2">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">

                            <label for="email" class="text-right">{{ __('E-Mail Address / Phone Number') }}</label>

                           

                                <input id="username" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter here">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                              

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
