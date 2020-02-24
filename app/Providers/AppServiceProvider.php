<?php

namespace App\Providers;

use App\Cart;
use App\Products;
use App\Slide;
use App\User;
use Illuminate\Support\Facades\Session;
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

        if (Session('cart')) {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            View::share(['cart' => Session::get('cart'),
                'items' => $cart->items,
                'totalPrice' => $cart->totalPrice,
                'totalQty' => $cart->totalQty]);
        }
    }
}
