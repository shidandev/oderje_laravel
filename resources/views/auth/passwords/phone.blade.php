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

                        <div class="form-group col md-3">

                            <label for="number" class="text-right">{{ __('Phone number') }}</label>
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">

                                <span class="input-group-text">+6</span>
                            </div>
                                <input id="numeric" type="text" class="form-control" required autocomplete="number" placeholder="Enter here">

                            </div>
                            <div class="form-group">
                                <p class="text-center">
                                    <a href="{{ route('email') }}">Use e-mail instead</a>
                                </p>
                            </div>
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
