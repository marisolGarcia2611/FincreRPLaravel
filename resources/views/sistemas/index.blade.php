@extends('layouts.app')

@section('content')
{{-- ALERTAS --}}
@if ($mensaje = Session::get('success'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Movimiento completado de forma correcta","success", {buttons: false,timer: 1500});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('warning'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Intente despues o pruebe con otra cosa","warning", {buttons: false,timer: 3000});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('PDFwarning'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Recuerde llenar todos los campos y que formato permitido de archivos es .pdf","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp


  @elseif($mensaje = Session::get('Errorpermisos'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se encontro el permiso para efectuar la accion!","Comunicate al area de sistemas para validar permisos","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp

@endif


<div class="mt-5">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-4 fw-light"> Panel de control</h2>
        </div>

        <div class="row mt-4">
            <div class="col-md-3 mr-2">
                <form action="/Registro">
                    <div class="card text-center shadow-lg p-3 mb-5 bg-body rounded push border-0">
                        <div class="card-body text-center">
                            <button class="btn border-0" type="submit" ><h1 class="text-lightGray text-center"><i class="fas fa-user-plus"></i></h1></button>
                        </div>
                        <button type="submit" class="bg-gradient-pink card-footer fw-light fs-8 border-0">Registrar Usuarios</button>
                    </div>
                </form>
               
            </div>

            <div class="col-md-3 mr-2">
                <form action="/Acciones">
                    <div class="card text-center shadow-lg p-3 mb-5 bg-body rounded push border-0">
                        <div class="card-body">
                            <button class="btn border-0" type="submit" ><h1 class="text-lightGray"><i class="fas fa-user-lock"></i></h1></button>
                        </div>
                        <button type="submit" class="bg-gradient-pink card-footer fw-light fs-8 border-0">Permisos Pantallas</button>
                    </div>
                </form>
            </div>


            <!-- <div class="col-md-3 mr-2">
                <form action="/Permisos">
                    <div class="card text-center shadow-lg p-3 mb-5 bg-body rounded push border-0">
                        <div class="card-body">
                            <button class="btn border-0" type="submit" ><h1 class="text-lightGray"><i class="fas fa-user-lock"></i></h1></button>
                        </div>
                        <button type="submit" class="bg-gradient-pink card-footer fw-light fs-8 border-0">Perfiles</button>
                    </div>
                </form>
            </div> -->



        </div>
        
    </div>
</div>



@endsection