@extends('layouts.app')
@section('content')
{{-- ALERTAS --}}
@if ($mensaje = Session::get('success'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Movimiento completado de forma correcta","success", {buttons: false,timer: 1500});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('error'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("Ya existe un Directorio con ese numero de distribuidor","warning", {buttons: false,timer: 3000});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('PDFwarning'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Recuerde llenar todos los campos y que formato permitido de archivos es .pdf","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp
@endif


<!-- Btn de regreso-->
<div class="pos__btnBack1 d-none d-md-block" style="z-index:3!important;">
    <div class="wrapper"> 
        @foreach($disDoc as $estado)
            @if($estado->status =='pro')
            <form action="/vales/GestionFase1">
                <button class="btn btnBack1 btn-light border-0" type="submit"><h4><i class="fa-solid fa-house"></i></h4></button>
            </form>
            @elseif($estado->status =='pro_rev')
            <form action="/vales/GestionFase2">
                <button class="btn btnBack1 btn-light border-0" type="submit"><h4><i class="fa-solid fa-house"></i></h4></button>
            </form>
            @endif
        @endforeach
    </div>
</div>
<div class="pos__ico">
    <img class="ico__image" src="{{ asset('ico/valeMil.png') }}" alt="valeMil">
</div>
<!-- Menu de progreso-->
<div class="mt-4 text-center shadow p-3 mb-5 bg-body rounded spaceNavPas ">
    <div class="mt-2">
        <h5 class="fw-light">Fase 1: Actualización de Captura Inicial   <button class="btn border-0 text-secondary" id="show3" onclick="divshow3()"><i class="fa-solid fa-minus"></i></button></h5>

        <div>
            <nav id="navbar">
                <div class="row p-3">
                    
                    <div class="col-md-2 col-2 marginSpecial">
                        <div class="row">
                            <div class="col-md-6 col-6 border1"><h2 class="fw-light">1</h2></div>
                            <div class="col-md-6 col-6 p-15">
                            <form action="/vales/getactualizardistribuidor/{{$iddis}}" method="get">
                                <button class=" btn fa-primary fw-light fs_special border-0" type="submit">Distribuidor</button>
                            </form>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-2 col-2 line1"></div>

                    <div class="col-md-2 col-2">
                        <div class="row">
                            <div class="col-md-6 col-6 border2"><h2 class="fw-light">2</h2></div>
                            <div class="col-md-6 col-6 p-15">
                                <button class=" btn fa-primary fw-light fs_special border-0" type="submit">Aval</button>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-2 col-2 line2"></div>

                    <div class="col-md-2 col-2">
                        <div class="row">
                            <div class="col-md-6 col-6 circle3"><h2 class="fw-light">3</h2></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Documentos</h5></div>
                        </div> 
                    </div>
                    
                </div>
            </nav>
        </div>

    </div>
</div>
    

<div class="space_height" id="block3"></div>

<div class="container">
    <form action="/vales/actualizar_documentos" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
        @csrf
        <div class="card p-5 cartaForm  mb-5">
            <h4 id="scrollspyHeading3" class="fw-light">3. Documentos</h4>  
            <span class="fs-8 text-secondary"><i class="fa-solid fa-circle-exclamation"></i> Recuerde 
                <br> - Si el <b>Distribuidor</b> esta casado es necesario subir el <b>"Acta de Matrimonio"</b> 
                <br> - Deberá subir por lo menos un "Comprobante de Propiedad" para el <b>Distribuidor</b>  o el <b>Aval</b>
             </span> 
            <div>      
                  <div class="row mt-2">
                    <div class="p-2">
                        <div class="card mt-3">
                            <div class="card-header bg-gradient-pink">
                                Distribuidor
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <div class="form-outline">
                                        <div class="input-group">
                                            <div class="input-group-text labelInv fs-8">No. de aval</div>
                                            <input type="text"  name="aval" class="form-control inputInv" value="{{$idaval}}" required>
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
                                            <div class="input-group-text labelInv fs-8">No. Distribuidor</div>
                                            <input type="text"  name="id" class="form-control inputInv" value="{{$iddis}}" required>
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
                                        @foreach($disDoc as $docuemntosDis)
                                            <input type="text"  name="status" hidden class="form-control inputInv" value="{{$docuemntosDis->status}}" required>
                                        @endforeach
                                        <div class="valid-feedback">
                                        ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                        Por favor, completa la información requerida.
                                        </div>
                                    </div> 
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-outline">
                                        <div class="input-group">
                                            @foreach($avalDoc as $docuemntosAval)
                                            <input type="text"  name="avalDoc" hidden class="form-control inputInv" value="{{$docuemntosAval->id}}"  required>
                                            @endforeach
                                            <div class="valid-feedback">
                                            ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                            Por favor, completa la información requerida.
                                            </div>
                                        </div> 
                                    </div>
                                </div> 

                                <div class="col-md-2">
                                    <div class="form-outline">
                                        <div class="input-group">
                                            @foreach($disDoc as $docuemntosDis)
                                                <input type="text"  name="disDoc" hidden class="form-control inputInv" value="{{$docuemntosDis->id}}" required>
                                            @endforeach
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

                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Concepto</th>
                                            <th scope="col">Ver</th>
                                            <th scope="col">Importar Documento</th>
                                        </tr>
                                    </thead>
                                    @foreach($vardocumentos as $doc)
                                        <tbody class="fs-8">
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Comprobante de Domicilo
                                                    @if($doc->status_ide_ofi == "A")
                                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                    @elseif($doc->status_ide_ofi == "R")
                                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                    @else
                                                    <i class="text-primary fa-solid fa-circle-question"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->identificacion_oficial}}"></a>  
                                                </td>
                                                <td>
                                                    @if($doc->status_ide_ofi == "A")
                                                        <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                    @elseif($doc->status_ide_ofi == "R")
                                                        <label for="file" class="drop-container">  
                                                            <input  type="file" name="comporbante_domicilio" id="file" >
                                                        </label>
                                                    @else
                                                        <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                    @endif
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
                                                    <i class="text-primary fa-solid fa-circle-question"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_domicilio}}"></a>
                                                </td>
                                                <td>
                                                    @if($doc->status_com_dom == "A")
                                                        <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                    @elseif($doc->status_com_dom == "R")
                                                    <label for="file" class="drop-container">  
                                                        <input  type="file" name="comporbante_domicilio" id="file" >
                                                    </label>
                                                    @else
                                                    <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                    @endif
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
                                                    <i class="text-primary fa-solid fa-circle-question"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_ingresos}}"></a>
                                                </td>
                                                <td>
                                                    @if($doc->status_com_ingre == "A")
                                                        <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                    @elseif($doc->status_com_ingre == "R")
                                                    <label for="file" class="drop-container">  
                                                        <input  type="file" name="comporbante_ingreso" id="file" required>
                                                    </label>
                                                    @else
                                                    <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                    @endif
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
                                                    <i class="text-primary fa-solid fa-circle-question"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->solicitud_credito}}"></a>
                                                </td>
                                                <td>
                                                    @if($doc->status_sol_cre == "A")
                                                        <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                    @elseif($doc->status_sol_cre == "R")
                                                    <label for="file" class="drop-container">  
                                                        <input  type="file" name="solicitud_credito" id="file" >
                                                    </label>
                                                    @else
                                                    <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                    @endif
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
                                                    <i class="text-primary fa-solid fa-circle-question"></i> 
                                                    @endif
                                                </td>
                                                <td>
                                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->autorizacion_buro}}"></a>
                                                </td>
                                                <td>
                                                    @if($doc->status_aut_buro == "A")
                                                        <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                    @elseif($doc->status_aut_buro == "R")
                                                    <label for="file" class="drop-container">  
                                                        <input  type="file" name="autorizacion_buro" id="file" >
                                                    </label>
                                                    @else
                                                    <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Vreficación de Domicilio
                                                    @if($doc->status_ver_dom == "A")
                                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                    @elseif($doc->status_ver_dom == "R")
                                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                    @else
                                                    <i class="text-primary fa-solid fa-circle-question"></i> 
                                                    @endif
                                                </td>
                                                <td>
                                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->verificacion_domicilio}}"></a>
                                                </td>
                                                <td>
                                                    @if($doc->status_ver_dom == "A")
                                                        <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                    @elseif($doc->status_ver_dom == "R")
                                                    <label for="file" class="drop-container">  
                                                        <input  type="file" name="veri_domicilio" id="file">
                                                    </label>
                                                    @else
                                                    <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Comprobannte de propiedad
                                                    @if($doc->status_compro_prop == "A")
                                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                    @elseif($doc->status_compro_prop == "R")
                                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                    @else
                                                    <i class="text-primary fa-solid fa-circle-question"></i> 
                                                    @endif
                                                </td>
                                                <td>
                                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_propiedad}}"></a>
                                                </td>
                                                <td>
                                                    @if($doc->status_compro_prop == "A")
                                                        <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                    @elseif($doc->status_compro_prop == "R")
                                                    <label for="file" class="drop-container">  
                                                        <input  type="file" name="comprobante_propiedad" id="file">
                                                    </label>
                                                    @else
                                                    <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                    @endif
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
                                                        <i class="text-primary fa-solid fa-circle-question"></i> 
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->acta_matrimonio}}"></a>
                                                    </td>
                                                    <td>
                                                        @if($doc->status_act_matri == "A")
                                                            <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                        @elseif($doc->status_act_matri == "R")
                                                        <label for="file" class="drop-container">  
                                                            <input  type="file" name="acta_matrimonio" id="file">
                                                        </label>
                                                        @else
                                                        <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    @endforeach
                                </table>
                                <p class="txtcenter">Recuerde que solo se admite el formato ".pdf"</p> 
                            </div>
                        </div>

                        <div class="card mt-5">
                            <div class="card-header bg-gradient-pink">
                                Aval
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Concepto</th>
                                            <th scope="col">Ver</th>
                                            <th scope="col">Importar Documento</th>
                                        </tr>
                                    </thead>
                                    @foreach($vardocumentosaval as $idaval)
                                    <tbody class="fs-8">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Indentificación Oficial
                                                @if($idaval->status_ide_ofi == "A")
                                                <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                @elseif($idaval->status_ide_ofi == "R")
                                                <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                @else
                                                <i class="text-primary fa-solid fa-circle-question"></i> 
                                                @endif
                                            </td>
                                            <td>
                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$idaval->iddis}}/{{$idaval->identificacion_oficial}}"></a>
                                            </td>
                                            <td>    
                                                @if($idaval->status_ide_ofi == "A")
                                                    <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                @elseif($idaval->status_ide_ofi == "R")                                    
                                                <label for="file" class="drop-container">  
                                                    <input  type="file" name="idetificacion_ofi_aval" id="file" >
                                                </label>
                                                @else
                                                <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                @endif
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
                                                <i class="text-primary fa-solid fa-circle-question"></i> 
                                                @endif
                                            </td>
                                            <td>
                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$idaval->iddis}}/{{$idaval->comprobante_domicilio}}"></a>
                                            </td>
                                            <td>
                                                @if($idaval->status_com_dom == "A")
                                                    <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                @elseif($idaval->status_com_dom == "R")
                                                <label for="file" class="drop-container">  
                                                    <input  type="file" name="comporbante_aval" id="file">
                                                </label>
                                                @else
                                                <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Comprobante de Ingresos Aval
                                                @if($idaval->status_com_ingre == "A")
                                                <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                @elseif($idaval->status_com_ingre == "R")
                                                <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                @else
                                                <i class="text-primary fa-solid fa-circle-question"></i> 
                                                @endif
                                            </td>
                                            <td>
                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$idaval->iddis}}/{{$idaval->comprobante_ingresos}}"></a>
                                            </td>
                                            <td>
                                                @if($idaval->status_com_ingre == "A")
                                                    <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                @elseif($idaval->status_com_ingre == "R")
                                                <label for="file" class="drop-container">  
                                                    <input  type="file" name="comporbante_ingreso_aval" id="file" >
                                                </label>
                                                @else 
                                                <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                @endif
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
                                                <i class="text-primary fa-solid fa-circle-question"></i> 
                                                @endif
                                            </td>
                                            <td>
                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$idaval->iddis}}/{{$idaval->solicitud_credito}}"></a>
                                            </td>
                                            <td>
                                                @if($idaval->status_sol_cre == "A")
                                                    <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                @elseif($idaval->status_sol_cre == "R")
                                                <label for="file" class="drop-container">  
                                                    <input  type="file" name="soli_credito_aval" id="file" >
                                                </label>
                                                @else 
                                                <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                @endif
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
                                                <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$idaval->iddis}}/{{$idaval->autorizacion_buro}}"></a>
                                            </td>
                                            <td>
                                                @if($idaval->status_aut_buro == "A")
                                                    <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                @elseif($idaval->status_aut_buro == "R")
                                                <label for="file" class="drop-container">  
                                                    <input  type="file" name="consulta_buro_aval" id="file" >
                                                </label>
                                                @else 
                                                <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Vreficación de Domicilio
                                                @if($idaval->status_ver_dom == "A")
                                                <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                @elseif($idaval->status_ver_dom == "R")
                                                <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                @else
                                                <i class="text-primary fa-solid fa-circle-question"></i> 
                                                @endif
                                            </td>
                                            <td>
                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$idaval->iddis}}/{{$idaval->verificacion_domicilio}}"></a>
                                            </td>
                                            <td>
                                                @if($idaval->status_ver_dom == "A")
                                                    <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                @elseif($idaval->status_ver_dom == "R")
                                                <label for="file" class="drop-container">  
                                                    <input  type="file" name="veri_domi_aval" id="file" >
                                                </label>
                                                @else
                                                <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Comprobannte de propiedad
                                                @if($idaval->status_compro_prop == "A")
                                                <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                @elseif($idaval->status_compro_prop == "R")
                                                <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                @else
                                                <i class="text-primary fa-solid fa-circle-question"></i> 
                                                @endif
                                            </td>
                                            <td>
                                                <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$idaval->iddis}}/{{$idaval->comprobante_propiedad}}"></a>
                                            </td>
                                            <td>
                                                @if($idaval->status_compro_prop == "A")
                                                    <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                @elseif($idaval->status_compro_prop == "R")
                                                <label for="file" class="drop-container">  
                                                    <input  type="file" name="comprobante_propiedad_aval" id="file">
                                                </label>
                                                @else
                                                <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                <p class="txtcenter">Recuerde que solo se admite el formato ".pdf"</p> 
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="text-center">
                    <button class="btn btn-purple1" type="submit">Terminar</button>
            </div>
        </div>
        <br/>
        <br/>
    </form>
</div>

<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/block3.js') }}"></script>
<script src="{{ asset('js/validaPDF.js')}}"></script>
@endsection