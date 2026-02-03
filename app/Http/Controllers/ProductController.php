<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function show ($id) {
    //     return "Détails du produit n.$id";
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'nom' => 'Vanilla',
                'prix' => 180
            ],
            [
                'id' => 2,
                'nom' => 'Tobacco',
                'prix' => 230
            ],
            [
                'id' => 3,
                'nom' => 'Neroli',
                'prix' => 270
            ],
            [
                'id' => 4,
                'nom' => 'Soleil Blanc',
                'prix' => 210
            ],
            [
                'id' => 5,
                'nom' => 'Satin oud',
                'prix' => 200
            ]
        ];
        
        // return view('/products.index', [
        //     'products' => $products
        return view('products.index', compact('products')); // alternatif pour tableau
    
    }
}