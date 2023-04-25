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

@endif

<!-- Btn de regreso-->

<div class="pos__btnBack1 d-none d-md-block" style="z-index:3!important;">
    <div class="wrapper"> 
    <h5 class="btnBack1" onClick="history.go(-1);"><i class="fas fa-solid fa-arrow-left"></i></h5>
    </div>
</div>

<!-- Menu de progreso-->
<div class="mt-4 text-center shadow p-3 mb-5 bg-body rounded spaceNavPas ">
    <div class="mt-4">
        <h5 class="fw-light">Fase 1: Actualización del credtito<button class="btn border-0 text-secondary" id="show" onclick="divshow()"><i class="fa-solid fa-minus"></i></button></h5>
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

                        <div class="col-md-2 col-2">
                            <div class="row">
                                <div class="col-md-6 col-6 border3"><h2 class="fw-light">3</h2></div>
                                <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Documentos</h5></div>
                            </div> 
                        </div>
                        
                    </div>
                </nav>
        </div>

    </div>
</div>


<div class="space_height" id="block"></div>

<!-- Aviso emergente-->
<div class="container mt-2 mb-3">

        <div class="row">
            <div class="text-end">
                    <button type="button" class="btn border-0 fw-light text-secondary fs-6_5" onclick="message()">
                        <i class="fa-solid fa-message"></i></i>&nbsp;&nbsp;Observaciones
                    </button>
            </div>
        </div>

        <div id="messageContent">
            <div class="alert alert-primary shadow p-3 mb-5 rounded position-alert border-0" role="alert">
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
                @foreach($varmensajes as $mensa)
                <div class="row">
                    @if($mensa->tipo_usuario == "admin")
                        <div class="col">
                            <p class="fw-light text-success"><b> {{$mensa->tipo_usuario}}</b></p> 
                            <p style="margin-top:-10px;" class="fw-light fs-8">Observaciones:<br/>  {{$mensa->texto}}</p> 
                            <hr/>
                        </div>
                        
                    @elseif($mensa->tipo_usuario == "sucursal")
                        <div class="col">
                            <p class="fw-light text-info"><b> {{$mensa->tipo_usuario}}</b></p> 
                            <p style="margin-top:-10px;" class="fw-light fs-8">Comentario:<br/>  {{$mensa->texto}}</p> 
                            <hr/>
                        </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
 
</div>

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


            <div id="caja1">
             @foreach($vardistribuidorfase1 as $datos)  
             
                <div class=" mt-4">
                    <h5 class="fw-light"> <b class="cicle_Blue">1.1</b> Datos Generales</h5>
                </div>


                    <div class="row mt-4">
                        <div class="col-md-2">
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">Numero de distribuidor</label>
                                <input type="text"  class="form-control" name="iddistribuidor" value="{{$datos->id_distribuidor}}" required />
                                </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Sucursal</label>
                            <select class="form-select" name="sucursal" id="sucursal">
                                @foreach($varsucursales as $sucursal)
                                <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Promotor Encargado</label>
                              <select class="form-select" name="promotor" id="promotor">
                                @foreach($varpromotores as $promotor)
                                <option value="{{$promotor->id}}">{{$promotor->Nombre}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>     

                        <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form8Example4">Capital</label>
                                    <input type="text"  class="form-control" name="capital" id="capital"  value="{{$datos->capital}}" required />
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
                                    <input type="text"  class="form-control" name="capital_autorizado" id="capital_autorizado" value="{{$datos->capital_autorizado}}"  required />
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
                                <input type="text"  class="form-control" name="primer_nombre" value="{{$datos->distribuidor_primer_nombre}}" required />
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
                                <input type="text"  class="form-control" name="segundo_nombre" id="segundo_nombre"   value="{{$datos->distribuidor_segundo_nombre}}" required />
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
                                <input type="text"  class="form-control" name="apellido_paterno" id="apellido_paterno"  value="{{$datos->distribuidor_apellido_paterno}}" required />
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
                                <input type="text"  class="form-control" name="apellido_materno" id="apellido_materno"  value="{{$datos->distribuidor_apellido_materno}}" required />
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

                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Sexo</label>
                                <select class="form-select" name="sexo" id="sexo">
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


                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Fecha de Nacimiento</label>
                                <input type="date"  class="form-control" name="fecha_nac" id="" value="{{$datos->distribuidor_fecha}}"  required />
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
                            <label class="form-label" for="form8Example4">CURP</label>
                            <input type="text" name="curp" id="curp" class="form-control" value="{{$datos->distribuidor_curp}}" required />
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
                            <label class="form-label" for="form8Example4">RFC</label>
                            <input type="text" name="rfc" id="rfc" class="form-control" value="{{$datos->distribuidor_rfc}}" required/>
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

                    <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Telefono</label>
                                <input type="text"  class="form-control" name="telefono" id="telefono" value="{{$datos->distribuidor_telefono}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Estado Civil</label>
                                <select class="form-select" name="estado_civil" id="estado_civil">
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

                 

                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Estado</label>
                             <select class="form-select" name="estado" id="estado">
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
                               <select class="form-select" name="ciudad" id="ciudad">
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


                        <div class="col-md-3">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Tipo Distribuidor</label>
                               <select class="form-select" name="tipo_distribuidor" id="tipo_distribuidor">
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
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">CP</label>
                                <input type="text"  class="form-control" name="codigo_postal" id="codigo_postal" value="{{$datos->distribuidor_codigo_postal}}" required />
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
                                <input type="text"  class="form-control" name="colonia" id="colonia"  value="{{$datos->distribuidor_colonia}}" required />
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
                                <input type="text"  class="form-control" name="calle" id="calle" value="{{$datos->distribuidor_calle}}" required />
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
                                <input type="text"  class="form-control" name="numero_interior" id="numero_interior" value="{{$datos->distribuidor_numero_interior}}" required/>
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
                                <input type="text"  class="form-control" name="numero_exterior" id="numero_exterior"  value="{{$datos->distrbuidor_numero_exterior}}" required />
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
                                <input type="text"  class="form-control" name="lugar_empleo" id="lugar_empleo" value="{{$datos->distribuidor_lugar_empleo}}"  required />
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
                                <input type="text"  class="form-control" name="puesto_empleo" id="puesto_empleo" value="{{$datos->distribuidor_puesto_empleo}}"  required />
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
                                <input type="text"  class="form-control" name="salario_mensual" id="salarioMensual" value="{{$datos->distribuidor_salario_mensual}}" required />
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
                                <input type="text"  class="form-control" name="egreso_mensual_fijo" id="egresoFijoMensual" value="{{$datos->distribuidor_egreso_mensual}}" required />
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
                                <input type="text"  class="form-control" name="antiguedad" id="antiguedad" value="{{$datos->distribuidor_antiguedad}}"  required />
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
                                <input type="text"  class="form-control" name="telefono_empleo" id="telefono_empleo" value="{{$datos->distribuidor_telefono}}"  required />
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
                                <input type="text"  class="form-control" name="direccion_empleo" id="direccion_empleo" value="{{$datos->distribuidor_direccion_empresa}}" required />
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
                <div class=" mt-4">
                    <h5 class="fw-light"> <b class="cicle_Blue">1.2</b> Conyuge</h5>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Numero de referencia</label>
                            <input type="text"  class="form-control" name="idcoyugue" id="idcoyugue" value="{{$datos->conyuid}}" required />
                            <div class="valid-feedback">
                            ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Primer Nombre</label>
                            <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre" value="{{$datos->conyu_primer_nombre}}" required />
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
                            <input type="text"  class="form-control" name="segundo_nombre" id="segundo_nombre" value="{{$datos->conyu_segundo_nombre}}" required />
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
                            <input type="text"  class="form-control" name="apellido_paterno" id="apellido_paterno" value="{{$datos->conyu_apellido_paterno}}"  required />
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
                            <input type="text"  class="form-control" name="apellido_materno" id="apellido_materno"  value="{{$datos->conyu_apellido_materno}}" required />
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
                            <select class="form-select" name="sexo" id="sex">
                                <option  value="{{$datos->coyu_sexo}}" >{{$datos->coyu_sexo}}</option>
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
                            <input type="date"  class="form-control" name="fecha_nac" id="" value="{{$datos->conyu_fecha_nacimiento}}" required />
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
                        <label class="form-label" for="form8Example4">CURP</label>
                        <input type="text" name="curp" id="curp" class="form-control" value="{{$datos->conyu_curp}}" required />
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
                        <input type="text" name="rfc" id="rfc" class="form-control" value="{{$datos->conyu_rfc}}"  required/>
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
                            <input type="text"  class="form-control" name="telefono" id="telefono" value="{{$datos->conyu_telefono}}" required />
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
                            <input type="text"  class="form-control" name="lugar_empleo" id="lugar_empleo" value="{{$datos->conyu_lugar_empleo}}" required />
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
                            <input type="text"  class="form-control" name="puesto_empleo" id="puesto_empleo" value="{{$datos->conyu_puesto_empleo}}" required />
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
                            <input type="text"  class="form-control" name="salarioMensual" id="salarioMensual" value="{{$datos->conyu_salario_mensual}}" required />
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
                            <input type="text"  class="form-control" name="egresoFijoMensual" id="egresoFijoMensual" value="{{$datos->conyu_egreso_fijo_mensual}}" required />
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
                            <input type="text"  class="form-control" name="antiguedad" id="antiguedad" value="{{$datos->conyu_antiguedad}}" required />
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
                            <input type="text"  class="form-control" name="telefono_empleo" id="telefono_empleo" value="{{$datos->conyu_telefono_empresa}}" required />
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
                            <input type="text"  class="form-control" name="direccion_empleo" id="direccion_empleo" value="{{$datos->conyu_direccion_empresa}}" required />
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


            <div id="caja3">
                <div class=" mt-4">
                    <h5 class="fw-light"> <b class="cicle_Blue">1.3</b> Referencias</h5>
                </div>

          
      
                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Numero referencia</label>
                            <input type="text"  class="form-control" name="idreferencia" id="idreferencia" value="{{$datos->idrefe}}" maxlength="15" required />
                            <div class="valid-feedback">
                            ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Primer Nombre</label>
                            <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre" value="{{$datos->refe_primer_nombre}}"   required />
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
                            <input type="text"  class="form-control" name="segundo_nombre" id="segundo_nombre" value="{{$datos->refe_segundo_nombre}}" maxlength="15" required />
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
                            <input type="text"  class="form-control" name="apellido_paterno" id="apellido_paterno"    value="{{$datos->refe_apellido_paterno}}" required />
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
                            <input type="text"  class="form-control" name="apellido_materno" id="apellido_materno"   value="{{$datos->refe_apellido_materno}}" required />
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
                            <select class="form-select" name="sexo" id="sexo">
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
                            <input type="date"  class="form-control" name="fecha_nac" id="" value="{{$datos->refe_fecha_nacimiento}}" required />
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
                            <select class="form-select" name="estado_civil" id="">
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
                        <input type="text" name="rfc" id="rfc" class="form-control" value="{{$datos->refe_rfc}}" required/>
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
                            <input type="text"  class="form-control" name="telefono" id="telefono" value="{{$datos->refe_telefono}}" required />
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
                            <input type="text"  class="form-control" name="calle" id="calle" value="{{$datos->refe_calle}}" required />
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
                            <input type="text"  class="form-control" name="colonia" id="colonia" value="{{$datos->refe_colonia}}" required />
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
                            <input type="text"  class="form-control" name="numero_interior" id="numero_interior" value="{{$datos->refe_numero_interior}}" required />
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
                            <input type="text"  class="form-control" name="numero_exterior" id="numero_exterior" value="{{$datos->refe_numero_exterior}}" required />
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
                        <label class="form-label" for="form8Example4">Codigo postal</label>
                            <input type="text"  class="form-control" name="codigo_postal" id="codigo_postal" value="{{$datos->refe_codigo_postal}}" required />
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
                               <select  name="ciudad" id="ciudad">
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
        <div class="mb-5">
            <div class="text-center">
            <br>
            <br>
                <div class="btn-group">
                 <button class="btn btn-outline-purple">Abandonar</button>
                <button class="btn btn-purple" type="submit">Continuar</button>
                </div>
            </div>
        </div>

    </form>
    @endforeach
</div>


<!-- btn mensaje-->
<div class="chatButtonPosition">
    <button class="btn border-0 p-2 chatButton" type="button" data-bs-toggle="modal" data-bs-target="#Documentacion"><h3><i class="fa-solid fa-comment"></i></h3></button>
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



@endsection