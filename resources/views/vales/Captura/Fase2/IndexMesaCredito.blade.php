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

@elseif($mensaje = Session::get('warningMenssage'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Ultimo mensaje enviado aun no leído!","Debe esperar respuesta de la sucursal antes de mandar un nuevo mensaje","warning", {buttons: false,timer: 4000});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('warningAut'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Autorización no concluida!","Deberá GUARDAR OBSERVACIONES con un CAPITAL AUTORIZADO mayor a 0.00 y no debe pasar el CAPITAL SOLICITADO ,antes de APROBAR","warning", {buttons: false,timer: 4000});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('warningAut2'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Observaciones no guardadas!","Verifique que el CAPITAL AUTORIZADO sea mayor a 0 y no exceda al CAPITAL SOLICITADO","warning", {buttons: false,timer: 3000});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('warningDis'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("Acción no realizada!","Distribuidor no encontrado","warning", {buttons: false,timer: 4000});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('warningDoc'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("Acción no realizada!","Documentos no guardados correctamente","warning", {buttons: false,timer: 4000});';
          echo '</script>';  
  @endphp


@elseif($mensaje = Session::get('successValera'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Credito Aprobado!","Ahora puede iniciar con el proceso de entrega de valera","success", {buttons: false,timer: 4000});';
          echo '</script>';  
  @endphp

@endif
{{-- ALERTAS --}}


<!--Inicio button back Area-->
<div class="pos__btnBack">
    <div class="wrapper"> 
      <form action="/vales">
        <button class="btn btnBack btn-light" type="submit" ><i class="fas fa-solid fa-arrow-left"></i></button>
      </form>
    </div>
</div>


<!--Inicio button notificaciones Area-->
<div class="pos__btnNotification">
    <div class="wrapper"> 
        <button type="button" class="btn border-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <h5 class="btnNoti push2"><i class="fa-solid fa-bell"></i>
                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                    <span class="visually-hidden">Nuevas alertas</span>
                </span>
            </h5>
        </button>
    </div>
        
</div>



<!-----Principal Area----->
<div class="p__little">
  <br/>
  <br/>
    {{--------------------------- Encabezado de la pagina----------------------}}
    <div class="container">
        <div class="row mb-5 bg-p">
                <div class="col-md-4 center">
                    <h2 class="mt-3 mb-1 mar-2 fw-light animate_animated animate_backInLeft">Créditos en Dictamen</h2> 
                    <cite class="mar-2" title="Título fuente">Analisis de solicitudes </cite>
                </div>
                <div class="col-md-6">
                    <div class="row mt-3 text-center">
                        @if(Auth::user()->tipo =='administrativo')
                            <div class="col-md-5">
                                <button  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fa-solid fa-gavel"></i>&nbsp;Créditos en Dictamen</button> 
                            </div>
                                <!-----Modal mesa credito Area----->
                                <div class="offcanvas offcanvas-top bg-light" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel" style="height:90vh;">
                                    <div class="offcanvas-body contenedor-light">
                                            <div class="row mt-2 mb-3">
                                                <div class="col-md-3 d-none d-md-block"></div>
                                                <div class="col-md-3 col-6 text-center mt-2">
                                                    <div id="boton1" class="btn push m-0 p-1 sizeItem border-0" onclick="divLogin1()">
                                                        <div class="row bord1"><h1 class="iconSolicitud d-none d-md-block"><i class="fa-brands fa-slack"></i></h1><h6 class="fw-light fs_special2">Dictamen </h6></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-6 text-center mt-2">
                                                    <div id="boton2" class="btn push m-0 p-1 sizeItem border-0" onclick="divLogin2()">   
                                                        <div class="row bord1"> <h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-lines-leaning"></i></h1><h6 class="fw-light fs_special2">Validación</h6></div>
                                                    </div> 
                                                </div>
                                                <div class="col-md-3 d-none d-md-block"></div>
                                            </div>

                                            <div class="shadow bg-body rounded border-t border-0">
                                                <div class="table-responsive pad-table p__little" id="mydatatable-container"> 
                                                    <div class="row">     
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-4" id="prospecto">
                                                                    <div class="row">
                                                                        <div class="col-md-2 cs1"></div> 
                                                                        <p class="col-md-8 fw-light fs-9">Prospecto en revisión</p>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-4" id="dictamen">
                                                                    <div class="row">
                                                                        <div class="col-md-2 cs3"></div> 
                                                                        <p class="col-md-6 fw-light fs-9">En Dictamen</p>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2" id="validacion">
                                                                    <div class="row">
                                                                        <div class="col-md-2 cs6"></div> 
                                                                        <p class="col-md-8 fw-light fs-9">Validación</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>

                                                    <table class="table table-hover" id="dic">
                                                        <thead class="table">
                                                            <tr class="tr-table">                                
                                                                <th class="text-center fw-light">Revisar</th>
                                                                <th class="text-center fw-light">Estado</th>
                                                                <th class="text-center fw-light">No. Distribuidor</th>
                                                                <th class="text-center fw-light">Nombre Completo</th>
                                                                <th  class="text-center fw-light">Sucursal</th>
                                                                <th  class="text-center fw-light">Capital</th>
                                                                <th  class="text-center fw-light">Capital Autorizado</th>
                                                            </tr>
                                                        </thead>

                                                        
                                                        <tbody id="caja1">
                                                            @foreach($varcredito_rec_dic as $mesacredi)
                                                                <tr>
                                                                    <td class="bg-0 text-center">
                                                                        <form action="/vales/GestionFase2/SolicitudMesaCredito/{{$mesacredi->id}}">
                                                                            <button class="text-s btn fa-regular fa-note-sticky bor" type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="VerSolicitud"></button>
                                                                        </form>
                                                                    </td>

                                                                    <td class="bg-0 text-center">
                                                                    <center>
                                                                        @if($mesacredi->status == 'pro_rev')
                                                                        <div class="col-md-6 cs1"></div>                
                                                                        @endif
                                                                        @if($mesacredi->status == 'pro_dic')
                                                                        <div class="col-md-6 cs3"></div>                    
                                                                        @endif
                                                                    </center>
                                                                    </td>

                                                                    <td class="table-light text-secondary fs-8">{{$mesacredi->id}}</td>
                                                                    <td class="table-light text-secondary fs-8">{{$mesacredi->nombre}}</td>
                                                                    <td class="table-light text-secondary fs-8">{{$mesacredi->nombre_suc}}</td>
                                                                    <td class="table-light text-secondary fs-8">{{$mesacredi->capital}}</td>  
                                                                    <td class="table-light text-secondary fs-8">{{$mesacredi->capital_autorizado}}</td>                
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        
                                                        <tbody id="caja2"> 
                                                            @foreach($varcreditoval as $mesa)
                                                                <tr>
                                                                    <td class="bg-0 text-center" >
                                                                        <center>
                                                                            @if($mesa->status == 'pro_valRev')
                                                                            <div class="col-md-6 cs6_rev"></div>                    
                                                                            @endif
                                                                            @if($mesa->status == 'pro_valDic')
                                                                            <div class="col-md-6 cs6_dic"></div>                    
                                                                            @endif
                                                                        </center>                    
                                                                    </td>

                                                                    <td class="bg-0 text-center">
                                                                        <form action="/vales/GestionFase2/SolicitudMesaCredito/{{$mesa->id}}">
                                                                            <button class="text-s btn fa-regular fa-note-sticky bor"  type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Ver Solicitud"></button>
                                                                        </form>
                                                                    </td>
                                                                    <td class="table-light text-secondary fs-8">{{$mesa->id}}</td>
                                                                    <td class="table-light text-secondary fs-8">{{$mesa->nombre}}</td>
                                                                    <td class="table-light text-secondary fs-8">{{$mesa->nombre_suc}}</td>
                                                                    <td class="table-light text-secondary fs-8">{{$mesa->capital}}</td>  
                                                                    <td class="table-light text-secondary fs-8">{{$mesa->capital_autorizado}}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>  
                                            </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-outline-secondary rounded-5" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-chevron-up"></i></button>
                                        </div>
                                    </div>
                                </div>

                        @endif
                        <div class="col-md-4">
                            <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fa-solid fa-download"></i>&nbsp; Exportar </button> 
                        </div>
                        <div class="col-md-4 d-md-block d-none"></div>
                    </div>
                </div>
        </div> 
    </div>
    
      {{--------------------------- Cuerpo de la tabla----------------------}}
    <center>
      <div class="mb-5 bg-body border-0">
        <div class="table-responsive pad-table" id="mydatatable-container"> 
            
            <div class="row">
                
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-2 cs1"></div> 
                                <p class="col-md-7 fs-9 fw-light">Prospecto en revisión</p>
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-2 cs3"></div> 
                                <p class="col-md-6 fs-9 fw-light">En dictamen</p>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-2 cs4"></div> 
                                <p class="col-md-7 fs-9 fw-light">Rechazado</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-2 cs5"></div> 
                                <p class="col-md-7 fs-9 fw-light">Autorizado</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-2 cs6"></div> 
                                <p class="col-md-7 fs-9 fw-light">Validación</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-8"></div>
            </div>
          
            <table class="table table-hover " id="tblempleados">
                <thead class="table">
                    <tr class="tr-table"> 
                        @if(Auth::user()->tipo =='sucursal')
                            <th class="text-center fw-light">Editar</th>
                        @endif
                        @if(Auth::user()->tipo =='sucursal')
                            <th class="text-center fw-light">Documentos</th>
                        @endif
                        <th class="text-center fw-light">Acción</th>
                        @if(Auth::user()->tipo =='administrativo')
                            <th class="text-center fw-light">Revisar</th>
                        @endif
                        <th class="text-center fw-light">Estado</th>
                        {{-- <th class="text-center fw-light">Historial</th> --}}
                        <th class="text-center fw-light">No. Distribuidor</th>
                        <th class="text-center fw-light">Nombre Completo</th>
                        <th  class="text-center fw-light">Sucursal</th>
                        <th  class="text-center fw-light">Capital Solicitado</th>
                        <th  class="text-center fw-light">Capital Autizado</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($varmesadecredito as $mesacred)
                        <tr>
                            <!-----Herramientas de la tabla---->
                            @if(Auth::user()->tipo =='sucursal')
                            <td class="bg-0">
                                @if($mesacred->status =='pro_rev')
                                <form action="/vales/getactualizardistribuidor/{{$mesacred->id}}">
                                    <button  class="fa-solid fa-pen bor text-s btn border-0" title="Editar" type="submit" data-bs-toggle="tooltip" data-bs-placement="right"></button>
                                    <span class="text-success fs-9 fst-italic fw-light"><i class="fa-solid fa-check"></i></span>
                                </form>
                                @elseif($mesacred->status =='pro_valRev')
                                <form action="/vales/getactualizarValidacion/{{$mesacred->id}}">
                                    <button  class="fa-solid fa-pen bor text-s btn border-0" title="Editar" type="submit" data-bs-toggle="tooltip" data-bs-placement="right"></button>
                                    <span class="text-success fs-9 fst-italic fw-light"><i class="fa-solid fa-check"></i></span>
                                </form>
                                @else
                                <form action="#">
                                    <button  class="fa-solid fa-pen bor text-s btn  border-0" type="submit" data-bs-toggle="tooltip" data-bs-placement="right" disabled></button>
                                    <span class="text-danger fs-9 fst-italic fw-light"><i class="fa-solid fa-xmark"></i></span>
                                </form>
                                @endif
                            </td>
                            @endif
                            @if(Auth::user()->tipo =='sucursal' )
                            <td class="bg-0">
                                @if($mesacred->status =='val')
                                <form action="/vales/getSubirDocVal/{{$mesacred->id}}">
                                    <button class="text-s btn fa-solid fa-upload bor"  type="submit"></button>
                                </form>
                                @else
                                    <form action="{{route('vales.getverdoc', $mesacred->id) }}">
                                      <button class="text-s btn fa-solid fa-eye bor" title="Ver" type="submit"></button>
                                    </form>
                                @endif
                            </td>
                            @endif
                           
                              <td class="bg-0">
                                <center>
                                @if(Auth::user()->tipo =='sucursal' )
                                    @if($mesacred->status =='pro_rev')
                                        <form action="/vales/enviaramesa_credito_act/{{$mesacred->id}}">
                                            <button class="btn btn-warning fs-9 rounded-5 text-secondary" type="submit"><i class="fa-solid fa-gavel"></i> Enviar a dictamen</button>
                                        </form>
                                    @elseif($mesacred->status =='pro_val' || $mesacred->status =='pro_valRev')
                                        <form action="/vales/enviaramesa_credito_val/{{$mesacred->id}}">
                                            <button class="btn btn-warning fs-9 rounded-5 text-secondary" type="submit"><i class="fa-solid fa-gavel"></i> Enviar a dictamen</button>
                                        </form>
                                    @endif
                                @elseif(Auth::user()->tipo =='administrativo' && $mesacred->status =='pro_aut')
                                    <form action="/vales/iniciarValidacion/{{$mesacred->id}}">
                                        <button class="btn btn-light fs-9 rounded-5 text-secondary" type="submit"><i class="fa-solid fa-flag-checkered"></i> Comenzar validación</button>
                                    </form>
                                @else
                                <p class="fs-8 text-secondary fw-light fst-italic"><i class="fa-solid fa-circle-exclamation"></i> Espere para usar</p>
                                @endif
                                </center>
                              </td>
                          
                            @if(Auth::user()->tipo =='administrativo')
                            <td class="bg-0">
                                <form action="/vales/GestionFase2/SolicitudMesaCredito/{{$mesacred->id}}">
                                    <button class="fa-regular fa-note-sticky bor text-s btn border-0" title="Revisar Solicitud" type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Ver"></button>
                                </form>
                            </td>
                            @endif

                            <td class="bg-0 text-center">
                                <center>
                                  @if($mesacred->status == 'pro_rev')
                                  <div class="col-md-6 cs1"></div>                
                                  @endif
                                  @if($mesacred->status == 'pro_dic')
                                  <div class="col-md-6 cs3"></div>                    
                                  @endif
                                  @if($mesacred->status == 'pro_rec')
                                  <div class="col-md-6 cs4"></div>                    
                                  @endif
                                  @if($mesacred->status == 'pro_aut')
                                  <div class="col-md-6 cs5"></div>                    
                                  @endif
                                  @if($mesacred->status == 'val' || $mesacred->status == 'pro_val')
                                  <div class="col-md-6 cs6 fs-9"></div>                    
                                  @endif
                                  @if($mesacred->status == 'pro_valRev')
                                  <div class="col-md-6 cs6_rev"></div>                    
                                  @endif
                                  @if($mesacred->status == 'pro_valDic')
                                  <div class="col-md-6 cs6_dic"></div>                    
                                  @endif
                                  @if($mesacred->status == 'pro_apro')
                                  <div class="col-md-6 cs6_apro"></div>                    
                                  @endif
                                  @if($mesacred->status == 'pro_den')
                                  <div class="col-md-6 cs6_den"></div>                    
                                  @endif
                               </center>
                              </td>

                            <td class="table-light text-secondary">{{$mesacred->id}}</td>
                            <td class="table-light text-secondary">{{$mesacred->nombre}}</td>
                            <td class="table-light text-secondary">{{$mesacred->nombresuc}}</td>
                            <td class="table-light text-secondary">{{$mesacred->capital}}</td> 
                            <td class="table-light text-secondary">{{$mesacred->capital_autorizado}}</td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>  
      </div>
    </center> 
</div>


<!-----Historial Area----->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
      <div class="text-center">
          <h5 class="offcanvas-title fw-light" id="offcanvasRightLabel">Historial</h5>
      </div>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div id="historial"></div>
    </div>
</div>


<!--Inicio  noficaciones Area-->  
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
    <div class="text-center">
        <h5 class="offcanvas-title fw-light" id="offcanvasRightLabel">Notificaciones</h5>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
    
    
    @foreach($varnotificaciones as $notificaciones)
        <div class="shadow-sm p-3 mb-5 rounded-4 bg-lightsecond">
        @if($notificaciones->status =="leido")
        @else
        <div class="fw-bold text-secondary text-end fs-9 mt-6">Distribuidor: {{$notificaciones->iddistribuidor}}</div>

        <div class="fw-bold fs-8 text-secondary fw-light">
            Mensaje no leido
        </div>
        {{-- <div class="fw-bold  mt-6">ID: {{$notificaciones->id}}</div> --}}
        
        <div class="fw-light mt-2">{{$notificaciones->tipo_usuario}}: {{$notificaciones->texto}}</div>
        <div class="text-end mt-4">
            <a href="#" class="text-primary fw-light link_none fs-8">Responder</a>
            <br>
            <a href="#" class="text-primary fw-light link_none fs-8">Terminar Conversación</a>
        </div>
        </div>
        @endif
        @endforeach
    
        <center>
            <form action="/vales/actualizarnotificaciones">
                <button class="btn border-0" type="submit"><h6 class="fw-light text-primary"> <i class="fa-solid fa-arrows-rotate"></i>&nbsp; &nbsp;Actualizar </h6></button>
            </form>
        </center>
    </div>
</div>







<script src="{{ asset('js/Historial.js') }}"></script>
<script src="{{ asset('js/simpleTabla.js') }}"></script>
<script src="{{ asset('js/mesaCreditoModal.js') }}"></script>
<script src="{{ asset('js/validaPDF.js')}}"></script>


@endsection