@extends('layouts.app')

@section('content')
<main class="py-4 hero">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-2 text-center">

            <a href="{{ route('landing-page') }}"><img src="http://www.oderje.com/img/oderje-logo-2.png" class="img-fluid w-50 mt-5"></a>
        </div>
       
    <div class="col-md-5  text-left">
<br>
            <p class="text-right">
                <a class="text-light" href="{{ route('register') }}">Not registered? Sign up here</a>
            </p>

        </div>
<div class="col-md-9 text-center">
</div>
        <div class="col-md-5">
            <div class="card">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="number" class="text-right">{{ __('Your registered e-mail address') }}</label>

                                <input id="number" type="text" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="phone number" autofocus>

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <p class="text-center">
                                    <a href="">Use mobile phone instead</a>
                                </p>
                            </div> --}}
                        </div>
                    

                        <div class="form-group text-center">
                            
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
