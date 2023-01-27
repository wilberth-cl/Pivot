@extends('admin.admin')
@section('tilulo','create | size')
@section('seccion','Size Create')
@section('contenido')
    <form action="{{ route('admin_sizes_c.store') }}" method="POST">
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