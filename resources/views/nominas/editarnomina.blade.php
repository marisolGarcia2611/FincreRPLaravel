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

<div id="btnBack"></div>  
<div class="pos__ico">
    <img class="ico__image2" src="{{ asset('ico/logo.png') }}" alt="fincreLaguna">
</div>


<div class="p__little">
  <br/>
  <br/>
  {{--------------------------- Encabezado de la pagina----------------------}}
  <div class="container">
    <div  class="row mb-5 bg-p">
        <div class="col-md-4 center">
          <h2 class="mt-3 mb-1 fw-light animate_animated animate_backInLeft">Nómina por empleados</h2> 
            <cite title="Título fuente">Edición de nómina por empleados</cite>
        </div>

        <div class="col-md-5">
          <div class="row mt-3 text-center">
              
              <div class="col-md-4">
                <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8" data-bs-toggle="offcanvas" data-bs-target="#offcanvaBottomUpload" aria-controls="offcanvasBottom"><i class="fas fa-file-upload"></i>&nbsp;Importar extras</button>
              </div>

              <div class="col-md-4">
                  @foreach($varnominas as $nomina)
                    <form action="/Nominas/calcularnomina/{{$nomina->idpagonomina}}/{{$nomina->idtiponomina}}">
                        @csrf
                      <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fas fa-calculator"></i>&nbsp; Calcular Nomina</button> 
                    </form>
                    @break
                  @endforeach  
              </div>

              <div class="col-md-4">
                  @foreach($varnominas as $nomina)
                      <form action="/Nominas/cerrarnomina/{{$nomina->idpagonomina}}/{{$nomina->idtiponomina}}">
                        @csrf
                        <button class=" animate__animated animate__backInLeft btn push2 bt__flat fs-8" type="submit"><i class="fas fa-times-circle"></i>&nbsp; Cerrar Nomina </button> 
                      </form>
                      @break
                  @endforeach           
              </div>
          </div>
        </div>

          
    </div>
  </div>
  
 
  <center class="mb-5 bg-body border-0">
        <div class="table-responsive pad-table" id="mydatatable-container">     
            <table class="table table-hover" id="tblempleados">
              <thead class="table">
                    <tr class="tr-table"> 
                    <th class="text-center fw-light">Tipo de Nómina</th>
                    <th class="text-center fw-light">No. Corrida Nómina</th>
                    <th class="text-center fw-light">No. Nómina</th>
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
                    <th class="text-center fw-light">Total Nómina Fiscal</th>
                    <th class="text-center fw-light">Total Excedente</th>
                    <th class="text-center fw-light">Total Efectivo</th>
                    <th class="text-center fw-light">Pago Nómina Fiscal Global</th>
                    <th class="text-center fw-light">Pago Nómina Excedente Global</th>
                    <th class="text-center fw-light">Pago Efectivo Cajas</th>
                    <th class="text-center fw-light">Total a pagar</th>
                    <th class="text-center fw-light">Banco</th>
                    <th class="text-center fw-light">Numero de Tarjeta</th>
                    <th class="text-center fw-light">Numero de Cuenta</th>
                  </tr>
              </thead>
             @foreach($varnominas as $nomina)
              <tbody>
                  <tr>
                    <td class="bg-0">
                      @if($nomina->idtiponomina == 1)
                      Semanal
                      @elseif($nomina->idtiponomina == 2)
                      Quincenal
                      @elseif($nomina->idtiponomina == 3)
                      Mensual
                      @endif
                    </td>
                    <td class="table-light text-secondary">{{$nomina->idpagonomina}}</td>
                    <td name="nominaid" class="table-light text-secondary">{{$nomina->id}}</td>
                    <td class="table-primary text-secondary">{{$nomina->idempleado}}</td>
                    <td class="table-light text-secondary">{{$nomina->primer_nombre.' '.$nomina->segundo_nombre.' '.$nomina->apellido_paterno.' '.$nomina->apellido_materno}}</td>
                    <td class="table-light text-secondary">{{$nomina->puesto}}</td>
                    <td class="table-light text-secondary">{{$nomina->sucursal}}</td>
                    <td class="table-danger text-secondary">{{$nomina->faltas_reta_aus}}</td>
                    <td class="table-success text-secondary">{{$nomina->dias_laborados}}</td>
                    <td class="table-light text-secondary">{{$nomina->sueldo_fiscal}}</td>
                    <td class="table-light text-secondary">{{$nomina->excedente}}</td>
                    <td class="table-light text-secondary">{{$nomina->efectivo}}</td>
                    <td class="table-light text-secondary">{{$nomina->total_sueldo}}</td>
                    <td class="table-light text-secondary">{{$nomina->deudores_fiscal}}</td>
                    <td class="table-light text-secondary">{{$nomina->deudores_no_fiscal}}</td>
                    <td class="table-light text-secondary">{{$nomina->total_deudores}}</td> 
                    <td class="table-light text-secondary">{{$nomina->pago_infonavit}}</td>
                    <td class="table-light text-secondary">{{$nomina->pago_imss}}</td>  
                    <td class="table-light text-secondary">{{$nomina->pago_isr}}</td>
                    <td class="table-light text-secondary">{{$nomina->pago_subsidio}}</td>
                    <td class="table-light text-secondary">{{$nomina->pago_prima_vacacional}}</td>
                    <td class="table-light text-secondary">{{$nomina->dias_pendiente}}</td>
                    <td class="table-primary text-secondary">{{$nomina->bono}}</td>
                    <td class="table-primary text-secondary">{{$nomina->transporte}}</td>
                    <td class="table-secondary text-secondary">{{$nomina->total_nomina_fiscal}}</td>
                    <td class="table-secondary text-secondary">{{$nomina->total_apagar_excedente}}</td>
                    <td class="table-secondary text-secondary">{{$nomina->total_efectivo}}</td>
                    <td class="table-secondary text-secondary">{{$nomina->pago_nomina_fiscal_global}}</td>
                    <td class="table-secondary text-secondary">{{$nomina->pago_nomina_excedente_global}}</td>
                    <td class="table-secondary text-secondary">{{$nomina->pago_efectivo_cajas}}</td>
                    <td class="table-secondary text-secondary">{{$nomina->total_apagar}}</td>
                    <td class="table-light text-secondary">{{$nomina->banco}}</td>
                    <td class="table-light text-secondary">{{$nomina->numero_tarjeta}}</td>
                    <td class="table-light text-secondary">{{$nomina->numero_cuenta}}</td>  
                  </tr>
              </tbody>
              @endforeach
            </table>
        </div>  
  </center>


<!-- ................................................................................................................................................-->

<!-- Subir archivo Modal-->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvaBottomUpload" aria-labelledby="offcanvasBottomLabel" style="height:60vh">
  <div class="offcanvas-header">
    <nav id="navbar-example2" class="navbar navbar-light px-3">
      <a class="navbar-brand">Importar Extras(Bonos,Transporte y Prestamos)</a>
    </nav>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
      <form action="/Nominas/importBoTrans" method="POST" enctype="multipart/form-data" class="g-3 needs-validation" novalidate>
        @csrf
        <div class="container">
          <label for="file1" class="drop-container1">
              <span class="drop-title">Suelte archivo aquí</span>
              ó
              <input type="file" id="my-file" type="file" name="urlxlsx" required>
              <div class="valid-feedback fs-8">
                ¡Se ve bien!
              </div>
              <div class="invalid-feedback fs-8">
                ¡Por favor, sube el archivo de la baja firmada!
              </div>
          </label>

          <spam class="fs-8 text-secondary">Recuerde que solo se admite el formato ".pdf"</spam>
          <div  class="text-center">
            <button type="submit" class="btn btn-p col-md-2 col fw-light rounded-5 fs-8"><i class="fas fa-upload"></i>&nbsp;&nbsp; Subir</button></br></br>
          </div>
        </div>
      </form>
    
    <div class="text-center">
          <a class="link-secondary fs-8"  href="{{ asset('Importaciones/ImportarExtras.xlsx') }}" download="ImportarExtras"><i class="fa-sharp fa-solid fa-file-arrow-down"></i>&nbsp; Descargar Formato</a>
    </div>
  </div>
</div>
<!-- Subir archivo Modal-->

<!-- ................................................................................................................................................-->

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
  $("#deudores_no_fiscal").val(deud_nofiscal);});
 });
</script>
<script src="{{ asset('js/btnBack1.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/simpleTabla2.js') }}"></script>
<script src="{{ asset('js/validaXLSX.js') }}"></script>

@endsection