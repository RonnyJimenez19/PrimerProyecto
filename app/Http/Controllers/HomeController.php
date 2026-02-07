<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Pagina;

class HomeController extends Controller
{
   public function empresa()
   {
    $datos["nombre"]="Ronny Arturo Jimenez Sanchez";
    $datos["fecha"]="06-02.26";
    $datos["actividad"]="E-commerce";
    $datos["descripcion_about"]="Empresa dedicada al E-Commerce";
    $datos["texto_ejemplo"]="Aqui va la descripcion del texto de ejemplo";

   /* $usuarios=new Pagina();
    $datos["listadousuarios"]=$usuarios->obtenerListado();
    */

    return view('empresa', $datos);

   }
   
}

