<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(Product $product)
    {

        return view('products.show', ['product' => $product]);

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category= Category::all();
        return view('products.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['string'],
            'price' => ['required', 'numeric', 'min:0'],
            'description' => ['nullable', 'string'],
            'stock' => ['required', 'integer', 'min:0'],
            'active' => ['nullable', 'boolean'],
            'category_id' => ['required', 'integer'],
        ]);

        Product::create($validated);

        return redirect()
            ->route('products.index')
            ->with('success', 'Produit créé avec succès ');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'description' => ['nullable', 'string'],
            'stock' => ['required', 'integer', 'min:0'],
            'active' => ['nullable', 'boolean'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
        ]);

        $validated['active'] = $request->boolean('active', 1);

        $product->update($validated);

        return redirect()
            ->route('products.index')
            ->with('success', 'Produit modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        
        return redirect()
            ->route('products.index')
            ->with('success', 'Produit supprimé avec succès');
    }
}