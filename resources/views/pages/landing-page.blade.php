@extends('layouts.app')

@include('partials.nav')

@section('content')
{{-- <main class="py-4">
        @yield('content')
    </main> --}}
<main class="py-5">
    <div id="app" class="container-fluid">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-2">
                    <a href="{{ route('landing-page') }}"><img src="http://www.oderje.com/img/oderje-logo.png"
                            class="img-fluid w-50 mt-5"></a>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="input-group">
                        <input id="search_str" type="text" class="form-control" placeholder="search"
                            style="border-color:#FC9732">
                        <div class="input-group-append">
                            <button id="search-oderje" class="btn text-white" style="background:#FC9732" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group row">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection

@include('partials.navbtm')

@section('extra-js')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection
