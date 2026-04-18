@extends('layouts.app')
@section('titulopagina', 'Empresa E-Commerce')
@push('css')
    <style>
        .fondo{
            background: #302886;
        }

        .img-responsive{
            width: 100%;
            height: 100%;
        }
        </style>
@endpush

@section('titulo')
Bienvenido a la empresa E-Commerce
@endsection

@section('contenido')
Explorando las oportunidades con Laravel 12
@endsection
    
@section ('link1', 'Active')
@section('contenido_cuerpo')
<a href="/pagina/create" class="btn btn-primary">Crear nueva página</a>
<ul>
    @foreach ($paginas as $pagina)
        <li>
            <a href="/pagina/{{ $pagina->id }}">
                {{ $pagina->titulo }}</a>
        </li>
    @endforeach
</ul>
@endsection
@section("Autor")
{{$nombre}}    
@endsection
@section("actividad", $actividad)
@section("texto_ejemplo")
{{ $texto_ejemplo }}    
@endsection

