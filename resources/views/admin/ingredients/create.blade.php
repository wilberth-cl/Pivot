@extends('admin.admin')
@section('tilulo','create | ingredient')
@section('seccion','Ingredient Create')
@section('contenido')
    <form action="{{ route('admin_ingredients_c.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" id="descripcion">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
@endsection