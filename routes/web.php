<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Controller;
use App\Models\Pagina;
use Symfony\Component\Mime\HtmlToTextConverter\LeagueHtmlToMarkdownConverter;

Route::get('/', function () {
return view('welcome');
})->name('vista_inicio');
 
Route::get('/hello', [HomeController::class, 'empresa']);
Route::get('post/mensaje', [PostController::class, #Controlador seguido del método Mnensaje
'Mensaje']);


//Definimos el método a utilizar
Route::get('nuevoregistro', function(){
    $pagina = new Pagina();
    $pagina->name = "Pagina de prueba";
    $pagina->email = 'user@gmail.com';
    $pagina->email_verified_at=date('Y-m-d');
    $pagina->password='12345678';
    $pagina->avatar='avatar.png';
    $pagina->telefono='1234567890';
    $pagina->calle='Calle 123';
    $pagina->save();
    return $pagina;
});

//Definimos el método a buscar por el id
//Para obtener unicamente un registro
Route::get('buscarpagina', function(){
    $post = Pagina::find(1);
    return $post;
});

//Definimos el metodo para biscar por un campo determinado
Route::get('buscarxname', function(){
    $post = Pagina::where('name', 'Marco')->first();
    return $post;
});

//Para recuperar más de un registro
Route::get('obtenertodos', function(){
    $post = Pagina::all();
    return $post;
});

//Definimos el método para actualizar un registro
Route::get('updatename', function(){
    $post = Pagina::where('name', 'Marco')->first();
    $post->email = "Pagina de prueba actualizada";
    $post->save();
    return $post;
});

//Definimos un método para obtener una lista conforme a un criterio determinado
//Para obtener más de un registro
Route::get('filter', function(){
    $post = Pagina::where('name', 'like', '%123%')->orderBy('id', 'desc')->get();
    return $post;
});

//Para espicificar únicamente los campos que quiera
Route::get('trescampos', function(){
    $post = Pagina::select('name', 'email', 'telefono')->get();
    return $post;
});

//Conforme a una selección solamente traerme un cierto numero de registros
Route::get('filtroxnumreg', function(){
    $post = Pagina::select('name', 'email')->orderBy('name')->take(2)->get();
    return $post;
});

//Para eliminar un determinado registro
Route::get('delete', function(){
    $post = Pagina::where('name', 'Marco')->first();
    $post->delete();
    return "Registro eliminado";
});

//Obtener la fecha conforme a un formato
Route::get('Obtenerfechaformato', function(){
    $post = Pagina::select('name', 'email', 'created_at')->find(3);
    //return $post->created_at->format('d-m-Y');
    return $post;
});

//Obtener el valor de is_active
Route::get('obtenerestatus', function(){
    $post = Pagina::find(1);
    //dd - función de depuración que muestra el valor de la variable y detiene la ejecución del programa
    dd($post->is_active) ;
});

// El siguiente método se debe de llamar mediante un método de tipo request (por ejemplo, utilizando AJAX o Postman)
Route::put('/actualizar-dato/{id}', [HomeController::class, 'update'])->name('dato.update');





Route::get('post/about/{param}/{name?}', [PostController::class, 'About']);
Route::get('/empresa', [HomeController::class, 'empresa'])->name('empresa');
 
Route::get('/contact', function(){
$nombre="Alejandro Góngora Escalante";
return view('contact', ['nombre'=>$nombre, 'carrera'=>'Doctor en Sistemas
Computacionales']);
})->name('contact');
 
#Route::get('/', function () {
#  return view('welcome');
#});
 
 