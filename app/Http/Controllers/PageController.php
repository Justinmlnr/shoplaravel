<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $boutique = [
            "nom"=> "Hacivat",
            "stock"=> "30",
            "etat"=> "ouvert"
        ];

        // return "Bienvenue sur le Shoplaravel";
        // return redirect()->route('products.about');
        // return redirect()->route('products.show', ['id' => 42]);
        return view("firstview", ["boutique" => $boutique]); // afficher firstview.blade.php

    //     return view('firstview', [
    //     'boutique' => $boutique,
    //     'id' => $id
    // ]);
    }




    public function about(): string
    {
        return view('about');
    }
    public function contact(): string
    {
        return view("contact");
    }

    
}