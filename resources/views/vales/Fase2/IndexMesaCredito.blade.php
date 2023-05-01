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
          echo 'swal("¡Ultimo mensaje enviado aun no leído!","Debe esperar respuesta de la sucursal antes de mandar un nuevo mensaje","warning", {buttons: false,timer: 5000});';
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

<!--INICIO NOTIFICACIONES AREA-->  
<div id="notificaciones">
    <div class="pos__btnNotification">
        <div class="wrapper"> 
            <button type="button" class="btn border-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <h5 class="btnNoti"><i class="fa-solid fa-bell"></i>
                    <span class="fs-9 position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    <a> +</a>
                    </span>
                </h5>
            </button>
        </div>
            
    </div>


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
</div>




<!-----Principal Area----->
<div class="mt-4 p__little">
  <br/>
  <br/>
    {{--------------------------- Encabezado de la pagina----------------------}}
      <center class=" mb-3 container bg-p">
            <div class="col-md-12">
              <h2 class="mt-3 mb-3 fw-light animate_animated animate_backInLeft">Créditos en Dictamen</h2> 
              <cite title="Título fuente">Analisis de solicitudes </cite>
            </div>
            <div class="col-md-12">
              <div class="row mt-3 text-center">
                    <div class="col d-md-block d-none"></div>
                
                    <div class="col-md-3">
                        {{-- <form action="">
                            <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fa-solid fa-file"></i>&nbsp;Reportes</button> 
                        </form> --}}
                    </div>

                    <div class="col-md-4">
                            <button  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fa-solid fa-gavel"></i>&nbsp;Créditos en Dictamen</button> 
                    </div>

                    <div class="col-md-3">
                        {{-- <form action="">
                            <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-chart-pie"></i>&nbsp;Gaficas</button> 
                        </form> --}}
                    </div>

                    <div class="col d-md-block d-none"></div>
              </div>
            </div>
      </center> 
    
      {{--------------------------- Cuerpo de la tabla----------------------}}
    <center class="mb-4">
      <div class="shadow-lg mb-5 bg-body rounded border-0" style="margin:20px;width:95%;">
        <div class="table-responsive pad-table" id="mydatatable-container"> 
            
            <div class="row">
                
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-4 cs1"></div> 
                                <p class="col-md-8 fw-light">Prospecto en revisión</p>
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-4 cs3"></div> 
                                <p class="col-md-6 fw-light">En Dictamen</p>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-4 cs4"></div> 
                                <p class="col-md-8 fw-light">Rechazado</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-4 cs5"></div> 
                                <p class="col-md-8 fw-light">Autorizado</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-4 cs6"></div> 
                                <p class="col-md-8 fw-light">Validación</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-8"></div>
            </div>
          
            <table class="table table-hover " id="tblempleados">
                <thead class="table">
                    <tr class="tr-table"> 
                        <th class="text-center fw-light">Estado</th>
                        <th class="text-center fw-light">Editar</th>
                        <th class="text-center fw-light">Revisar</th>
                        {{-- <th class="text-center fw-light">Historial</th> --}}
                        <th class="text-center fw-light">No. Distribuidor</th>
                        <th class="text-center fw-light">Nombre Completo</th>
                        <th  class="text-center fw-light">Sucursal</th>
                        <th  class="text-center fw-light">Capital Solicitado</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($varmesadecredito as $mesacred)
                        <tr>
                            <!-----Herramientas de la tabla---->
                            <td class="td-tools text-center" >
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
                                @if($mesacred->status == 'pro_val')
                                <div class="col-md-6 cs6"></div>                    
                                @endif
                                @if($mesacred->status == 'pro_obs')
                                <div class="col-md-6 cs1"></div>                    
                                @endif
                             </center>
                            </td>


                            <td class="td-tools">
                                <form action="/vales/getactualizardistribuidor/{{$mesacred->id}}">
                                <button  class="fas fa-edit bor text-light btn border-0" type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Editar" ></button>
                                </form>
                            </td>

                            <td class="td-tools">
                                <form action="/vales/GestionFase2/SolicitudMesaCredito/{{$mesacred->id}}">
                                    <button class="text-light btn fa-solid fa-eye bor"  type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Ver"></button>
                                </form>
                            </td>

                            {{-- <td class="bg-1">
                                <div class="progress" type="button"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 33.3%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 33.3%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 33.3%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td> --}}
                            <td class="bg-3">{{$mesacred->id}}</td>
                            <td class="bg-2">{{$mesacred->nombre}}</td>
                            <td class="bg-2">{{$mesacred->nombresuc}}</td>
                            <td class="bg-2">{{$mesacred->capital}}</td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>  
      </div>
    </center> 
  <br/>
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





<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel" style="height:90vh;">
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
                <div class="table-responsive pad-table" id="mydatatable-container"> 
                    <div class="row">     
                        <div class="col-md-6">
                            <div class="row" style="font-size: 12px">
                                <div class="col-md-5" id="prospecto">
                                    <div class="row">
                                        <div class="col-md-4 cs1"></div> 
                                        <p class="col-md-8 fw-light">Prospecto en revisión</p>
                                    </div>
                                </div>


                                <div class="col-md-4" id="dictamen">
                                    <div class="row">
                                        <div class="col-md-4 cs3"></div> 
                                        <p class="col-md-6 fw-light">En Dictamen</p>
                                    </div>
                                </div>

                                <div class="col-md-3" id="validacion">
                                    <div class="row">
                                        <div class="col-md-4 cs6"></div> 
                                        <p class="col-md-8 fw-light">Validación</p>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>

                    <table class="table table-hover" id="dic">
                        <thead class="table">
                            <tr class="tr-table"> 
                                <th class="text-center fw-light">Estado</th>
                                <th class="text-center fw-light">Revisar</th>
                                <th class="text-center fw-light">No. Distribuidor</th>
                                <th class="text-center fw-light">Nombre Completo</th>
                                <th  class="text-center fw-light">Sucursal</th>
                                <th  class="text-center fw-light">Capital</th>
                            </tr>
                        </thead>

                        
                        <tbody id="caja1">
                            @foreach($varcredito_rec_dic as $mesacredi)
                                <tr>
                                <td class="td-tools text-center">
                                 <center>
                                    @if($mesacredi->status == 'pro_rev')
                                    <div class="col-md-6 cs1"></div>                
                                    @endif
                                    @if($mesacredi->status == 'pro_dic')
                                    <div class="col-md-6 cs3"></div>                    
                                    @endif
                                  </center>
                                </td>

                                    <td class="td-tools">
                                        <form action="/vales/GestionFase2/SolicitudMesaCredito/{{$mesacredi->id}}">
                                            <button class="text-light btn fa-solid fa-eye bor"  type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Ver"></button>
                                        </form>
                                    </td>
                                    <td class="bg-3">{{$mesacredi->id}}</td>
                                    <td class="bg-2">{{$mesacredi->nombre}}</td>
                                    <td class="bg-2">{{$mesacredi->nombre_suc}}</td>
                                    <td class="bg-2">{{$mesacredi->capital}}</td>                 
                                </tr>
                            @endforeach
                        </tbody>
                        
                        <tbody id="caja2"> 
                            @foreach($varcreditoval as $mesa)
                                <tr>
                                    <td class="td-tools text-center" >
                                            <div class="bg-4 circle cst6"  title="Validado"><i class="fa-solid fa-check"></i></div>                     
                                    </td>

                                    <td class="td-tools">
                                        <form action="/vales/GestionFase2/SolicitudMesaCredito/{{$mesa->id}}">
                                            <button class="text-light btn fa-solid fa-eye bor"  type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Ver"></button>
                                        </form>
                                    </td>
                                    <td class="bg-3">{{$mesa->id}}</td>
                                    <td class="bg-2">{{$mesa->nombre}}</td>
                                    <td class="bg-2">{{$mesa->nombre_suc}}</td>
                                    <td class="bg-2">{{$mesa->capital_autorizado}}</td>
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



<script src="{{ asset('js/Historial.js') }}"></script>
<script src="{{ asset('js/simpleTabla.js') }}"></script>
<script src="{{ asset('js/btnBack1.js') }}"></script>

<script>
$(document).ready(function() {
    

    var table = $('#dic').DataTable( {
          "dom": 'B<"float-left"l><"float-right"f>t<"float-left"i><"float-right"p><"clearfix">',
          responsive: true,
          scrollY: 220,
          scrollX: false,
          "language": {
              "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
          },
          
      } );
      new $.fn.dataTable.FixedHeader( table );
  });

</script>

<script>
$(document).ready(function() { 
        $('#caja1').show();
        $('#caja2').hide();
        $('#prospecto').show(); 
        $('#dictamen').show();
        $('#validacion').hide(); 
    });
</script>

<script>
   
        var clic1 = 1;
        var uno1 = document.getElementById('boton1');
    
    
        function divLogin1(){ 
        if(clic1==1){
            
            document.getElementById("caja1").style.height = "100%";
            $('#caja1').show(); 
            uno1.innerHTML = '<div class="row bord"><h1 class="iconSolicitud1 d-none d-md-block"><i class="fa-brands fa-slack"></i></h1><h6 class="fw-bold fs_special20">Dictamen </h6></div>';
            $('#caja2').hide(); 
            uno2.innerHTML = '<div class="row bord1"> <h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-lines-leaning"></i></h1><h6 class="fw-light fs_special2">Validación</h6></div>';  
            $('#prospecto').show(); 
            $('#dictamen').show();
            $('#validacion').hide();  
            clic1 = clic1 + 1;
        } 
        else{
            document.getElementById("caja1").style.height = "0px"; 
            $('#caja1').hide();   
            uno1.innerHTML ='<div class="row bord1"><h1 class="iconSolicitud d-none d-md-block"><i class="fa-brands fa-slack"></i></h1><h6 class="fw-light fs_special2">Dictamen</h6></div>';  
            $('#prospecto').hide(); 
            $('#dictamen').hide();
            $('#validacion').show();  
            clic1 = 1;
        }   
        }
    
    
    
    
        var clic2 = 1;
        var uno2 = document.getElementById('boton2');
    
    
        function divLogin2(){ 
        if(clic2==1){
            
            document.getElementById("caja2").style.height = "100%";
            $('#caja2').show();
            uno2.innerHTML = '  <div class="row bord"><h1 class="iconSolicitud1 d-none d-md-block"><i class="fa-solid fa-lines-leaning"></i></h1><h6 class="fw-bold fs_special20">Validación</h6></div>';
            $('#caja1').hide(); 
            uno1.innerHTML = '  <div class="row bord1"><h1 class="iconSolicitud d-none d-md-block"><i class="fa-brands fa-slack"></i></h1><h6 class="fw-light fs_special2">Dictamen</h6></div>'; 
            $('#prospecto').hide(); 
            $('#dictamen').hide();
            $('#validacion').show(); 
            clic2 = clic2 + 1;
        } 
        else{
            document.getElementById("caja2").style.height = "0px"; 
            $('#caja2').hide();   
            uno2.innerHTML = '<div class="row bord1"> <h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-lines-leaning"></i></h1><h6 class="fw-light fs_special2">Validación</h6></div>';  
            $('#prospecto').show(); 
            $('#dictamen').show();
            $('#validacion').hide();   
            clic2 = 1;
        }   
        }

  </script>




@endsection