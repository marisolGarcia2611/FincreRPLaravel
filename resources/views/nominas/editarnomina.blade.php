@extends('layouts.app')
@section('content')

</style>

<div class="mt-4 p__little">
<br/>
<br/>
  <center class="container">
        <div class="col-md-12">
          <h2 class="mt-3 mb-3 fw-light animate_animated ">Nominas</h2> 
        </div>
        <div class="col-md-12">
          <div class="row mt-8 text-center">
            <div>
              <button type="submit" class=" animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-times-circle"></i>&nbsp; Cerrar Nomina </button> 
            </div>
      
        </div>
  </center> 
<br/>

<div class="shadow-lg mb-5 bg-body rounded border-0" style="margin:20px;width:95%;">
  <div class="table-responsive pad-table" id="mydatatable-container">     
    <form action="/nominasupdate/">
      <table class="table table-hover" id="tblempleados">
      <thead class="table">
            <tr class="tr-table"> 
            <th class="text-center fw-light">Acciones</th>
            <th class="text-center fw-light">ID</th>
            <th class="text-center fw-light">Numero Empleado</th>
            <th class="text-center fw-light">Numero de Nomina pago</th>
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
            <th class="text-center fw-light">Pago Efectivo Cajas</th>
            <th class="text-center fw-light">Banco</th>
            <th class="text-center fw-light">Numero de Tarjeta</th>
            <th class="text-center fw-light">Numero de Cuenta</th>
          
          </tr>
        </thead>
        
        <tbody>
         
            <tr>
              @foreach($varnominas as $nomina)
              <td class="td-tools">
                 <a class="text-light btn fas fa-edit border-0 push" href=" /Nominaseditaremp/editarnomemp/{{$nomina->idpagonomina}}/{{$nomina->idempleado}}"></a>
              </td>

              <td name="nominaid" class="bg-1">{{$nomina->id}}</td>
              <td class="bg-1">{{$nomina->idempleado}}</td>
              <td class="bg-1">{{$nomina->idpagonomina}}</td>
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
              <td class="bg-1">{{$nomina->dias_pendiente}}</td>
              <td class="bg-1">{{$nomina->transporte}}</td>
              <td class="bg-3">{{$nomina->total_nomina_fiscal}}</td>
              <td class="bg-3">{{$nomina->total_apagar_excedente}}</td>
              <td class="bg-3">{{$nomina->total_efectivo}}</td>
              <td class="bg-1">{{$nomina->pago_nomina_fiscal_global}}</td>
              <td class="bg-1">{{$nomina->total_apagar}}</td>
              <td class="bg-3">{{$nomina->banco}}</td>
              <td class="bg-3">{{$nomina->numero_tarjeta}}</td>
              <td class="bg-3">{{$nomina->numero_cuenta}}</td>  
            </tr>
    @endforeach
        </tbody>
      </table>
      <Button class="btn btn-blue rounded-5" type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;Guardar Cambios</Button>
      </form>
    </div>  
  </div>
</center> 

  <br/>
  <br/>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height:70vh">

<div class="offcanvas-header">
<nav id="navbar-example2" class="navbar navbar-light px-3">
      <a class="navbar-brand">Nueva Nomina</a>
      
    </nav>
  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>


<script>
  // $(document).ready(function() {
  //   $("table tbody tr").click(function() {
      var table = $('#tblempleados').DataTable( {
          "dom": 'B<"float-left"l><"float-right"f>t<"float-left"i><"float-right"p><"clearfix">',
          responsive: true,
          scrollY: 500,
          scrollX:true,
          "language": {
              "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
          },
          
      } );
      new $.fn.dataTable.FixedHeader( table );
  //   });
  // });
  </script>

@endsection