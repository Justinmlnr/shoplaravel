@extends('layouts.app')

@section('content')
<li>
    ID : {{ $product->id}} <br />
    nom : {{ $product->name }} <br />
    prix : {{ $product->price }} €
</li>
<a href="{{ route('products.index', $product) }}">Retour catlogue</a>

@endsection