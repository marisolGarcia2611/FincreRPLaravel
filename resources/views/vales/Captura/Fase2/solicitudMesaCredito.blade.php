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
{{-- ALERTAS --}}

<!--Inicio button back Area-->
<div class="pos__btnBack">
    <div class="wrapper"> 
      <form action="/vales/GestionFase2">
        <button class="btn btnBack btn-light" type="submit" ><i class="fas fa-solid fa-arrow-left"></i></button>
      </form>
    </div>
</div>

<div class="pos__ico">
    <img class="ico__image" src="{{ asset('ico/valeMil.png') }}" alt="valeMil">
  </div>

<center class="content mt-1">
    <div class="row">

    <!------Area Solicitud----->
    <div class="col-md-9 col-12">
        <div class="card shadow p-5 mb-5 bg-body rounded border-0 card-solicitud">
            
            <div class="text-center">
                <h4 class="fw-light">Solicitud de mesa de credito</h4>
            </div>
            <hr/>

            <!------Area Disribuidor----->
            <div class="mt-3">
                @foreach($vardatossolicitud as $datos)
                <p class="fw-bold bg-encabezado text-light">Distribuidor</p>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="text-start carrusel_text">
                            <p class="fw-bold">Datos Generales</p>
                            <p class="fs-8 fw-light">
                                <b class="fw-bold">Sucursal: </b>{{$datos->sucursal}}
                                <br/><b class="fw-bold">Promotor Encargado: </b> {{$datos->promotor}}
                                <br/><b class="fw-bold">Nombre Completo: </b>{{$datos->nombre}}
                                <br/><b class="fw-bold">Sexo: </b> {{$datos->distribuidor_sexo}}
                                <br/><b class="fw-bold">Estado Civil:</b> {{$datos->distribuidor_estado_civil}}
                                <br/><b class="fw-bold">Fecha de Nacimiento:</b> {{$datos->distribuidor_fecha}}
                                <br/><b class="fw-bold">CURP: </b> {{$datos->distribuidor_curp}}
                                <br/><b class="fw-bold">RFC: </b> {{$datos->distribuidor_rfc}}
                                <br/><b class="fw-bold">Telefono: </b>{{$datos->distribuidor_telefono}}
                                <br/><b class="fw-bold">Estado: </b> {{$datos->distribuidor_estado_civil}}
                                <br/><b class="fw-bold">Ciudad: </b> {{$datos->ciudaddistribuidor}}
                                <br/><b class="fw-bold">Dirección: </b>Col. {{$datos->distribuidor_colonia}}, Calle {{$datos->distribuidor_calle}} No.Int {{$datos->distribuidor_numero_interior}} No.Ext {{$datos->distrbuidor_numero_exterior}}, C.P. {{$datos->distribuidor_codigo_postal}}, {{$datos->distribuidor_idciudad}}
                                <br/><b class="fw-bold">Egreso Mensual: </b> {{$datos->distribuidor_egreso_mensual}}
                                <br/><b class="fw-bold"> Empresa en la que trabaja: </b> {{$datos->distribuidor_lugar_empleo}}, {{$datos->distribuidor_puesto_empleo}}, ${{$datos->distribuidor_salario_mensual}}, {{$datos->distribuidor_antiguedad}},  {{$datos->empreraDis_telefono}}, {{$datos->distribuidor_direccion_empresa}}.
                            </p>
                        </div>
                    </div>
                    @if($datos->distribuidor_estado_civil == "CASADO")
                            <div class="carousel-item">
                                <div class="text-start plr-5 carrusel_text">
                                    <p class="fw-bold">Conyuge</p>
                                    @foreach($varConyuge as $conyu)
                                    <p class="fs-8 fw-light">
                                        <b class="fw-bold">Nombre Completo:</b> {{$conyu->nombrec}}
                                        <br/><b class="fw-bold">Sexo: </b> {{$conyu->coyu_sexo}}
                                        <br/><b class="fw-bold">Fecha de Nacimiento: </b> {{$conyu->conyu_fecha_nacimiento}}
                                        <br/><b class="fw-bold">CURP: </b>{{$conyu->conyu_curp}}
                                        <br/><b class="fw-bold">RFC: </b> {{$conyu->conyu_rfc}}
                                        <br/><b class="fw-bold">Telefono: </b>{{$conyu->nombrec}}
                                        <br/><b class="fw-bold">Lugar de Empleo: </b> {{$conyu->conyu_lugar_empleo}}
                                        <br/><b class="fw-bold">Puesto de Empleo: </b> {{$conyu->conyu_puesto_empleo}}
                                        <br/><b class="fw-bold">Salario Mensual: </b> {{$conyu->conyu_salario_mensual}}
                                        <br/><b class="fw-bold">Telefono de Empleo: </b> {{$conyu->conyu_telefono_empresa}}
                                        <br/><b class="fw-bold">Dirección de Empleo: </b> {{$conyu->conyu_direccion_empresa}}
                                        <br/><b class="fw-bold">Egreso Fijo Mensual: </b> {{$conyu->conyu_egreso_fijo_mensual}}
                                        <br/><b class="fw-bold">Antiguedad de Empleo: </b> {{$conyu->conyu_antiguedad}} Años
                                    </p>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    <div class="carousel-item">
                        <div class="text-start plr-5 carrusel_text">
                            <p class="fw-bold">Referencias</p>
                            <p class="fs-8 fw-light">
                                <b class="fw-bold">Nombre Completo: {{$datos->nombrer}}
                                <br/><b class="fw-bold">Sexo: </b> {{$datos->refe_sexo}}
                                <br/><b class="fw-bold">Fecha de Nacimiento: </b>{{$datos->refe_fecha_nacimiento}}
                                <br/><b class="fw-bold">CURP: </b>{{$datos->refe_curp}}
                                <br/><b class="fw-bold">RFC: </b> {{$datos->refe_rfc}}
                                <br/><b class="fw-bold">Telefono: </b> {{$datos->refe_telefono}}
                                <br/><b class="fw-bold">Dirección : </b> Col. {{$datos->refe_colonia}}, Calle {{$datos->refe_calle}}, No.Int {{$datos->refe_numero_interior}} No.Ext {{$datos->refe_numero_exterior}}, C.P. {{$datos->refe_codigo_postal}} 
                            </p>
                        </div>
                    </div>
                    </div>


                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <h1 class="text-dark"><i class="fa-solid fa-chevron-left"></i></h1>
                    <span class="visually-hidden">Anterior</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <h1 class="text-dark"><i class="fa-solid fa-chevron-right"></i></h1>
                    <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
                @endforeach
            </div>
            <hr/>
            
            <!------Area Aval----->
            <div class="mt-4">
                <p class="fw-bold bg-encabezado text-light">Aval</p>
                <div class="text-start mt-2 carrusel_text">
                    <p>Datos Generales</p>
                    @foreach($veraval as $datosa)
                    <p class="fs-8 fw-light">
                        <b class="fw-bold">Nombre: </b> {{$datosa->nombrea}}
                        <br/><b class="fw-bold">Edad: </b>30 años
                        <br/><b class="fw-bold">Sexo: </b>  {{$datosa->sexo}}
                        <br/><b class="fw-bold">Estado Civil: </b>  {{$datosa->estado_civil}}
                        <br/><b class="fw-bold">Fecha de Nacimiento: </b>  {{$datosa->fecha_nacimiento}}
                        <br/><b class="fw-bold">CURP: </b>  {{$datosa->curp}}
                        <br/><b class="fw-bold">RFC: </b>  {{$datosa->rfc}}
                        <br/><b class="fw-bold">Telefono: </b>  {{$datosa->telefono}}
                        <br/><b class="fw-bold">Colonia: </b> {{$datosa->colonia}}
                        <br/><b class="fw-bold">Ciudad: </b>  {{$datosa->idciudad}}
                        <br/><b class="fw-bold">Dirección: </b>  Col. {{$datosa->colonia}}, Calle {{$datosa->calle}}, No.Int {{$datosa->numero_interior}} No.Ext {{$datosa->numero_exterior}}, C.P. {{$datosa->codigo_postal}} 
                        <br/><b class="fw-bold">Lugar de Empleo: </b>  {{$datosa->lugar_empleo}}
                        <br/><b class="fw-bold">Puesto de Empleo: </b>  {{$datosa->puesto_empleo}}
                        <br/><b class="fw-bold">Salario Mensual: </b>  {{$datosa->salario_mensual}}
                        <br/><b class="fw-bold">Antiguedad: </b>  {{$datosa->antiguedad}}
                        <br/><b class="fw-bold">Telefono de Trabajo: </b>  {{$datosa->telefono_empresa}}
                        <br/><b class="fw-bold">Dirección de Trabajo: </b>  {{$datosa->direccion_empresa}}
                        <br/><b class="fw-bold">Egreso Fijo Mensual: </b>  {{$datosa->egreso_fijomensual}}
                    </p>
                    @endforeach
                </div>     
            </div>
            <hr/>

            <!------Area Documentacion----->
            <div class="mt-4">
                    <p class="fw-bold bg-encabezado text-light">Observaciones</p>  
                    <button class="btn border-0 p-2 chatButton"   type="button" data-bs-toggle="modal" data-bs-target="#Documentacion"><h6><i class="fa-solid fa-comment"></i></h6></button>    
                    @foreach($vardocumentos as $doc)  
                         {{--------Documentos validacion--------}}
                         @if($doc->status=="val" || $doc->status=="pro_val" || $doc->status=="pro_valDic" || $doc->status=="pro_valRev" || $doc->status=="pro_den"  || $doc->status=="pro_apro")
                            <div class="row">
                                <div class="text-start">
                                    <form action="/validacion/guardar_observacionesVal">
                                        <div class="card rounded-5 mt-3 mb-4">
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th scope="col">
                                                                <div class="input-group">
                                                                    <div class="input-group-text labelInv fs-8">#</div>
                                                                    <input class="form-control inputInv fs-8" type="text" value="{{$doc->id}}" name="idRefeContra" required>
                                                                    <div class="valid-feedback">
                                                                    ¡Se ve bien!
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                    Por favor, completa la información requerida.
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <th scope="col">
                                                                <div class="input-group">
                                                                    <div class="input-group-text labelInv fs-8"> # Distribuidor </div>
                                                                    <input class="form-control inputInv fs-8"  type="text" value="{{$doc->id_tipo}}" name="idDisContra" required>
                                                                    <div class="valid-feedback">
                                                                    ¡Se ve bien!
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                    Por favor, completa la información requerida.
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <th scope="col">Opciones</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody class="fs-8">
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                @if($doc->status=="pro_valRev" || $doc->status=="pro_valDic" || $doc->status=="pro_den"  || $doc->status=="pro_apro")
                                                                    Contrato
                                                                    @if($doc->status_contra == "A")
                                                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                                    @elseif($doc->status_contra == "R")
                                                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                                    @else
                                                                    <i class="text-primary fa-solid fa-circle-question"></i><span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                                    @endif   
                                                                @else
                                                                    Contrato <i class="text-primary fa-solid fa-circle-question"></i><span class="text-secondary fst-italic"> (Espere a que se suban los archivos para validar)</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    @if($doc->status=="val" || $doc->status=="pro_val")
                                                                        <div class="col-md-3">
                                                                            <button class="text-secondary  border-0 btn" disabled><i class="fa-solid fa-eye"></i></button>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="contrato" id="s-contrato" autocomplete="on" value="A" disabled>
                                                                            <label class="btn btn-outline-success fs-9" for="s-contrato">Autorizado</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="contrato" id="d-contrato" autocomplete="off" value="R" disabled>
                                                                            <label class="btn btn-outline-danger fs-9" for="d-contrato">Rechazado</label>
                                                                        </div>
                                                                    @else
                                                                        <div class="col-md-3">
                                                                            <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->contrato}}"></a> 
                                                                        </div>
                                                                        @if($doc->status=="pro_valRev" || $doc->status=="pro_valDic" || $doc->status=="pro_apro" || $doc->status=="pro_den") 
                                                                            @if($doc->status_contra == "A")
                                                                                <div class="col-md-4">
                                                                                    <input type="radio" class="btn-check" name="contrato" id="s-contrato" autocomplete="on" value="A"  checked>
                                                                                    <label class="btn btn-outline-success fs-9" for="s-contrato">Autorizado</label>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <input type="radio" class="btn-check" name="contrato" id="d-contrato" autocomplete="off" value="R">
                                                                                    <label class="btn btn-outline-danger fs-9" for="d-contrato">Rechazado</label>
                                                                                </div>
                                                                            @elseif($doc->status_contra == "R")
                                                                                <div class="col-md-4">
                                                                                    <input type="radio" class="btn-check" name="contrato" id="s-contrato" autocomplete="on" value="A">
                                                                                    <label class="btn btn-outline-success fs-9" for="s-contrato">Autorizado</label>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <input type="radio" class="btn-check" name="contrato" id="d-contrato" autocomplete="off" value="R" checked>
                                                                                    <label class="btn btn-outline-danger fs-9" for="d-contrato">Rechazado</label>
                                                                                </div>
                                                                            @else
                                                                                <div class="col-md-4">
                                                                                    <input type="radio" class="btn-check" name="contrato" id="s-contrato" autocomplete="off" value="A">
                                                                                    <label class="btn btn-outline-success fs-9" for="s-contrato">Autorizado</label>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <input type="radio" class="btn-check" name="contrato" id="d-contrato" autocomplete="off" value="R">
                                                                                    <label class="btn btn-outline-danger fs-9" for="d-contrato">Rechazado</label>
                                                                                </div>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                @if($doc->status=="pro_valRev" || $doc->status=="pro_valDic" || $doc->status=="pro_den"  || $doc->status=="pro_apro")
                                                                    Pagare
                                                                    @if($doc->status_pagare == "A")
                                                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                                    @elseif($doc->status_pagare == "R")
                                                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                                    @else
                                                                    <i class="text-primary fa-solid fa-circle-question"></i><span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                                    @endif   
                                                                @else
                                                                    Pagare <i class="text-primary fa-solid fa-circle-question"></i><span class="text-secondary fst-italic"> (Espere a que se suban los archivos para validar)</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    @if($doc->status=="val" || $doc->status=="pro_val")
                                                                        <div class="col-md-3">
                                                                            <button class="text-secondary  border-0 btn" disabled><i class="fa-solid fa-eye"></i></button>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="pagare" id="s-pagare" autocomplete="on" value="A" disabled>
                                                                            <label class="btn btn-outline-success fs-9" for="s-pagare">Autorizado</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="pagare" id="d-pagare" autocomplete="off" value="R" disabled>
                                                                            <label class="btn btn-outline-danger fs-9" for="d-pagare">Rechazado</label>
                                                                        </div>
                                                                    @else
                                                                        <div class="col-md-3">
                                                                            <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->pagare}}"></a> 
                                                                        </div>
                                                                        @if($doc->status=="pro_valRev" || $doc->status=="pro_valDic" || $doc->status=="pro_apro" || $doc->status=="pro_den") 
                                                                            @if($doc->status_pagare == "A")
                                                                                <div class="col-md-4">
                                                                                    <input type="radio" class="btn-check" name="pagare" id="s-pagare" autocomplete="on" value="A"  checked>
                                                                                    <label class="btn btn-outline-success fs-9" for="s-pagare">Autorizado</label>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <input type="radio" class="btn-check" name="pagare" id="d-pagare" autocomplete="off" value="R">
                                                                                    <label class="btn btn-outline-danger fs-9" for="d-pagare">Rechazado</label>
                                                                                </div>
                                                                            @elseif($doc->status_pagare == "R")
                                                                                <div class="col-md-4">
                                                                                    <input type="radio" class="btn-check" name="pagare" id="s-pagare" autocomplete="on" value="A">
                                                                                    <label class="btn btn-outline-success fs-9" for="s-pagare">Autorizado</label>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <input type="radio" class="btn-check" name="pagare" id="d-pagare" autocomplete="off" value="R" checked>
                                                                                    <label class="btn btn-outline-danger fs-9" for="d-pagare">Rechazado</label>
                                                                                </div>
                                                                            @else
                                                                                <div class="col-md-4">
                                                                                    <input type="radio" class="btn-check" name="pagare" id="s-pagare" autocomplete="off" value="A">
                                                                                    <label class="btn btn-outline-success fs-9" for="s-pagare">Autorizado</label>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <input type="radio" class="btn-check" name="pagare" id="d-pagare" autocomplete="off" value="R">
                                                                                    <label class="btn btn-outline-danger fs-9" for="d-pagare">Rechazado</label>
                                                                                </div>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        @if($doc->status=="pro_valDic" || $doc->status=="pro_den"  || $doc->status=="pro_apro")  
                                            <center class="mt-4 mb-3">
                                                <div class="btn-group" role="group" aria-label="Basic example">   
                                                    <a href="/denegar_validacion/{{$doc->id_tipo}}"><button type="button" class="btn btn-outline-danger fontResponsive"><i class="fa-solid fa-xmark"></i> Denegar </button></a>
                                                    <a href="/aprobar_validacion/{{$doc->id_tipo}}"> <button type="button" class="btn btn-outline-success fontResponsive"><i class="fa-solid fa-check"></i> Aprobar</button></a>
                                                    <button type="submit" class="btn btn-turquesa fontResponsive">Guardar Observaciones</button>           
                                                </div>
                                            </center>
                                        @else
                                            <center class="mt-4 mb-3">
                                                <div class="btn-group" role="group" aria-label="Basic example">   
                                                    <button type="button" class="btn btn-outline-danger fontResponsive" disabled><i class="fa-solid fa-xmark"></i> Denegar</button>
                                                    <button type="button" class="btn btn-outline-success fontResponsive" disabled><i class="fa-solid fa-check"></i> Aprobar</button>
                                                    <button type="button" class="btn btn-secondary fontResponsive" disabled>Guardar Observaciones</button>           
                                                </div>
                                            </center>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        @endif 
                                     
                        <form action="/Guardar_observaciones">

                            {{--------Documentos Generales--------}}
                            <div class="row">
                                <div class="col-md-6 col-6 text-center mt-2">
                                    <div id="boton1" class="btn push m-0 p-1 sizeItem border-0" onclick="divLogin1()">
                                        <div class="row bord1"><h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-person-circle-plus"></i></h1><h6 class="fw-light fs_special2">Distribuidor </h6></div>
                                    </div> 
                                </div>
                    
                                <div class="col-md-6 col-6 text-center mt-2">
                                    <div id="boton2" class="btn push m-0 p-1 sizeItem border-0" onclick="divLogin2()">   
                                        <div class="row bord1"> <h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-id-badge"></i></h1><h6 class="fw-light fs_special2">Aval</h6></div>
                                    </div> 
                                </div>
                            </div>

                            {{-- Documentos distribuidor --}}
                            @if($doc->Tipo=="Distribuidor")
                                <div id="caja1" class="text-start">
                                    <div class="card rounded-5 mt-3">
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th scope="col">
                                                            <div class="input-group">
                                                                <div class="input-group-text labelInv fs-8">#</div>
                                                                <input class="form-control inputInv fs-8" type="text" value="{{$doc->id}}" name="idreferencia" required>
                                                                <div class="valid-feedback">
                                                                ¡Se ve bien!
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                Por favor, completa la información requerida.
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th scope="col">
                                                            <div class="input-group">
                                                                <div class="input-group-text labelInv fs-8"> # Distribuidor </div>
                                                                <input class="form-control inputInv fs-8"  type="text" value="{{$doc->id_tipo}}" name="iddistribuidor" required>
                                                                <div class="valid-feedback">
                                                                ¡Se ve bien!
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                Por favor, completa la información requerida.
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th scope="col">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-8">
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Indentificación Oficial
                                                            @if($doc->status_ide_ofi == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($doc->status_ide_ofi == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i><span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->identificacion_oficial}}"></a> 
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($doc->status_ide_ofi == "A")
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="identificacionDis" id="s-identificacionDis" autocomplete="on" value="A"  checked>
                                                                            <label class="btn btn-outline-success fs-9" for="s-identificacionDis">Autorizado</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="identificacionDis" id="d-identificacionDis" autocomplete="off" value="R">
                                                                            <label class="btn btn-outline-danger fs-9" for="d-identificacionDis">Rechazado</label>
                                                                        </div>
                                                                    @elseif($doc->status_ide_ofi == "R")
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="identificacionDis" id="s-identificacionDis" autocomplete="on" value="A">
                                                                            <label class="btn btn-outline-success fs-9" for="s-identificacionDis">Autorizado</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="identificacionDis" id="d-identificacionDis" autocomplete="off" value="R" checked>
                                                                            <label class="btn btn-outline-danger fs-9" for="d-identificacionDis">Rechazado</label>
                                                                        </div>
                                                                    @else
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="identificacionDis" id="s-identificacionDis" autocomplete="off" value="A">
                                                                            <label class="btn btn-outline-success fs-9" for="s-identificacionDis">Autorizado</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="identificacionDis" id="d-identificacionDis" autocomplete="off" value="R">
                                                                            <label class="btn btn-outline-danger fs-9" for="d-identificacionDis">Rechazado</label>
                                                                        </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Comprobante de Domicilo
                                                            @if($doc->status_com_dom == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($doc->status_com_dom == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i><span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_domicilio}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($doc->status_com_dom == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioDis" id="s-comprobanteDomicilioDis" autocomplete="on" value="A"  checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteDomicilioDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioDis" id="d-comprobanteDomicilioDis" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteDomicilioDis">Rechazado</label>
                                                                    </div>
                                                                    @elseif($doc->status_com_dom == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioDis" id="s-comprobanteDomicilioDis" autocomplete="off" value="A" >
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteDomicilioDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioDis" id="d-comprobanteDomicilioDis" autocomplete="on" value="R"  checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteDomicilioDis">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioDis" id="s-comprobanteDomicilioDis" autocomplete="off" value="A" >
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteDomicilioDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioDis" id="d-comprobanteDomicilioDis" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteDomicilioDis">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Comprobante de Ingresos
                                                            @if($doc->status_com_ingre == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($doc->status_com_ingre == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i><span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_ingresos}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($doc->status_com_ingre == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteingreso" id="s-comprobanteingreso" autocomplete="on" value="A" checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteingreso">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteingreso" id="d-comprobanteingreso" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteingreso">Rechazado</label>
                                                                    </div>
                                                                    @elseif($doc->status_com_ingre == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteingreso" id="s-comprobanteingreso" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteingreso">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteingreso" id="d-comprobanteingreso" autocomplete="on" value="R" checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteingreso">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteingreso" id="s-comprobanteingreso" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteingreso">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteingreso" id="d-comprobanteingreso" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteingreso">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Solicitud de Crédito
                                                            @if($doc->status_sol_cre == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($doc->status_sol_cre == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i><span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->solicitud_credito}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($doc->status_sol_cre == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="solicitudCreditoDis" id="s-solicitudCreditoDis" autocomplete="on" value="A" checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-solicitudCreditoDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="solicitudCreditoDis" id="d-solicitudCreditoDis" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-solicitudCreditoDis">Rechazado</label>
                                                                    </div>
                                                                    @elseif($doc->status_sol_cre == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="solicitudCreditoDis" id="s-solicitudCreditoDis" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-solicitudCreditoDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="solicitudCreditoDis" id="d-solicitudCreditoDis" autocomplete="on" value="R" checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-solicitudCreditoDis">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="solicitudCreditoDis" id="s-solicitudCreditoDis" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-solicitudCreditoDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="solicitudCreditoDis" id="d-solicitudCreditoDis" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-solicitudCreditoDis">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>Autorización de Consulta de Buro
                                                            @if($doc->status_aut_buro == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($doc->status_aut_buro == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->autorizacion_buro}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($doc->status_aut_buro == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="consultaBuroDis" id="s-consultaBuroDis" autocomplete="on" value="A" checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-consultaBuroDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="consultaBuroDis" id="d-consultaBuroDis" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-consultaBuroDis">Rechazado</label>
                                                                    </div>
                                                                    @elseif($doc->status_aut_buro == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="consultaBuroDis" id="s-consultaBuroDis" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-consultaBuroDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="consultaBuroDis" id="d-consultaBuroDis" autocomplete="on" value="R" checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-consultaBuroDis">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="consultaBuroDis" id="s-consultaBuroDis" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-consultaBuroDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="consultaBuroDis" id="d-consultaBuroDis" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-consultaBuroDis">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">6</th>
                                                        <td>Verificación de Domicilio
                                                            @if($doc->status_ver_dom == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($doc->status_ver_dom == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->verificacion_domicilio}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($doc->status_ver_dom == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="verificacionDomicilioDis" id="s-verificacionDomicilioDis" autocomplete="on" value="A" checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-verificacionDomicilioDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="verificacionDomicilioDis" id="d-verificacionDomicilioDis" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-verificacionDomicilioDis">Rechazado</label>
                                                                    </div>
                                                                    @elseif($doc->status_ver_dom == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="verificacionDomicilioDis" id="s-verificacionDomicilioDis" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-verificacionDomicilioDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="verificacionDomicilioDis" id="d-verificacionDomicilioDis" autocomplete="on" value="R" checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-verificacionDomicilioDis">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="verificacionDomicilioDis" id="s-verificacionDomicilioDis" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-verificacionDomicilioDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="verificacionDomicilioDis" id="d-verificacionDomicilioDis" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-verificacionDomicilioDis">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">7</th>
                                                        <td>Comprobante Propiedad
                                                            @if($doc->status_compro_prop == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($doc->status_compro_prop == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_propiedad}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($doc->status_compro_prop == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobantePropiedadDis" id="s-comprobantePropiedadDis" autocomplete="on" value="A" checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobantePropiedadDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobantePropiedadDis" id="d-comprobantePropiedadDis" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobantePropiedadDis">Rechazado</label>
                                                                    </div>
                                                                    @elseif($doc->status_compro_prop == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobantePropiedadDis" id="s-comprobantePropiedadDis" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobantePropiedadDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobantePropiedadDis" id="d-comprobantePropiedadDis" autocomplete="on" value="R" checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobantePropiedadDis">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobantePropiedadDis" id="s-comprobantePropiedadDis" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobantePropiedadDis">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobantePropiedadDis" id="d-comprobantePropiedadDis" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobantePropiedadDis">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    @if($doc->estado_civil == "CASADO")
                                                        <tr>
                                                            <th scope="row">8</th>
                                                            <td>Acta de Matrimonio
                                                                @if($doc->status_act_matri == "A")
                                                                <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                                @elseif($doc->status_act_matri == "R")
                                                                <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                                @else
                                                                <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->acta_matrimonio}}"></a>
                                                                    </div>
                                                                    @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                        @if($doc->status_act_matri == "A")
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="actaMatrimonioDis" id="s-actaMatrimonioDis" autocomplete="on" value="A" checked>
                                                                            <label class="btn btn-outline-success fs-9" for="s-actaMatrimonioDis">Autorizado</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="actaMatrimonioDis" id="d-actaMatrimonioDis" autocomplete="off" value="R">
                                                                            <label class="btn btn-outline-danger fs-9" for="d-actaMatrimonioDis">Rechazado</label>
                                                                        </div>
                                                                        @elseif($doc->status_act_matri == "R")
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="actaMatrimonioDis" id="s-actaMatrimonioDis" autocomplete="off" value="A">
                                                                            <label class="btn btn-outline-success fs-9" for="s-actaMatrimonioDis">Autorizado</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="actaMatrimonioDis" id="d-actaMatrimonioDis" autocomplete="on" value="R" checked>
                                                                            <label class="btn btn-outline-danger fs-9" for="d-actaMatrimonioDis">Rechazado</label>
                                                                        </div>
                                                                        @else
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="actaMatrimonioDis" id="s-actaMatrimonioDis" autocomplete="off" value="A">
                                                                            <label class="btn btn-outline-success fs-9" for="s-actaMatrimonioDis">Autorizado</label>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="radio" class="btn-check" name="actaMatrimonioDis" id="d-actaMatrimonioDis" autocomplete="off" value="R">
                                                                            <label class="btn btn-outline-danger fs-9" for="d-actaMatrimonioDis">Rechazado</label>
                                                                        </div>
                                                                        @endif
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- Documentos aval --}}
                            @foreach($vardocumentosaval as $idaval)
                             @if($idaval->Tipo=="Aval_1")
                                <div id="caja2" class="text-start">
                                    <div class="card rounded-5 mt-3">
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>
                                                            <div class="input-group">
                                                                <div class="input-group-text labelInv fs-8">#</div>
                                                                <input class="form-control inputInv fs-8"  type="text" value="{{$idaval->idreferenciaaval}}" name="idreferenciaaval" required>
                                                                <div class="valid-feedback">
                                                                ¡Se ve bien!
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                Por favor, completa la información requerida.
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th scope="col">
                                                            <div class="input-group">
                                                                <div class="input-group-text labelInv fs-8"> # Aval </div>
                                                                <input class="form-control inputInv fs-8"  type="text" value="{{$idaval->idaval}}" name="idaval" required>
                                                                <div class="valid-feedback">
                                                                ¡Se ve bien!
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                Por favor, completa la información requerida.
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th scope="col">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-8">
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Indentificación Oficial
                                                            @if($idaval->status_ide_ofi == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($idaval->status_ide_ofi == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->identificacion_oficial}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($idaval->status_ide_ofi == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="identificacioAval" id="s-identificacioAval" autocomplete="on" value="A" checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-identificacioAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="identificacioAval" id="d-identificacioAval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-identificacioAval">Rechazado</label>
                                                                    </div>
                                                                    @elseif($idaval->status_ide_ofi == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="identificacioAval" id="s-identificacioAval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-identificacioAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="identificacioAval" id="d-identificacioAval" autocomplete="on" value="R" checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-identificacioAval">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="identificacioAval" id="s-identificacioAval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-identificacioAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="identificacioAval" id="d-identificacioAval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-identificacioAval">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Comprobante de Domicilo
                                                            @if($idaval->status_com_dom == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($idaval->status_com_dom == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->comprobante_domicilio}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($idaval->status_com_dom == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioAval" id="s-comprobanteDomicilioAval" autocomplete="on" value="A" checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteDomicilioAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioAval" id="d-comprobanteDomicilioAval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteDomicilioAval">Rechazado</label>
                                                                    </div>
                                                                    @elseif($idaval->status_com_dom == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioAval" id="s-comprobanteDomicilioAval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteDomicilioAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioAval" id="d-comprobanteDomicilioAval" autocomplete="on" value="R" checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteDomicilioAval">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioAval" id="s-comprobanteDomicilioAval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteDomicilioAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioAval" id="d-comprobanteDomicilioAval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteDomicilioAval">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Comprobante de Ingresos
                                                            @if($idaval->status_com_ingre == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($idaval->status_com_ingre == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->comprobante_ingresos}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($idaval->status_com_ingre == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteingresoaval" id="s-comprobanteingresoaval" autocomplete="on" value="A" checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteingresoaval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteingresoaval" id="d-comprobanteingresoaval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteingresoaval">Rechazado</label>
                                                                    </div>
                                                                    @elseif($idaval->status_com_ingre == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteingresoaval" id="s-comprobanteingresoaval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteingresoaval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteingresoaval" id="d-comprobanteingresoaval" autocomplete="on" value="R" checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteingresoaval">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteingresoaval" id="s-comprobanteingresoaval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteingresoaval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobanteingresoaval" id="d-comprobanteingresoaval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteingresoaval">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <th scope="row">4</th>
                                                        <td>Solicitud de Crédito
                                                            @if($idaval->status_sol_cre == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($idaval->status_sol_cre == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->solicitud_credito}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($idaval->status_sol_cre == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="solicitudCreditoAval" id="s-solicitudCreditoAval" autocomplete="on" value="A" checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-solicitudCreditoAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="solicitudCreditoAval" id="d-solicitudCreditoAval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-solicitudCreditoAval">Rechazado</label>
                                                                    </div>
                                                                    @elseif($idaval->status_sol_cre == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="solicitudCreditoAval" id="s-solicitudCreditoAval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-solicitudCreditoAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="solicitudCreditoAval" id="d-solicitudCreditoAval" autocomplete="on" value="R" checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-solicitudCreditoAval">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="solicitudCreditoAval" id="s-solicitudCreditoAval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-solicitudCreditoAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="solicitudCreditoAval" id="d-solicitudCreditoAval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-solicitudCreditoAval">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>Autorización de Consulta de Buro
                                                            @if($idaval->status_aut_buro == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($idaval->status_aut_buro == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->autorizacion_buro}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($idaval->status_aut_buro == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="consultaBuroAval" id="s-consultaBuroAval" autocomplete="on" value="A" checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-consultaBuroAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="consultaBuroAval" id="d-consultaBuroAval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-consultaBuroAval">Rechazado</label>
                                                                    </div>
                                                                    @elseif($idaval->status_aut_buro == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="consultaBuroAval" id="s-consultaBuroAval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-consultaBuroAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="consultaBuroAval" id="d-consultaBuroAval" autocomplete="on" value="R" checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-consultaBuroAval">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="consultaBuroAval" id="s-consultaBuroAval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-consultaBuroAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="consultaBuroAval" id="d-consultaBuroAval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-consultaBuroAval">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">6</th>
                                                        <td>Verificación de Domicilio
                                                            @if($idaval->status_ver_dom == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($idaval->status_ver_dom == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->verificacion_domicilio}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($idaval->status_ver_dom == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="verificacioDomicilioAval" id="s-verificacioDomicilioAval" autocomplete="on" value="A" checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-verificacioDomicilioAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="verificacioDomicilioAval" id="d-verificacioDomicilioAval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-verificacioDomicilioAval">Rechazado</label>
                                                                    </div>
                                                                    @elseif($idaval->status_ver_dom == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="verificacioDomicilioAval" id="s-verificacioDomicilioAval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-verificacioDomicilioAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="verificacioDomicilioAval" id="d-verificacioDomicilioAval" autocomplete="on" value="R" checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-verificacioDomicilioAval">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="verificacioDomicilioAval" id="s-verificacioDomicilioAval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-verificacioDomicilioAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="verificacioDomicilioAval" id="d-verificacioDomicilioAval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-verificacioDomicilioAval">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">7</th>
                                                        <td>Comprobante Propiedad
                                                            @if($idaval->status_compro_prop == "A")
                                                            <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                            @elseif($idaval->status_compro_prop == "R")
                                                            <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                            @else
                                                            <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Retroalimenta)</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->comprobante_propiedad}}"></a>
                                                                </div>
                                                                @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                                                    @if($idaval->status_compro_prop == "A")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobantePropiedadAval" id="s-comprobantePropiedadAval" autocomplete="on" value="A" checked>
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobantePropiedad">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobantePropiedadAval" id="d-comprobantePropiedadAval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobantePropiedadAval">Rechazado</label>
                                                                    </div>
                                                                    @elseif($idaval->status_compro_prop == "R")
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobantePropiedadAval" id="s-comprobantePropiedadAval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobantePropiedadAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobantePropiedadAval" id="d-comprobantePropiedadAval" autocomplete="on" value="R" checked>
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobantePropiedadAval">Rechazado</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobantePropiedadAval" id="s-comprobantePropiedadAval" autocomplete="off" value="A">
                                                                        <label class="btn btn-outline-success fs-9" for="s-comprobantePropiedadAval">Autorizado</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="radio" class="btn-check" name="comprobantePropiedadAval" id="d-comprobantePropiedadAval" autocomplete="off" value="R">
                                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobantePropiedadAval">Rechazado</label>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                             @endif
                            @endforeach

                            {{--------Asignar capital-------------}}
                            <div class="row mt-3">
                                <div class="col d-md-block d-none "></div>
                                <div class="col-md-3">
                                    <div class="form-outline">
                                    <label class="form-label fs-8" for="form8Example4">Capital Solicitado</label>
                                        <p class="fs-8 text-success">{{$doc->capital}}</p>
                                        <div class="valid-feedback">
                                        ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                        Por favor, completa la información requerida.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-outline">
                                    <label class="form-label fs-8" for="form8Example4">Capital Autorizado</label>
                                        @if($doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec") 
                                            <input type="text"  class="form-control fs-8 rounded-4" name="capital_autorizado" id="capital_autorizado"  value="{{$doc->capital_autorizado}}"  required />
                                        @else
                                            <p class="fs-8 text-success">{{$doc->capital_autorizado}}</p>
                                        @endif
                                        <div class="valid-feedback">
                                        ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                        Por favor, completa la información requerida.
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-md-block d-none "></div>
                            </div>

                            {{-- Botones de formulario --}}
                            @if($doc->status=="pro_rev" || $doc->status=="pro_dic" || $doc->status=="pro_aut" || $doc->status=="pro_rec")  
                                @foreach($vardocumentosaval as $form)
                                    <!------Area Botones de status----->
                                    @if($doc->status=='pro_dic' || $doc->status=='pro_rec' || $doc->status=="pro_aut" )
                                    <div class="mt-4 mb-3">
                                        <div class="btn-group" role="group" aria-label="Basic example">   
                                            <a href="/rechazar_distribuidor/{{$doc->id_tipo}}/{{$form->idaval}}"><button type="button" class="btn btn-outline-danger fontResponsive"><i class="fa-solid fa-xmark"></i> Rechazar</button></a>
                                            <a href="/autorizar_distribuidor/{{$doc->id_tipo}}/{{$form->idaval}}"> <button type="button" class="btn btn-outline-success fontResponsive"><i class="fa-solid fa-check"></i> Autorizar</button></a>
                                            <button type="submit" class="btn btn-turquesa fontResponsive">Guardar Observaciones</button>           
                                        </div>
                                    </div>
                                    @else
                                    <div class="mt-4 mb-3">
                                        <div class="btn-group" role="group" aria-label="Basic example">   
                                            <button type="button" class="btn btn-outline-danger fontResponsive" disabled><i class="fa-solid fa-xmark"></i> Rechazar</button>
                                            <button type="button" class="btn btn-outline-success fontResponsive" disabled><i class="fa-solid fa-check"></i> Autorizar</button>
                                            <button type="button" class="btn btn-secondary fontResponsive" disabled>Guardar Observaciones</button>           
                                        </div>
                                    </div>
                                    @endif
                                </form>
                                    <!------Area edicion----->
                                    <div class="btn_Edicion">
                                        <form action="/vales/getactualizardistribuidor/{{$doc->id_tipo}}">
                                            <button class="btn border-0 fw-ligh text-light fw-bold push" type="submit">Habilitar edición</button>
                                        </form>
                                    </div>
                                @endforeach
                            @endif

    
                    @endforeach      
                      
            </div>
        </div>
    </div>
   
    <!------Area Historial----->
    <div class="col-md-3 col-12 shadow p-3 bg-body rounded pos_histrial">
        <div>
            <div class="text-center" style="margin-top:50px;">
                <h5 class="offcanvas-title fw-light" id="offcanvasRightLabel">Historial</h5>
            </div>
            
            <div>
                <nav>
                    <div class="row p-3">
                
                        @foreach ($varhistorial as $estado)
                
                            @if($estado->status == 'pro_dic')
                                    <div class="row">
                                            <div class="col-md-6 col-6 bh1 text-center"><h2 class="fw-light">1</h2></div>
                                            <div class="col-md-6 col-6 p-15 text-start">
                                                <p class="fw-light fs-6">Inicio dictamen</p>
                                                <p class="fw-light text-secondary fs-9 mt10">{{$estado->fecha_creacion}} <i class="fa-solid fa-check-double"></i></p>
                                            </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh1"></div>
                            @endif

                            @if($estado->status == 'pro_rev')
                                    <div class="row">
                                        <div class="col-md-6 col-6 bh1 text-center"><h2 class="fw-light">1</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Inicio dictamen</p>
                                    
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh1"></div>

                                    
                                    <div class="row">
                                            <div class="col-md-6 col-6 bh2 text-center"><h2 class="fw-light">2</h2></div>
                                            <div class="col-md-6 col-6 p-15 text-start">
                                                <p class="fw-light fs-6">Recibió observaciones</p>
                                                <p class="fw-light text-secondary fs-9 mt10">{{$estado->fecha_actualizacion}} <i class="fa-solid fa-check-double"></i></p>
                                            </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh2"></div>
                            @endif
                            
                            @if($estado->status == 'pro_aut')
                                    <div class="row">
                                        <div class="col-md-6 col-6 bh1 text-center"><h2 class="fw-light">1</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Inicio dictamen</p>
                                
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh1"></div>

                                    
                                    <div class="row">
                                            <div class="col-md-6 col-6 bh2 text-center"><h2 class="fw-light">2</h2></div>
                                            <div class="col-md-6 col-6 p-15 text-start">
                                                <p class="fw-light fs-6">Recibió observaciones</p>

                                            </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh2"></div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 bh4 text-center"><h2 class="fw-light">3</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Solicitud Autizado</p>
                                            <p class="fw-light text-secondary fs-9 mt10">{{$estado->fecha_actualizacion}} <i class="fa-solid fa-check-double"></i></p>
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh4"></div>

                            @endif


                            @if($estado->status == 'pro_rec')
                                    <div class="row">
                                        <div class="col-md-6 col-6 bh1 text-center"><h2 class="fw-light">1</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Inicio dictamen</p>
                                    
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh1"></div>

                                    
                                    <div class="row">
                                            <div class="col-md-6 col-6 bh2 text-center"><h2 class="fw-light">2</h2></div>
                                            <div class="col-md-6 col-6 p-15 text-start">
                                                <p class="fw-light fs-6">Recibió observaciones</p>
                                            
                                            </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh2"></div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 bh3 text-center"><h2 class="fw-light">3</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Solicitud Rechazada</p>
                                            <p class="fw-light text-secondary fs-9 mt10">{{$estado->fecha_actualizacion}} <i class="fa-solid fa-check-double"></i></p>
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh3"></div>
                            @endif

                            @if($estado->status == 'val' || $estado->status == 'pro_val')
                                    <div class="row">
                                        <div class="col-md-6 col-6 bh1 text-center"><h2 class="fw-light">1</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Inicio dictamen</p>
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh1"></div>

                                    
                                    <div class="row">
                                            <div class="col-md-6 col-6 bh2 text-center"><h2 class="fw-light">2</h2></div>
                                            <div class="col-md-6 col-6 p-15 text-start">
                                                <p class="fw-light fs-6">Recibió observaciones</p>
                                            </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh2"></div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 bh4 text-center"><h2 class="fw-light">3</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Solicitud Autizado</p>
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh4"></div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 bh5 text-center"><h2 class="fw-light">4</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Inicio proceso de validación</p>
                                            <p class="fw-light text-secondary fs-9 mt10">{{$estado->fecha_actualizacion}} <i class="fa-solid fa-check-double"></i></p>
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh5"></div>
                            @endif

                            @if($estado->status == 'pro_valDic')
                                    <div class="row">
                                        <div class="col-md-6 col-6 bh5 text-center"><h2 class="fw-light">1</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Inicio proceso de validación</p>
                                            
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh5"></div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 bh1 text-center"><h2 class="fw-light">2</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Enviado a dictamen</p>
                                            <p class="fw-light text-secondary fs-9 mt10">{{$estado->fecha_actualizacion}} <i class="fa-solid fa-check-double"></i></p>
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh1"></div> 
                            @endif

                            @if($estado->status == 'pro_valRev')
                                    <div class="row">
                                        <div class="col-md-6 col-6 bh5 text-center"><h2 class="fw-light">1</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Inicio proceso de validación</p>
                                            
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh5"></div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 bh1 text-center"><h2 class="fw-light">2</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Enviado a dictamen</p>
                                            <p class="fw-light text-secondary fs-9 mt10">{{$estado->fecha_actualizacion}} <i class="fa-solid fa-check-double"></i></p>
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh1"></div> 

                                    <div class="row">
                                        <div class="col-md-6 col-6 bh2 text-center"><h2 class="fw-light">2</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Recibió observaciones</p>
                                            <p class="fw-light text-secondary fs-9 mt10">{{$estado->fecha_actualizacion}} <i class="fa-solid fa-check-double"></i></p>
                                        </div>
                                </div> 
                                <div class="col-md-2 col-2 lh2"></div>
                            @endif

                            @if($estado->status == 'pro_apro')
                                    <div class="row">
                                        <div class="col-md-6 col-6 bh5 text-center"><h2 class="fw-light">1</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Inicio proceso de validación</p>
                                            
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh5"></div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 bh1 text-center"><h2 class="fw-light">2</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Enviado a dictamen</p>
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh1"></div> 

                                    <div class="row">
                                        <div class="col-md-6 col-6 bh2 text-center"><h2 class="fw-light">2</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Recibió observaciones</p>
                                        </div>
                                </div> 
                                <div class="col-md-2 col-2 lh2"></div>

                                <div class="row">
                                    <div class="col-md-6 col-6 bh4 text-center"><h2 class="fw-light">4</h2></div>
                                    <div class="col-md-6 col-6 p-15 text-start">
                                        <p class="fw-light fs-6">Crédito Aprobado</p>
                                        <p class="fw-light text-secondary fs-9 mt10">{{$estado->fecha_actualizacion}} <i class="fa-solid fa-check-double"></i></p>
                                    </div>
                                </div> 
                                <div class="col-md-2 col-2 lh4"></div>


                            @endif

                            @if($estado->status == 'pro_den')
                                    <div class="row">
                                        <div class="col-md-6 col-6 bh5 text-center"><h2 class="fw-light">1</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Inicio proceso de validación</p>
                                            
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh5"></div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 bh1 text-center"><h2 class="fw-light">2</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Enviado a dictamen</p>
                                        </div>
                                    </div> 
                                    <div class="col-md-2 col-2 lh1"></div> 

                                    <div class="row">
                                        <div class="col-md-6 col-6 bh2 text-center"><h2 class="fw-light">2</h2></div>
                                        <div class="col-md-6 col-6 p-15 text-start">
                                            <p class="fw-light fs-6">Recibió observaciones</p>
                                        </div>
                                </div> 
                                <div class="col-md-2 col-2 lh2"></div>

                                <div class="row">
                                    <div class="col-md-6 col-6 bh3 text-center"><h2 class="fw-light">3</h2></div>
                                    <div class="col-md-6 col-6 p-15 text-start">
                                        <p class="fw-light fs-6">Solicitud Rechazada</p>
                                        <p class="fw-light text-secondary fs-9 mt10">{{$estado->fecha_actualizacion}} <i class="fa-solid fa-check-double"></i></p>
                                    </div>
                                </div> 
                                <div class="col-md-2 col-2 lh3"></div>


                            @endif
                        @endforeach
                    </div>
                </nav>
            </div>

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
        </div>
    </div>

    
    <!------Area comentarios----->
    <div class="chatButtonPosition">
      
    </div>
   
    @foreach($vardocumentos as $doc)
        @if($doc->Tipo=="Distribuidor")
        <!-- Modal coment-->
            <form action="/enviar_mensaje/admin/{{$doc->id_tipo}}">
            <div class="modal fade" id="Documentacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg  modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir observación</h5>
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
        @endif
    @endforeach

</center>

<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/aviso.js') }}"></script>
<script src="{{ asset('js/docSolicitud.js')}}"></script>

@endsection