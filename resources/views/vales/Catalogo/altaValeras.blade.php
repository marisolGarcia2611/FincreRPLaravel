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
{{-- ALERTAS --}}


<div id="btnBack"></div>  


<!-----Principal Area----->
<div class="mt-4 p__little">
    <br/>
    <br/>
    <center class="container mt-1">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="offcanvas-body text-start">
            <div class="container p-4">
                <div class="row text-center">
                    <h3 class="fw-light">Alta de valeras</h3>
                </div>

                <form action="" method="POST" class="g-3 form needs-validation" novalidate>
                    {{-- Datos de capital --}}
                  <div name="ejMultiInput">
                    <div class="mb-4">
                        <div class="row">
                            <a class="col-md-3 d-none d-md-block nav-link btn btn-mar step" href="#paso1"><h6 class="pt-1 text-light"><b>1</b></h6></a>    
                            <h6 class="col-md-2 fw-light">Captura de envios</h6>
                        </div>

                        <!-----validación  Area----->
                        <div class="row mb-5">
                            <div class="row">
                                <div class="col-md-7">
                                    <!-----valera Area----->
                                    <center class="row p-3">
                                        <div id="valera"></div>
                                    </center>
                                </div>

                                <div class="col-md-5">
                            
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label" for="form8Example4">Sucursal</label>
                                                    <input type="text" placeholder="##" class="form-control" name=""  minlength="" maxlength="" id="sucursal1" onkeyup="sucursal();" required />
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
                                                <label class="form-label" for="form8Example4">Cantidad de valeras</label>
                                                    <input placeholder="00" class="form-control" name="" minlength="" maxlength="" id="envios1"  maxlength="2" name="numInputs" onkeyup="envios()" size="5" type="text" required/>                               
                                                    <div class="valid-feedback">
                                                    ¡Se ve bien!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    Por favor, completa la información requerida.
                                                    </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label" for="form8Example4">Fecha de envio</label>
                                                    <input type="date" class="form-control" name=""  minlength="" maxlength="" id="fecha1" onkeyup="fecha();" required />
                                                    <div class="valid-feedback">
                                                    ¡Se ve bien!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    Por favor, completa la información requerida.
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="wr mt-3">
                                            <button class="slide_from_left" type="button" onclick="multiplicar()" ><h2><i class="fa-brands imgr fa-slack"></i></h2><p class="mt-d8">Procesar</p> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>

                    {{-- Datos generales --}}
                    <div class="mb-5">
                        <div class="row mb-4">
                            <a class="col-md-3 d-none d-md-block nav-link btn btn-mar step" href="#paso1"><h6 class="pt-1 text-light"><b>2</b></h6></a>    
                            <h6 class="col-md-2 fw-light" id="paso1">Registro de Folios</h6>
                        </div>

                        <center class="shadow bg-light rounded-3 p-3 border">
                            <div class="row mt-2 mb-2" id="divMultiInputs">
                            </div>
                            <span class="text-gray fst-italic fw-bold"><i class="fa-solid fa-circle-exclamation"></i>&nbsp;Numeración de folios</span>
                        </center> 
                    </div>
                  </div>

                    <div class="mb-4 text-center">
                        <button type="submit" class="btn btn-blue col-md-2 col fw-light rounded-5 fs-6_5"><i class="fas fa-save"></i>&nbsp;&nbsp; Terminar registro</button></br></br>
                    </div>
                </form>
            </div>
        </div>   
    </center>
    <br/>
</div>



<script src="{{ asset('js/btnBack1.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/altaValera.js') }}"></script>

<script>

function multiplicar(){
    
    var num=  document.getElementById('envios1').value
      var div='';
      for (var i=0;i<num;i++){ 
           var cont=i+1;
           div+="<div class='col-md-3 margin-light'><div class='input-group'><span class='input-group-text input-t fs-9'>"+"<b>"+cont+ ".&nbsp;</b>Inicio/Fin"+"</span><input type='text' aria-label='First name' class='form-control maxlength='20' name='foloIni["+cont+"]' type='text' required'/>  <input type='text' aria-label='Last name' class='form-control'maxlength='20' name='folioFin["+cont+ "]' type='text' required /></div></div>";
      }

      document.getElementById("divMultiInputs").innerHTML=div;
}


</script>


@endsection