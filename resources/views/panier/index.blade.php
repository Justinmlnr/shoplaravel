@extends('layouts.app')

@section('content')


<h1>Mon panier</h1>

@if($products->isEmpty())
    <p>Panier vide</p>
@else
    @foreach($products as $product)
        <div style="border:1px solid #eee; padding:10px; margin:10px 0;">
            <strong>{{ $product->name }}</strong><br>
            Prix: {{ $product->price }} €<br>
            Qty: {{ $cart[$product->id]['qty'] }}
        </div>
    @endforeach

    <h3>Total: {{ number_format($total, 2) }} €</h3>
@endif
@endsection