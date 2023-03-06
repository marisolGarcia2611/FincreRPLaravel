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

@elseif($mensaje = Session::get('successExcel'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Archivo importado correctamente","success", {buttons: false,timer: 3000});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('warningExcel'))
@php
        echo '<script language="JavaScript">';
        echo 'swal("¡No se efectuo la acción!","Revise que el archivo importado cumpla con el formato requerido","warning", {buttons: false,timer: 3000});';
        echo '</script>';  
@endphp
@endif

{{-- ALERTAS --}}

<!--INICIO BUTON AREA-->
<div class="pos__btnBack">
  <div class="wrapper"> 
     <a href="/Nominas"><h5 class="btnBack"><i class="fas fa-solid fa-arrow-left"></i></h5></a>
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

{{-- ALERTAS --}}

<div class="mt-4 p__little">


  <div class="container">
    <div class="row">
      <center class="col-md-12 mt-4 mb-4">
          <div>
            <h2 class="mt-3 mb-3 fw-light animate_animated">Nomina de Empleados</h2> 
          </div>
          <div >
          <div class="row mt-2 text-end">
              <div class="col-md-3 d-md-block d-none"></div>

              <div class="col-md-2">
                <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat" data-bs-toggle="offcanvas" data-bs-target="#offcanvaBottomUpload" aria-controls="offcanvasBottom"><i class="fas fa-file-upload"></i>&nbsp;Importar extras</button>
              </div>

              <div class="col-md-2 mar-l">
                  @foreach($varnominas as $nomina)
                    <form action="/Nominas/calcularnomina/{{$nomina->idpagonomina}}/{{$nomina->idtiponomina}}">
                        @csrf
                      <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-calculator"></i>&nbsp; Calcular Nomina</button> 
                    </form>
                    @break
                  @endforeach  
              </div>

              <div class="col-md-2">
                @foreach($varnominas as $nomina)
                    <form action="/Nominas/cerrarnomina/{{$nomina->idpagonomina}}/{{$nomina->idtiponomina}}">
                      @csrf
                      <button class=" animate__animated animate__backInLeft btn push2 bt__flat" type="submit"><i class="fas fa-times-circle"></i>&nbsp; Cerrar Nomina </button> 
                    </form>
                    @break
                @endforeach           
            </div>

              <div class="col-md-3 d-md-block d-none"></div>
              
          </div>
      </center> 
    </div>
  </div>
  
 
<div class="container mt-3">
  <div class="row">
    <div>
      <div class="shadow-lg mb-5 bg-body rounded border-0" style="">
        <div class="table-responsive pad-table" id="mydatatable-container">     
            <table class="table table-hover" id="tblempleados">
            <thead class="table">
                  <tr class="tr-table"> 
                  <th class="text-center fw-light">Acciones</th>
                  <th class="text-center fw-light">Tipo de Nomina</th>
                  <th class="text-center fw-light">No. Corrida Nomina</th>
                  <th class="text-center fw-light">No. Nomina</th>
                  <th class="text-center fw-light">No. Empleado</th>
                  <th class="text-center fw-light">Nombre Empleado</th>
                  <th class="text-center fw-light">Puesto</th>
                  <th class="text-center fw-light">Sucursal</th>
                  <th class="text-center fw-light">Faltas/ret/aus</th>
                  <th class="text-center fw-light">Dias Laborados</th>
                  <th class="text-center fw-light">Sueldo Fiscal</th>
                  <th class="text-center fw-light">Sueldo Excedente</th>
                  <th class="text-center fw-light">Sueldo Efectivo</th>
                  <th class="text-center fw-light">Sueldo Total</th>
                  <th class="text-center fw-light">Deudores Fiscal</th>
                  <th class="text-center fw-light">Deudores No Fiscal</th>
                  <th class="text-center fw-light">Total Deudores</th>
                  <th class="text-center fw-light">Pago Infonavit</th>
                  <th class="text-center fw-light">Pago Imss</th>
                  <th class="text-center fw-light">Pago ISR</th>
                  <th class="text-center fw-light">Pago Subsidio</th>
                  <th class="text-center fw-light">Pago Prima Vacacional</th>
                  <th class="text-center fw-light">Pago Dias Pendientes</th>
                  <th class="text-center fw-light">Bono</th>
                  <th class="text-center fw-light">Transporte</th>
                  <th class="text-center fw-light">Total Nomina Fiscal</th>
                  <th class="text-center fw-light">Total Excedente</th>
                  <th class="text-center fw-light">Total Efectivo</th>
                  <th class="text-center fw-light">Pago Nomina Fiscal Global</th>
                  <th class="text-center fw-light">Pago Nomina Excedente Global</th>
                  <th class="text-center fw-light">Pago Efectivo Cajas</th>
                  <th class="text-center fw-light">Total a pagar</th>
                  <th class="text-center fw-light">Banco</th>
                  <th class="text-center fw-light">Numero de Tarjeta</th>
                  <th class="text-center fw-light">Numero de Cuenta</th>
                  
                
                </tr>
              </thead>
              
              <tbody>
              
                  <tr>
                    @foreach($varnominas as $nomina)
                    <td class="td-tools">
                      <a class="text-light btn fas fa-edit border-0 push"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom" id="{{$nomina->id}}"></a>
                    </td>
                    <td class="bg-3">
                      @if($nomina->idtiponomina == 1)
                      Semanal
                      @elseif($nomina->idtiponomina == 2)
                      Quincenal
                      @elseif($nomina->idtiponomina == 3)
                      Mensual
                    @endif
                    </td>
                    <td class="bg-1">{{$nomina->idpagonomina}}</td>
                    <td name="nominaid" class="bg-1">{{$nomina->id}}</td>
                    <td class="bg-1">{{$nomina->idempleado}}</td>
                    <td class="bg-2">{{$nomina->primer_nombre.' '.$nomina->segundo_nombre.' '.$nomina->apellido_paterno.' '.$nomina->apellido_materno}}</td>
                    <td class="bg-2">{{$nomina->puesto}}</td>
                    <td class="bg-2">{{$nomina->sucursal}}</td>
                    <td class="table-warning border-0">{{$nomina->faltas_reta_aus}}</td>
                    <td class="table-success border-0">{{$nomina->dias_laborados}}</td>
                    <td class="bg-1">{{$nomina->sueldo_fiscal}}</td>
                    <td class="bg-1">{{$nomina->excedente}}</td>
                    <td class="bg-1">{{$nomina->efectivo}}</td>
                    <td class="table-danger border-0">{{$nomina->total_sueldo}}</td>
                    <td class="bg-1">{{$nomina->deudores_fiscal}}</td>
                    <td class="bg-1">{{$nomina->deudores_no_fiscal}}</td>
                    <td class="bg-1">{{$nomina->total_deudores}}</td> 
                    <td class="bg-1">{{$nomina->pago_infonavit}}</td>
                    <td class="bg-1">{{$nomina->pago_imss}}</td>  
                    <td class="table-warning border-0">{{$nomina->pago_isr}}</td>
                    <td class="bg-1">{{$nomina->pago_subsidio}}</td>
                    <td class="bg-1">{{$nomina->pago_prima_vacacional}}</td>
                    <td class="bg-1">{{$nomina->dias_pendiente}}</td>
                    <td class="bg-1">{{$nomina->bono}}</td>
                    <td class="bg-1">{{$nomina->transporte}}</td>
                    <td class="bg-3">{{$nomina->total_nomina_fiscal}}</td>
                    <td class="bg-3">{{$nomina->total_apagar_excedente}}</td>
                    <td class="bg-3">{{$nomina->total_efectivo}}</td>
                    <td class="bg-1">{{$nomina->pago_nomina_fiscal_global}}</td>
                    <td class="bg-1">{{$nomina->pago_nomina_excedente_global}}</td>
                    <td class="bg-1">{{$nomina->pago_efectivo_cajas}}</td>
                    <td class="bg-1">{{$nomina->total_apagar}}</td>
                    <td class="bg-3">{{$nomina->banco}}</td>
                    <td class="bg-3">{{$nomina->numero_tarjeta}}</td>
                    <td class="bg-3">{{$nomina->numero_cuenta}}</td>  
                  </tr>
          @endforeach
              </tbody>
            </table>
        </div>  
      </div>   
    </div>
  </div>
</div>


<!-- ................................................................................................................................................-->

<!-- Subir archivo Modal-->
<div class="offcanvas offcanvas-bottom sudmit" tabindex="-1" id="offcanvaBottomUpload" aria-labelledby="offcanvasBottomLabel" style="height:65vh">
  <div class="offcanvas-header">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
    <h1>Importar Extras(Bonos,Transporte y Prestamos)</h1>
    <h2>Favor de subir el archivo con formato</h2>
      <form action="/Nominas/importBoTrans" method="POST" enctype="multipart/form-data" class="g-3 needs-validation" novalidate>
        @csrf
    
          <div class="mb-2">                              
              <div class=" text-center">
                <div class="input-file-container">  
                  <input class="input-file" id="my-file" type="file" name="urlxlsx" required>
                  <div class="valid-feedback fs-8">
                    ¡Se ve bien!
                  </div>
                  <div class="invalid-feedback fs-8">
                    ¡Por favor, sube el archivo de importación!
                  </div>
                    <label for="my-file"name="my-file" style="border-radius:100px;width:98%!important;" class="input-file-trigger"><h1 class="text-light"><i class="fas fa-file-upload"></i></h1></label>
                    <p class="file-return"></p> c
                    <br/>
                    <hr/>
                    <button class="btn btn-send" type="submit" value="subir"><h3><i class="fas fa-paper-plane"></i> Enviar</h3></button>
                </div>
              </div>
          </div>
      </form>
    <p class="txtcenter">Recuerde que solo se admite el formato ".pdf"</p>
  </div>
</div>
<!-- Subir archivo Modal-->

<!-- ................................................................................................................................................-->


{{--------------------------------------------- Modal de update de nominas -----------------------------------}}
  <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom1" aria-labelledby="offcanvasBottomLabel" style="height:40vh">

    <div class="offcanvas-header">
      <nav id="navbar-example2" class="navbar navbar-light px-3">
            <a class="navbar-brand">Editar Nomina</a>
           
          </nav>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="card-body offcanvas-body small" style="padding-left: 30px;padding-right:30px;">
      <form  action="/Nominaseditaremp/actualizarEmpleado" method="POST"  class="g-3 needs-validation" novalidate> 
          @csrf
          @method('PUT')
                <div class="row mb-4">
                  <div class="col">
                    <!-- Name input -->
                    <div class="form-outline">
                    <label class="form-label" for="form8Example4">Nombre Empleado</label>
                      <input type="text" hidden class="form-control" name="idpadodet" id="idpadodet"/>
                      <input type="text"  class="form-control" name="emple" id="emple" disabled />
                      {{-- <input type="text"  class="form-control" name="idnomina" id="idnomina" /> --}}

                    </div>
                  </div>

                  <div class="col">
                    <!-- Email input -->
                    <div class="form-outline">
                    <label class="form-label">Dias Laborados</label>
                      <input type="number" id="dias_laborados"  name="dias_laborados" class="form-control"  maxlength="20" required />
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
                    <label class="form-label" >Deudores Fiscal</label>
                      <input type="number" name="deudores_fiscal" id="deudores_fiscal" class="form-control"  maxlength="20" required />
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
                    <label class="form-label" >Deudores No Fiscal</label>
                      <input type="number" name="deudores_no_fiscal" id="deudores_no_fiscal" class="form-control" maxlength="20"required />
                      <div class="valid-feedback">
                        ¡Se ve bien!
                      </div>
                      <div class="invalid-feedback">
                        Por favor, completa la información requerida.
                      </div>
                    </div>
                  </div>
                </div>
            

                <div class="row mb-0 mt-4">
                  <div class="text-center">
                    <button type="submit" class="btn btn-blue" style="border-radius:20px;width:40%;"><i class="fas fa-save"></i>&nbsp;&nbsp;Guardar cambios</button>
                  </div>
                </div>
        </form>
    </div>

  
  </div>


<script>
    $(document).ready(function() {
  
  
  
    $("table tbody tr").click(function() {
  var id = $(this).find("td:eq(2)").text();
  $("#idpadodet").val(id);
  
  
  var emp = $(this).find("td:eq(5)").text();
  $("#emple").val(emp);
  
  
  var idnomina = $(this).find("td:eq(4)").text();
  $("#idnomina").val(idnomina);
  
  var diaslaborados = $(this).find("td:eq(9)").text();
  $("#dias_laborados").val(diaslaborados);
  
  var deud_fiscal = $(this).find("td:eq(14)").text();
  $("#deudores_fiscal").val(deud_fiscal);
  
  var deud_nofiscal = $(this).find("td:eq(15)").text();
  $("#deudores_no_fiscal").val(deud_nofiscal);
  
  
  
    
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

@endsection