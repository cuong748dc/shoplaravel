<?php

namespace App\Http\Controllers;

use App\BillDetails;
use App\Bills;
use App\Cart;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (!Session::has('cart')) {
                return view('client.cart');
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return view('client.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
        } else
            return redirect()->route('login');
    }

    public function addToCart(Request $request, $id)
    {
        $products = Products::find($id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addItems($products, $id, $request);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function updateItems(Request $request, $id)
    {

    }

    public function deleteItems(Request $request, $id)
    {
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeAll($id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function checkout(Request $request)
    {
        $bill = new Bills();
        $bill->users_id = $request->user_id;
        $bill->date_order = date('Y-m-d H:i:s');
        $bill->total = Session::get('cart')->totalPrice;
        $bill->save();


        if (count(Session::get('cart')->items) > 0) {

            foreach (Session::get('cart')->items as $item) {

                $billDetail = new BillDetails();
                $billDetail->bills_id = $bill->id;
                $billDetail->products_id = $item['items']['id'];
                $billDetail->quantity = $item['qty'];
                $billDetail->price = ($item['items']['promotion_price'] > 0) ? $item['items']['promotion_price'] : $item['items']['price'];
                $billDetail->save();
            }
        }
        Session::forget('cart');
        return redirect()->route('bills.index');

    }
}
