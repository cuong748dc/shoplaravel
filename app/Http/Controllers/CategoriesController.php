<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests\CategoriesRequest;
use App\Products;


class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Categories::paginate(5);
        return view('admin.categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.add');
    }

    public function store(CategoriesRequest $request)
    {

        $categories = new Categories();
        $categories->name = $request->name;
        $categories->save();
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categories = Categories::findOrFail($id);
        return view('admin.categories.edit', compact('categories'));
    }

    public function update(CategoriesRequest $request, $id)
    {
        $categories = Categories::find($id);
        $categories->name = $request->name;
        $categories->save();
        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $categories = Categories::findOrFail($id);
        $categories->delete();
        $products = Products::where('categories_id', '=', $id);
        $products->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully')
            ;
    }
}
