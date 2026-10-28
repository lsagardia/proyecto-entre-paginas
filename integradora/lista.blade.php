@extends('layouts.base') 

@section('content')
    <h1>Jugueteria El Trompo</h1>
    <p>El Trompo es la juguetería de barrio donde los juguetes cobran vida en las noches</p>
    
    <h3>Hay {{ count($juguetes) }} juguetes en el estante.</h3>
    
    <ul>
        @foreach($juguetes as $juguete)
            <li>{{ $juguete->nombre }} - {{ $juguete->precio }} Bs</li>
        @endforeach
    </ul>

    <p><em>Estante atendido por Sagardia Serrudo Linn Ibeth</em></p>

    <br>
    <a href="/juguetes/nuevo">Registrar un nuevo juguete</a>
@endsection

