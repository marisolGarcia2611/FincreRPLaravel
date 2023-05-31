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

<!--Icon Area-->
<div class="pos__ico">
  <img class="ico__image" src="{{ asset('ico/valeMil.png') }}" alt="valeMil">
</div>

<!--Inicio button back Area-->
<div class="pos__btnBack">
    <div class="wrapper"> 
      <form action="/vales">
        <button class="btn btnBack btn-light" type="submit" ><i class="fas fa-solid fa-arrow-left"></i></button>
      </form>
    </div>
</div>

<!-----Principal Area----->
<div class="p__little">
  <br/>
  <br/>
    {{--------------------------- Encabezado de la pagina----------------------}}
      <div class="container">
        <div  class="row mb-5 bg-p">
            <div class="col-md-5 center">
              <h2 class="mt-3 mb-1 mar-2 fw-light animate_animated animate_backInLeft">Distribuidores</h2> 
            </div>
        </div>
      </div> 
     
      @csrf

      {{--------------------------- Cuerpo de la tabla----------------------}}
    <center>
      <div class="mb-5 bg-body border-0">
        <div class="table-responsive pad-table" id="mydatatable-container"> 

          <div class="row">   
              <div class="col-md-4">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="row">
                              <div class="col-md-2 bg-info c_progress"></div> 
                              <p class="col-md-7 fs-9 fw-light ">Distribuidores Activos</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-8"></div>
          </div>

          <table class="table table-hover " id="tblempleados">
            <thead class="table">
                  <tr class="tr-table"> 
           
               
                    <th class="text-center fw-light">Relacion</th>
                    <th class="text-center fw-light">Contol de Pagos</th>
                    <th class="text-center fw-light">No. Distribuidor </th>
                    <th class="text-center fw-light">Nombre</th>
                    <th class="text-center fw-light">Tipo</th>
                    <th class="text-center fw-light">Capital Actual</th>
                  </tr>
            </thead>
            
            <tbody>
              @foreach($vardistribuidores as $dis)
                <tr>
                  
              

                  <td class="bg-0">
                      <center>
                            <form action="">
                                  <button class="btn btn-success fs-9 rounded-5" type="submit"><i class="fa-solid fa-gavel"></i>Generar Reporte de pagos</button>
                            </form>
                      </center>
                  </td>

                  <td class="bg-0">
                      <center>
                            <form action="">
                                  <button class="btn btn-danger fs-9 rounded-5" type="submit"><i class="fa-solid fa-gavel"></i>Contol de Pagos</button>
                            </form>
                      </center>
                  </td>


                  <td class="table-light text-secondary">{{$dis->id}}</td>
                  <td class="table-light text-secondary">{{$dis->nombredis}}</td>
                  <td class="table-light text-secondary">{{$dis->nombre}}</td>
                  <td class="table-light text-secondary">{{$dis->capital}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          
        </div>  
      </div>
    </center>    
</div>

<script src="{{ asset('js/simpleTabla.js') }}"></script>
@endsection