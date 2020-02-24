<?php

namespace App;

use Illuminate\Http\Request;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function addItems($items, $id, Request $request)
    {
        $cart = ['qty' => $items->qty, 'price' => $items->price, 'items' => $items];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $cart = $this->items[$id];
            }
        }
        $cart['qty'] += $request->qty;
        if ($items->promotion_price == 0) {
            $cart['price'] = $items->price * $cart['qty'];
            $this->totalPrice += $items->price * $request->qty;
        } else {
            $cart['price'] = $items->promotion_price * $cart['qty'];
            $this->totalPrice += $items->promotion_price * $request->qty;
        }
        $this->items[$id] = $cart;
        $this->totalQty += $request->qty;

    }

    public function updateItem($items, $id, Request $request)
    {
        //
    }

    public function removeAll($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
