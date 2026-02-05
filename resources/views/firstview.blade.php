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
    <h1 class="text-3xl font-bold mb-4">Bienvenue sur notre boutique</h1>
    <p> Découvrez une sélection soigneusement choisie de produits de qualité, pensés pour vous simplifier la vie.
        Bonne visite et excellent shopping sur notre shop propulsé par Laravel </p>

    <h2> Nom : {{ $boutique["nom"] }}</h2>
    <p> Stock : {{ $boutique["stock"] }}</p>
    <!-- <p> Etat : {{ $boutique["etat"] }}</p> -->

    @if ($boutique["etat"] === "ouvert")
    <p> La boutique est ouvert</p>
    @else
    <p> La boutique est fermé </p>
    @endif

    @endsection
</body>

</html>