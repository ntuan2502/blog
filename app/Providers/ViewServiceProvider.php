<?php

namespace App\Providers;

use App\Category;
use App\Music;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        View::composer('*', function ($view) {
            $vsp_user = Auth::user();
            $vsp_categories = Category::all();
            if ($vsp_user) {
                $music = Music::where('user_id', $vsp_user->id)->first();
                $vsp_user->join = Carbon::parse($vsp_user->created_at)->format('d-m-Y');
                $view->with([
                    'music' => $music,
                    'vsp_user' => $vsp_user,
                    'vsp_categories' => $vsp_categories,
                ]);
            } else {
                $view->with([
                    'vsp_user' => $vsp_user,
                    'vsp_categories' => $vsp_categories,
                ]);
            }
        });
    }
}
