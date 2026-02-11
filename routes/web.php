<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Controller;
 
Route::get('/', function () {
return view('welcome');
})->name('vista_inicio');
 
Route::get('/hello', [HomeController::class, 'empresa']);
Route::get('post/mensaje', [PostController::class, #Controlador seguido del método Mnensaje
'Mensaje']);
 
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
 
 