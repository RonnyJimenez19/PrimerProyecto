@extends('layouts.base')
@section('titulopagina','Empresa E-Commerce')
@push('css')
    <style>
        .fondo {
            background: #302886;
        }

        .img-responsive{
            width: 100%;
            height: 100%;
        }
  </style>
@endpush

@section('titulo')
    Bienvenido a la página de EC
@endsection


@section('subtitulo')
    Explorando las oportunidades con Laravel 12
@endsection
@section('link1','Active')
@section("contenido_cuerpo")
  <div class="row">
    <div class="col-6">
        <!-- A nivel del formulario solo puede utilizar GET o POST -->
        <form action="{{route('pagina.update',$paginas->id)}}" method="post">
            <!-- Generación oculta del token -->
            @csrf
            <!-- Especificamos el método oculto -->
            @method('PUT')
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$paginas->name}}">
            <label for='email' class="form-label">Correo</label>
            <input type='text' name='email' id='email' class="form-control" value="{{$paginas->email}}">
            <label for='telefono' class="form-label">Teléfono</label>
            <input type='text' name='telefono' id='telefono' class="form-control" value="{{$paginas->telefono}}">
            <label for='calle' class="form-label">Calle</label>
            <input type='text' name='calle' id='calle' class="form-control" value="{{$paginas->calle}}"><br>
            <button class='btn btn-primary'>Actualizar</button>
        </form>
    </div>
  </div>
@endsection
@section("Autor")
    {{$nombre}}
@endsection
@section("actividad",$actividad)
@section("texto_ejemplo")
    
@endsection
@section("titulo_modal","Detalle usuario")
