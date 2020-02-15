@extends('layouts.app')

@include('partials.nav')

@section('content')

<div class="container-fluid">
    <div class="container">
        <ul class="list-group list-group-vertical mt-5 ">
            @foreach ($products as $product)
            <li class="list-group-item mt-1 shadow-sm">
                <img class="img-thumbnail float-left" src="https://dev1.oderje.com/images/product/{{$product->p_image}}"
                    alt="">
                <p>Name : {{$product->p_name}}</p>
                <p>Price : RM{{$product->p_price}}</p>

                @foreach ((array)$product->promotion_list as $promo)
                {{$promo->PROMO_ID}}
                @endforeach
            </li>

            @endforeach
        </ul>
    </div>
</div>
@endsection

@include('partials.navbtm')
