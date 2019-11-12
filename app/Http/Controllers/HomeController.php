<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function login()
    {
        return view('auth.login');
    }

    public function loginP(Request $request)
    {
        $userdata = array(
            'email'     => $request->email,
            'password'  => $request->password
        );

        if (Auth::attempt($userdata) === false) {
            return response()->json([
                'status' => 0,
            ]);
        } else {
            return response()->json([
                'status' => 1,
                'redirect' => '/admin'
            ]);
        }
    }

    public function logoutP(){
        Auth::logout();
        return response()->json([
            'redirect' => '/login',
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerP(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return response()->json([
                'email' => 'false'
            ]);
        } else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return response()->json([
                'email' => $user->email,
                'redirect' => '/login',
            ]);
        }
    }

    public function forgotPassword()
    {
        return view('auth.forgotPassword');
    }
    public function forgotPasswordP()
    { }
}
