<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Facades\Auth;

class CustomLoginController extends Controller
{
    public function postLogin(Request $request)
    {

        $client = new Client();
        $cookieJar = new CookieJar();

        $response = $client->request('POST', 'https://app.oderje.com/api/customer', [
            'auth' => [
                'username',
                'password'
            ],
            'form_params' => [
                'function' => 'login',
                'username' => $request->username,
                'pass' => $request->password
            ],
            'cookies' => $cookieJar,
        ]);

        if ($response->getStatusCode() == 200)
        {
            $result = json_decode($response->getBody()->getContents());

            if($result->status == 'ok' )
            {

                return redirect()->route('shop.index');
                dd($request->all());

            }else
            {
                echo "gg";
            }


        }
        else
        {
            return "Oops!";
        }

        // $xml = $response->getBody()->getContents();
        // echo $xml;

        // \Log::info($request);

        // return;

    }
}
