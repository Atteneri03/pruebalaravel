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
    <th>Categoría</th>
    <th></th>
  </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
      <tr>
        <td>{{$article->id}}</td>
        <td><a href="{{route('article.show' , $article)}}">{{$article->name}}</a></td>
        <td>{{$article->price}}</td>
        <td>{{$article->stock}}</td>
        <td>{{$article->category()->first()->name}}</td>
        <td>
            <a href="route('article.edit' , $article)" style="background-color:  rgb(255, 135, 135); border-radius: 10px; padding: 2px">Editar
            </a>
            <form action="{{route('article.destroy',$article)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" style="background-color:  rgb(255, 135, 135); border-radius: 10px; padding: 2px" value="Eliminar">
            </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
