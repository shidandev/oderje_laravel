@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="list-group list-group-flush">
        @foreach ($products as $product)
            <li class="list-group-item">
                <p>{{ $product->p_name }}</p>
                <p>{{ $product->p_price }}</p>
                {{-- {{ $products['list_product']['promotion_list']['PROMO_ID'] }} --}}

                @foreach ($product->promotion_list as $promo)

                   <p>{{ $promo->PROMOTION_NAME }}</p>

                @endforeach
                {{-- {{ $product['promotion_list']['PROMO_ID'] }} --}}

                {{-- {{ dd($product->promotion_list[0]) }} --}}

            </li>

        @endforeach


    </ul>

</div>
@endsection
