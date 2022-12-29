@extends('admin.admin')
@section('tilulo','edit | size')
@section('seccion','tamaño edit')
@section('contenido')
    <form action="{{ route('admin_sizes_c.update', $size->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="id">ID:</label>
        <input type="text" name="id" id="id"  value="{{ $size->id }}" readonly>
        <br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"  value="{{ $size->nombre }}">
        <br><br>
        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" id="descripcion" value="{{ $size->descripcion }}">
        <br><br>
        <label for="desde">Desde:</label>
        <input type="text" name="desde" id="desde"  value="{{ $size->updated_at }}" readonly>
        <br>
        <button type="submit">Actualizar</button>
    </form> 
@endsection