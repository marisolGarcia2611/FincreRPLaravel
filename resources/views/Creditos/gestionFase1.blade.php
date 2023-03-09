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

<div class="mt-4 p__little">
  <br/>
  <br/>
    {{--------------------------- Encabezado de la pagina----------------------}}
      <center class="mb-3 container bg-p">
            <div class="col-md-12">
              <h2 class="mt-3 mb-3 fw-light animate_animated animate_backInLeft">Catalogo de Distribuidores</h2> 
              <cite title="Título fuente">Distribuidor, Aval y Documentos importados</cite>
            </div>
            <div class="col-md-12">
              <div class="row mt-3 text-end">
                <div class="col-md-2 d-md-block d-none"></div>
                <div class="col-md-2 mar-l">
                  <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><i class="fas fa-plus"></i>&nbsp; Añadir </button> 
                </div>
                <div class="col-md-2">
                  <form action="">
                  <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-download"></i>&nbsp; Exportar </button> 
                  </form>            
                </div>
                <div class="col-md-2">
                  <form action="">
                  <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-chart-pie"></i>&nbsp;Gaficar </button> 
                  </form>
                </div>
                <div class="col-md-4 d-md-block d-none">
            
              </div>
            </div>
      </center> 
     
      @csrf

      {{--------------------------- Cuerpo de la tabla----------------------}}
    <center class="mb-4">
      <div class="shadow-lg mb-5 bg-body rounded border-0" style="margin:20px;width:95%;">
        <div class="table-responsive pad-table" id="mydatatable-container"> 
            <div class="row">
                
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <p class=" text-light fw-light"> <div class="bg-info" style="border-radius: 100px;padding:10px;width:10px;height:10px;"></div> Distribuidor</p>
                        </div>

                        <div class="col-md-4">
                            <p class=" text-light fw-light"> <div class="bg-primary" style="border-radius: 100px;padding:10px;width:10px;height:10px;"></div> Aval</p>
                        </div>

                        <div class="col-md-4">
                            <p class=" text-light fw-light"> <div class="bg-success" style="border-radius: 100px;padding:10px;width:10px;height:10px;"></div> Documentos</p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-8"></div>
            </div>
          <table class="table table-hover " id="tblempleados">
            <thead class="table">
                  <tr class="tr-table"> 
                  <th class="text-center fw-light">Editar</th>
                  <th class="text-center fw-light">Revisar</th>
                  <th class="text-center fw-light">Terminar Proceso</th>
                  <th class="text-center fw-light">Progreso</th>
                  <th class="text-center fw-light">No. Distribuidor </th>
                  <th  class="text-center fw-light">Primer Nombre</th>
                  <th  class="text-center fw-light">Segundo Nombre</th>
                  <th  class="text-center fw-light">Apellido Paterno</th>
                  <th  class="text-center fw-light">Apellido Materno</th>
                  <th  class="text-center fw-light">Descripción</th>
                  <th  class="text-center fw-light">Estado Civil</th>
                  <th  class="text-center fw-light">Telefono</th>               
                  <th  class="text-center fw-light">Correo</th>
                  <th  class="text-center fw-light">Nacionalidad</th>
                  <th  class="text-center fw-light">Ciudad</th>
                  <th  class="text-center fw-light">Calle</th>
                  <th  class="text-center fw-light">Colonia</th>
                  <th  class="text-center fw-light">Numero Interior</th>
                  <th  class="text-center fw-light">Numero Exterior</th>
                  <th  class="text-center fw-light">CP</th>
                  <th  class="text-center fw-light">Sexo</th>
                  <th  class="text-center fw-light">Tipo Sangre</th>
                  <th  class="text-center fw-light">Fecha de Nacimiento</th>
                  <th  class="text-center fw-light">Grado de estudios</th>
                  <th  class="text-center fw-light">Puesto</th>
                  <th  class="text-center fw-light">Fecha Ingreso</th>
                  <th  class="text-center fw-light">Empresa</th>
                  <th  class="text-center fw-light">Sucursal</th>
                  <th  class="text-center fw-light">Salario Mensual</th>
                  <th  class="text-center fw-light">Salario Diario Integrado</th>
                  <th  class="text-center fw-light">Salario Diario Fiscal</th>
                  <th  class="text-center fw-light">ID Infonavit</th>
                  <th  class="text-center fw-light">Tipo infonavit</th>
                  <th  class="text-center fw-light">No. Credito infonavit</th>   
                  <th  class="text-center fw-light">Factor sua</th>
                  <th  class="text-center fw-light">Descuento Quincenal</th>
                  <th  class="text-center fw-light">Banco</th>
                  <th  class="text-center fw-light">Numero Tarjeta</th>
                  <th  class="text-center fw-light">Numero Cuenta</th>
                  <th  class="text-center fw-light">RFC</th>
                  <th  class="text-center fw-light">NSS</th>
                  <th  class="text-center fw-light">CURP</th>
                  <th  class="text-center fw-light">Fecha Ingreso IMSS</th>
                  <th  class="text-center fw-light">Pago IMMS</th>
                  <th  class="text-center fw-light">Sueldo Fiscal</th>
                  <th  class="text-center fw-light">Pago excedente</th>
                  <th  class="text-center fw-light">Pago efectivo</th>
                  <th  class="text-center fw-light">Contacto de Emergencia</th>
                  <th  class="text-center fw-light">Telefono de Emergencia</th>
                 
                  </tr>
            </thead>
            
            <tbody>
            
                <tr>
                  {{--------------------- Herramientas de la tabla--------------------}}
                  <td class="td-tools">
                        <button class="text-light btn fas fa-edit bor"  type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Editar baja"></button>
                  </td>

                  <td class="td-tools">
                    <button class="text-light btn fa-solid fa-eye bor"  type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Editar baja"></button>
                  </td>

                  <td class="td-tools">
                    <button class="text-light btn fa-solid fa-list-ol bor"  type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Editar baja"></button>
                  </td>

                  <td class="bg-1">
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 33.3%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 33.3%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-3" role="progressbar" style="width: 33.3%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                  </td>
                  <td class="bg-3"></td>
                  <td class="bg-2"></td>
                  <td class="bg-2"></td>
                  <td class="bg-2"></td>
                  <td class="bg-2"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>            
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-3"></td>
                  <td class="bg-3"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-3"></td>
                  <td class="bg-3"></td>
                  <td class="bg-3"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-3"></td>
                  <td class="bg-3"></td>
                  <td class="bg-3"></td>
                  <td class="bg-3"></td>
                  <td class="bg-3"></td>
                  <td class="bg-3"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-1"></td>
                  <td class="bg-2"></td>
                  <td class="bg-2"></td>
                
                </tr>
      
            </tbody>
          </table>
        </div>  
      </div>
    </center> 

   
</div>


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