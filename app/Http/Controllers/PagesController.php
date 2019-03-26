<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;



class PagesController extends Controller
{
    public function index()
    {
        $products=Product::all();
        
        return view('index' , ['products' => $products]);
    }

    public function lists()
    {
        $lists=Product::all();
        return view('lists' , ['lists' => $lists]);
    }
}