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

Auth::routes();
Route::group(['middleware' => 'prevent-back-history'],function(){
 
    
    Route::get('/', function () {
        return view('welcome');
    });
   Route::resource('/Empleados','App\Http\Controllers\EmpleadosController');
   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   Route::get('/recursos', [App\Http\Controllers\RecursosController::class, 'index'])->name('recursos');
   Route::get('/Empleados',[App\Http\Controllers\EmpleadosController::class, 'index'])->name('verempleados');
   Route::get('/Empleados/create',[App\Http\Controllers\EmpleadosController::class, 'create'])->name('create');
   Route::post('Empleados/store', 'App\Http\Controllers\EmpleadosController@store')->name('Empleados.store');  
   Route::post('Empleados/bajas', 'App\Http\Controllers\EmpleadosController@bajas')->name('Empleados.bajas');  
   Route::resource('/Empleados\edit','App\Http\Controllers\EmpleadosController@edit');
   Route::put('/Empleados/Update/{id}','App\Http\Controllers\EmpleadosController@update')->name('update');
   Route::get('exportar_excel', 'App\Http\Controllers\EmpleadosController@exportar_excel')->name('Empleados.exportar_excel'); 
   Route::get('grafica', 'App\Http\Controllers\EmpleadosController@grafica_empleados')->name('Empleados.grafica_empleados'); 




    
  });