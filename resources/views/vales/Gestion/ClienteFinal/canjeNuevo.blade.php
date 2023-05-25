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
          echo '<script language="success">';
          echo 'swal("¡No se a efectuado la acción!","Intente despues o pruebe con otra cosa","success", {buttons: false,timer: 3000});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('PDFwarning'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Recuerde llenar todos los campos y que formato permitido de archivos es .pdf","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp

  @elseif($mensaje = Session::get('errorvale'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","El folio del vale no es valido","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp


  @elseif($mensaje = Session::get('errorvacio'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Completa los campos requeridos","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp
  @elseif($mensaje = Session::get('erroryausado'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Ya existe un registro con este numero vale","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp

  @elseif($mensaje = Session::get('dimecionvale'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","El folio del vale no pertenece a la valera del distribuidor","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp
  
  @elseif($mensaje = Session::get('Erromonto'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","El Capital del distribuidor es menor al monto solicitado","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp
  @elseif($mensaje = Session::get('errorvalidaprestamo'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Existe un prestamo activo del cliente","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp
  
  

@endif
{{-- ALERTAS --}}


<div id="btnBack"></div>  


<!-----Principal Area----->
<div class="mt-4 p__little">
    <br/>
    <br/>
    <center class="container mt-1">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="offcanvas-body text-start">
            <div class="container p-5">
                <div class="row text-center">
                    <h3 class="fw-light">Canje de vale</h3>
                </div>
                <form action="/validadistribuidor/registrado" method="" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
                @csrf
                    {{-- Datos de capital --}}
                    <div class="mb-4">
                        <div class="row">
                            <a class="col-md-3 d-none d-md-block nav-link btn btn-mar step" href="#paso1"><h6 class="pt-1 text-light"><b>1</b></h6></a>    
                            <h6 class="col-md-2 fw-light">Validación de Distribuidor</h6>
                        </div>

                        <!-----validación  Area----->
                        <div class="row mb-5">
                            <div class="row">
                                <div class="col-md-7">
                                    <!-----valera Area----->
                                    <center class="row p-3">
                                        <div id="valera"></div>
                                    </center>

                                    <center class="row">
                                        <button class="btn border-0 text-secondary"><h6><i class="fa-solid fa-eye"></i> &nbsp; Comprobar firma</6></button>
                                    </center>
                                </div>

                                <div class="col-md-5">
                                <div>
                                <label class="form-label" for="form8Example4">Cliente</label>
                                <input type="text" name="idcliente" value="{{$varidcliente}}">
                                <input type="text" name="nombre" value="{{$varnombrecliente}}">
                                </div>
                                        <div class="col">
                                            <livewire:select></livewire:select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label" for="form8Example4">Plazos</label>
                                                  <select name="plazos" id="" class="form">
                                                  @foreach($plazos as $plazo)
                                                  <option value="{{$plazo->plazos}}">{{$plazo->plazos}}</option>
                                                  @endforeach
                                                  </select>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label" for="form8Example4">Folio de vale</label>
                                                    <input type="text" placeholder="##" class="form-control"   minlength="" maxlength="" id="folio1" onkeyup="folio();" required name="folio" />
                                                    <div class="valid-feedback">
                                                    ¡Se ve bien!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    Por favor, completa la información requerida.
                                                    </div>
                                            </div>
                                        </div>

                                     
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label" for="form8Example4">Monto del vale</label>
                                                  <select name="monto_vale" id="" class="form">
                                                  @foreach($montos as $monto)
                                                  <option value="{{$monto->cantidad}}">{{$monto->cantidad}}</option>
                                                  @endforeach
                                                  </select>
                                            </div>
                             
                            
                                    <div class="row">
                                        <div class="wr mt-3">
                                            <button type="submit" class="slide_from_left"><h2><i class="fa-brands imgr fa-slack"></i></h2><p class="mt-d8">Validar</p> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>

              

<script>


</script>

<script src="{{ asset('js/btnBack1.js') }}"></script>
<script src="{{ asset('js/valera.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>


@endsection