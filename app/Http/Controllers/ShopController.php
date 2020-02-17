<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://dev1.oderje.com/api/package_product&function=get_list',
        CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
        // CURLOPT_USERPWD => 'ADMIN : SECRETE123',   <-----  for Basic Auth
        // CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $result = json_decode($response);

    $products = $result->list_product;
    // $productsArr = (array) $productsObj;
    // $promo = $products['promotion_list'];
    // var_dump($products);
    // echo '<pre>';
    // print_r($products);
    // echo '</pre>';

    return view('pages.shop', compact('products'));

    // return view('pages.shop', [
    //     'products' => $products,
    //     // 'products'=>$result
    // ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
