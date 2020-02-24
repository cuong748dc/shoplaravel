<?php

namespace App\Http\Controllers;

use App\BillDetails;
use App\Bills;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BillsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only('edit', 'update');
    }

    public function index()
    {
        $bills = Bills::where('users_id', '=', Auth::user()->id)->orderBy('id','desc')->paginate(8);

        return view('client.bill', compact('bills'));
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
        $bills = Bills::all();
        $products = Products::all();
        $billDetails = BillDetails::where('bills_id', '=', $id)->paginate(8);
        return view('client.billDetail', compact('billDetails', 'products', 'bills'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
