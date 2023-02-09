@extends('layouts.app')
@section('content')

</style>

<div class="mt-5 p__little">

<button class="btn btn-danger"  type="submit">Cerrar Nomina</button>

  <div class="bg-table">
    <div class="table-responsive" style="padding:30px;padding-bottom:10px;" id="mydatatable-container">     
    <form action="/nominasupdate/">
      <table class="table table-hover" id="tblempleados">
      <thead class="table" style="border:0px solid rgba(255, 255, 255, 0);">
            <tr style="background-color: #32394B;color:#fff;border:0px solid rgba(255, 255, 255, 0);"> 
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
              <td>
              <button class="btn btn-success"  type="submit"> <a href=" /Nominaseditaremp/editarnomemp/{{$nomina->idpagonomina}}/{{$nomina->idempleado}}">Editar Nomina</a></button>
            </td>
            <td name="nominaid" class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->id}}</td>
            <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->idempleado}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->idpagonomina}}</td>
              <td class="bg-2" style="background-color: #9ba9e2;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->primer_nombre.' '.$nomina->segundo_nombre.' '.$nomina->apellido_paterno.' '.$nomina->apellido_materno}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->puesto}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->sucursal}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->faltas_reta_aus}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->dias_laborados}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->sueldo_fiscal}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->excedente}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->efectivo}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->total_sueldo}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->deudores_fiscal}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->deudores_no_fiscal}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->total_deudores}}</td> 
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->pago_infonavit}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->pago_imss}}</td>  
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->pago_isr}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->pago_subsidio}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->pago_prima_vacacional}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->dias_pendiente}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->dias_pendiente}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->transporte}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->total_nomina_fiscal}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->total_apagar_excedente}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->total_efectivo}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->pago_nomina_fiscal_global}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->total_apagar}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->banco}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->numero_tarjeta}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->numero_cuenta}}</td>  
            </tr>
    @endforeach
        </tbody>
      </table>
      <Button class="btn btn-primary" type="submit">Guardar Cambios</Button>
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


@endsection