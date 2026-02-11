@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="flash flash-error">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<h1 class="text-2xl font-bold mb-6">Nouveau produit</h1>

<form action="{{ route('products.store') }}" method="POST" class="max-w-lg">
    @csrf

    <div class="mb-4">
        <label for="name" class="block font-medium mb-1">Nom</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full border rounded px-3 py-2"
            required>
    </div>

    <div class="mb-4">
        <label for="name" class="block font-medium mb-1">Description</label>
        <input type="text" name="description" id="name" value="{{ old('description') }}" class="w-full border rounded px-3 py-2"
            required>
    </div>

    <div class="mb-4">
        <label for="name" class="block font-medium mb-1">Prix</label>
        <input type="number" name="price" id="price" value="{{ old('price') }}" class="w-full border rounded px-3 py-2"
            required>
    </div>

    <div class="mb-4">
        <label for="name" class="block font-medium mb-1">Stock</label>
        <input type="number" name="stock" id="name" value="{{ old('stock') }}" class="w-full border rounded px-3 py-2"
            required>
    </div>

    <div class="mb-4">
        <label for="name" class="block font-medium mb-1">Catégorie</label>
        <input type="text" name="category_id" id="category" value="{{ old('category_id') }}"
            class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="mb-6 flex items-center">
        <input type="checkbox" name="active" id="active" value="1" class="mr-2"
            {{ old('active', true) ? 'checked' : '' }}>
        <label for="active" class="font-medium">Produit actif</label>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
        Créer le produit
    </button>
</form>


@endsection