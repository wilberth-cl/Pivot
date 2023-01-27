@extends('admin.admin')
@section('tilulo','show | ingredient')
@section('seccion','Ingredient Show')
@section('contenido')
    
    <label for="id">ID:</label>
    <input type="text" name="id" id="id"  value="{{ $ingredient->id }}" readonly>
    <br><br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"  value="{{ $ingredient->nombre }}" readonly>
    <br><br>
    <label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion" id="descripcion" value="{{ $ingredient->descripcion }}" readonly>
    <br><br>
    <label for="desde">Desde:</label>
    <input type="text" name="desde" id="desde"  value="{{ $ingredient->created_at }}" readonly>

@endsection