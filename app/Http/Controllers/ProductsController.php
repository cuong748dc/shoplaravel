<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests\ProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Categories::all();
        $products = Products::paginate(5);
        return view('admin.products.products', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Categories::all();
        $products = Products::all();
        return view('admin.products.add', compact('categories', 'products'));
    }

    public function store(ProductsRequest $request)
    {
        $products = new Products();
        $products->name = $request->name;
        $products->categories_id = $request->categories_id;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->promotion_price = $request->promotion_price;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $getImage = Str::random(5) . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $getImage);
            $products->image = $getImage;
        } else {
            $products->image = '';
        }
        $products->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $products = Products::findOrFail($id);
        $categories = Categories::all();
        return view('admin.products.edit', compact('products', 'categories'));
    }

    public function update(UpdateProductsRequest $request, $id)
    {
        $products = Products::findOrFail($id);
        $products->name = $request->name;
        $products->categories_id = $request->categories_id;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->quantity = $request->quantity;
        $products->promotion_price = $request->promotion_price;
        $products->status = $request->status;
        $products->bestseller = $request->bestseller;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $getImage = Str::random(5) . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $getImage);
            unlink('images/' . $products->image);
            $products->image = $getImage;
        } else {
            $request->image = $products->image;
        }

        $products->save();
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $products = Products::findOrFail($id);
        $products->delete();
        unlink('images/' . $products->image);
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
