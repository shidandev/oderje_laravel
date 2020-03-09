@extends('layouts.app')

@section('content')
{{-- <main class="py-4">
        @yield('content')
    </main> --}}
<main class="py-5 mt-5">
    <div id="app" class="container-fluid">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-2">
                    <a href="{{ route('landing-page') }}"><img src="{{ asset('img/oderje-logo.png') }}"
                            class="img-fluid w-50 mt-5"></a>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <form action="/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control search-input" name="query"
                                placeholder="Search products">
                            <div class="input-group-append">
                                <button type="submit" class="btn text-white search-button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection

@section('extra-js')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection
