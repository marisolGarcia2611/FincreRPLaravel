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

Route::get('/', function () {return view('welcome');});
Auth::routes();
Route::get('/Empleados/exportar_excel', 'App\Http\Controllers\EmpleadosController@exportar_excel')->name('Empleados.exportar_excel'); 
Route::post('/Nominas/importBoTrans', 'App\Http\Controllers\NominasController@importar_excel')->name('Nominas.importar_excel'); 

Route::get('/Nominas/exportar_excel', 'App\Http\Controllers\NominasController@exportar_excel')->name('Nominas.exportar_excel'); 

Route::group(['middleware' => 'prevent-back-history'],function(){
   Auth::routes();

   //ruta de el modulo de empleados
  //  Route::resource('/Empleados','App\Http\Controllers\EmpleadosController');
   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   Route::get('/recursos', [App\Http\Controllers\RecursosController::class, 'index'])->name('recursos');
   Route::get('/Empleados',[App\Http\Controllers\EmpleadosController::class, 'index'])->name('verempleados');
   Route::get('/Empleados/create',[App\Http\Controllers\EmpleadosController::class, 'create'])->name('create');
   Route::post('Empleados/store', 'App\Http\Controllers\EmpleadosController@store')->name('Empleados.store');  
   Route::post('Empleados/contratoSubir', 'App\Http\Controllers\EmpleadosController@contratoSubir')->name('Empleados.contratoSubir'); 
   Route::post('Empleados/bajas', 'App\Http\Controllers\EmpleadosController@bajas')->name('Empleados.bajas');
   Route::get('/Empleados/{id}/edit','App\Http\Controllers\EmpleadosController@edit')->name('Empleados.edit');
   Route::put('/Empleados/Update/{id}','App\Http\Controllers\EmpleadosController@cambiar')->name('cambiar');
   Route::get('/Empleados/editBaja/{id}','App\Http\Controllers\EmpleadosController@editarBaja');
   Route::put('/Empleados/AtualizarBaja','App\Http\Controllers\EmpleadosController@BajaEmpleadoEdit')->name('Empleados.atualizarBaja');
   Route::get('/ReactivarEmpleado/{id}','App\Http\Controllers\EmpleadosController@traerVistaReactivar')->name('reactivar');
   Route::put('/Empleados/UpdateReactivar/{id}','App\Http\Controllers\EmpleadosController@reactivar')->name('Empleados.updateReactivar');

   
   Route::get('grafica', 'App\Http\Controllers\EmpleadosController@grafica_empleados')->name('Empleados.grafica_empleados'); 
   Route::post('/guardar','App\Http\Controllers\EmpleadosController@mguardar')->name('guardar');

    //ruta de modulo de nominas
    Route::resource('/Nominas','App\Http\Controllers\NominasController');
    Route::get('/Nominas',[App\Http\Controllers\NominasController::class, 'index'])->name('vernominas');
    Route::get('/Nominasinsert/insertarnomina/{id}/{idpago_nomina}','App\Http\Controllers\NominasController@insertarnomina')->name('Nominasinsert');
    Route::get('/Nominas/cerrarnomina/{id}/{dias}','App\Http\Controllers\NominasController@cerrarnomina')->name('Nominascerrar');
    Route::get('/Nominas/calcularnomina/{id}/{dias}','App\Http\Controllers\NominasController@calcularnomina')->name('Nominascalcular');
    Route::get('/Nominaseditar/editarnomina/{id}/{idtiponomina}','App\Http\Controllers\NominasController@editarnomina')->name('Nominaseditar');
    Route::get('/Nominaseditaremp/editarnomemp/{id}/{idempleado}','App\Http\Controllers\NominasController@editarnomemp')->name('Nominaseditaremp');
    Route::put('/Nominaseditaremp/actualizarEmpleado','App\Http\Controllers\NominasController@actualizarNominaEmp')->name('nominas.actualizaremp');

    // solo de enc
    Route::get('/Nominaseliminar/{id}','App\Http\Controllers\NominasController@nominaeliminar')->name('nominaeliminar');
    //solo de enc det temdet
    Route::get('/Nominaseliminar/temporal/{id}','App\Http\Controllers\NominasController@nominaeliminarTemp')->name('nominaeliminarTemp');
    //solo de enc det
    Route::get('/Nominaseliminar/calcular/{id}','App\Http\Controllers\NominasController@nominaeliminarCalcu')->name('nominaeliminarCalcu');



    // Sistemas panel de control
    Route::get('/Panel', 'App\Http\Controllers\SistemasController@index')->name('panel');
    Route::get('/Permisos', 'App\Http\Controllers\SistemasController@indexPermisos')->name('permisos');
    Route::post('/AsignarPermiso', 'App\Http\Controllers\SistemasController@asignarPermiso')->name('asignarPermiso');


    // Resgistro de usuarios
    Route::get('/Registro', 'App\Http\Controllers\Auth\RegisterController@Index')->name('registro');
    Route::post('/Registro/Crear', 'App\Http\Controllers\Auth\RegisterController@create')->name('createUser');
    
    

  });