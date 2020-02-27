<?php

namespace App\Providers;

use App\Bills;
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
        $finished = Bills::where('status', '=', 1)->get();
        $unfinished = Bills::where('status', '=', 0)->get();
        $newProducts = Products::where('status', '=', 1)->paginate(4, ['*'], 'newProducts');
        $bestseller = Products::where('sold', '>', 3)->paginate(4, ['*'], 'bestseller');

        View::share('users', $users);
        View::share('products', $products);
        View::share('slides', $slides);
        View::share('finished', $finished);
        View::share('unfinished', $unfinished);
        View::share('newProducts', $newProducts);
        View::share('bestseller', $bestseller);

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
