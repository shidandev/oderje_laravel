@extends('layouts.app')

@section('content')
<main class="py-4 hero">

    <div class="container ">

        <div class="row justify-content-center">

            <div class="col-md-9 mt-2 text-center">

                <a href="{{ route('landing-page') }}"><img src="{{asset('img/oderje-logo-2.png')}}"
                        class="img-fluid w-50 mt-5"></a>
                <br>
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

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">

                                <label for="email" class="text-right">{{ __('E-Mail Address / Phone Number') }}</label>

                                <input id="username" name="username" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" placeholder="Enter here">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="password" class="text-right">{{ __('Password') }}</label>


                                <input id="password" name="password" type="password"
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

                            <div class="form-group row">

                                <div class="col-md-6 offset-md-4 text-right">

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                    @endif

                                </div>

                            </div>

                            <div class="form-group text-center">

                                <button type="submit" class="btn btn-primary login_btn auth-button">
                                    {{ __('Log In') }}
                                </button>

                            </div>

                        </form>
                        {{-- <script>
                            $(document).ready(function () {
                                $(".login_btn").on("click", function () {

                                    var username = $("#username").val().trim();
                                    var password = $("#password").val().trim();

                                    $.post("https://app.oderje.com/api/customer", {
                                            function: "login",
                                            username: username,
                                            pass: password
                                        },
                                        function (data) {
                                            console.log(data);
                                        }, "json");

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
