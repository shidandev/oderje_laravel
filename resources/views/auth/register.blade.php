@extends('layouts.app')

@section('content')

<main class="py-4 hero">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-9 mt-2 text-center">
                <img src="http://www.oderje.com/img/oderje-logo-2.png" class="img-fluid w-50 mt-5">
    </div>
                <div class="col-md-9  text-left">
                    <br>
                <p class="text-right">
                    <a class="text-light" href="login">Already a member? Log In here</a>
</p>            
                </div>
                <div class="col-md-9 text-center">
                </div>
        <div class="col-md-9 center">
            <div class="card">
              

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
<div class="form-row">

                        <div class="form-group col md-3">
                            <label for="email" class="text-right">{{ __('E-Mail address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter here">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group col md-3">

                            <label for="number" class="text-right">{{ __('Phone number') }}</label>

                            <div class="input-group-prepend">

                                <div class="input-group-text">+6</div>
                             
                                <input id="email" type="text" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" placeholder="Enter here">

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                           
                        </div>
</div>
<div class="form-row">
                        <div class="form-group col md-3">

                            <label for="password" class="text-right">{{ __('Password') }}</label>
                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter here">
                              
                                <input type="checkbox" onclick="myFunction()"> Show Password
                                <script>
                                    function myFunction() {
                                      var x = document.getElementById("password");
                                      if (x.type === "password") {
                                        x.type = "text";
                                      } else {
                                        x.type = "password";
                                      }
                                    }
                                    </script>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                        <div class="form-group col md-3">

                            <label for="password-confirm" class="text-right">{{ __('Confirm Password') }}</label>
                           
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter here" width="5">
                               
                                <input type="checkbox" onclick="myFunction()"> Show Password
                                <script>
                                    function myFunction() {
                                      var x = document.getElementById("password-confirm");
                                      if (x.type === "password") {
                                        x.type = "text";
                                      } else {
                                        x.type = "password";
                                      }
                                    }
                                    </script>
                        </div>
</div>

                        <div class="form-group text-center">
                           
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign Up') }}
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
