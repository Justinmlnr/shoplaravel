<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ShopLaravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4">
        <nav class="container mx-auto">
            <a href="{{ url('/') }}">Accueil</a> |
            <a href="{{ url('/products/{id}') }}">Produits</a> |
            <a href="{{ url('/about') }}">About</a> |
            <a href="{{ url('/contact') }}">Contact</a> |
    </header>

    <main class="container mx-auto py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} ShopLaravel - Tous droits réservés
            <!-- Un <footer> avec le copyright de l'année en cours -->
        </div>
    </footer>
</body>



</html>