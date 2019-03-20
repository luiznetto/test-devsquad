<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at' , 'desc')->get();

        return view('products.home' , ['categories' => $categories]);
    }

    public function create()
    {
       return view('categories.create');
    }

    public function store(CategoriesRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index')->with('message', 'Category created successfully!');
    }

    public function edit($id)
    {
       $category = Category::findOrFail($id);

       return view('categories.edit', ['category' => $category]);
    }

    public function update(CategoriesRequest $request, $id)
    {
       $category = Categorys::findOrFail($id);
       $category->name = $request->name;
       $category->save();
       
       return redirect()->route('categories.index')->with('message', 'Category updated successfully!');
    }   

    public function desdroy($id)
    {
        $category = categorys::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('message' , 'Category has been deleted');
    }
}
