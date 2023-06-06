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
<!--Icon Area-->
<div class="pos__ico">
  <img class="ico__image" src="{{ asset('ico/valeMil.png') }}" alt="valeMil">
</div>

<div class="container mt-5">
    <div class="text-center">
        <br/>
        <h2 class="fw-light">Captura de Creditos</h2>
    </div>


    <div class="mt-5">
        {{-- <div class="text-center pCollage">
          <form action="/vales/CapturaDistribuidor">
            <button type="submit" class="btn-collage-purple btnCollage"><h6 class="fw-light"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp; Nuevo Movimineto</h6></button>
          </form>
        </div> --}}


        <div class="pCollage">
            <div class="card-group text-center">
              @if(Auth::user()->tipo == "sucursal"|| Auth::user()->tipo == "master")
                <div class="card text-light bgCollage borderleft">
                  <img src="{{ asset('Images/13.png') }}" class="card-img responsiveCollage borderleft" alt="...">
                  <div class="card-img-overlay translateY">
          
                    <figure class="animate_animated animate_backInDown">
                        <blockquote class="blockquote">
                        <a href="/vales/GestionFase1" class="link-light">
                          <h2 class="fw-bold shadow-text mb-3">Captura de Distribuidoras</h2>
                          <figcaption class="blockquote-footer shadow-text fs-8 text-light">
                            Control de la primera fase del credito <cite title="Título fuente">Distribuidor, Aval y Documentos importados</cite>
                          </figcaption>
                          <h1 class="fw-light shadow-text"><i class="fa-solid fa-cubes"></i></h1>
                        </a> 
                        </blockquote>
                        
                      </figure>
                  </div>
                </div>
              @else
              <div class="card text-light bgCollage borderleft" disabled>
                <img src="{{ asset('Images/13.png') }}" class="card-img responsiveCollage borderleft" alt="...">
                <div class="card-img-overlay translateY">
        
                  <figure class="animate_animated animate_backInDown">
                      <blockquote class="blockquote">
                      <a href="#" class="link-light" onclick="NoPermitidoAdmin()">
                        <h2 class="fw-bold shadow-text mb-3">Captura de Distribuidoras</h2>
                        <figcaption class="blockquote-footer shadow-text fs-8 text-light">
                          Control de la primera fase del credito <cite title="Título fuente">Distribuidor, Aval y Documentos importados</cite>
                        </figcaption>
                        <h1 class="fw-light shadow-text"><i class="fa-solid fa-cubes"></i></h1>
                      </a> 
                      </blockquote>
                      
                    </figure>
                </div>
              </div>
              @endif
                <div class="card text-light bgCollage borderRight">
                  <img src="{{ asset('Images/12.png') }}" class="card-img responsiveCollage borderRight" alt="...">
                  <div class="card-img-overlay translateY">
                      <figure class="animate_animated animate_backInDown">
                          <blockquote class="blockquote">
                            <a class="link-light" href="/vales/GestionFase2">
                                <h2 class="fw-bold shadow-text mb-3">Creditos en Dictamen</h2> 
                                <figcaption class="blockquote-footer shadow-text fs-8 text-light">
                                  Control y gestión de la segunda fase <cite title="Título fuente">Mesa se credito, solicitudes y revisones</cite>
                                </figcaption>
                                <h1 class="fw-light shadow-text"><i class="fa-solid fa-cubes"></i></h1>
                            </a>
                          </blockquote>
                         
                        </figure>
                  </div>
                </div>
          
             
            </div>
        </div>

    </div>

</div>


<script>
  function NoPermitidoAdmin(){
    swal("¡No tienes el perfil adecuado!","Tu perfil administrtivo no te permite acceder","warning", {buttons: false,timer: 3000});
  }

  function NoPermitidoSucursal(){
    swal("¡No tienes el perfil adecuado!","Tu perfil de sucursal no te permite acceder","warning", {buttons: false,timer: 3000});
  }
</script>

@endsection