@extends('layouts.app')

@section('content')

 <h1>{{ $category->name }}</h1>

   @if($category->description)
        <p style="margin-top:10px;">{{ $category->description }}</p>
    @endif

      <h3>Produits</h3>

      @forelse($products as $product)
        <div style="padding:14px; margin:12px 0; background:#fff; border:1px solid #eee; border-radius:10px;">
            <div><strong>{{ $product->name }}</strong></div>
            <div>{{ $product->price }} €</div>
        </div>
    @empty
        <p>Aucun produit dans cette catégorie.</p>
    @endforelse

      <div style="margin-top: 20px;">
        {{ $products->links() }}
    </div>

</div>
@endsection