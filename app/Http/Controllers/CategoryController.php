<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.home' , ['categories' => $categories]);
    }

    public function create()
    {
       return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index')->with('message', 'Category created successfully!');
    }

    public function edit($id)
    {
       $category = Category::findOrFail($id);

       return view('categories.create', ['category' => $category]);
    }

    public function update(CategoryRequest $request, $id)
    {
       $category = Category::findOrFail($id);
       $category->name = $request->name;
       $category->save();
       
       return redirect()->route('categories.index')->with('message', 'Category updated successfully!');
    }   

    public function destroy($id)
    {
        $category = Category::with('products')->findOrFail($id);

        if (count($category->products) > 0) {
            return redirect()->route('categories.index')->with('error' , 'This item is already in use.');
        }

        $category->delete();

        return redirect()->route('categories.index')->with('message' , 'Category has been deleted');
    }
}
