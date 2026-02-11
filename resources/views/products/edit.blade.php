@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">Modifier le Produit</h1>

<form method="POST" action="{{ route('products.update', $product) }}" class="max-w-lg">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block font-medium mb-1">Nom</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}" class="w-full border rounded px-3 py-2">
    </div>

    <div class="mb-4">
        <label class="block font-medium mb-1">Description</label>
        <textarea name="description" rows="4" class="w-full border rounded px-3 py-2">
    {{ old('description', $product->description) }}
        </textarea>
    </div>

    <div class="mb-4">
        <label class="block font-medium mb-1">Prix</label>
        <input type="number" name="price" step="0.01" value="{{ old('price', $product->price) }}" class="w-full border rounded px-3 py-2">
    </div>

    <div class="mb-4">
        <label class="block font-medium mb-1">Stock</label>
        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}"class="w-full border rounded px-3 py-2">
    </div>

    <div class="mb-4">
        <label class="block font-medium mb-1">Catégorie</label>
        <input type="number" name="category_id" value="{{ old('category_id', $product->category_id) }}"class="w-full border rounded px-3 py-2">
    </div>

    <button type="submit" class=" bg-blue-500 text-white px-4 py-2 rounded">Modifier</button>


</form>

<form action="{{ route('products.destroy', $product)}}" method="POST" onsubmit="return confirm('Etes vous sur ?')">
    @csrf
    @method ('DELETE')

    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
        Supprimer
    </button>
</form>
@endsection