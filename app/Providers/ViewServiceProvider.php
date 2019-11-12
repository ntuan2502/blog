<?php

namespace App\Providers;

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

            $view->with([
                'vsp_user' => $vsp_user,
            ]);
        });
    }
}
