@extends('layouts.app');
@section('titulopagina', 'Empresa E-Commerce ')
@push('css');
<style>
    .fondo{
        backround: #302886;
    }

    .img-responsve{
        width: 100%;
        height: 100%;
    }
</style>
@endpush

@section('titulo')
 Bienvenido a la página de EC 
@endsection

@section('link1', 'Active')
@section('titulo1')
<h1> About Us </h1>
@endsection
@section('descripcion_about')
<p> {{ $descripcion_about }} </p>
@endsection
@section('Autor')
<p> {{ $nombre }} </p>
@endsection
@section('actividad', $actividad)
@section('texto_ejemplo')
<p> {{ $texto_ejemplo }} </p>
@endsection
@section('contenidolistado')
    <h2> Listado de Usuarios Registrados </h2>
    <ul>
        @if(isset($listadousuarios))
        <table id = 'tablausuarios' class ="table 
        table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Calle</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listadousuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td>{{ $usuario->calle }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>La variable de listado de usuarios no está definida</p>
        @endif
    </ul>
@endsection