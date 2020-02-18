<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Facades\Auth;

class CustomLoginController extends Controller
{
    public function postLogin(Request $request)
    {

        $username = strtolower(Input::get('username'));
        $password = Input::get('password');

        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            return Redirect::to('/dashboard')->with('success', 'Hi '. $username .'! You have been successfully logged in.');
        }
        else
        {
            return Redirect::to('/')->with('error', 'Username/Password Wrong')->withInput(Request::except('password'))->with('username', $username);
        }
        // $client = new Client();
        // $cookieJar = new CookieJar();

        // $response = $client->request('POST', 'https://app.oderje.com/api/customer', [
        //     'auth' => [
        //         'username',
        //         'password'
        //     ],
        //     'form_params' => [
        //         'function' => 'login',
        //         'username' => $request->username,
        //         'pass' => $request->password
        //     ],
        //     'cookies' => $cookieJar,
        // ]);

        // if ($response->getStatusCode() == 200)
        // {
        //     $result = json_decode($response->getBody(), true);

        //     if($result['status'] == 'ok' )
        //     {
        //         $user = User::where('username', $result['username']);
        //         Auth::login($user);

        //         return redirect()->route('shop.index');


        //     }else
        //     {
        //         return response('Unauthorized',401);
        //     }


        // }
        // else
        // {
        //     return "Oops!";
        // }

        // $xml = $response->getBody()->getContents();
        // echo $xml;

        // \Log::info($request);

        // return;

    }
}
