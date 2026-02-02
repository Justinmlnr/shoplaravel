<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(): string
    {
        // return "Bienvenue sur le Shoplaravel";
        // return redirect()->route('products.about');
        return redirect()->route('products.show', ['id' => 42]);
    }

    public function about(): string
    {
        return "Ceci est une boutique dédiée à Laravel";
    }
}
