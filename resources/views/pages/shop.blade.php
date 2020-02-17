@extends('layouts.app')

@include('partials.nav')

@section('content')

<div class="container-fluid mt-5">
    <div class="container">
        <div class="row text-center text-lg-left">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-120">
                    <img class="img-fluid img-thumbnail"
                        src="https://dev1.oderje.com/images/product/{{$product->p_image}}" alt="">
                </a>
                <p>Name : {{$product->p_name}}</p>
                <p>Price : {{'RM'.number_format($product->p_price / 100, 2)}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@include('partials.navbtm')

@section('extra-js')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection
