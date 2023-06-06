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

<style>
a{
 color:white; 
}
</style>

<div id="btnBack"></div>  
<div class="pos__ico">
    <img class="ico__image" src="{{ asset('ico/valeMil.png') }}" alt="valeMil">
</div>

<div class="p__little">
 
    {{--------------------------- Encabezado de la pagina----------------------}}
    <div class="container mt-4">
            <div class="row mb-3 bg-p">
                <div class="col-md-5 center">
                    <h2 class="mt-3 mar-2 fw-light animate_animated animate_backInLeft">Visualización de Documentos</h2> 
                    <cite class="mar-2" title="Título fuente">Analisis de documentos </cite>
                </div>
            </div>
        </div> 
     
      @csrf

      {{--------------------------- Cuerpo de la tabla----------------------}}
    <center class="mb-4">
      <div class="row mb-1">
          <div class="col-md-3 d-none d-md-block"></div>
          <div class="col-md-3 col-6 text-center">
              <div id="boton1" class="btn push m-0 p-1 sizeItem border-0" onclick="divLogin1()">
                  <div class="row bord1"><h1 class="iconSolicitud d-none d-md-block"><i class="fa-brands fa-slack"></i></h1><h6 class="fw-light fs_special2">Distribuidor </h6></div>
              </div>
          </div>
          <div class="col-md-3 col-6 text-center">
              <div id="boton2" class="btn push m-0 p-1 sizeItem border-0" onclick="divLogin2()">   
                  <div class="row bord1"> <h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-lines-leaning"></i></h1><h6 class="fw-light fs_special2">Aval</h6></div>
              </div> 
          </div>
          <div class="col-md-3 d-none d-md-block"></div>
      </div>

            @foreach($vardocumentos as $doc)
            <div class="shadow-lg mb-5 bg-body rounded" style="margin:10px;width:95%;">
                @if($doc->Tipo=="Distribuidor")
                <div id="caja1" class="card border-0 mt-5">
                    <div class="card-header bg-gradient-pink">
                    <h6 class="fw-light">{{$doc->Tipo}}</h6> 
                    </div>
                    <div class="card-body bg-body">
                        <table class="table">
                            <thead>                               
                                <tr>
                                    <th scope="col">Concepto</th>
                                    <th scope="col">Ver</th>
                                </tr>
                            </thead>
                            <tbody class="fs-8">
                            <tr>
                                <td>Indentificación Oficial   
                                    @if($doc->status_ide_ofi == "A")
                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                    @elseif($doc->status_ide_ofi == "R")
                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                    @else
                                    <i class="text-primary fa-solid fa-circle-question"></i><span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                    @endif
                                </td>
                                <td>
                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->identificacion_oficial}}"></a>  
                                </td>
                            </tr>

                            <tr>
                                <td>Comprobante de Domicilo 
                                    @if($doc->status_com_dom == "A")
                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                    @elseif($doc->status_com_dom == "R")
                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                    @else
                                    <i class="text-primary fa-solid fa-circle-question"></i><span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                    @endif
                                </td>
                                <td>
                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_domicilio}}"></a>
                                </td>
                            </tr>

                            <tr>
                                <td>Comprobante de Ingresos 
                                    @if($doc->status_com_ingre == "A")
                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                    @elseif($doc->status_com_ingre == "R")
                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                    @else
                                    <i class="text-primary fa-solid fa-circle-question"></i><span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                    @endif
                                </td>
                                <td>
                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_ingresos}}"></a>
                                </td>
                            </tr>

                            <tr>
                                <td>Solicitud de Crédito 
                                    @if($doc->status_sol_cre == "A")
                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                    @elseif($doc->status_sol_cre == "R")
                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                    @else
                                    <i class="text-primary fa-solid fa-circle-question"></i><span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                    @endif
                                </td>
                                <td>
                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->solicitud_credito}}"></a>
                                </td>
                            </tr>

                            <tr>
                                <td>Autorización de Consulta de Buro 
                                    @if($doc->status_aut_buro == "A")
                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                    @elseif($doc->status_aut_buro == "R")
                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                    @else
                                    <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                    @endif
                                </td>
                                <td>
                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->autorizacion_buro}}"></a>
                                </td>
                            </tr>

                            <tr>
                                <td>Vreficación de Domicilio 
                                    @if($doc->status_ver_dom == "A")
                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                    @elseif($doc->status_ver_dom == "R")
                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                    @else
                                    <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                    @endif
                                </td>
                                <td>
                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->verificacion_domicilio}}"></a>
                                </td>
                            </tr>

                            <tr>
                                <td>Comprobante Propiedad
                                    @if($doc->status_compro_prop == "A")
                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                    @elseif($doc->status_compro_prop == "R")
                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                    @else
                                    <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                    @endif
                                </td>
                                <td>
                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_propiedad}}"></a>
                                </td>
                            </tr>
                            @if($doc->estado_civil == "CASADO")
                                <tr>
                                    <td>Acta de Matrimonio
                                        @if($doc->status_act_matri == "A")
                                        <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                        @elseif($doc->status_act_matri == "R")
                                        <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                        @else
                                        <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->acta_matrimonio}}"></a>
                                    </td>
                                </tr>
                            @endif

                            @if ($doc->status =="val" || $doc->status =="pro_val" || $doc->status =="pro_valRev" || $doc->status =="pro_valDic" || $doc->status =="pro_apro" || $doc->status =="pro_den")
                            <tr>
                                <td>Contrato 
                                    @if($doc->status_contra == "A")
                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                    @elseif($doc->status_contra == "R")
                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                    @else
                                    <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                    @endif
                                </td>
                                <td>
                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->contrato}}"></a>
                                </td>
                            </tr>

                            <tr>
                                <td>Pagare 
                                    @if($doc->status_pagare == "A")
                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                    @elseif($doc->status_pagare == "R")
                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                    @else
                                    <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                    @endif
                                </td>
                                <td>
                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->pagare}}"></a>
                                </td>
                            </tr>
                            @endif

                            <tr>
                                <th scope="col">No. Distribuidor {{$doc->id_tipo}}</th>
                                <th scope="col">No. Referencia  {{$doc->id}}</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif

                @foreach($vardocumentosaval as $idaval)
                 @if($idaval->Tipo=="Aval_1")
                  <div id="caja2" class="card border-0 mt-5">
                      <div class="card-header bg-gradient-pink">
                       <h6 class="fw-light">Aval</h6>
                      </div>
                      <div class="card-body bg-body">
                          <table class="table">
                              <thead>
                                <tr>
                                    <th scope="col">Concepto</th>
                                    <th scope="col">Ver</th>
                                </tr>
                              </thead>

                              <tbody class="fs-8">
                                <tr>
                                    <td>Indentificación Oficial 
                                        @if($idaval->status_ide_ofi == "A")
                                        <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                        @elseif($idaval->status_ide_ofi == "R")
                                        <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                        @else
                                        <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->identificacion_oficial}}"></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Comprobante de Domicilo 
                                        @if($idaval->status_com_dom == "A")
                                        <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                        @elseif($idaval->status_com_dom == "R")
                                        <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                        @else
                                        <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->comprobante_domicilio}}"></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Comprobante de Ingresos
                                        @if($idaval->status_com_ingre == "A")
                                        <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                        @elseif($idaval->status_com_ingre == "R")
                                        <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                        @else
                                        <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->comprobante_ingresos}}"></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Solicitud de Crédito 
                                        @if($idaval->status_sol_cre == "A")
                                        <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                        @elseif($idaval->status_sol_cre == "R")
                                        <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                        @else
                                        <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->solicitud_credito}}"></a>
                                    </td>
                                </tr>
                                <tr>
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
                                        <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->autorizacion_buro}}"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Verficación de Domicilio 
                                        @if($idaval->status_ver_dom == "A")
                                        <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                        @elseif($idaval->status_ver_dom == "R")
                                        <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                        @else
                                        <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->verificacion_domicilio}}"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Comprobante Propiedad
                                        @if($idaval->status_compro_prop == "A")
                                        <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                        @elseif($idaval->status_compro_prop == "R")
                                        <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                        @else
                                        <i class="text-primary fa-solid fa-circle-question"></i> <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$idaval->comprobante_propiedad}}"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">No. Aval {{$idaval->idaval}}</th>
                                    <th scope="col">No. Referencia {{$idaval->idreferenciaaval}}</th>
                                </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                 @endif
                 <center class="bg-body">
                   
                        @if($doc->status =='pro_rev')
                            <form action="/vales/getactualizardistribuidor/{{$doc->id_tipo}}">
                                <button  class="fa-solid fa-pen bor text-s btn border-0" title="Editar" type="submit" data-bs-toggle="tooltip" data-bs-placement="right"></button>
                                <span class="text-success fs-9 fst-italic fw-light"><i class="fa-solid fa-check"></i></span>
                            </form>
                        @elseif($doc->status =='pro_valRev')
                            <form action="/vales/getactualizarValidacion/{{$doc->id_tipo}}">
                                <button  class="fa-solid fa-pen bor text-s btn border-0" title="Editar" type="submit" data-bs-toggle="tooltip" data-bs-placement="right"></button>
                                <span class="text-success fs-9 fst-italic fw-light"><i class="fa-solid fa-check"></i></span>
                            </form>
                        @else
                            <button  class="fa-solid fa-pen bor text-s btn  border-0" type="submit" data-bs-toggle="tooltip" data-bs-placement="right" disabled></button>
                            <span class="text-danger fs-9 fst-italic fw-light"><i class="fa-solid fa-xmark"></i></span>
                        @endif
                     
                     <br/>
                </center>
            </div>
            @endforeach
            
            @endforeach
               
    </center> 
    <br/>
    <br/>   
</div>

<script src="{{ asset('js/simpleTabla.js') }}"></script>
<script src="{{ asset('js/btnBack1.js') }}"></script>
<script src="{{ asset('js/mostrarDoc.js') }}"></script>
@endsection