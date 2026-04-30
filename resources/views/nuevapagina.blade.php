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
<div class="row">
    <div class="col-6">
        <form action="{{ route('pagina.nueva') }}" method="post">
            @csrf
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <label for="email" class="form-label">Correo</label>
                <input type="text" class="form-control" id="email" name="email" required>
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
                <label for="calle" class="form-label">Calle</label> 
                <input type="text" class="form-control" id="calle" name="calle" required>
                <button type="submit" class="btn btn-primary">Crear Página</button>
        </form>
    </div>
</div>
@endsection
@section("Autor")
{{$nombre}}    
@endsection
@section("actividad", $actividad)
@section("texto_ejemplo")
{{ $texto_ejemplo }}    
@endsection
@section("titulo_modal","Detalle usuario")  


