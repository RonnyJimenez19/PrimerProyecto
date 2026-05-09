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
$pagina = Pagina::orderBy('id', 'desc')->paginate(10);
$datos["nombre"]="Ronny Arturo Jimenez Sanchez";
$datos["fecha"]="06-02-26";
$datos["actividad"]="E-Commerce";
$datos["descripcion_about"]="Empresa dedicada al E-Commerce";
$datos["texto_ejemplo"]="Aqui va la descripcion del texto de ejemplo";
$datos['paginas']=$pagina;
return view('index', $datos);
}

public function nuevapagina()
{
$datos["nombre"]="Ronny Arturo Jimenez Sanchez";
$datos["fecha"]="06-02-26";
$datos["actividad"]="E-Commerce";
$datos["descripcion_about"]="Empresa dedicada al E-Commerce";
$datos["texto_ejemplo"]="Aqui va la descripcion del texto de ejemplo";
$datos['texto']="Este es un texto de ejemplo para mostrar en la vista de nueva página.";  
    return view('nuevapagina', $datos);

}

public function guardarpagina(Request $request)
{
   Pagina::create($request->all());
   /* $pagina = new Pagina();
    $pagina->name = $request->name;
    $pagina->email = $request->email;
    $pagina->telefono = $request->telefono;
    $pagina->calle = $request->calle;
    $pagina->password=bcrypt('123456');
    $pagina->save();

    return redirect('/pagina');
    return request->all();*/
    return redirect()->route('pagina.index')->with('success', 'Página creada exitosamente');

}

public function detalle(Pagina $id){
$datos["nombre"]="Ronny Arturo Jimenez Sanchez";
$datos["fecha"]="06-02-26";
$datos["actividad"]="E-Commerce";
$datos["descripcion_about"]="Empresa dedicada al E-Commerce";
$datos["texto_ejemplo"]="Aqui va la descripcion del texto de ejemplo";
$datos['paginas']=$id;
return view('detalle', $datos);
}

/**public function updatepaginaform(Request $request, $id){
    $pagina = Pagina::find($id);
    $pagina->name = $request->name;
    $pagina->email = $request->email;
    $pagina->telefono = $request->telefono;
    $pagina->calle = $request->calle;
    $pagina->save();

    $datos["nombre"]="Ronny Arturo Jimenez Sanchez";
    $datos["fecha"]="06-02-26";
    $datos["actividad"]="E-Commerce";
    $datos["descripcion_about"]="Empresa dedicada al E-Commerce";
    $datos["texto_ejemplo"]="Aqui va la descripcion del texto de ejemplo";
    $datos['paginas']=$pagina;
    return view('detalle', $datos);

   }
    */

   public function updatepaginaform(Request $request, $id)
{
    // Validación
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'telefono' => 'required',
        'calle' => 'required'
    ]);

    $pagina = Pagina::findOrFail($id);

    $pagina->update([
        'name' => $request->name,
        'email' => $request->email,
        'telefono' => $request->telefono,
        'calle' => $request->calle,
    ]);

    return redirect()->route('pagina.detalle', $pagina->id);
}

   public function edit ($id){
    $pagina = Pagina::find($id);
    $datos['paginas']=$pagina;
    $datos["nombre"]="Ronny Arturo Jimenez Sanchez";
    $datos["fecha"]="06-02-26";
    $datos["actividad"]="E-Commerce";
    $datos["descripcion_about"]="Empresa dedicada al E-Commerce";
    $datos["texto_ejemplo"]="Aqui va la descripcion del texto de ejemplo";
    return view('edit', $datos);
   }
   

   public function eliminarpagina($id){
    $pagina = Pagina::find($id);
    $pagina->delete();
    return redirect('/pagina');
   }

} 