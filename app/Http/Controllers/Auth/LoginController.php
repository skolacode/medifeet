<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use Config;

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
    // protected $redirectTo = $this->redirect();

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }

    /* Redirect user according to their role 
        > If no role assign it will redirect to Home page
    */
    public function redirect()
    {
        
        $getRoleId = User::getRoleId();

        if ($getRoleId == Config::get('constants.roles.MANAGER')) {

            return redirect()->route('mindex');
        } else if ($getRoleId == Config::get('constants.roles.STAFF')) {

            return redirect()->route('sindex');
        } else {

            return redirect()->route('home');
        }   
    }


    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        return $this->redirect();
    }
}
