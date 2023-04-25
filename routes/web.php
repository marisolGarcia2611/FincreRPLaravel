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

//Ruta de excel-------------------------------------------------------------------------------------
  Route::get('/Empleados/exportar_excel', 'App\Http\Controllers\EmpleadosController@exportar_excel')->name('Empleados.exportar_excel'); 
  Route::post('/Nominas/importBoTrans', 'App\Http\Controllers\NominasController@importar_excel')->name('Nominas.importar_excel'); 
  Route::get('/Nominas/exportar_excel', 'App\Http\Controllers\NominasController@exportar_excel')->name('Nominas.exportar_excel'); 

  Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/back', function () {return back();});


   //Ruta de el modulo de empleados-------------------------------------------------------------------------------------
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
   //subir archivo    
   Route::get('grafica', 'App\Http\Controllers\EmpleadosController@grafica_empleados')->name('Empleados.grafica_empleados'); 
   Route::post('/guardar','App\Http\Controllers\EmpleadosController@mguardar')->name('guardar');


    //Ruta de modulo de nominas---------------------------------------------------------------------------------------------
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

    // Ruta sistemas panel de control---------------------------------------------------------------------------------------------
    Route::get('/Panel', 'App\Http\Controllers\SistemasController@index')->name('panel');
    Route::get('/Permisos', 'App\Http\Controllers\SistemasController@indexPermisos')->name('permisos');
    Route::get('/Acciones', 'App\Http\Controllers\SistemasController@indexAcciones')->name('acciones');
    Route::post('/AsignarPermiso', 'App\Http\Controllers\SistemasController@asignarPermiso')->name('asignarPermiso');

    // Ruta resgistro de usuarios--------------------------------------------------------------------------------------------------
    Route::get('/Registro', 'App\Http\Controllers\Auth\RegisterController@Index')->name('registro');
    Route::post('/Registro/Crear', 'App\Http\Controllers\Auth\RegisterController@create')->name('createUser');

    // Area de vales--------------------------------------------------------------------------------------------------
    Route::get('/vales',[App\Http\Controllers\valesController::class, 'index'])->name('vales');
    Route::get('/vales/CapturaDistribuidor', 'App\Http\Controllers\valesController@getDistribuidor')->name('getDistribuidor');
    Route::get('/vales/CapturaAval', 'App\Http\Controllers\valesController@getAval')->name('getAval');
    Route::get('/vales/CapturaDocumentos', 'App\Http\Controllers\valesController@getDocumentos')->name('getDocumentos');
    Route::get('/vales/GestionFase1', 'App\Http\Controllers\valesController@getGestionFase1')->name('getGestionFase1');


    Route::post('/vales/insertardistribuidor', 'App\Http\Controllers\valesController@insertardistribuidor')->name('vales.insertardistribuidor');  
    Route::post('/vales/insertaraval', 'App\Http\Controllers\valesController@insertaraval')->name('vales.insertaraval');  
    Route::post('/vales/Guardar_archivos','App\Http\Controllers\valesController@Guardar_archivos')->name('vales.Guardar_archivos');

    Route::get('/vales/Termina_Proceso_aval/{id}','App\Http\Controllers\valesController@Termina_Proceso_aval')->name('Termina_Proceso_aval');
    Route::post('/vales/insertaraval_termino_proceso', 'App\Http\Controllers\valesController@insertaraval_termino_proceso')->name('insertaraval_termino_proceso'); 
    Route::get('/vales/Termina_Proceso_documentos/{id}','App\Http\Controllers\valesController@Termina_Proceso_documentos')->name('Termina_Proceso_documentos');
    Route::post('/vales/Guardar_archivos_termina_proceso','App\Http\Controllers\valesController@Guardar_archivos_termina_proceso')->name('Guardar_archivos_termina_proceso');


    Route::get('/vales/verpdf/{contrato}/{archivo}', 'App\Http\Controllers\valesController@verpdf')->name('vales.verpdf');
  
    Route::get('/vales/getactualizadoc/{id}', 'App\Http\Controllers\valesController@getactualizadoc')->name('vales.getactualizadoc');
    Route::get('/vales/Termina_Proceso_aval/{id}','App\Http\Controllers\valesController@Termina_Proceso_aval')->name('Termina_Proceso_aval');
    Route::post('/vales/distribuidoractualizar/', 'App\Http\Controllers\valesController@distribuidoractualizar')->name('vales.distribuidoractualizar');
    Route::post('/vales/actualizar_aval/', 'App\Http\Controllers\valesController@actualizar_aval')->name('vales.actualizar_aval');
    Route::get('/vales/actualizar_avalup/{id}', 'App\Http\Controllers\valesController@actualizar_avalup')->name('vales.actualizar_avalup');
    
    Route::get('/vales/getactualizardistribuidor/{id}', 'App\Http\Controllers\valesController@getactualizardistribuidor')->name('vales.getactualizardistribuidor');
    Route::get('/vales/enviaramesa_credito/{id}', 'App\Http\Controllers\ValesController@enviaramesa_credito')->name('vales.enviaramesa_credito');
    Route::get('/vales/enviaramesa_credito_act/{id}', 'App\Http\Controllers\ValesController@enviaramesa_credito_act')->name('vales.enviaramesa_credito_act');

    // Area de creditos--------------------------------------------------------------------------------------------------
    Route::get('/vales/GestionFase2', 'App\Http\Controllers\ValesController@getGestionFase2')->name('getGestionFase2');
    Route::get('/vales/GestionFase2/EditarDistribuidor', 'App\Http\Controllers\ValesController@getEditDistribuidor')->name('getEditDistribuidor');
    Route::get('/vales/GestionFase2/SolicitudMesaCredito/{id}', 'App\Http\Controllers\ValesController@getSolicitudMesaCredito')->name('getSolicitudMesaCredito');
    Route::get('/vales/GestionFase2/CreditosDictamen', 'App\Http\Controllers\ValesController@getCreditosDictamen')->name('getCreditosDictamen');


    Route::get('/Guardar_observaciones', 'App\Http\Controllers\ValesController@Guardar_observaciones')->name('Guardar_observaciones');
    Route::get('/rechazar_distribuidor/{id}', 'App\Http\Controllers\ValesController@rechazar_distribuidor')->name('rechazar_distribuidor');
    Route::get('/aprobar_distribuidor/{id}', 'App\Http\Controllers\ValesController@aprobar_distribuidor')->name('aprobar_distribuidor');

    Route::get('/enviar_mensaje/{tipo}/{ididstribuidor}', 'App\Http\Controllers\ValesController@enviar_mensaje')->name('enviar_mensaje');
  
  });