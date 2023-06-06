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
            <form action="/vales/GestionFase2">
                <button class="btn btnBack1 btn-light border-0" type="submit"><h4><i class="fa-solid fa-arrow-left"></i></h4></button>
            </form>
    </div>
</div>
<div class="pos__ico">
    <img class="ico__image" src="{{ asset('ico/valeMil.png') }}" alt="valeMil">
</div>

<div class="mt-4 text-center shadow p-3 mb-5 bg-body rounded spaceNavPas ">
    <div class="mt-2">
        <h5 class="fw-light">Fase 2: Proceso de validación   <button class="btn border-0 text-secondary" id="show3" onclick="divshow3()"><i class="fa-solid fa-minus"></i></button></h5>

        <div>
            <nav id="navbar">
                <div class="row p-3">
                    <div class="col-md-5 col-5">
                        <div class="row">
                            <div class="col-md-6 col-6 circle4"><h5 class="fw-light"><i class="fa-solid fa-book"></i></h5></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Documentos de Validación</h5></div>
                        </div> 
                    </div>
                    
                </div>
            </nav>
        </div>

    </div>
</div>
    

<div class="space_height" id="block3"></div>

<div class="container">
    <form action="/vales/validacioActualizarDocumentos/" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
    @csrf
        <div class="card p-5 cartaForm  mb-5">
            <div>      
                  <div class="row">
                    <div class="p-2">
                        <div class="card mt-1">
                            <div class="card-header bg-gradient-pink">
                              Distribuidor
                            </div>

                            <div class="row mt-3">
                       
      
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
   
                             <div class="col-md-2">
                                <div class="form-outline">
                                    <div class="input-group">
                                        @foreach($disDoc as $docuemntosDis)
                                            <input type="text"  name="disDoc"  class="form-control inputInv" value="{{$docuemntosDis->id}}" required>
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
                                                <td>Contrato
                                                    @if($doc->status_contra == "A")
                                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                    @elseif($doc->status_contra == "R")
                                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                    @else
                                                    <i class="text-primary fa-solid fa-circle-question"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->contrato}}"></a>  
                                                </td>
                                                <td>
                                                    @if($doc->status_contra == "R")
                                                        <label for="file" class="drop-container">  
                                                            <input  type="file" name="contrato" id="contrato">                               
                                                        </label>
                                                    @elseif($doc->status_contra == "A")
                                                        <span class="text-secondary fst-italic">Documento Aprobado</span>
                                                    @else
                                                        <span class="text-secondary fst-italic"> (Espere retroalimentación)</span>
                                                    @endif
                                                </td>
                                            </tr>


                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Pagaré
                                                    @if($doc->status_pagare == "A")
                                                    <i class="text-success fs-10 fa-solid fa-circle-check"></i>
                                                    @elseif($doc->status_pagare == "R")
                                                    <i class="text-danger fs-10 fa-solid fa-circle-xmark"></i>
                                                    @else
                                                    <i class="text-primary fa-solid fa-circle-question"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->pagare}}"></a>
                                                </td>
                                                <td>
                                                    @if($doc->status_pagare == "R")
                                                        <label for="file" class="drop-container">  
                                                            <input  type="file" name="pagare" id="file" >
                                                        </label>
                                                    @elseif($doc->status_pagare == "A")
                                                        <span class="text-secondary fst-italic">Documento Aprobado</span>
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