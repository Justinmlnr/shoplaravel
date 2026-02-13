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
                <p><strong>ID :</strong> {{ $product->id }}</p>
                <p><strong>Nom :</strong> {{ $product->name }}</p>
                <p><strong>Prix :</strong> {{ $product->price }} €</p>
                <p><strong>Catégorie :</strong> {{ $product->category?->name ?? 'Aucune catégorie' }}</p>


                <a class="bg-blue-500 text-white px-4 py-2 rounded" href="{{ route('products.show', $product) }}">
                    Voir détails
                </a>
                <a class="bg-blue-500 text-white px-4 py-2 rounded" href="{{ route('products.edit', $product) }}">
                    Editer
                </a>
                
            </li>
        @endforeach
    </ul>
@endsection