@extends('layouts.master')

@section('content')
<h1>Listado de articulos</h1>
<p>
    <a href="{{route('article.create')}}">Crear un articulo</a>
</p>
<table>
  <thead>
  <tr>
    <th>id</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Stock</th>
  </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
      <tr>
        <td>{{$article->id}}</td>
        <td><a href="{{route('article.show' , $article)}}">{{$article->name}}</a></td>
        <td>{{$article->price}}</td>
        <td>{{$article->stock}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
