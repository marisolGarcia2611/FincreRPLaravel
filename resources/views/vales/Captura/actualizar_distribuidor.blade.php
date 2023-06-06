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
@elseif($mensaje = Session::get('noRespuesta'))
 @php
         echo '<script language="JavaScript">';
         echo 'swal("¡Acción no exitosa!","Debe esperar una respuesta antes de mandar un nuevo comentario","warning", {buttons: false,timer: 4000});';
         echo '</script>';  
 @endphp

@endif

<!-- Btn de regreso-->

<div class="pos__btnBack1 d-none d-md-block" style="z-index:3!important;">
    <div class="wrapper"> 
    <h5 class="btnBack1" onClick="history.go(-1);"><i class="fas fa-solid fa-arrow-left"></i></h5>
    </div>
</div>

<div class="pos__ico">
    <img class="ico__image" src="{{ asset('ico/valeMil.png') }}" alt="valeMil">
</div>
<!-- Menu de progreso-->
<div class="mt-4 text-center shadow p-3 mb-5 bg-body rounded spaceNavPas ">
    <div class="mt-2">
        <h5 class="fw-light">Fase 1: Actualización de Captura Inicial  <button class="btn border-0 text-secondary" id="show" onclick="divshow()"><i class="fa-solid fa-minus"></i></button></h5>
        <div>
            <nav id="navbar">
                    <div class="row p-3">
                    @foreach($vardistribuidorfase1 as $datos) 
                        <div class="col-md-2 col-2 marginSpecial">
                            <div class="row">
                                <div class="col-md-6 col-6 circle1"><h2 class="fw-light">1</h2></div>
                                <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Distribuidor</h5></div>
                            </div> 
                        </div>

                        <div class="col-md-2 col-2 line1"></div>

                        <div class="col-md-2 col-2">
                            <div class="row">
                                <div class="col-md-6 col-6 border2"><h2 class="fw-light">2</h2></div>
                                <div class="col-md-6 col-6 p-15">
                                <form action="/vales/actualizar_avalup/{{$datos->id_distribuidor}}" method="get">
                                    <button class=" btn fa-primary fw-light fs_special border-0" type="submit">Aval</button>
                                </form>
                                </div>
                            </div> 
                        </div>

                        <div class="col-md-2 col-2 line2"></div>

                        @foreach($varobtenerdatosaval as $aval) 
                        <div class="col-md-2 col-2">
                            <div class="row">
                                <div class="col-md-6 col-6 border3"><h2 class="fw-light">3</h2></div>
                                <div class="col-md-6 col-6 p-15">
                               
                                    <form action="/vales/actualizar_docup/{{$datos->id_distribuidor}}/{{$aval->id}}" method="get">
                                        <button class=" btn fa-primary fw-light fs_special border-0" type="submit">Documentos</button>
                                    </form>
                                
                                </div>
                            </div> 
                        </div>
                        @endforeach
                        
                    </div>
                </nav>
        </div>

    </div>
</div>


<div class="space_height" id="block"></div>

<!-- Aviso emergente-->
<div class="container mt-2 mb-3">
    @foreach($vardistribuidorfase1 as $estado)
        @if($estado->status == 'pro_rev') 
            <div class="row">
                <div class="text-end">
                        <button type="button" class="btn border-0 fw-light text-secondary fs-6_5" onclick="message()">
                            <i class="fa-solid fa-message"></i></i>&nbsp;&nbsp;Observaciones
                        </button>
                </div>
            </div>
        @endif
    @endforeach

        <div id="messageContent">
            <div class="alert alert-light shadow p-3 mb-5 rounded-3 position-alert border-0" role="alert">
                <div class="row">
                    <div class="col-md-10 col-10">
                        <i class="fa-solid fa-triangle-exclamation"></i>&nbsp;&nbsp;Ultimas observaciones
                    </div>
                    <div class="col-md-2 col-2 text-end">
                        <button type="button" class="btn border-0 position-cross" onclick="message()">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <div class="scrollAlert">
                        @foreach($varmensajes as $mensa)
                        <div class="container p-4">
                      
                            @if($mensa->tipo_usuario == "admin")
                                <div class="row m1" style="margin-top: -20px;">
                                    <p class="fs-8"><b> {{$mensa->tipo_usuario}}</b></p> 
                                    <p style="margin-top:-10px;" class="fw-light fs-8"> {{$mensa->texto}}</p> 
                                </div>
                                
                            @elseif($mensa->tipo_usuario == "sucursal")
                                <div class="row m2" style="margin-top: -40px;">
                                    <p class="fs-8"><b> {{$mensa->tipo_usuario}}</b></p> 
                                    <p style="margin-top:-10px;" class="fw-light fs-8"> {{$mensa->texto}}</p> 
                                </div>
                            @endif
                     
                        </div>
                        @endforeach
                </div>
                <div class="row">
                   
                </div>
            </div>
        </div>
 
</div>

<!-- Bloque principal-->
<div class="container">


    <form action="/vales/distribuidoractualizar" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
     @csrf
        <div class="card p-5 cartaForm mb-5">
          <h4 id="scrollspyHeading1" class="fw-light">1. Distribuidor</h4> 

          <div class="row">
            <div class="col-md-4 col-4 text-center mt-2">
                <h1 class="iconBlue d-none d-md-block"><i class="fa-solid fa-file-invoice"></i></h1>
                <div id="boton1" class="btn push bg-gradient-pink m-0 p-1 sizeItem" onclick="divLogin1()">
                    <div class="row">
                        <h6 class="col-md-6 col-12 fw-light fs_special2">Datos Generales &nbsp;&nbsp; </h6>
                       <h6 class="col-md-6 col-12 text-right mr_15 mt_20"><i class="fa-solid fa-chevron-down"></i></h6>
                    </div>
                </div> 
            </div>

            <div class="col-md-4 col-4 text-center mt-2">
                <h1 class="iconBlue d-none d-md-block"><i class="fa-solid fa-person-circle-plus"></i></h1>
                <div id="boton2" class="btn push bg-gradient-pink m-0 p-1 sizeItem" onclick="divLogin2()">
                    <div class="row">
                        <h6 class="col-md-6 col-12 fw-light fs_special2">Conyuge &nbsp;&nbsp; </h6>
                       <h6 class="col-md-6 col-12 text-right mr_15"><i class="fa-solid fa-chevron-down"></i></h6>
                    </div>
                </div> 
            </div>
            
            
            <div class="col-md-4 col-4 text-center mt-2">
                <h1 class="iconBlue d-none d-md-block"><i class="fa-solid fa-id-badge"></i></h1>
                <div id="boton3" class="btn push bg-gradient-pink m-0 p-1 sizeItem" onclick="divLogin3()">
                    <div class="row">
                        <h6 class="col-md-6 col-12 fw-light fs_special2">Referencias &nbsp;&nbsp; </h6>
                       <h6 class="col-md-6 col-12 text-right mr_15 mt_8"><i class="fa-solid fa-chevron-down"></i></h6>
                    </div>
                </div> 
            </div>
          </div>

          @foreach($vardistribuidorfase1 as $datos) 
           
            <div id="caja1">
            
                <div class=" mt-4">
                    <h5 class="fw-light"> <b class="cicle_Blue">1.1</b> Datos Generales</h5>
                </div>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-outline">
                            <div class="input-group">
                                <input type="text" class="form-control inputInv" hidden name="iddistribuidor" value="{{$datos->id_distribuidor}}" required>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div> 
                            </div>
                        </div>  
                        <div class="col-md-3">
                            <div class="form-outline">
                            <div class="input-group">
                                <input type="text" class="form-control inputInv" hidden name="status" value="{{$datos->status}}" required>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div> 
                            </div>
                        </div>  
                    </div>


                    <div class="row mt-3">

                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Sucursal</label>
                            <select class="form-select" name="sucursal" id="sucursal" required>
                                @foreach($varsucursales as $sucursal)
                                <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Promotor Encargado</label>
                              <select class="form-select" name="promotor" id="promotor" required>
                                @foreach($varpromotores as $promotor)
                                <option value="{{$promotor->id}}">{{$promotor->Nombre}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>     

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Tipo Distribuidor</label>
                               <select class="form-select" name="tipo_distribuidor" id="tipo_distribuidor" required>
                                @foreach($vartipodis as $distribuidor)
                                @if($distribuidor->id ==$datos->tipodis)
                                <option  selected  value="{{$distribuidor->id}}">{{$distribuidor->nombre}}</option>
                                @else
                                <option value="{{$distribuidor->id}}">{{$distribuidor->nombre}}</option>
                                @endif
                                @endforeach
                               </select>
                            </div>
                        </div>

                        <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form8Example4">Capital</label>
                                    <input type="number"  class="form-control" name="capital" id="capital"  value="{{$datos->capital}}" maxlength="10" required />
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                    </div>
                                </div>
                        </div>     

                        <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form8Example4">Capital Autorizado</label>
                                    <input type="number"  class="form-control" name="capital_autorizado" id="capital_autorizado" value="{{$datos->capital_autorizado}}" maxlength="10"  required />
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Primer Nombre</label>
                                <input type="text"  class="form-control" name="primer_nombredDis" value="{{$datos->distribuidor_primer_nombre}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Segundo Nombre</label>
                                <input type="text"  class="form-control" name="segundo_nombreDis" id="segundo_nombre"   value="{{$datos->distribuidor_segundo_nombre}}"  required/>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Apellido Parterno</label>
                                <input type="text"  class="form-control" name="apellido_paternoDis" id="apellido_paterno"  value="{{$datos->distribuidor_apellido_paterno}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Apellido Materno</label>
                                <input type="text"  class="form-control" name="apellido_maternoDis" id="apellido_materno"  value="{{$datos->distribuidor_apellido_materno}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Estado Civil</label>
                                <select class="form-select" name="estado_civilDis" id="estado_civil" required>
                                    <option value="{{$datos->distribuidor_estado_civil}}">{{$datos->distribuidor_estado_civil}}</option>
                                    <option value="SOLTERO">Soltero</option>
                                    <option value="CASADO">Casado</option>
                                    <option value="UNION_LIBRE">Unión Libre</option>
                                </select>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Sexo</label>
                                <select class="form-select" name="sexoDis" id="sexo" required>
                                    <option value="{{$datos->distribuidor_sexo}}" >{{$datos->distribuidor_sexo}}</option>
                                    <option value="F">F</option>
                                    <option value="M">M</option>
                                </select>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Fecha de Nacimiento</label>
                                <input type="date"  class="form-control" name="fecha_nacDis" id="" value="{{$datos->distribuidor_fecha}}"  required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Lugar de Nacimiento</label>
                                <input type="text"  class="form-control" name="lugar_nacimiento" value="{{$datos->lugar_nacimiento}}" maxlength="50" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
    
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Nacionalidad</label>
                                <input type="text"  class="form-control" name="nacionalidad" value="{{$datos->nacionalidad}}" maxlength="50" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">CURP</label>
                            <input type="text" name="curpDis" id="curp" class="form-control" value="{{$datos->distribuidor_curp}}"  maxlength="18" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">RFC</label>
                            <input type="text" name="rfcDis" id="rfc" class="form-control" value="{{$datos->distribuidor_rfc}}" maxlength="13" required/>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        
                    </div>

                    <div class="row mt-3">

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Telefono</label>
                                <input type="text"  class="form-control" name="telefonoDis" id="telefono" value="{{$datos->distribuidor_telefono}}"  maxlength="10" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        

                 

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Estado</label>
                             <select class="form-select" name="estadoDis" id="estado" required>
                                @foreach($varestados as $estado)
                                @if($estado->id ==$datos->ciudad)
                                <option  selected value="{{$estado->id}}" >{{$estado->nombre}}</option>
                                @else
                                <option value="{{$estado->id}}">{{$estado->nombre}}</option>
                                @endif
                                @endforeach
                             </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Ciudad</label>
                               <select class="form-select" name="ciudadDis" id="ciudad" required>
                                @foreach($varciudades as $ciudad)
                                @if($ciudad->id ==$datos->ciudad)
                                <option  selected value="{{$ciudad->id}}" >{{$ciudad->nombre}}</option>
                                @else
                                <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
                                @endif
                                @endforeach
                               </select>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">CP</label>
                                <input type="text"  class="form-control" name="codigo_postalDis" id="codigo_postal" value="{{$datos->distribuidor_codigo_postal}}" maxlength="6" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Colonia</label>
                                <input type="text"  class="form-control" name="coloniaDis" id="colonia"  value="{{$datos->distribuidor_colonia}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Calle</label>
                                <input type="text"  class="form-control" name="calleDis" id="calle" value="{{$datos->distribuidor_calle}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Numero Interior</label>
                                <input type="text"  class="form-control" name="numero_interiorDis" id="numero_interior" value="{{$datos->distribuidor_numero_interior}}"required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Numero Exterior</label>
                                <input type="text"  class="form-control" name="numero_exteriorDis" id="numero_exterior"  value="{{$datos->distrbuidor_numero_exterior}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Lugar de Empleo</label>
                                <input type="text"  class="form-control" name="lugar_empleoDis" id="lugar_empleo" value="{{$datos->distribuidor_lugar_empleo}}"  required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Puesto de Empleo</label>
                                <input type="text"  class="form-control" name="puesto_empleoDis" id="puesto_empleo" value="{{$datos->distribuidor_puesto_empleo}}"  required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>  

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Salario Mensual</label>
                                <input type="number"  class="form-control" name="salario_mensualDis" id="salarioMensual" value="{{$datos->distribuidor_salario_mensual}}" maxlength="10" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Egreso Fijo Mensual</label>
                                <input type="number"  class="form-control" name="egreso_mensual_fijoDis" id="egresoFijoMensual" value="{{$datos->distribuidor_egreso_mensual}}" maxlength="10" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                    

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Antiguedad</label>
                                <input type="text"  class="form-control" name="antiguedadDis" id="antiguedad" value="{{$datos->distribuidor_antiguedad}}"  required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Telefono de Empleo</label>
                                <input type="text"  class="form-control" name="telefono_empleoDis" id="telefono_empleo" value="{{$datos->distribuidor_telefono}}" maxlength="10"  required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Dirección de Empleo</label>
                                <input type="text"  class="form-control" name="direccion_empleoDis" id="direccion_empleo" value="{{$datos->distribuidor_direccion_empresa}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                        </div>


                       
                        </div>     
                    </div>

                
            </div>    
          
            
            <div id="caja2">
              @if($datos->distribuidor_estado_civil == "CASADO")
                @foreach($Conyuge as $conyu)
                    <div class=" mt-4">
                        <h5 class="fw-light"> <b class="cicle_Blue">1.2</b> Conyuge</h5>
                    </div>

                    <div class="col-md-2">
                        <div class="form-outline">
                        <div class="input-group">
                            <input type="text" class="form-control inputInv" name="idcoyugue" hidden id="idcoyugue" value="{{$conyu->conyuid}}" required>
                            <div class="valid-feedback">
                            ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                            </div>
                        </div> 
                        </div>
                    </div> 

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Primer Nombre</label>
                                <input type="text"  class="form-control" name="primer_nombreCon" id="primer_nombre" value="{{$conyu->conyu_primer_nombre}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Segundo Nombre</label>
                                <input type="text"  class="form-control" name="segundo_nombreCon" id="segundo_nombre" value="{{$conyu->conyu_segundo_nombre}}"  required/>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Apellido Parterno</label>
                                <input type="text"  class="form-control" name="apellido_paternoCon" id="apellido_paterno" value="{{$conyu->conyu_apellido_paterno}}"  required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Apellido Materno</label>
                                <input type="text"  class="form-control" name="apellido_maternoCon" id="apellido_materno"  value="{{$conyu->conyu_apellido_materno}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Sexo</label>
                                <select class="form-select" name="sexoCon" id="sex" required>
                                    <option  value="{{$conyu->coyu_sexo}}" >{{$conyu->coyu_sexo}}</option>
                                    <option value="F">F</option>
                                    <option value="M">M</option>
                                </select>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                

                        <div class="col-md-4">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Fecha de Nacimiento</label>
                                <input type="date"  class="form-control" name="fecha_nacCon" id="" value="{{$conyu->conyu_fecha_nacimiento}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Telefono</label>
                                <input type="text"  class="form-control" name="telefonoCon" id="telefono" value="{{$conyu->conyu_telefono}}" maxlength="10" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">CURP</label>
                            <input type="text" name="curpCon" id="curp" class="form-control" value="{{$conyu->conyu_curp}}"  maxlength="18" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">RFC</label>
                            <input type="text" name="rfcCon" id="rfc" class="form-control" value="{{$conyu->conyu_rfc}}" maxlength="13" required/>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Lugar de Empleo</label>
                                <input type="text"  class="form-control" name="lugar_empleoCon" id="lugar_empleo" value="{{$conyu->conyu_lugar_empleo}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Puesto de Empleo</label>
                                <input type="text"  class="form-control" name="puesto_empleoCon" id="puesto_empleo" value="{{$conyu->conyu_puesto_empleo}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>  

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Salario Mensual</label>
                                <input type="text"  class="form-control" name="salarioMensualCon" id="salarioMensual" value="{{$conyu->conyu_salario_mensual}}" maxlength="10" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Egreso Fijo Mensual</label>
                                <input type="text"  class="form-control" name="egresoFijoMensualCon" id="egresoFijoMensual" value="{{$conyu->conyu_egreso_fijo_mensual}}" maxlength="10" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                    

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Antiguedad</label>
                                <input type="text"  class="form-control" name="antiguedadCon" id="antiguedad" value="{{$conyu->conyu_antiguedad}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Telefono de Empleo</label>
                                <input type="text"  class="form-control" name="telefono_empleoCon" id="telefono_empleo" value="{{$conyu->conyu_telefono_empresa}}" maxlength="10" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Dirección de Empleo</label>
                                <input type="text"  class="form-control" name="direccion_empleoCon" id="direccion_empleo" value="{{$conyu->conyu_direccion_empresa}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>     
                    </div>
                @endforeach
              @endif 
            </div>
           

            <div id="caja3">
                <div class=" mt-4">
                    <h5 class="fw-light"> <b class="cicle_Blue">1.3</b> Referencias</h5>
                </div>

                    <div class="col-md-2">
                        <div class="form-outline">
                        <div class="input-group">
                            <input type="text" class="form-control inputInv" name="idreferencia" hidden id="idreferencia" value="{{$datos->idrefe}}" required>
                            <div class="valid-feedback">
                            ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                            </div>
                        </div> 
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Primer Nombre</label>
                                <input type="text"  class="form-control" name="primer_nombreRef" id="primer_nombre" value="{{$datos->refe_primer_nombre}}"   required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Segundo Nombre</label>
                                <input type="text"  class="form-control" name="segundo_nombreRef" id="segundo_nombre" value="{{$datos->refe_segundo_nombre}}" maxlength="15" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Apellido Parterno</label>
                                <input type="text"  class="form-control" name="apellido_paternoRef" id="apellido_paterno"    value="{{$datos->refe_apellido_paterno}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Apellido Materno</label>
                                <input type="text"  class="form-control" name="apellido_maternoRef" id="apellido_materno"   value="{{$datos->refe_apellido_materno}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Sexo</label>
                                <select class="form-select" name="sexoRef" id="sexo" required>
                                    <option  value="{{$datos->refe_sexo}}" >{{$datos->refe_sexo}}</option>
                                    <option value="F">F</option>
                                    <option value="M">M</option>
                                </select>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Fecha de Nacimiento</label>
                                <input type="date"  class="form-control" name="fecha_nacRef" id="" value="{{$datos->refe_fecha_nacimiento}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Estado Civil</label>
                                <select class="form-select" name="estado_civilRef" id="" required>
                                <option value="{{$datos->refe_estado_civil}}">{{$datos->refe_estado_civil}}</option>
                                <option value="casado">Casado</option>
                                <option value="soltero">Soltero</option>
                                <option value="union">Union libre</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">RFC</label>
                            <input type="text" name="rfcRef" id="rfc" class="form-control" value="{{$datos->refe_rfc}}" maxlength="13" required/>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Telefono</label>
                                <input type="text"  class="form-control" name="telefonoRef" id="telefono" value="{{$datos->refe_telefono}}" maxlength="10" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Calle</label>
                                <input type="text"  class="form-control" name="calleRef" id="calle" value="{{$datos->refe_calle}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Colonia</label>
                                <input type="text"  class="form-control" name="coloniaRef" id="colonia" value="{{$datos->refe_colonia}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Numero Interior</label>
                                <input type="text"  class="form-control" name="numero_interiorRef" id="numero_interior" value="{{$datos->refe_numero_interior}}"  required/>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Numero Exterior</label>
                                <input type="text"  class="form-control" name="numero_exteriorRef" id="numero_exterior" value="{{$datos->refe_numero_exterior}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">CP</label>
                                <input type="text"  class="form-control" name="codigo_postalRef" id="codigo_postal" value="{{$datos->refe_codigo_postal}}" maxlength="6" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>     

                        <div class="col">
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">Ciudad</label>
                                <select class="form-select" name="ciudadRef" id="ciudad" required>
                                    @foreach($varciudades as $ciudad)
                                    @if($ciudad->id ==$datos->ciudad)
                                    <option  selected value="{{$ciudad->id}}" >{{$ciudad->nombre}}</option>
                                    @else
                                    <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                </div>
                        </div>
                    </div>
            </div>
         
        </div>
    
    </div>
    @endforeach
        
        <div class="mt-3">
            <div class="text-center">
                    <button class="btn btn-purple1" type="submit">Continuar</button>
            </div>
        </div>
        <br/>
        <br/>

    </form>
    @endforeach
</div>


<!-- btn mensaje-->
<div class="chatButtonPosition">
    @foreach($vardistribuidorfase1 as $estado)
    @if($estado->status == 'pro_rev') 
    <button class="btn border-0 p-2 chatButton" type="button" data-bs-toggle="modal" data-bs-target="#Documentacion"><h6><i class="fa-solid fa-comment"></i></h6></button>
    @endif
    @endforeach
</div>

<!-- Modal comentario-->
@foreach($vardistribuidorfase1 as $datos) 
    <form action="/enviar_mensaje/sucursal/{{$datos->id_distribuidor}}">
@endforeach
        <div class="modal fade" id="Documentacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg  modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir comentario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="mensaje"></textarea>
                        <label for="floatingTextarea">Comentarios</label>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-blue">Enviar <i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </div>
            </div>
        </div>
    </form>

<script src="{{ asset('js/cajas.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/aviso.js') }}"></script>
<script src="{{ asset('js/block.js') }}"></script>
<script>
    var clic = 1;
    var show1 = document.getElementById('show');


    function divshow(){ 
        if(clic==1){
            document.getElementById("block").style.height = "130px";
            show1.innerHTML = ' <i class="fa-solid fa-plus"></i>';
            $('#navbar').hide(); 
            clic = clic + 1;
        
        } 
        else{
            document.getElementById("block").style.height = "230px";
            show1.innerHTML = '<i class="fa-solid fa-minus"></i>';
            $('#navbar').show();   
            clic = 1;
        }   
    }
</script>


@endsection