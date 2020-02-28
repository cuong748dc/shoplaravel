<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests\UsersRequest;
use App\Products;
use App\Slide;
use App\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $products = Products::orderBy('id','desc')->paginate(8);
        return view('client.products', compact('categories', 'products'));
    }

    public function filter($id)
    {
        $categories = Categories::all();
        $products = Products::where('categories_id', '=', $id)->paginate(8);
        $slides = Slide::all();
        return view('client.products', compact('categories', 'products', 'slides'));
    }

    public function newProducts()
    {
        $categories = Categories::all();
        $products = Products::where('status', '=', 1)->orderBy('id', 'desc')->paginate(8);
        return view('client.new', compact('categories', 'products'));
    }

    public function bestseller()
    {
        $categories = Categories::all();
        $products = Products::where('sold', '>', 3)->orderBy('id', 'desc')->paginate(8);
        return view('client.bestseller', compact('categories', 'products'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $categories = Categories::all();
        $products = Products::where('name', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            ->orWhere('promotion_price', 'like', '%' . $search . '%')
            ->paginate(8);
        $products->appends(['search' => $search]);
        return view('client.results', compact('categories', 'products', 'search'));
    }

    public function detailProduct($id)
    {
        $categories = Categories::all();
        $products = Products::findOrFail($id);
        return view('client.detailProducts', compact('categories', 'products'));
    }

    public function slide()
    {
        $slides = Slide::all();
        return view('layouts.slide', compact('slides'));
    }

    public function editUsers($id)
    {
        $users = User::find($id);
        return view('client.users',compact('users'));
    }

    public function updateUsers(UsersRequest $request,$id)
    {
        $users = User::findOrFail($id);
        $users->name = $request->name;
        $users->address = $request->address;
        $users->phone = $request->phone;
        $users->save();

        return redirect()->route('shop')->with('success', 'User updated successfully');
    }

}
