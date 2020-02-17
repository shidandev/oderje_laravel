@extends('layouts.app')

@section('content')

   
<main class="py-4 hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-2 text-center">
                <a href="{{ route('landing-page') }}"><img src="http://www.oderje.com/img/oderje-logo-2.png"
                        class="img-fluid w-50 mt-5"></a>
                <br>
                <br>
                <p class="text-right"><a class="text-light" href="{{ route('login') }}">Already a member? Log In
                        here</a></p>
            </div>
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-row">

                                <div class="form-group col md-3">
                                    <label for="email" class="text-right">{{ __('E-mail address') }}</label>

                                    <input id="email" type="email" class="form-control"  required autocomplete="email"
                                        placeholder="Enter here">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="form-group col md-3">

                                    <label for="number" class="text-right">{{ __('Phone number') }}</label>
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">

                                        <span class="input-group-text">+6</span>
                                    </div>
                                        <input id="phone" type="text"
                                            class="form-control" required autocomplete="phone"
                                            placeholder="Enter here">

                                    </div>
                                   
                                 

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col md-3">

                                    <label for="password" class="text-right">{{ __('Password') }}</label>

                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="Enter here">

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

                                    <label for="password-confirm"
                                        class="text-right">{{ __('Confirm Password') }}</label>

                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Enter here" width="5">

                                    <input type="checkbox" onclick="myFunctioning()"> Show Password
                                    <script>
                                        function myFunctioning() {
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
                                <br>
 <button type="submit" class="btn btn-primary">
                                    {{ __('Sign Up') }}
                                </button>
                              

                            </div>

                        </form>
                        {{-- <script>

                            $(document).ready(function(){
                                $(".login_btn").on("click",function(){

                                var username = $("#username").val().trim();
                                var password = $("#password").val().trim();

                                $.post("https://app.oderje.com/api/customer",
                                {
                                    function:"login",
                                    username:username,
                                    pass:password
                                },
                                function(data){
                                 console.log(data);
                                },"json");

                            });

                            });
                        </script> --}}

                    </div>

                </div>


            </div>

        </div>

    </div>

</main>




@endsection
