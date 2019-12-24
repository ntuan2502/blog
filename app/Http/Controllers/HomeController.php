<?php

namespace App\Http\Controllers;

use App\Category;
use App\Music;
use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private function getZingMP3($music)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://zing-mp3.glitch.me/?url=" . $music,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return false;
        } else {
            return json_decode($response);
        }
    }

    public function index()
    {
        $user = Auth::user();
        // if($user){
        //     $music = Music::where('user_id', $user->id)->first();
        //     return view('index')->with([
        //         'music' => $music,
        //     ]);
        // }
        return view('index');
    }

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


    public function logoutP(Request $request)
    {
        Auth::logout();
        return response()->json([
            'redirect' => $request->url,
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
    {
    }

    public function getCategory($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();;
        if ($category) {
            $posts = Post::where('category_id', $category->id)->get();
            foreach($posts as $post){
                $post->day_created = Carbon::parse($post->created_at)->format('d');
                $post->Month_created = Carbon::parse($post->created_at)->format('M');
            }
            return view('category')->with([
                'posts' => $posts,
                'category' => $category
            ]);
        }
    }

}
