@extends('admin.admin')
@section('tilulo','index | specialty')
@section('seccion','Specialty Index')
@section('styles')
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;            
        }
    </style>
@endsection
@section('contenido')
    <a href="{{ route('admin_specialties_c.create') }}"> Crear Especialidad</a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tamaño</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Ingrediente</th>
                <th>Cantidad</th>
                <th>Thing</th>
            </tr>
        </thead>
        <tbody>
    
            @foreach ($specialties as $specialty)
            <tr>
                <td>{{ $specialty->id }}</td>
                <td>{{ $specialty->size->nombre }}</td>
                <td>{{ $specialty->nombre }}</td>
                <td>{{ $specialty->precio }}</td>
                <td>
                    @foreach ($specialty->ingredients as $ingredient)
                        {{ $ingredient->nombre }}                  
                    @endforeach
                </td>
                <td>
                    @foreach ($specialty->ingredients as $ingredient)
                        {{ $ingredient->pivot->cantidad }}
                    @endforeach
                </td>
                <td>
                    @foreach ($specialty->ingredients as $ingredient)
                        {{ $ingredient->pivot->thing }}
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection