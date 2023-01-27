@extends('admin.admin')
@section('tilulo','index | ingredient')
@section('seccion','Ingredient Index')
@section('contenido')
    <a href="{{ route('admin_ingredients_c.create') }}"> New Ingredient</a>
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
                    @foreach ($ingredients as $ingredient )
                    <tr>
                        <td>{{ $ingredient->id }}</td>
                        <td>{{ $ingredient->nombre}}</td>
                        <td>{{ $ingredient->descripcion }}</td>
                        <td>
                            <a type="button" href="{{ route('admin_ingredients_c.show',$ingredient->id) }}">Ver</a>
                            <a type="button" href="{{ route('admin_ingredients_c.edit',$ingredient->id) }}">Editar</a>
                            <form action="{{ route('admin_ingredients_c.destroy',$ingredient->id) }}" method="POST">
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