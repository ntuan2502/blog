<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    // }

    public function login()
    {
        if (Auth::user()) {
            return redirect('/admin');
        }
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

    public function page_loginP(Request $request)
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
                'redirect' => $request->url
            ]);
        }
    }


    public function logoutP()
    {
        Auth::logout();
        return response()->json([
            'redirect' => '/login',
        ]);
    }

    public function page_logoutP(Request $request)
    {
        Auth::logout();
        return response()->json([
            'redirect' => $request->url,
        ]);
    }

    public function register()
    {
        if (Auth::user()) {
            return redirect('/admin');
        }
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
        if (Auth::user()) {
            return redirect('/admin');
        }
        return view('auth.forgotPassword');
    }
    public function forgotPasswordP()
    { }
}
