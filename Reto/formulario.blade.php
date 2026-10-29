@extends('layouts.base')

@section('content')
    <h1>Registrar Juguete</h1>

    @if ($errors->any())
        <div >
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/juguetes/nuevo" method="POST">
        @csrf
        
        <label for="nombre">Nombre del juguete:</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="precio">Precio en Bs:</label><br>
        <input type="number" id="precio" name="precio"><br><br>

        <label for="stock">Stock:</label><br>
        <input type="number" id="stock" name="stock"><br><br>

        <button type="submit">Registrar juguete</button>
    </form>
@endsection