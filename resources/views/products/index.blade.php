@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')
<!-- <ul>
        @forelse ($products as $product)
            <li>
                ID : {{ $product->id}} <br />
                nom : {{ $product->name }} <br />
                prix : {{ $product->price }} €
            </li>
        @empty
            <p> produit non trouvé</p>
        @endforelse

    </ul> -->

<ul>
    @foreach ($products as $product)
    <li>
       <br> ID : {{ $product->id}} <br />
        nom : {{ $product->name }} <br />
        prix : {{ $product->price }} €
    </li>
    <br> <a class="bg-blue-500 text-white px-4 py-2 rounded" href="{{ route('products.show', $product) }}">Voir détails<br></a>
    <br><a class="bg-blue-500 text-white px-4 py-2 rounded" href="{{ route('products.edit', $product) }}">Editer</a>
    @endforeach
</ul>
@endsection