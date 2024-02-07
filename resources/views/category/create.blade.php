@extends('layouts.master')

@section('content')
<h1>Crear una Categoría</h1>
<form action="{{route('category.store')}}" method="POST">
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
        <input type="submit" value="Crear">
    </p>

</form>
@endsection
