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

<!--INICIO BUTON AREA-->
<div class="pos__btnBack">
    <div class="wrapper"> 
      <form action="/vales">
        <button class="btn btnBack btn-light" type="submit" ><i class="fas fa-solid fa-arrow-left"></i></button>
      </form>
    </div>
</div>
    <!--FIN BUTON AREA-->  
   
<div class="mt-4 p__little">
  <br/>
  <br/>
    {{--------------------------- Encabezado de la pagina----------------------}}
      <center class="mb-3 container bg-p">
            <div class="col-md-12">
              <h2 class="mt-3 mb-3 fw-light animate_animated animate_backInLeft">Captura de Distribuidores</h2> 
              <cite title="Título fuente">Distribuidor, Aval y Documentos importados</cite>
            </div>
            <div class="col-md-12">
              <div class="row mt-3 text-end">
                <div class="col-md-4 d-md-block d-none"></div>
                <div class="col-md-2 mar-l">
                    <form action="/vales/CapturaDistribuidor">
                        <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-plus"></i>&nbsp; Añadir </button> 
                    </form>
                </div>
                {{-- <div class="col-md-2">
                  <form action="">
                        <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-download"></i>&nbsp; Exportar </button> 
                  </form>            
                </div> --}}
                <div class="col-md-5 d-md-block d-none">
            
              </div>
            </div>
      </center> 
     
      @csrf

      {{--------------------------- Cuerpo de la tabla----------------------}}
    <center class="mb-4">
      <div class="shadow-lg mb-5 bg-body rounded border-0" style="margin:20px;width:95%;">
        <div class="table-responsive pad-table" id="mydatatable-container"> 

          <div class="row mt-2">   
              <div class="col-md-4">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="row">
                              <div class="col-md-4 bg-info" style="border-radius: 100px;padding:10px;width:10px;height:10px;"></div> 
                              <p class="col-md-8 fw-light">Distribuidor</p>
                          </div>
                      </div>

                      <div class="col-md-4">
                          <div class="row">
                              <div class="col-md-4 bg-primary" style="border-radius: 100px;padding:10px;width:10px;height:10px;"></div> 
                              <p class="col-md-6 fw-light">Aval</p>
                          </div>
                      </div>

                      <div class="col-md-4">
                          <div class="row">
                              <div class="col-md-4 bg-success" style="border-radius: 100px;padding:10px;width:10px;height:10px;"></div> 
                              <p class="col-md-8 fw-light">Documentos</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-8"></div>
          </div>

          <table class="table table-hover " id="tblempleados">
            <thead class="table">
                  <tr class="tr-table"> 
                  <th class="text-center fw-light">Herramienta</th>
                    <th class="text-center fw-light">Documentos</th>
                    <th class="text-center fw-light">Acción</th>
                    <th class="text-center fw-light">Progreso</th>
                    <th class="text-center fw-light">No. Distribuidor </th>
                    <th class="text-center fw-light">Primer Nombre</th>
                    <th class="text-center fw-light">Segundo Nombre</th>
                    <th class="text-center fw-light">Apellido Paterno</th>
                    <th class="text-center fw-light">Apellido Materno</th>
                    <th class="text-center fw-light">Tipo</th>
                  </tr>
            </thead>
            
            <tbody>
              @foreach($vardistribuidores as $dis)
                <tr>
              
                    @if($dis->estado_captura==3)
                    <td class="td-tools">
                    <form action="/vales/getactualizardistribuidor/{{$dis->id}}">
                      <button class="text-light btn fas fa-edit bor"  type="submit"></button>
                      </form>
                      </td>
                    @elseif($dis->estado_captura==1)
                    <td class="td-tools">
                      <form action="/vales/Termina_Proceso_aval/{{$dis->id}}">
                        <button class="text-light btn fa-solid fa-list-ol bor" type="submit"></button>
                      </form>
                      </td>
                    @elseif($dis->estado_captura==2)
                    <td class="td-tools">
                      <form action="/vales/Termina_Proceso_documentos/{{$dis->id}}">
                        <button class="text-light btn fa-solid fa-list-ol bor" type="submit"></button>
                      </form>
                      </td>
                    @endif
                  </td>
                  <td class="td-tools">
                    <form action="{{route('vales.getverdoc', $dis->id) }}">
                          <button class="text-light btn fa-solid fa-eye bor" type="submit"></button>
                    </form>
                  </td>
        
                  <td class="bg-1">
                    @if($dis->estado_captura==3 && $dis->status =="pro_rev")
                      <center>
                            <form action="/vales/enviaramesa_credito/{{$dis->id}}">
                                  <button class="btn bg-4 cst6" style="border-radius:10px;" type="submit"><i class="fa-brands fa-slack"></i> Enviar Mesa Crédito</button>
                            </form>
                      </center>
                    @endif
                    @if($dis->estado_captura==3 && $dis->status =='pro_obs')
                      <center>
                            <form action="/vales/enviaramesa_credito_act/{{$dis->id}}">
                                    <button class="btn bg-4 cst6" style="border-radius:10px;" type="submit"><i class="fa-brands fa-slack"></i> Enviar Mesa Crédito</button>
                            </form>
                      </center>
                    @endif
                  </td>
                         
              
                  <td class="bg-1">
                        <div class="progress">
                        @if($dis->estado_captura==1)
                            <div class="progress-bar bg-info" role="progressbar" style="width: 33.3%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        @endif
                            @if($dis->estado_captura==2)  
                            <div class="progress-bar bg-info" role="progressbar" style="width: 33.3%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 33.3%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        @endif
                        @if($dis->estado_captura==3)  
                            <div class="progress-bar bg-info" role="progressbar" style="width: 33.3%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 33.3%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 33.3%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                       @endif
                        </div>
                  </td>
                  <td class="bg-3">{{$dis->id}}</td>
                  <td class="bg-2">{{$dis->primer_nombre}}</td>
                  <td class="bg-2">{{$dis->segundo_nombre}}</td>
                  <td class="bg-2">{{$dis->apellido_paterno}}</td>
                  <td class="bg-2">{{$dis->apellido_materno}}</td>
                  <td class="bg-2">{{$dis->nombre}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          
        </div>  
      </div>
    </center>    
</div>
<script>
  $(document).ready(function() {
  
    var table = $('#tblempleados').DataTable( {
          "dom": 'B<"float-left"l><"float-right"f>t<"float-left"i><"float-right"p><"clearfix">',
          responsive: true,
          scrollY: 500,
          scrollX: false,
          "language": {
              "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
          },
          
      } );
      new $.fn.dataTable.FixedHeader( table );
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

{{----------------------------------- Script de validacion de formulario---------------------------- --}}
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

{{----------------------------------- Script de carga de archivos 1---------------------------- --}}
<script>
  document.querySelector("html").classList.add('js');

    var fileInput  = document.querySelector( ".input-files" ),  
        button     = document.querySelector( ".input-files-trigger" ),
        the_return = document.querySelector(".files-return");
          
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

{{----------------------------------- Script de carga de archivos 1---------------------------- --}}

<script>
  document.querySelector("html").classList.add('js');

    var fileInput  = document.querySelector( ".input-filee" ),  
        button     = document.querySelector( ".input-filee-trigger" ),
        the_return = document.querySelector(".fileContrato-return");
          
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


@endsection