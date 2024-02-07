@extends('layouts.master')

@section('content')
<h1>Listado de categorias</h1>
<p>
    <a href="{{route('category.create')}}">Crear una categoria</a>
</p>
<table>
  <thead>
  <tr>
    <th>Nombre</th>
    <th></th>
  </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td><a href="{{route('category.show' , $category)}}">{{$category->name}}</a></td>

       <td>
            <a href="{{route('category.edit' , $category)}}" style="background-color:  rgb(255, 135, 135); border-radius: 10px; padding: 2px">Editar
            </a>
            <form action="{{route('category.destroy',$category)}}" method="POST">
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
