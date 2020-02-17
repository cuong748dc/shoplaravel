<?php

namespace App\Providers;

use App\Products;
use App\Slide;
use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $users = User::all();
        $products = Products::all();
        $slides = Slide::all();
        View::share('users', $users);
        View::share('products', $products);
        View::share('slides', $slides);

    }
}
