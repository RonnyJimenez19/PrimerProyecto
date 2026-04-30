@extends('layouts.base')
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
<a href="{{ route('pagina.index')}}">Volver a la pagina anterior</a>
<h1>{{ $paginas->id }} : {{ $paginas->name }}</h1>
<h3>Email: {{ $paginas->email }}</h3>
<p>Telefono: {{ $paginas->telefono }}</p>
<p>Calle: {{ $paginas->calle }}</p>
<a href ="{{ route('pagina.edit', $paginas->id) }}" class="btn btn-primary">Editar Página</a>
<form action="{{ route('pagina.delete', $paginas->id) }}" method="post" class="mt-3">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar Página</button>
</form>
@endsection
@section("Autor")
{{$nombre}}    
@endsection
@section("actividad", $actividad)
@section("texto_ejemplo")
{{ $texto_ejemplo }}    
@endsection
@section("titulo_modal","Detalle usuario")
