@extends('admin.admin')
@section('tilulo','create | specialty')
@section('seccion','Specialty Create')
@section('contenido')
    <form action="{{ route('admin_specialties_c.store') }}" method="POST">
        @csrf

        <label for="size">Tamaño:</label>
        <select name="size">
            @foreach ($sizes as $size)
                <option value="{{ $size->id }}">{{ $size->nombre }}</option>
            @endforeach
        </select>

        <br><br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio">
        <br><br>

        <label for="ingredients">Ingredients:</label><br>
        <table>
            @foreach($ingredients as $ingredient)
                <tr>
                    <td><input value="{{ $ingredient->id }}" id="{{ $ingredient->id }}" name="ingredients[]" type="checkbox" class="ingredient-enable"></td>
                    <td>{{ $ingredient->nombre }}</td>
                    <td><input disabled id="{{ $ingredient->id }}" name="cantidades[]" type="text" class="ingredient-amount form-control" placeholder="cantidad"></td>
                    <td><input disabled id="{{ $ingredient->id }}" name="things[]" type="text" class="ingredient-amount form-control" placeholder="thing"></td>
                </tr>
            @endforeach
        </table>

        <input type="submit" value="Enviar">
    </form>
@endsection

@section('scripts')
    @parent
    <script>
        $('document').ready(function () {
            $('.ingredient-enable').on('click', function () {
                let id = $(this).attr('id')
                let enabled = $(this).is(":checked")
                $('.ingredient-amount[id="' + id + '"]').attr('disabled', !enabled)
                $('.ingredient-amount[id="' + id + '"]').val(null)
            })
        });
    </script>
@endsection