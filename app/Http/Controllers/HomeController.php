<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function empresa()
   {
    $datos["nombre"]="Ronny Arturo Jimenez Sanchez";
    $datos["fecha"]="06-02-26";
    $datos["actividad"]="E-commerce";
    $datos["descripcion_about"]="Empresa dedicada al E-Commerce";
    $datos["texto_ejemplo"]="Aqui va la descripcion del texto de ejemplo";

   $usuarios=new Pagina();
    $datos["listadousuarios"]=$usuarios->ObtenerListado();
    return view('empresa', $datos);

   }


   public function update(Request $request){
      $usuarios = new Pagina();
      $respuesta = $usuarios->BuscarId($request->id);
      if(!empty($respuesta)){
         $respuesta->name = $request->name;
         $respuesta->calle = $request->calle;
         $respuesta->save();
   }

   return $respuesta;
   
}

}
