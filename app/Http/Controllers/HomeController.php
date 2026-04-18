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

public function desactivar($id)
{

$pagina = Pagina::find($id);
if (!$pagina) {
   return response()->json(['error' => 'Página no encontrada'], 404);
}

    $pagina = Pagina::findOrFail($id);
    $pagina->is_active = 0;
    $pagina->save();

    return response()->json(['success' => true]);
}

public function eliminar($id)
{

$pagina = Pagina::find($id);
if (!$pagina) {
   return response()->json(['error' => 'Página no encontrada'], 404);

}

    $pagina = Pagina::findOrFail($id);
    $pagina->delete();

    return response()->json(['success' => true]);

}

public function index()
{
 $paginas = Pagina::orderBy('id', 'desc')->get();
$datos["nombre"]="Ronny Arturo Jimenez Sanchez";
$datos["fecha"]="06-02-26";
$datos["actividad"]="E-Commerce";
$datos["descripcion_about"]="Empresa dedicada al E-Commerce";
$datos["texto_ejemplo"]="Aqui va la descripcion del texto de ejemplo";
$datos['paginas']=$paginas;
return view('index', $datos);
}

}