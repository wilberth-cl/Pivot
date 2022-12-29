@extends('admin.admin')
@section('tilulo','index | size')
@section('seccion','Tamaño Index')
@section('contenido')
    <a href="{{ route('admin_sizes_c.create') }}"> Crear Ingrediente</a>
    <hr>

   
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr> 
                </thead>
                <tbody>
                    @foreach ($sizes as $size )
                    <tr>
                        <td>{{ $size->id }}</td>
                        <td>{{ $size->nombre}}</td>
                        <td>{{ $size->descripcion }}</td>
                        <td>
                            <a type="button" href="{{ route('admin_sizes_c.show',$size->id) }}">Ver</a>
                            <a type="button" href="{{ route('admin_sizes_c.edit',$size->id) }}">Editar</a>
                            <form action="{{ route('admin_sizes_c.destroy',$size->id) }}" method="POST">
                                @method('DELETE') 
                                @csrf
                                <input type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>           
            </table>
   

@endsection