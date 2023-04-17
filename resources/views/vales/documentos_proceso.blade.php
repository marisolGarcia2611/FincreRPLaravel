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


<div id="documentacion"></div>

<div class="space_height" id="block3"></div>

<div class="container">
    <form action="/vales/Guardar_archivos_termina_proceso" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
    @csrf
        <div class="card p-5 cartaForm  mb-5">
            <h4 id="scrollspyHeading3" class="fw-light">3. Documentos</h4>  
            <div>      
                  <div class="row mt-2">
                    <div class="p-2">
                     
                        <div class="card mt-3">
                            <div class="card-header bg-gradient-pink">
                                Distribuidor
                            </div>
                            <input type="text" value="{{$iddis}}" name="id">
                            @foreach($aval as $av)
                            <input type="text" value="{{$av->id}}" name="aval" >
                            @endforeach
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Concepto</th>
                                        <th scope="col">Importar Documento</th>
                                    </tr>
                                    </thead>
                                    <tbody class="fs-8">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Indentificación Oficial</td>
                                        <td>
                                            <div>
                                                <div class="file-container text-center">  
                                                <input class="file" id="my-file" type="file" name="identificacion_oficial" multiple required>
                                                <div class="valid-feedback fs-8">
                                                 ¡Se ve bien!
                                                </div>
                                                <div class="invalid-feedback fs-8">
                                                 ¡Por favor, sube la foto de perfil!
                                                </div>
                                                    <label for="my-file"name="my-file" class="file-trigger text-light"><h5><i class="fas fa-file-upload"></i></h></label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Comprobante de Domicilo</td>
                                        <td>
                                            <div>
                                                <div class="file-container text-center">  
                                                <input class="file" id="my-file" type="file" name="comporbante_domicilio" required>
                                                <div class="valid-feedback fs-8">
                                                 ¡Se ve bien!
                                                </div>
                                                <div class="invalid-feedback fs-8">
                                                 ¡Por favor, sube la foto de perfil!
                                                </div>
                                                    <label for="my-file"name="my-file2" class="file-trigger text-light"><h5><i class="fas fa-file-upload"></i></h></label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Comprobante de Ingresos</td>
                                        <td>
                                            <div>
                                                <div class="file-container text-center">  
                                                <input class="file" id="my-file" type="file" name="comporbante_ingreso" required>
                                                <div class="valid-feedback fs-8">
                                                 ¡Se ve bien!
                                                </div>
                                                <div class="invalid-feedback fs-8">
                                                 ¡Por favor, sube la foto de perfil!
                                                </div>
                                                    <label for="my-file"name="my-file2" class="file-trigger text-light"><h5><i class="fas fa-file-upload"></i></h></label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Solicitud de Crédito</td>
                                        <td>
                                            <div>
                                                <div class="file-container text-center">  
                                                <input class="file" id="my-file" type="file" name="solicitud_credito" required>
                                                <div class="valid-feedback fs-8">
                                                 ¡Se ve bien!
                                                </div>
                                                <div class="invalid-feedback fs-8">
                                                 ¡Por favor, sube la foto de perfil!
                                                </div>
                                                    <label for="my-file"name="my-file" class="file-trigger text-light"><h5><i class="fas fa-file-upload"></i></h></label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Autorización de Consulta de Buro</td>
                                        <td>
                                            <div>
                                                <div class="file-container text-center">  
                                                <input class="file" id="my-file" type="file" name="autorizacion_buro" required>
                                                <div class="valid-feedback fs-8">
                                                 ¡Se ve bien!
                                                </div>
                                                <div class="invalid-feedback fs-8">
                                                 ¡Por favor, sube la foto de perfil!
                                                </div>
                                                    <label for="my-file"name="my-file" class="file-trigger text-light"><h5><i class="fas fa-file-upload"></i></h></label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Vreficación de Domicilio</td>
                                        <td>
                                            <div>
                                                <div class="file-container text-center">  
                                                <input class="file" id="my-file" type="file" name="veri_domicilio" required>
                                                <div class="valid-feedback fs-8">
                                                 ¡Se ve bien!
                                                </div>
                                                <div class="invalid-feedback fs-8">
                                                 ¡Por favor, sube la foto de perfil!
                                                </div>
                                                    <label for="my-file"name="my-file" class="file-trigger text-light"><h5><i class="fas fa-file-upload"></i></h></label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
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
                                        <th scope="col">Importar Documento</th>
                                    </tr>
                                    </thead>
                                    <tbody class="fs-8">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Indentificación Oficial</td>
                                        <td>
                                            <div>
                                                <div class="file-container text-center">  
                                                <input class="file" id="my-file" type="file" name="idetificacion_ofi_aval" required>
                                                <div class="valid-feedback fs-8">
                                                 ¡Se ve bien!
                                                </div>
                                                <div class="invalid-feedback fs-8">
                                                 ¡Por favor, sube la foto de perfil!
                                                </div>
                                                    <label for="my-file"name="my-file" class="file-trigger text-light"><h5><i class="fas fa-file-upload"></i></h></label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Comprobante de Domicilo</td>
                                        <td>
                                            <div>
                                                <div class="file-container text-center">  
                                                <input class="file" id="my-file" type="file" name="comporbante_aval" required>
                                                <div class="valid-feedback fs-8">
                                                 ¡Se ve bien!
                                                </div>
                                                <div class="invalid-feedback fs-8">
                                                 ¡Por favor, sube la foto de perfil!
                                                </div>
                                                    <label for="my-file"name="my-file" class="file-trigger text-light"><h5><i class="fas fa-file-upload"></i></h></label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Comprobante de Ingresos Aval</td>
                                        <td>
                                            <div>
                                                <div class="file-container text-center">  
                                                <input class="file" id="my-file" type="file" name="comporbante_ingreso_aval" required>
                                                <div class="valid-feedback fs-8">
                                                 ¡Se ve bien!
                                                </div>
                                                <div class="invalid-feedback fs-8">
                                                 ¡Por favor, sube la foto de perfil!
                                                </div>
                                                    <label for="my-file"name="my-file" class="file-trigger text-light"><h5><i class="fas fa-file-upload"></i></h></label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Solicitud de Crédito</td>
                                        <td>
                                            <div>
                                                <div class="file-container text-center">  
                                                <input class="file" id="my-file" type="file" name="soli_credito_aval" required>
                                                <div class="valid-feedback fs-8">
                                                 ¡Se ve bien!
                                                </div>
                                                <div class="invalid-feedback fs-8">
                                                 ¡Por favor, sube la foto de perfil!
                                                </div>
                                                    <label for="my-file"name="my-file" class="file-trigger text-light"><h5><i class="fas fa-file-upload"></i></h></label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Autorización de Consulta de Buro</td>
                                        <td>
                                            <div>
                                                <div class="file-container text-center">  
                                                <input class="file" id="my-file" type="file" name="consulta_buro_aval" required>
                                                <div class="valid-feedback fs-8">
                                                 ¡Se ve bien!
                                                </div>
                                                <div class="invalid-feedback fs-8">
                                                 ¡Por favor, sube la foto de perfil!
                                                </div>
                                                    <label for="my-file"name="my-file" class="file-trigger text-light"><h5><i class="fas fa-file-upload"></i></h></label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Vreficación de Domicilio</td>
                                        <td>
                                            <div>
                                                <div class="file-container text-center">  
                                                <input class="file" id="my-file" type="file" name="veri_domi_aval" required>
                                                <div class="valid-feedback fs-8">
                                                 ¡Se ve bien!
                                                </div>
                                                <div class="invalid-feedback fs-8">
                                                 ¡Por favor, sube la foto de perfil!
                                                </div>
                                                    <label for="my-file"name="my-file" class="file-trigger text-light"><h5><i class="fas fa-file-upload"></i></h></label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="txtcenter">Recuerde que solo se admite el formato ".pdf"</p> 
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>


        <div class="mb-5">
            <div class="text-center">
                <div class="btn-group">
                <br>
            <br>
                     <button class="btn btn-outline-secondary">Abandonar</button>
                    <button class="btn btn-dark">Continuar</button> 

                 
                </div>
            </div>
        </div>


    </div>
</div>

<script src="{{ asset('js/F1Documentos.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
@endsection