@extends('layouts.app')

@section('content')
<div style="max-width:900px; margin:40px auto;">
    <h1>Catégories</h1>

    <div style="margin-top:20px;">
        @foreach($categories as $category)
            <a href="{{ route('categories.show', $category->slug) }}"
               style="display:block; padding:12px 14px; margin:10px 0; border:1px solid #eee; border-radius:10px; text-decoration:none;">
                <strong>{{ $category->name }}</strong>
                @if($category->description)
                    <div style="margin-top:6px; color:#666;">{{ $category->description }}</div>
                @endif
            </a>
        @endforeach
    </div>
</div>
@endsection
