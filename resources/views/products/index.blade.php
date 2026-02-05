<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <ul>
        @forelse ($products as $product)
        <li>
            ID : {{ $product["id"] }} <br />
            nom : {{ $product["nom"] }} <br />
            prix : {{ $product["prix"] }} €
        </li>
        @empty
        <p> produit non trouvé</p>
        @endforelse

    </ul>

    <ul>
        @foreach ($products as $product)
        <li>
            ID : {{ $product["id"] }} <br />
            nom : {{ $product["nom"] }} <br />
            prix : {{ $product["prix"] }} €
        </li>
        @endforeach

    </ul>
    @endsection
</body>

</html>S