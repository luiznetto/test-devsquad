<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;



class PagesController extends Controller
{
    public function index()
    {
        $shirts=Product::all();
        
        return view('index' , ['shirts' => $shirts]);
    }

    public function lists()
    {
        $lists=Product::all();
        return view('lists' , ['lists' => $lists]);
    }

    public function shirt(Product $product)
    {

        return view('shirt',compact('product'));
    }
}