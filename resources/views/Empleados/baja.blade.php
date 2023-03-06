@extends('layouts.app')
@section('content')
<!--INICIO BUTON AREA-->
<div class="pos__btnBack">
  <div class="wrapper"> 
    <h5 class="btnBack" onClick="history.go(-1);"><i class="fas fa-solid fa-arrow-left"></i></h5>
  </div>
      <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <defs>
              <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
              </filter>
          </defs>
      </svg>
  </div>
  <!--FIN BUTON AREA-->  


@foreach($obtenerbajas as $bajas)
  <div class="mt-5 p__little">
      <nav id="navbar-example2" class="navbar navbar-light bg-light text-light px-3 d-none d-md-block nav-float shadow-lg p-3 mb-5 bg-body">
        <ul style="margin-left:-20px;margin-right: 10px;">
          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#pas1">1. Paso</a>
          </div>
          
          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#pas2">2. Paso</a>
          </div>
      
          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#pas3">3. Paso</a>
          </div>

          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#pas4">4. Paso</a>
          </div>

          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#pas5">5. Paso</a>
          </div>
        </ul>
      </nav>
  </div>


  <div class="container mt-5 p__little">
        <div class="offcanvas-body small">
            <div class="container">
              <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                <div class="text-center text-primary mt-3 mb-4">
                  <h1><i class="fas fa-exclamation-triangle"></i></h1> 
                  <h4>Este empleado esta inactivo en este momento</h4>
               </div>
              
                <form action="{{ route('Empleados.atualizarBaja') }}" method="POST" class="g-3 needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                        {{------------------ Detalles de la baja--------------------}}
                    <div class="mb-4 card p-5 cartaForm">
                        <h4 id="pas1">Paso 1. Información de baja</h4>
                        <br/>
                        <input hidden value="{{$bajas->idempleado}}"  id="ids" name="ids"/>
                        <input hidden value="{{$bajas->id}}" name="id"/>
                            <div class="row text-center">
                            <div class="container">
                                <hr/>
                                <div class="row mb-3">
                                    <div  class="col-md-2" scope="row">
                                        <label class="form-label" for="form8Example4">Nombre</label> 
                                        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$bajas->primer_nombre}} {{$bajas->segundo_nombre}} {{$bajas->apellido_paterno}} {{$bajas->apellido_materno}}" />
                                    </div>
                                    <div  class="col-md-2" scope="row">
                                        <label class="form-label" for="form8Example4">Puesto</label> 
                                        <input class="form-control" type="text"  name="t_puesto" id="t_puesto" value="{{$bajas->puesto}}"/>
                                    </div>
                                    <div  class="col-md-3" scope="row">
                                        <label class="form-label" for="form8Example4">Salario Diario Integrado</label> 
                                        <input class="form-control" type="text" name="salario" id="salario" value="{{$bajas->salarioDiario}}"/>
                                    </div>
                                    <div  class="col-md-2" scope="row">
                                        <label class="form-label" for="form8Example4">Salario Mensual</label> 
                                        <input class="form-control" type="text" name="salarioMensual" id="salarioMensual" value="{{$bajas->salarioMensual}}"/>
                                    </div>
                                    <div  class="col-md-2" scope="row">
                                        <label class="form-label" for="form8Example4">Fecha de Ingreso</label> 
                                        <input class="form-control" type="text" name="fecha_ingresoe" id="fecha_ingreso_empelado" value="{{$bajas->fecha_ingreso}}" /> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div  class="col" scope="row">
                                        <label class="form-label" for="form8Example4">Tipo Infonavit</label> 
                                        <input class="form-control" type="text" name="t_infonavit" id="t_infonavit" value="{{$bajas->infonavit}}" />
                                    </div>
                                    <div  class="col" scope="row">
                                        <label class="form-label" for="form8Example4">Empresa</label> 
                                        <input class="form-control" type="text" name="empresa" id="empresa" value="{{$bajas->empresa}}" />
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <hr/>
                            </div>
                            </div>
                    </div> 
                
                    {{------------------ Descripcion de baja--------------------}}
                    <div class="mb-4 card p-5 cartaForm" >
                        <h4 id="pas2">Paso 2. Detalles de baja</h4>
                        <div class="row">
                                <div class="col-md-4">
                                <label class="form-label" for="form8Example4">Tipo de Baja</label> 
                                <select name="tipo_baja" class="form-select" required>
                                    <option  selected value="finiquito">Finquito</option>
                                </select>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                </div>
                                </div>
        
                                <div class="col-md-8">
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">Descripcion de la baja</label>         
                                    <textarea class="form-control" name="descripcion_baja"  placeholder="Redacte descripción de baja" value="{{$bajas->descripcion}}" maxlength="250" minlength="5" required></textarea>
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    ¡Tiene que justificar la actualización de la baja del empleado!
                                    </div>
                                </div>
                                </div>
                                
                        </div>
                    </div>  
                    
                    {{------------------ Percepciones--------------------}}
                    <div class="mb-4 card p-5 cartaForm">
                        <h4 id="pas3">Paso 3. Percepciones</h4>
                        <div class="row text-center">
                            <div class="col">
                            <label class="fs-6">Aplicar prima vacacional 
                                <input style="border: .5px solid rgb(165, 165, 165);width:15px;height:15px;" class="form-check-input" type="checkbox"  id="terminos" value="1" onclick="terminos_cambio(this)" />
                            </label>
                            </div>
                        </div>
                        <hr/> 
                                
                            <div class="row">
        
                            <div class="col" id="Efectivo">
                                <label class="form-label">fecha de baja</label>
                                <input type="date" name="fecha_baja" id="fecha_baja" class="form-control" placeholder="00.00" value="{{$bajas->fecha_baja}}" required />
                            </div>
        
        
                            <div class="col">
                                <div class="form-outline">
                                <label class="form-label" >Dias de Gratificacion</label>
                                    <select name="diasgratificacion" id="diasgratificacion" class="form-select" required>
                                    <option value="{{$bajas->dias_gratificacion}}" selected>{{$bajas->dias_gratificacion}}</option>
                                    {{-- <option selected value="0">Seleccionar los dias a Gratificar</option> --}}
                                    <option  value="0">0</option>
                                    <option  value="10">10</option>
                                    <option  value="15">15</option>
                                    <option  value="20">20</option>
                                    <option  value="30">30</option>
                                    <option  value="40">40</option>
                                    <option  value="50">50</option>
                                    <option  value="60">60</option>
                                    <option  value="70">70</option>
                                    <option  value="80">80</option>
                                    <option  value="90">90</option>
                                    </select>
                                </div>
                            </div>
                
                            <div class="col">
                                <div class="form-outline">
                                <label class="form-label" >Dias trabajados Aguinaldo</label>
                                <input type="text" name="dias_trabajados" id="dias_trabajados" value="{{$bajas->dias_aguinaldo}}" class="form-control" placeholder="10" />
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
                                <label class="form-label" >Dias trabajados a deber</label>
                                <input type="text" Name="dias_trabajadosa_deber" id="dias_trabajadosa_deber" class="form-control" value="{{$bajas->dias_sueldo_a_deber}}" placeholder="10" />
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
                                <label class="form-label" >Dias de vacaciones no tomados</label>
                                  <input type="text" Name="dias_vacaciones" id="vacaciones_notomadas" class="form-control" placeholder="0" value="0"  required/>
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
                                <label class="form-label" >Sueldo proporcional</label>
                                <input type="text" Name="sueldo_poporcional" id="sueldo_poporcional" class="form-control" value="{{$bajas->cantidad_sueldo}}" placeholder="00.00"  />
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
                                <label class="form-label" >Aguinaldo proporcional</label>
                                <input type="text" Name="Aguinaldo_poporcional" id="Aguinaldo_poporcional" class="form-control" value="{{$bajas->cantidad_aguinaldo}}" placeholder="00.00"  />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                </div>
                                </div>
                            </div>
        
                            
                            <div class="col">
                                <!-- Email input -->
                                <div class="form-outline">
                                <label class="form-label" >Cantidad Gratificacion</label>
                                <input type="text" Name="gratificacion" id="gratificacion" class="form-control" value="{{$bajas->cantidad_gratificacion}}" placeholder="00.00"  />
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
                                <label class="form-label" >Prima Vacacional</label>
                                  <input type="text" Name="vacaciones_poporcionales" id="vacaciones_poporcionales" class="form-control" placeholder="00.00" value="0.0" required/>
                                  <div class="valid-feedback">
                                    ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                  </div>
                                </div>
                            </div>
        
        
                            
        
                            <div class="col">
                                <!-- Email input -->
                                <div class="form-outline">
                                <label class="form-label" >Total de percepciones</label>
                                <input  type="text" Name="total_p" id="total_p" class="form-control"  required/>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    ¡Recuerde volver a calcular la baja para continuar!
                                </div>
                                </div>
                            </div>
        
        
                            </div>
                    </div>
    
                    {{------------------ Herramientas--------------------}}
                    <div class="mb-4 row">
                    <div class="col-md-8">
                        <div class="form-outline">
                        <button style="height:50px;width:100%;" class="btn btn-success" type="button" onclick="operaciones()"><i class="fas fa-calculator"></i>&nbsp;Calcular</button>         
                        </div>
                    </div>
    
                    <div class="col-md-4">
                        <div class="form-outline">
                        <button style="height:50px;width:100%;" class="btn btn-outline-primary" type="button" onclick="limpiar()"><i class="fas fa-broom"></i>&nbsp;Limpiar</button>  
                        </div>
                    </div>
                    </div>                    
    
                        {{------------------ Deducciones--------------------}}               
                    <div class="mb-4 card p-5 cartaForm">
                        <div class="row">
                        <h4 id="pas4">Paso 4.Deducciones</h4>
                            <div class="row">
                                <div class="col">
                                    <!-- Email input -->
                                    <div class="form-outline">
                                    <label class="form-label" >Imss</label>
                                    <input type="text" Name="imms" id="imms" class="form-control" value="{{$bajas->cantidaddeduccion_imms}}" required/>
                                    <div class="valid-feedback">
                                        ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor, completa la información requerida.
                                    </div>
                                    </div>
                                </div>
    
    
                                
                                <div class="col">
                                    <!-- Email input -->
                                    <div class="form-outline">
                                    <label class="form-label" >Infonavit</label>
                                    <input type="text" Name="infonavit" id="infonavit" class="form-control" placeholder="00.00" value="{{$bajas->cantidaddeduccion_infonavit}}" required/>
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
                                    <label class="form-label" >Transporte</label>
                                    <input type="text" Name="transporte" id="transporte" class="form-control" placeholder="00.00" value="{{$bajas->cantidaddeduccion_transporte}}" required />
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
                                <label class="form-label" >Prestamo</label>
                                    <input type="text" Name="prestamo" id="prestamo" class="form-control" placeholder="00.00" value="{{$bajas->cantidaddeduccion_prestamo}}" required />
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
                                <label class="form-label" >Otras deducciones</label>
                                    <input type="text" Name="otras" id="otras" class="form-control" placeholder="00.00"  value="{{$bajas->cantidaddeduccion_otros}}" required />
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
                                <label class="form-label" >Total de Deducciones</label>
                                    <input  type="text" Name="total_d" id="total_d" class="form-control"  required/>
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    ¡Recuerde volver a calcular la baja para continuar!
                                    </div>
                                </div>
                                </div>
                            </div>
                
                        {{-- <div class="col-md-2"> --}}
                            
                        {{-- </div> --}}
                        </div>
                    </div>             
    
                    <div class="mb-4 card p-5 cartaForm">
                    <h4 id="pas5">Paso 5.Cantidad a entregar</h4>
                    <div class="row text-center">
                        <div class="col-md-3">
                        <input type="text" Name="total_entregar" id="total_entregar" class="form-control" placeholder="00.00" value="{{$bajas->cantidadtotal_entregada}}" required />
                        </div>
                    </div>
                    </div>
                    <br/>
                        
                    
                    <div class="offcanvas-footer text-center" style="padding:10px;">
                    <button class="btn btn-blue"  type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;Guardar baja</button>
                    </div>
                </form>

              </div>
            </div>
        </div> 
  </div>
  @break
  @endforeach


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
      $('#nss').hide();
      $('#excedente').hide();
      $('#Efectivo').hide();
      $('#sueldo_fiscal').hide();
      $('#vacaciones_poporcionales').hide();
      // $('#dias_vacaciones').hide();
      // $('#dias_vacaciones').hide();
      $('#tipo_descuento_infonavit').hide();
      $('#factor_sua').hide();
      $('#descuento_quincenal').hide();
      $('#numero_credito_infonavit').hide();
      $('#vacaciones_notomadas').hide();
  
  
  
      $("table tbody tr").click(function() {
  
        //obtenemos el id del empleado
        var id = $(this).find("td:eq(1)").text();
  
        //obtenemos el nombre completo mediante la tabla
        var nombre = $(this).find("td:eq(3)").text();
        var nombre2 = $(this).find("td:eq(4)").text();
        var Apellido_p = $(this).find("td:eq(5)").text();
        var Apellido_m = $(this).find("td:eq(6)").text();
        var pago_imms =  $(this).find("td:eq(42)").text();
        var tipo_descuentoinfo = $(this).find("td:eq(31)").text();
        var factorsua = $(this).find("td:eq(33)").text();
        var empresa = $(this).find("td:eq(25)").text();
        var puesto_e = $(this).find("td:eq(23)").text();
  
        //obtenemos el salario del empleado
        var salario = $(this).find("td:eq(28)").text();
        var salarioMensual = $(this).find("td:eq(27)").text();
        //obtenemos la fecha de alta del empleado
      var fecha_ingreso_empelado = $(this).find("td:eq(24)").text();
      //obtenemos el imput que llenaremos mediante javascript
  
  
      var nombrecompleto=document.getElementById('nombre');
      var nombrecompleto=document.getElementById('empresa');
      var salariosoperaciones=document.getElementById('salario');
      var fecha_ingreso=document.getElementById('fecha_ingreso_empelado');
      var tipoinfo=document.getElementById('t_infonavit');
      var puesto_empleado=document.getElementById('t_puesto');
  
  
      //llenamos los imput mediante javascript
  
  
  
  
  
    $("#imms").val(parseFloat(pago_imms).toFixed(2));
    $("#infonavit").val(parseFloat(factorsua).toFixed(2));
    $("#nombre").val(nombre+' '+nombre2+' '+Apellido_p+' '+Apellido_m);
    $("#empresa").val(empresa);
    $("#salario").val(salario);
    $("#salarioMensual").val(salarioMensual);
    $("#fecha_ingreso_empelado").val(fecha_ingreso_empelado);
    $("#t_infonavit").val(tipo_descuentoinfo);
    $("#t_puesto").val(puesto_e);
  
  
  
  
  
  
      //obtenemos los datos para calcular dias de aguinaldo del empleado
        var fechaIni = new Date(fecha_ingreso.innerText);
        var fechaFin = new Date();
        const añoinicio = fechaIni.getFullYear();
        const mesinicio = fechaIni.getMonth()+1;
        const diainicio = fechaIni.getDate();
        const añoactual = fechaFin.getFullYear();
        const diahoy = fechaFin.getDate();
        const mes = fechaFin.getMonth()+1;
        var diff = fechaFin - fechaIni;
  
        if (añoinicio == añoactual){
  
          fechaIni = new Date(añoinicio+'-'+mesinicio+'-'+diainicio);
        }
        else{
          fechaIni = new Date(añoactual+'-01-01');
        }
      diff = fechaFin - fechaIni;
      diferenciaDias = Math.floor(diff / (1000 * 60 * 60 * 24)+1);
        $("#dias_trabajados").val(diferenciaDias);
  
  
  
        if(diahoy >= 16 &&  diahoy <= 31){
          var fecha_ini_sueldopropo = new Date(añoactual+'-'+mes+'-16');
        }
        if(diahoy >= 01 && diahoy <= 15)
        {
          var fecha_ini_sueldopropo = new Date(añoactual+'-'+mes+'-01');
        }
      
        var diff = fechaFin - fecha_ini_sueldopropo;
        diferenciaDiass = Math.floor(diff / (1000 * 60 * 60 * 24));
  
      if(diferenciaDiass >diferenciaDias ){
        
        $("#dias_trabajadosa_deber").val(diferenciaDiass-1);
      }
      else{
        
        $("#dias_trabajadosa_deber").val(diferenciaDiass+1);
      }
      
        $("#ids").val(id);
        $("#idd").val(id);
        $("#emp").val(id);
  
        document.getElementById("emple").value = val(id);
      
    });
  
      var table = $('#tblempleados').DataTable( {
            "dom": 'B<"float-left"l><"float-right"f>t<"float-left"i><"float-right"p><"clearfix">',
            responsive: true,
            scrollY: 500,
            scrollX: true,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            
        } );
        new $.fn.dataTable.FixedHeader( table );
    });
  
  
  
    $("#cmbempresas").change(function(){
      var id = $(this).val(); 
      var empresa = $(this).find('option:selected').text(); 
      if(empresa == "Sin imss")
      {
          // $('#nss').hide();
          $('#excedente').hide();
          $('#Efectivo').show();
          $('#sueldo_fiscal').hide();
      
      }
      else
      {
          // $('#nss').hide();
          $('#excedente').show();
          $('#Efectivo').hide();
          $('#sueldo_fiscal').show();
      }
        });
  </script>
  <script>
  
    function terminos_cambio(checkbox){
        //Si está marcada ejecuta la condición verdadera.
        if(checkbox.checked){
          $('#vacaciones_poporcionales').show();
          // $('#dias_vacaciones').show();
          $('#vacaciones_notomadas').show();
  
  
        }
        //Si se ha desmarcado se ejecuta el siguiente mensaje.
        else{
          $('#vacaciones_poporcionales').hide();
          // $('#dias_vacaciones').hide();
          $("#vacaciones_poporcionales").val(0);
          // $("#dias_vacaciones").val(0);
          $('#vacaciones_notomadas').hide(0);
        }
    }
  
    function chekinfonavit(checkbox){
        //Si está marcada ejecuta la condición verdadera.
        if(checkbox.checked){
          $('#tipo_descuento_infonavit').show();
          $('#factor_sua').show();
          $('#descuento_quincenal').show();
          $('#numero_credito_infonavit').show();
  
        }
        //Si se ha desmarcado se ejecuta el siguiente mensaje.
        else{
          $('#tipo_descuento_infonavit').hide();
          $('#factor_sua').hide();
          $('#descuento_quincenal').hide();
          $('#numero_credito_infonavit').hide();
          $("#descuento_quincenal").val(0);
          $("#factor_sua").val(0);
        
        }
    }
  
  
      function operaciones()
      {
  
        var salarioc =$("#salario").val();
        var salarioM= $("#salarioMensual").val();
        var diagratificacion = document.getElementById("diasgratificacion").value;
        var diastrabajados = $("#dias_trabajados").val();
        var diastrabajadosdeber = $("#dias_trabajadosa_deber").val();
        // var diasvacaciones = $("#dias_vacaciones").val();
        var vacacionesnotomadas = $("#vacaciones_notomadas").val();
        var deduccionimms =  $("#imms").val();
        var deduccioninfonavit =  $("#infonavit").val();
        var deducciontransporte =  document.getElementById("transporte").value;
        var deduccionorestamo =  $("#prestamo").val();
        var deduccionotroa =  $("#otras").val();
  
        //en este apartado vamos a calcular lo que debe de infonavit segun su credito
  
        var tipopago =  $("#t_infonavit").val();
        var saldoadeberinfonavit=0;
  
        pagosuainfonavit =  $("#infonavit").val();
      
  
        if(pagosuainfonavit==parseFloat(0).toFixed(2));
        {
          saldoadeberinfonavit=0;
        }
        if(tipopago == 'CF' && pagosuainfonavit  != parseFloat(0).toFixed(2))
        {
          pagosuainfonavit =  $("#infonavit").val();
          saldoadeberinfonavit = (pagosuainfonavit*2)/61*(diastrabajadosdeber)+15;
        }
        if(tipopago == 'VSM' && pagosuainfonavit  != parseFloat(0).toFixed(2))
        {
          pagosuainfonavit =  $("#infonavit").val();
          saldoadeberinfonavit = (pagosuainfonavit*103.74*2)/61*(diastrabajadosdeber)+15;
        }
      
     
        var aguinaldo = 15/365*diastrabajados*salarioc;
        var gratificacion = diagratificacion*salarioc;
        var sueldopropo = salarioc*diastrabajadosdeber;
        var vacacionesproporcional = (((salarioM/30.4)* vacacionesnotomadas)*.25);
        var totalpercepciones = aguinaldo+gratificacion+sueldopropo+vacacionesproporcional;
        //falta agregar las demas deducciones
      
  
      
        var total = ((((((aguinaldo+gratificacion+sueldopropo+vacacionesproporcional)-parseFloat(deduccionimms).toFixed(2))-parseFloat(saldoadeberinfonavit).toFixed(2)-parseFloat(deducciontransporte).toFixed(2))-parseFloat(deduccionorestamo).toFixed(2))-parseFloat(deduccionotroa).toFixed(2)));
        let totaldeduccion =total-(aguinaldo+gratificacion+sueldopropo+vacacionesproporcional);
      
  
      // calculamos el aguinaldo del empleado a deber segun la fecha de ingreso
        $("#Aguinaldo_poporcional").val(parseFloat(aguinaldo).toFixed(2));
        $("#total_p").val(parseFloat(totalpercepciones).toFixed(2));
        $("#total_d").val(parseFloat(totaldeduccion).toFixed(2).substr(1,15));
        $("#gratificacion").val(parseFloat(gratificacion).toFixed(2));
        $("#sueldo_poporcional").val(parseFloat(sueldopropo).toFixed(2));
        $("#vacaciones_poporcionales").val(parseFloat(vacacionesproporcional).toFixed(2));
        $("#infonavit").val(parseFloat(saldoadeberinfonavit).toFixed(2));
        $("#total_entregar").val(parseFloat(total).toFixed(2));
      
      
    //sumamos el total de dinero a otorgar al trabajador
      
      }
  
      function limpiar()
      {
        $("#Aguinaldo_poporcional").val(parseFloat(0).toFixed(2));
        $("#total_p").val(parseFloat(0).toFixed(2));
        $("#total_d").val(parseFloat(0).toFixed(2));
        $("#gratificacion").val(parseFloat(0).toFixed(2));
        $("#sueldo_poporcional").val(parseFloat(0).toFixed(2));
        $("#vacaciones_poporcionales").val(parseFloat(0).toFixed(2));
      
      }
  </script>


@endsection