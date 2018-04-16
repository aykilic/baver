<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
	protected $redirectTo = '/';
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'logout']);
	}
   /* public function post_login()
    {
        $credentials = array(
            'username' => strtolower(Input::get('email')),
            'password' => Input::get('password'),
        );
        if(Auth::attempth($credentials))
        {
            $remember = Input::get('remember');
            if(!empty($remember))
            {
                Auth::login(Auth::user()->id,true);
            }
            return redirect::to('/');
        }
        else
        {
            return redirect::to('login')->with('error',true);
        }
    }*/
}
