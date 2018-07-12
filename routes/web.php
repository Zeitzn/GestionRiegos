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

Route::get('/', function () {
    return view('index');
});


// Route::get('prueba/{name}','PruebaController@prueba');

// Route::resource('trainers','TrainerController');

//Usar todas las acciones del controlador comunidad
Route::resource('/comunidad','ComunidadController');

//Usar todas las acciones del controlador agua
Route::resource('/agua','AguaController');

//Usar todas las acciones del controlador usuario
Route::resource('/usuario','UsuarioController');



//Usar todas las acciones del controlador parcela
Route::resource('/parcela','ParcelaController');

//Usar todas las acciones del controlador peticion
Route::resource('/peticion','PeticionController');

//Usar todas las acciones del controlador formula
Route::resource('/formula','FormulaController');



//Funciones auxiliares para peticiones ajax
Route::get('/auxiliar/cargar','AuxiliarController@cargarUsuarios');
Route::get('/auxiliar/cargarParcela','AuxiliarController@cargarParcelas');
Route::get('/auxiliar/cargarParcelasUsuario/{id}','AuxiliarController@cargarParcelasUsuario');
Route::post('/auxiliar/import-excel', 'AuxiliarController@importUsers');
Route::get('/auxiliar/datosFormula/{inferior}/{superior}', 'AuxiliarController@datosFormula');


