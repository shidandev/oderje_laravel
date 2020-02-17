<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }

    public function login()
    {
        $username = strtolower(Input::get('username'));
        $password = Input::get('password');

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return Redirect::to('/shop')->with('success', 'Hi '. $username .'! You have been successfully logged in.');
        } else {
            return Redirect::to('/')->with('error', 'Username/Password Wrong')->withInput(Request::except('password'))->with('username', $username);
        }
    }

}
