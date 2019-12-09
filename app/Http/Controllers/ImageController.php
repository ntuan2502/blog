<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Local;
use App\Image;
use File;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        $url = Local::uploadRandom($request->image);
        $image = new Image();
        $image->url = $url;
        $image->save();
        return response()->json([
            'url' => $url
        ]);
    }

    public function deleteImage(Request $request)
    {
        $protocol = 'https://';
        $HOST = $protocol . $_SERVER['HTTP_HOST'];
        $new_url = str_replace($HOST, '', $request->url);
        Image::where('url', $new_url)->first()->delete();
        File::delete(base_path() . $new_url);
        return response()->json([
            'url' => $request->url,
        ]);
    }
}
