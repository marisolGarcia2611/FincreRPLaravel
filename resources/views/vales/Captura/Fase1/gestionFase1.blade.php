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
              <h2 class="mt-3 mb-1 mar-2 fw-light animate_animated animate_backInLeft">Captura de Distribuidores</h2> 
              <cite class="mar-2"  title="Título fuente">Distribuidor, Aval y Documentos importados</cite>
            </div>

            <div class="col-md-6">
              <div class="row mt-3 text-center">
                  <div class="col-md-5">
                      <form action="/vales/CapturaDistribuidor">
                          <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fas fa-plus"></i>&nbsp; Nuevo Distribuidor </button> 
                      </form>
                  </div>
                  <div class="col-md-3">
                    <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fa-solid fa-download"></i>&nbsp; Exportar </button> 
                  </div>
              </div>
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
                              <p class="col-md-7 fs-9 fw-light ">Distribuidor</p>
                          </div>
                      </div>

                      <div class="col-md-3">
                          <div class="row">
                              <div class="col-md-2 bg-primary c_progress"></div> 
                              <p class="col-md-3 fs-9 fw-light">Aval</p>
                          </div>
                      </div>

                      <div class="col-md-4">
                          <div class="row">
                              <div class="col-md-2 bg-success c_progress"></div> 
                              <p class="col-md-7 fs-9 fw-light">Documentos</p>
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
                    <th class="text-center fw-light">Progreso</th>                
                    <th class="text-center fw-light">Acción</th>
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
                    <td class="bg-0">
                    <form action="/vales/getactualizardistribuidor/{{$dis->id}}">
                      <button class="text-s btn fas fa-edit bor"  type="submit"></button>
                      </form>
                      </td>
                    @elseif($dis->estado_captura==1)
                    <td class="bg-0">
                      <form action="/vales/Termina_Proceso_aval/{{$dis->id}}">
                        <button class="text-s btn fa-solid fa-list-ol bor" type="submit"></button>
                      </form>
                      </td>
                    @elseif($dis->estado_captura==2)
                    <td class="bg-0">
                      <form action="/vales/Termina_Proceso_documentos/{{$dis->id}}">
                        <button class="text-s btn fa-solid fa-list-ol bor" type="submit"></button>
                      </form>
                      </td>
                    @endif
                  </td>
                  <td class="bg-0">
                    <form action="{{route('vales.getverdoc', $dis->id) }}">
                          <button class="text-s btn fa-solid fa-eye bor" type="submit"></button>
                    </form>
                  </td>

                  <td class="bg-0">
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

                  <td class="bg-0">
                    @if($dis->estado_captura==3 && $dis->status =="pro_rev")
                      <center>
                            <form action="/vales/enviaramesa_credito/{{$dis->id}}">
                                  <button class="btn btn-warning fs-9 rounded-5" type="submit"><i class="fa-solid fa-gavel"></i> Dictamen</button>
                            </form>
                      </center>
                    @endif
                    @if($dis->estado_captura==3 && $dis->status =='pro_obs')
                      <center>
                            <form action="/vales/enviaramesa_credito_act/{{$dis->id}}">
                                    <button class="btn btn-warning fs-9 rounded-5" type="submit"><i class="fa-brands fa-slack"></i> Enviar Mesa Crédito</button>
                            </form>
                      </center>
                    @endif
                  </td>

                  <td class="table-light text-secondary">{{$dis->id}}</td>
                  <td class="table-light text-secondary">{{$dis->primer_nombre}}</td>
                  <td class="table-light text-secondary">{{$dis->segundo_nombre}}</td>
                  <td class="table-light text-secondary">{{$dis->apellido_paterno}}</td>
                  <td class="table-light text-secondary">{{$dis->apellido_materno}}</td>
                  <td class="table-light text-secondary">{{$dis->nombre}}</td>
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