@extends('layouts.master')

@section('content')
<h1>Editando el Articulo {{$article->id}}</h1>
<form action="{{route('article.edit')}}" method="POST">
    @csrf
    @method("PUT")
    <p>
        <label for="name">Nombre</label>
        <input type="text" name="name"
        class="@error('name') border-2 border-red-600 @enderror"
        value="{{old('name' , $article->name)}}">
        @error('name')
            <div class="bg-red-400">{{$message}}</div>
        @enderror
    </p>
    <p>
        <label for="price">Precio</label>
        <input type="text" step="0.01" name="price"
        class="@error('name') border-2 border-red-600 @enderror"
        value="{{old('price' , $article->price)}}">
        @error('price')
        <div class="bg-red-400">{{$message}}</div>
    @enderror
    </p>
    <p>
        <label for="stock">Stock</label>
        <input type="text" name="stock"
        class="@error('name') border-2 border-red-600 @enderror"
        value="{{old('stock' , $article->stock)}}">
        @error('stock')
        <div class="bg-red-400">{{$message}}</div>
    @enderror
    </p>

    <p>
        <input type="submit" value="Modificar">
    </p>

</form>
@endsection
