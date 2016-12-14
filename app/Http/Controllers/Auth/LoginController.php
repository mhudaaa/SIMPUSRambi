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
    protected $redirectTo = '/logout';

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
            if (Auth::user()->Jabatan == "poliumum" || Auth::user()->Jabatan == "poligigi" || Auth::user()->Jabatan == "polikia") {
                return redirect('/poli');
            }elseif (Auth::user()->Jabatan == "dokterumum" || Auth::user()->Jabatan == "doktergigi" || Auth::user()->Jabatan == "dokterkia") {
                return redirect('/dokter');
            }elseif (Auth::user()->Jabatan == "loket") {
                return redirect('/loket');
            }elseif (Auth::user()->Jabatan == "apoteker") {
                return redirect('/apoteker');
            }elseif (Auth::user()->Jabatan == "petugaslab") {
                return redirect('/lab');
            }elseif (Auth::user()->Jabatan == "rawatinap") {
                return redirect('/rawatinap');
            }
        } else{
            return back()
                ->withInput($request->only('username'))
                ->withErrors([
                    'username' => 'Username atau Password salah',
                ]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
