@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')
<ul>
    @forelse ($products as $product)
    <li>
        ID : {{ $product->id}} <br />
        nom : {{ $product->name }} <br />
        prix : {{ $product->price }} €
    </li>
    @empty
    <p> produit non trouvé</p>
    @endforelse

</ul>

<ul>
    @foreach ($products as $product)
    <li>
        ID : {{ $product->id}} <br />
        nom : {{ $product->name }} <br />
        prix : {{ $product->price }} €
    </li>
    <a href="{{ route('products.show', ['id' => $product->id]) }}">voir détails</a>
    @endforeach

</ul>
@endsection