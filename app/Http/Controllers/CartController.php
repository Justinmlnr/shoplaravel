<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
   public function index () {
     $cart = session('cart', []);
    $ids = array_keys($cart);

    $products = Product::whereIn('id', $ids)->get();

    $total = 0;
    foreach ($products as $product) {
        $total += $product->price * ($cart[$product->id]['qty'] ?? 0);
    }

    return view('cart.index', compact('products', 'cart', 'total'));
   }
   
   public function add (Product $product) {
   $cart = session('cart', []);

        $cart[$product->id] = [
            'name'  => $product->name,
            'price' => $product->price,
            'qty'   => ($cart[$product->id]['qty'] ?? 0) + 1,
        ];

        session(['cart' => $cart]);

        return back()->with('success', 'Ajouté au panier');
    }

   public function update (Request $request, Product $product) {
     $request->validate(['qty' => ['required', 'integer', 'min:1']]);

        $cart = session('cart', []);
        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty'] = $request->qty;
            session(['cart' => $cart]);
        }

        return redirect()->route('cart.index');
    }

   public function remove (Product $product) {
      $cart = session('cart', []);
        unset($cart[$product->id]);
        session(['cart' => $cart]);

        return redirect()->route('cart.index');
   } 

   public function clear () {
    session()->forget('cart');
        return redirect()->route('cart.index');
   }
}