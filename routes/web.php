<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('cursos/', function (){
    return "Esta es la primer ruta del curso de laravel";
});

Route::get('cursos/create', function (){
    return "Esta es la seccion para crear cursos";
});

Route::get('cursos/{curso}/{carrera}', function ($curso, $carrera = null){
    return "Este es el curso de $curso de la carrera de  $carrera";
});

// Route::get('/user/{name?}', function ($name = null){
//     return $name;
// });

Route::get('/user/{id}', function ($id) {
    return "Usuario con identificador aceptado";
})->where('id', '[0-9]+');