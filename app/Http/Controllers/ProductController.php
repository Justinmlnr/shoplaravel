<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        
        return view('products.show', compact(['product', 'id']));
        
    }
    public function index()
    {
        $products = Product::all();
        // $products = [
        //     [
        //         'id' => 1,
        //         'nom' => 'Vanilla',
        //         'prix' => 180
        //     ],
        //     [
        //         'id' => 2,
        //         'nom' => 'Tobacco',
        //         'prix' => 230
        //     ],
        //     [
        //         'id' => 3,
        //         'nom' => 'Neroli',
        //         'prix' => 270
        //     ],
        //     [
        //         'id' => 4,
        //         'nom' => 'Soleil Blanc',
        //         'prix' => 210
        //     ],
        //     [
        //         'id' => 5,
        //         'nom' => 'Satin oud',
        //         'prix' => 200
        //     ]
        // ];

        // return view('/products.index', [
        //     'products' => $products
        return view('products.index', compact('products')); // alternatif pour tableau

    }
}