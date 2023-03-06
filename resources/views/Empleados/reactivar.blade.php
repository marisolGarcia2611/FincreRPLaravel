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


@foreach($obtenerempleado as $empleado)
<div class="container mt-5 p__little">
    <div class="offcanvas-body small">
        <div class="container">
          <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <div class="card p-5 mt-2 cartaForm mb-4">
                <div class="text-center text-primary mb-4">
                   <h1><i class="fas fa-exclamation-triangle"></i></h1> 
                   <h4>Este empleado esta inactivo en este momento</h4>
                </div>
              
                <div class="row mb-4">
                    <div>
                      <form action="{{ route('Empleados.updateReactivar', $empleado->idempleado) }}" method="POST" enctype="multipart/form-data" class="g-3 needs-validation" novalidate>
                        @csrf
                        @method('PUT')

                         <!-- Detalles de reingreso-->
                          <div class="row mb-4">
                            <h5>1. Detalles Generales</h5>
                            <input type="text" hidden class="form-control" name="idnomina"  value="{{$empleado->idnom}}" required />
                            <input type="text" hidden class="form-control" name="rfc" value="{{$empleado->rfc}}" required/>

                            <div class="col">
                              <div class="form-outline">
                              <label class="form-label" >Fecha de reingreso</label>
                                <input type="date" name="fecha_alta" id="fecha_alta" class="form-control"  value="{{$empleado->fecha_ingreso}}"  required />
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
                              <label class="form-label" >Fecha de ingreo a IMSS</label>
                                <input type="date" name="fecha_ingreso_imss" id="fecha_ingreso_imss" class="form-control" value="{{$empleado->fecha_ingreso_imss}}" maxlength="12" />
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row mb-4">
                            <div class="col">
                              <div class="form-outline">
                              <label class="form-label" >Salario Mensual</label>
                                <input type="text" name="salario_bruto" id="salario_bruto" class="form-control" maxlength="8"  value="{{$empleado->salario_bruto}}"   required />
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
                              <label class="form-label" >Salario Diario Fiscal</label>
                                <input type="text" name="salario_fijo" id="salario_fijo" class="form-control" maxlength="8" value="{{$empleado->salario_fijo}}"/>
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
                              <label class="form-label" >Salario Diario Integrado</label>
                                <input type="text" Name="salario_neto" id="salario_neto" class="form-control" maxlength="8"  value="{{$empleado->salario_neto}}"required />
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>
                              </div>
                            </div>
      
                          </div>

                          <div class="row mb-2">
                            <h5>2. Razón Social</h5>
                            <div class="col">
                              <!-- Name input -->
                              <div class="form-outline">
                              <select class="form-select form-select mb-3" id="cmbempresas" name="cmbempresas"    required>
                                <option value=" {{$empleado->id}}" selected > {{$empleado->nombre_empresa}}</option>
                                @foreach($varempresas as $obtenerempresa)
                              <option value="{{$obtenerempresa->id}}">{{$obtenerempresa->nombre_empresa}}</option>
                              @endforeach
                            
                              </select>
                              <div class="valid-feedback">
                                ¡Se ve bien!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                              </div>
                              
                              </div>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <div class="col-md-3" id="sueldo_fiscal">
                              <label class="form-label">Sueldo fiscal</label>
                              <input type="text" name="sueldo_fiscal" id="sueldo_fiscal" class="form-control" placeholder="00.00" value="{{$empleado->sueldo_fiscal}}" maxlength="8"required />
                              <div class="valid-feedback">
                                ¡Se ve bien!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                              </div>
                            </div>
                            <div class="col-md-3" id="excedente">
                              <label class="form-label">Excedente</label>
                              <input type="text" name="excedente" id="excedente" class="form-control" placeholder="00.00" value="{{$empleado->excedente}}" maxlength="8"required />
                              <div class="valid-feedback">
                                ¡Se ve bien!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                              </div>
                            </div>
                            <div class="col-md-3" id="Efectivo">
                              <label class="form-label">Efectivo</label>
                              <input type="text" name="efectivo" id="efectivo" class="form-control" placeholder="00.00"maxlength="8" value="{{$empleado->efectivo}}" required />
                              <div class="valid-feedback">
                                ¡Se ve bien!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                              </div>
      
                            </div>
      
                            {{-- Descuento de Infonavit --}}
        
                            <div class="row text-center mt-4">
                                <hr/>
                                <div class="col">
                                  <label>Aplicar credito Infonavit 
                                    <input style="border: .5px solid rgb(165, 165, 165);width:15px;height:15px;" class="form-check-input" type="checkbox" id="terminos" value="1" onclick="chekinfonavit(this)" />
                                  </label>
                                </div>
                              </div>
                          </div>
                        
                          <div class="row mb-2">
                              <div class="col-md-3" id="tipo_descuento_infonavit">
                              <div class="row" >
                              <label class="form-label">Tipo de descuento infonavit</label>
                              <select class="form-select" name="tipo_infonavit" >
                                <option  value="{{$empleado->idinfonavit}}">{{$empleado->nombreinfonavit}}</option>  
                                @foreach($vartipodescinfo as $obtenertipo)
                                <option value=" {{$obtenertipo->id}}">{{$obtenertipo->Nombre}}</option>
                                @endforeach
                              </select>   
                            
                              </div>
                            </div>
        
                            <div class="col-md-3"  id="factor_sua">
                              <div class="row">
                                <label class="form-label">Factor SUA</label>
                                  <input type="text" name="factor_sua" class="form-control" value="{{$empleado->factor_sua}}"  maxlength="8" required />
                              </div>
                            </div>
        
                            <div class="col-md-3"  id="descuento_quincenal">
                              <div class="row">
                                <label class="form-label">Descuento quincenal</label>
                                  <input type="text" name="descuento_quincenal" class="form-control" value="{{$empleado->descuento_quincenal}}"  maxlength="8"required />
                              </div>
                            </div>
        
                            <div class="col-md-3"  id="numero_credito_infonavit">
                              <div class="row">
                                        <label class="form-label">Numero de credito infoanvit</label>
                                  <input type="text" name="numero_credito_infonavit" class="form-control" value="{{$empleado->numero_credito_infonavit}}" maxlength="8" required />
                              </div>
                            </div>
      
                        </div>
                          
                          <div class="row mb-4">     
                            <h5>3. Contrato frirmado</h5>                         
                              <div class="text-center">
                                <div class="col-md-4 "></div>
                                <div class="col-md-4 input-file-container">  
                                  <input class="input-file" id="my-file" class="form-control"  type="file" name="urlpdf" required/>
                                    <div class="valid-feedback fs-8">
                                      ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback fs-8">
                                      ¡Por favor, sube el nuevo contrato!
                                    </div>
                                    <label for="my-file"name="my-file" style="border-radius:100px;" class="input-file-trigger"><h1 class="text-light"><i class="fas fa-file-upload"></i></h1></label>
                                    <p class="file-return"></p> 
                                </div>
                                <div class="col-md-4"></div>
                              </div>
                            <p class="txtcenter">Recuerde que solo se admite el formato ".pdf"</p>
                          </div>

                        <div class="text-center">
                          <button type="submit" class="btn btn-blue push" style="width: 30%;border-radius:50px;">Activar empleado</button>
                        </div>
                      </form>
                    </div>                       
                </div>
            </div>

          </div>
        </div>
    </div>
</div>

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
    document.querySelector("html").classList.add('js');
  
      var fileInput  = document.querySelector( ".input-file" ),  
          button     = document.querySelector( ".input-file-trigger" ),
          the_return = document.querySelector(".file-return");
            
      button.addEventListener( "keydown", function( event ) {  
          if ( event.keyCode == 13 || event.keyCode == 32 ) {  
              fileInput.focus();  
          }  
      });
      button.addEventListener( "click", function( event ) {
        fileInput.focus();
        return false;
      });  
      fileInput.addEventListener( "change", function( event ) {  
          the_return.innerHTML = this.value;  
      });  
  </script>
<script>
    $(document).ready(function() {
      $('#nss').hide();
      $('#excedente').hide();
      $('#Efectivo').hide();
      $('#sueldo_fiscal').hide();
      $('#vacaciones_poporcionales').hide();
      // $('#dias_vacaciones').hide();
      $('#vacaciones_poporcionales').hide();
      // $('#dias_vacaciones').hide();
      $('#tipo_descuento_infonavit').hide();
      $('#factor_sua').hide();
      $('#descuento_quincenal').hide();
      $('#numero_credito_infonavit').hide();
      $('#vacaciones_notomadas').hide();
  
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
