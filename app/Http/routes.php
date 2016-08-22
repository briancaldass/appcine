<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
metodos http post,get,put,delete
|
*/
// //De esta manera obtenemos el controlador y su metodo con el @ 
// Route::get('controlador','PruebaController@index');

// //De esta manera obtenemos el controlador y su metodo con el @ 
// Route::get('name/{nombre}','PruebaController@nombre');

// //Controlador restful
// Route::resource('movie','MovieController');

// //Esta es una ruta sencilla con el metodo get de http traemos la ruta que necesitamos
// Route::get('prueba',function(){
// 	return "hola desde prueba.php";
// });

// //Este es una ruta con parametros
// Route::get('nombre/{nombre}',function($nombre){
// 	return "Mi nombre es:".$nombre;
// });

// //Este es una ruta con parametros
// Route::get('edad/{edad}',function($edad){
// 	return "La edad es:".$edad;
// });

// //Ruta por default puede darnos una variable o no y le podemos poner una edad
// Route::get('edad2/{edad?}',function($edad=20){
// 	return "La edad es:".$edad;
// });

Route::get('/', function () {
    return view('welcome');
});
