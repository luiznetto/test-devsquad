<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::with('category')->orderBy('created_at' , 'desc')->get();
       
        return view('products.home' , ['products' => $products]);
    }

    public function create()
    {
       return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('products.index')->with('message', 'Product created successfully!');
    }

    public function edit($id)
    {
       $product = Product::findOrFail($id);

       return view('products.edit', ['product' => $product]);
    }

    public function update(ProductRequest $request, $id)
    {
       $product = Product::findOrFail($id);
       $product->name = $request->name;
       $product->description = $request->description;
       $product->image = $request->image;
       $product->price = $request->price;
       $product->category_id = $request->category_id;
       $product->save();
       
       return redirect()->route('products.index')->with('message', 'Product updated successfully!');
    }   

    public function desdroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('message' , 'Product has been deleted');
    }
}
