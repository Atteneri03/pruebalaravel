@extends('layouts.master')

@section('content')
<h1>Crear un Articulo</h1>
<form action="{{route('article.store')}}" method="POST">
    @csrf
    <p>
        <label for="name">Nombre</label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="price">Precio</label>
        <input type="number" step="0.01" name="price">
    </p>
    <p>
        <label for="stock">Stock</label>
        <input type="number" name="stock">
    </p>

    <p>
        <input type="submit" value="Crear">
    </p>

</form>
@endsection
