@extends('layouts.master')

@section('content')
<h1>Mostrando el articulo {{$article->id}}</h1>
<h2>{{$article->name}}</h2>
<h3>{{$article->price}}€</h3>

@if ($article->stock)
    <h4>Hay {{$article->stock}} unidades</h4>
@else
    <h4>Sin stock</h4>
@endif

<form action="{{route('article.destroy',$article)}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" style="background-color: rgb(255, 135, 135); border-radius: 10px; padding: 2px" value="Eliminar">
</form>

@endsection
