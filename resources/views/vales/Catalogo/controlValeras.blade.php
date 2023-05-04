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

<!--Inicio button notificaciones Area-->
<div id="btnBack"></div>  

<!--Icon Area-->
<div class="pos__ico">
    <img class="ico__image" src="{{ asset('ico/valeMil.png') }}" alt="valeMil">
</div>


<!-----Principal Area----->
<div class="p__little">
  <br/>
  <br/>
    {{--------------------------- Encabezado de la pagina----------------------}}
      <div class="container">
            <div class="row mb-5 bg-p">
                <div class="col-md-4 center">
                    <h2 class="mt-3 mb-3 fw-light animate_animated animate_backInLeft mar-2">Control de valeras</h2> 
                    <cite class="mar-2" title="Título fuente">Entrega de nuevas valeras </cite>
                </div>

                <div class="col-md-6">
                    <div class="row mt-3 text-center">
                            <div class="col-md-5">
                                <form action="/CatalogosVales/altaValeras">
                                    <button  type="submit"  class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fa-solid fa-credit-card"></i>&nbsp; Nueva entrega de valera</button> 
                                </form>
                            </div>
                            <div class="col-md-3">
                                <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fa-solid fa-download"></i>&nbsp; Exportar </button> 
                            </div>
                    </div>
                </div>
            </div>
      </div> 
    
    
    {{--------------------------- Cuerpo de la tabla----------------------}}
    <center>
      <div class="bg-body border-0">
        <div class="table-responsive pad-table" id="mydatatable-container"> 
            
            <div class="row"> 
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-2 cs5"></div> 
                                <p class="col-md-8 fw-light fs-9">Completo</p>
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-2 cs4"></div> 
                                <p class="col-md-6 fw-light fs-9">Agotada</p>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-2 cs3"></div> 
                                <p class="col-md-10 fw-light fs-9">A punto de terminar</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-8"></div>
            </div>
          
            <table class="table table-hover " id="tblempleados">
                <thead class="table">
                    <tr class="tr-table"> 
                        <th  class="text-center fw-light">Editar</th>
                        <th class="text-center fw-light">Inventario</th>
                        <th class="text-center fw-light">Sucursal</th>
                        <th class="text-center fw-light">Elementos disponibles</th>
                        <th class="text-center fw-light">Elementos en uso</th>
                        <th class="text-center fw-light">Fecha de ultima entrega</th>
                       
                    </tr>
                </thead>
                
                <tbody>
                
                    <tr>
                        <!-----Herramientas de la tabla---->
                        <td class="bg-0">
                            <form action="">
                               <button  class="fas fa-edit bor text-s btn border-0" type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Editar" ></button>
                            </form>
                        </td>

                        <td class="bg-0 text-center">
                            <center>
                                <div class="col-md-2 cs5"></div>          
                            </center>
                        </td>


                        <td class="table-light text-secondary"></td>
                        <td class="table-light text-secondary"></td>
                        <td class="table-light text-secondary"></td>
                        <td class="table-light text-secondary"></td> 
                    </tr>
        
                </tbody>
            </table>

        </div>  
      </div>
    </center> 
</div>


<script src="{{ asset('js/simpleTabla.js') }}"></script>
<script src="{{ asset('js/valeraEntrega.js') }}"></script>
<script src="{{ asset('js/btnBack1.js') }}"></script>



@endsection