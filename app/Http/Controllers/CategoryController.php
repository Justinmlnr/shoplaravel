<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show (Category $category)
    {
        $products = $category->products()->latest()->paginate(8);// manière optimisé 
        return view('categories.show', compact('category', 'products'));
    }


public function index()
{
    $categories = Category::orderBy('name')->get();
    return view('categories.index', compact('categories'));
}

}
