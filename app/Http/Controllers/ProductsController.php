<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Products::orderBy('created_at' , 'desc')->paginate(10);

        return view ('home.blade' , ['products' => $products]);
    }

    public function create()
    {
       return view('products.create');
    }

    public function store(ProductsRequest $request)
    {
        $product = new Product;

        $product->name         = $request->name;
        $product->description  = $request->description;
        $product->image        = $request->image;
        $product->price        = $request->price;
        $product->save();

        return redirect()->route('home.blade')->with('message', 'Product created successfully!');
    }

    public function edit($id)
    {
       $product = Product::findOrFail($id);

       return view('products.edit' , compact('product'));        
    }

    public function update(ProductsRequest $request, $id)
    {
       $product = Product::findOrFail($id);

       $product->name         = $request->name;
       $product->description  = $request->description;
       $product->image        = $request->image;
       $product->price        = $request->price;
       $product->save();
       
       return redirect()->route('home.blade')->with('message', 'Product update successfully!');
    
    }   

    public function desdroy($id)
    {
        $produc = Product::findOrFail($id);
        $produ->delete();

        return redirect()->route('home.blade')->with('alert-success' , 'Product haxbeen deleted');
    }

   
}
