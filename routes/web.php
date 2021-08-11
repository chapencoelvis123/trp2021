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
   /* return view('welcome');*/
   return "bienvenido a la pagina principal";
});
Route::get('cursos', function () { 
    return "bienvenido a la pagina cursos";
});

//cursos/create

Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
});


/*Route::get('cursos/{curso}', function ($curso) { 
    return "bienvenido al curso: $curso";
});*/

Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
    if($categoria){ 
    return "Bienvenido al curso $curso,de la categoria $categoria";
 }
else{ 
    return "bienvenido al curso: $curso";

}
});