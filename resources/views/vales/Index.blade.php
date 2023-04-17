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

@endif

<div class="container mt-5">
    <div class="text-center">
        <h1 class="fw-light">Gestión de Creditos</h1>
    </div>


    <div class="mt-5">
        <div class="text-center pCollage">
          <form action="/vales/CapturaDistribuidor">
            <button type="submit" class="btn-gradient-pink btnCollage"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp; Nuevo Movimineto</button>
          </form>
        </div>


        <div class="pCollage">
            <div class="card-group text-center">
                <div class="card text-light bgCollage">
                  <img src="{{ asset('Images/1.png') }}" class="card-img responsiveCollage" alt="...">
                  <div class="card-img-overlay translateY">
          
                    <figure class="animate_animated animate_backInDown">
                        <blockquote class="blockquote">
                        <a href="/vales/GestionFase1" class="link-light">
                          <h2 class="fw-bold shadow-text">Fase 1</h2>
                          <h1 class="fw-light shadow-text"><i class="fa-solid fa-cubes"></i></h1>
                        </a>
                          
                        </blockquote>
                        <figcaption class="blockquote-footer shadow-text fs-8 text-light">
                          Control de la primera fase del credito <cite title="Título fuente">Distribuidor, Aval y Documentos importados</cite>
                        </figcaption>
                      </figure>
                  </div>
                </div>
          
                <div class="card text-light bgCollage">
                  <img src="{{ asset('Images/2.png') }}" class="card-img responsiveCollage" alt="...">
                  <div class="card-img-overlay translateY">
                      <figure class="animate_animated animate_backInDown">
                          <blockquote class="blockquote">
                            <a class="link-light" href="/vales/GestionFase2">
                                <h2 class="fw-bold shadow-text">Fase 2</h2> 
                                <h1 class="fw-light shadow-text"><i class="fa-solid fa-cubes"></i></h1>
                            </a>
                           
                          </blockquote>
                          <figcaption class="blockquote-footer shadow-text fs-8 text-light">
                            Control y gestión de la segunda fase <cite title="Título fuente">Mesa se credito, solicitudes y revisones</cite>
                          </figcaption>
                        </figure>
                  </div>
                </div>
          
             
            </div>
        </div>

    </div>

</div>




@endsection