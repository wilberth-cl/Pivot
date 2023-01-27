@extends('admin.admin')
@section('tilulo','show | size')
@section('seccion','Size Show')
@section('contenido')
    
    <label for="id">ID:</label>
    <input type="text" name="id" id="id"  value="{{ $size->id }}" readonly>
    <br><br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"  value="{{ $size->nombre }}" readonly>
    <br><br>
    <label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion" id="descripcion" value="{{ $size->descripcion }}" readonly>
    <br><br>
    <label for="desde">Desde:</label>
    <input type="text" name="desde" id="desde"  value="{{ $size->created_at }}" readonly>

@endsection