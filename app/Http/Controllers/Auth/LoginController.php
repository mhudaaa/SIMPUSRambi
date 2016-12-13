<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request){
        $credential = [
            'username' => $request->username,
            'password' => $request->password
        ];

         if (Auth::attempt($credential)) {
            // dd(Auth::check());
            if (Auth::user()->Jabatan == "poliumum") {
                return redirect('/poli');
            }elseif (Auth::user()->Jabatan == "loket") {
                return redirect('/loket');
            }
        } else{
            return back()
                ->withInput($request->only('username'))
                ->withErrors([
                    'username' => 'username atau password salah',
                ]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
