@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container">
        <ul class="list-group list-group-flush">

            @foreach ($products as $product)
            <li class="list-group-item">
                <p>{{ $product->p_name }}</p>
                <p>{{ $product->p_price }}</p>

                @foreach ($products->promotion_list as $promo)
                <p> {{$promo->PROMOTION_NAME}} </p>
                @endforeach
            </li>

            @endforeach

            {{-- @foreach ($products as $product)
            @foreach ($product as $promo)
            <li class="list-group-item">
                <p>Product Name: {{$product->p_name}}</p>
            <p>Store Name: {{$product->store_name}}</p>
            <p>Promo Name: {{$product->PROMOTION_NAME}}</p>
            </li>
            @endforeach
            @endforeach --}}
            {{-- @foreach ($result->list_product as $product)
            {{ gettype($product) }}
            {{ gettype($product->p_name) }}
            @endforeach --}}
            {{gettype($result)}}
            {{gettype($products)}}
            {{gettype($products[0])}}
            {{gettype($products[0]->promotion_list[0]->PROMOTION_NAME)}}
            {{dd($result->list_product[0]->promotion_list[0]->PROMOTION_NAME)}}
        </ul>
    </div>
</div>
@endsection
