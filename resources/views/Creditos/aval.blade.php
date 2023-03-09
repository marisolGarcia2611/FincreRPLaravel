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

@endif


<div class="mt-4 text-center shadow p-3 mb-5 bg-body rounded" style="width: 100%;z-index: 1;top: 0vh;position: fixed;">
    <div class="mt-2">
        <h5 class="fw-light">Fase 1: Captura Inicial de Crédito</h5>

        <div>
            <nav>
                <div class="row p-3">
                    
                    <div class="col-md-2" style="margin-right:30px;margin-left:30px;">
                        <div class="row">
                            <div class="col-md-6 border1"><h2 class="fw-light">1</h2></div>
                            <div class="col-md-6" style="padding:15px;"><h5 class="fw-light">Distribuidor</h5></div>
                        </div> 
                    </div>

                    <div class="col-md-2 line1"></div>

                    <div class="col-md-2">
                        <div class="row">
                            <div class="col-md-6 circle2"><h2 class="fw-light">2</h2></div>
                            <div class="col-md-6" style="padding:15px;"><h5 class="fw-light">Aval</h5></div>
                        </div> 
                    </div>

                    <div class="col-md-2 line2"></div>

                    <div class="col-md-2">
                        <div class="row">
                            <div class="col-md-6 border3"><h2 class="fw-light">3</h2></div>
                            <div class="col-md-6" style="padding:15px;"><h5 class="fw-light">Documentos</h5></div>
                        </div> 
                    </div>
                    
                </div>
            </nav>
        </div>

    </div>
</div>

<div style="height: 230px"></div>

<div class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>

        <div class="card p-5 cartaForm mb-4">
            <h4 class="fw-light">1. Aval</h4>  

             <div class="row">
                <div class="col text-center mt-1">
                    <h1 class="iconBlue"><i class="fa-solid fa-file-invoice"></i></h1>
                    <div id="boton1" class="btn push bg-gradient-pink m-0 p-1 sizeItem" onclick="divLogin1()">
                        <h6 class="fw-light">Datos Generales &nbsp;&nbsp; <i class="fa-solid fa-chevron-down"></i></h6>
                    </div> 
                </div>
              </div>


              <div id="caja1">
                    
                      <div class="row mt-3">
                          <div class="col-md-2">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Sucursal</label>
                                  <input type="text"  class="form-control" name="sucursal" id="sucursal"  maxlength="10" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-4">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Promotor Encargado</label>
                                  <input type="text"  class="form-control" name="promotor_encargado" id="promotor_encargado"  maxlength="10" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>     
                      </div>
  
                      <div class="row mt-3">
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Primer Nombre</label>
                                  <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre"    minlength="3" maxlength="15" required />
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
                              <label class="form-label" for="form8Example4">Segundo Nombre</label>
                                  <input type="text"  class="form-control" name="segundo_nombre" id="segundo_nombre"  value=""  maxlength="15" required />
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
                              <label class="form-label" for="form8Example4">Apellido Parterno</label>
                                  <input type="text"  class="form-control" name="apellido_paterno" id="apellido_paterno"   minlength="3" maxlength="15" required />
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
                              <label class="form-label" for="form8Example4">Apellido Materno</label>
                                  <input type="text"  class="form-control" name="apellido_materno" id="apellido_materno"  minlength="3" maxlength="15" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
                      </div>
  
                      <div class="row mt-3">
  
                          <div class="col-md-2">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Sexo</label>
                                  <select class="form-select" name="sexo" id="sex">
                                      <option value="" >...</option>
                                      <option value="F">F</option>
                                      <option value="M">M</option>
                                  </select>
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
  
                          <div class="col-md-2">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Fecha de Nacimiento</label>
                                  <input type="date"  class="form-control" name="" id=""  minlength="" maxlength="" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-4">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">CURP</label>
                              <input type="text" name="curp" id="curp" class="form-control"  maxlength="18" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-4">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">RFC</label>
                              <input type="text" name="rfc" id="rfc" class="form-control" placeholder="0000000000000" maxlength="13" required/>
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          
                      </div>
  
                      <div class="row mt-3">
                          <div class="col-md-2">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Estado Civil</label>
                                  <select class="form-select" name="estado_civil" id="estado_civil">
                                      <option value="">...</option>
                                      <option value="SOLTERO">Soltero</option>
                                      <option value="CASADO">Casado</option>
                                      <option value="UNION_LIBRE">Unión Libre</option>
                                  </select>
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-2">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Telefono</label>
                                  <input type="text"  class="form-control" name="telefono" id="telefono" minlength="10" maxlength="10" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-4">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Estado</label>
                                  <input type="text"  class="form-control" name="estado" id="estado"   minlength="3" maxlength="30" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-4">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Ciudad</label>
                                  <input type="text"  class="form-control" name="ciudad" id="ciudad"   minlength="3" maxlength="30" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
                      </div>
  
                      <div class="row mt-3">
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">CP</label>
                                  <input type="text"  class="form-control" name="codigo_postal" id="codigo_postal"  maxlength="6" required />
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
                              <label class="form-label" for="form8Example4">Colonia</label>
                                  <input type="text"  class="form-control" name="colonia" id="colonia"  maxlength="60" required />
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
                              <label class="form-label" for="form8Example4">Calle</label>
                                  <input type="text"  class="form-control" name="calle" id="calle" maxlength="60" required />
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
                              <label class="form-label" for="form8Example4">Numero Interior</label>
                                  <input type="text"  class="form-control" name="numero_interior" id="numero_interior" placeholder="#00" maxlength="10" />
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
                              <label class="form-label" for="form8Example4">Numero Exterior</label>
                                  <input type="text"  class="form-control" name="numero_exterior" id="numero_exterior" maxlength="10" placeholder="#00" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
                      </div>
  
                      <div class="row mt-3">
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Lugar de Empleo</label>
                                  <input type="text"  class="form-control" name="lugar_empleo" id="lugar_empleo" maxlength="30" required />
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
                              <label class="form-label" for="form8Example4">Puesto de Empleo</label>
                                  <input type="text"  class="form-control" name="puesto_empleo" id="puesto_empleo" maxlength="30" required />
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
                              <label class="form-label" for="form8Example4">Salario Mensual</label>
                                  <input type="text"  class="form-control" name="salarioMensual" id="salarioMensual" maxlength="20" required />
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
                              <label class="form-label" for="form8Example4">Egreso Fijo Mensual</label>
                                  <input type="text"  class="form-control" name="egresoFijoMensual" id="egresoFijoMensual" maxlength="20" required />
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
                              <label class="form-label" for="form8Example4">Antiguedad</label>
                                  <input type="text"  class="form-control" name="antiguedad" id="antiguedad"  maxlength="20" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
                      </div>
  
                      <div class="row mt-3">
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Telefono de Empleo</label>
                                  <input type="text"  class="form-control" name="telefono_empleo" id="telefono_empleo"  maxlength="10" required />
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
                              <label class="form-label" for="form8Example4">Dirección de Empleo</label>
                                  <input type="text"  class="form-control" name="direccion_empleo" id="direccion_empleo"  maxlength="50" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>     
                      </div>
              </div>
        </div>


        <div class="mb-5">
            <div class="text-center">
                <div class="btn-group">
                    {{-- <button class="btn btn-outline-secondary">Abandonar</button>
                    <button class="btn btn-dark">Continuar</button> --}}
                    <a class="btn btn-outline-secondary" href="/Creditos">Abandonar</a>
                    <a class="btn btn-blue" href="/Creditos/CapturaDocumentos">Continuar</a>
                </div>
            </div>
        </div>


    </form>
</div>



<script>
    // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
    (function () {
      'use strict'
  
      // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
      var forms = document.querySelectorAll('.needs-validation')
      // Bucle sobre ellos y evitar el envío
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>
  <script>

    $(document).ready(function() { 
        $('#caja1').hide();
    });
    
    
   </script>
<script>
        var clic1 = 1;
        var uno1 = document.getElementById('boton1');
    
    
        function divLogin1(){ 
        if(clic1==1){
            
            document.getElementById("caja1").style.height = "100%";
            $('#caja1').show(); 
            uno1.innerHTML = 'Datos Generales &nbsp;&nbsp; <i class="fa-solid fa-chevron-up"></i>';   
            clic1 = clic1 + 1;
        } 
        else{
            document.getElementById("caja1").style.height = "0px"; 
            $('#caja1').hide();   
            uno1.innerHTML = 'Datos Generales &nbsp;&nbsp; <i class="fa-solid fa-chevron-down"></i>';  
            clic1 = 1;
        }   
        }
    
</script>

@endsection