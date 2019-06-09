<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm() {
        // $attemp = Auth::attempt(['email' => 'youyou@gmail.com', 'password' => '123456789']);
        // if($attemp){
        //     $user = User::where('email','=','youyou@gmail.com')->first();
        //     Auth::login($user,false);
        //     return redirect('/');
        // }
        return view('auth.login');
    }

    public function postLoginPage(Request $request){
        // if (!Auth::check()) {
        //     $email = $request->input('username');
        //     $password = $request->input('password');
        //     if (Auth::attempt(['email' => $email, 'password' => $password])) {
        //         return redirect()->route('listProject');
        //     }
        // }
    }
}
