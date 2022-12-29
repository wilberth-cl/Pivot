@extends('admin.admin')
@section('tilulo','edit | ingredient')
@section('seccion','Ingrediente Edit')
@section('contenido')
    <form action="{{ route('admin_ingredients_c.update', $ingredient->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="id">ID:</label>
        <input type="text" name="id" id="id"  value="{{ $ingredient->id }}" readonly>
        <br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"  value="{{ $ingredient->nombre }}">
        <br><br>
        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" id="descripcion" value="{{ $ingredient->descripcion }}">
        <br><br>
        <label for="desde">Desde:</label>
        <input type="text" name="desde" id="desde"  value="{{ $ingredient->updated_at }}" readonly>
        <br>
        <button type="submit">Actualizar</button>
    </form> 
@endsection