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
        <h2 class="fw-light">Gestión de Créditos</h2>
    </div>
    
        <div class="pCollage mt-5">
            <div class="card-group text-center">
                <div class="card text-light bgCollage borderleft">
                  <img src="{{ asset('Images/18.png') }}" class="card-img responsiveCollage borderleft" alt="...">
                  <div class="card-img-overlay translateY">
          
                    <figure class="animate__animated animate__backInDown">
                        <blockquote class="blockquote">
                        <a href="/gestionCreditos/Valera" class="link-light">
                          <h2 class="fw-bold shadow-text">Valera</h2>
                          <h1 class="fw-light shadow-text"><i class="fa-solid fa-cubes"></i></h1>
                        </a>
                          
                        </blockquote>
                        <figcaption class="blockquote-footer shadow-text fs-8 text-light">
                          Control de la entrega <cite title="Título fuente">de valeras.</cite>
                        </figcaption>
                      </figure>
                  </div>
                </div>
          
                <div class="card text-light bgCollage">
                  <img src="{{ asset('Images/17.png') }}" class="card-img responsiveCollage" alt="...">
                  <div class="card-img-overlay translateY">
                      <figure class="animate__animated animate__backInDown">
                          <blockquote class="blockquote">
                            <a class="link-light" href="/gestionCreditos/Cliente">
                                <h2 class="fw-bold shadow-text">Clientes</h2> 
                                <h1 class="fw-light shadow-text"><i class="fa-solid fa-cubes"></i></h1>
                            </a>
                           
                          </blockquote>
                          <figcaption class="blockquote-footer shadow-text fs-8 text-light">
                            Control y gestión de  <cite title="Título fuente">clientes bajo un distribuidor.</cite>
                          </figcaption>
                        </figure>
                  </div>
                </div>
          
                <div class="card text-light bgCollage borderRight">
                  <img src="{{ asset('Images/10.png') }}" class="card-img responsiveCollage borderRight" alt="...">
                  <div class="card-img-overlay translateY">
                      <figure class="animate__animated animate__backInDown">
                          <blockquote class="blockquote">
                            <a href="#" class="link-light">
                                <h2 class="fw-bold shadow-text">Plazos</h2>
                                <h1 class="fw-light shadow-text"><i class="fa-solid fa-cubes"></i></h1>
                            </a>
                           
                          </blockquote>
                          <figcaption class="blockquote-footer shadow-text fs-8 text-light">
                            Gestón de <cite title="Título fuente"> plazos para los clientes.</cite>
                          </figcaption>
                      </figure>
                  </div>
              </div>
            </div>
        </div>

    </div>

</div>




@endsection