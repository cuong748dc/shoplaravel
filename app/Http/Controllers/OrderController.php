<?php

namespace App\Http\Controllers;

use App\BillDetails;
use App\Bills;
use App\Products;
use App\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $bills = Bills::paginate(5);
        return view('admin.order.orders', compact('bills', 'users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
//        $bills = Bills::find($id);
        $products = Products::all();
        $billDetail = BillDetails::where('bills_id', '=', $id)->paginate(5);
        return view('admin.order.orderDetail', compact('billDetail', 'products'));

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $bills = Bills::findOrFail($id);
        $bills->status = 1;
        $bills->save();
        return redirect()->route('order.index')->with('success', 'Order updated successfully');
    }

    public function destroy($id)
    {
        //
    }
}
