@extends('layouts.master')

@section('content')
<h1>Crear un Articulo</h1>
<form action="{{route('article.store')}}" method="POST">
    @csrf
    <p>
        <label for="name">Nombre</label>
        <input type="text" name="name"
        class="@error('name') border-2 border-red-600 @enderror"
        value="{{old('name')}}">
        @error('name')
            <div class="bg-red-400">{{$message}}</div>
        @enderror
    </p>
    <p>
        <label for="price">Precio</label>
        <input type="text" step="0.01" name="price"
        class="@error('name') border-2 border-red-600 @enderror"
        value="{{old('price')}}">
        @error('price')
        <div class="bg-red-400">{{$message}}</div>
    @enderror
    </p>
    <p>
        <label for="stock">Stock</label>
        <input type="text" name="stock"
        class="@error('name') border-2 border-red-600 @enderror"
        value="{{old('stock')}}">
        @error('stock')
        <div class="bg-red-400">{{$message}}</div>
    @enderror
    </p>

    <p>
        <label for="category_id">Id Categoría</label>
        <input type="text" name="category_id"
        class="@error('name') border-2 border-red-600 @enderror"
        value="{{old('category_id')}}">
        @error('category_id')
        <div class="bg-red-400">{{$message}}</div>
    @enderror
    </p>

    <p>
        <input type="submit" value="Crear">
    </p>

</form>
@endsection
