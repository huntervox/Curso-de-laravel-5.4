<?php

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

Route::get('prueba',function(){
	return "Hola desde routes.php";
});

Route::get('nombre/{nombre}',function($nombre){
	return "Mi nombre es: ".$nombre;
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('edad/{edad?}', function ($edad = 23) {
    return 'Mi edad es '.$edad;
});

Route::get('/', function () {
    return view('welcome');
});
