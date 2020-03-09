@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5">
    <div class="container">
        <div class="row text-sm-left">
            @foreach ($products as $product)
            <div class="col-lg-3 col-sm-4 col-6 mb-4">
                <a href="#" class="d-block">
                    <img class="img-fluid img-thumbnail"
                        src="https://app.oderje.com/images/product/{{$product->p_image}}" alt="">
                </a>
                <span><b>{{$product->p_name}}</b></span><br>
                <span><small>{{$product->store_name}}</small></span><br>
                <span><small>{{$product->location}}</small></span><br>
                <?php $ratingClass = "far fa-star"; ?>
                @for ($i = 1; $i <= 5; $i++) @if($i <=$product->rating)
                    <?php $ratingClass = "fas fa-star"; ?>
                    @endif
                    <i class="{{ $ratingClass }} fa-xs"></i>
                    @endfor
                    <hr class="hr pb-0">
                    <span
                        class="float-right price-text"><b>{{'RM'.number_format($product->p_price / 100, 2)}}</b></span>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection
