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


<div class="mt-4 text-center shadow p-3 mb-5 bg-body rounded spaceNavPas ">
    <div class="mt-2">
        <h5 class="fw-light">Fase 1: Captura Inicial de Crédito</h5>

        <div>
            <nav>
                <div class="row p-3">
                    
                    <div class="col-md-2 col-2 marginSpecial">
                        <div class="row">
                            <div class="col-md-6 col-6 border1"><h2 class="fw-light">1</h2></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Distribuidor</h5></div>
                        </div> 
                    </div>

                    <div class="col-md-2 col-2 line1"></div>

                    <div class="col-md-2 col-2">
                        <div class="row">
                            <div class="col-md-6 col-6 border2"><h2 class="fw-light">2</h2></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Aval</h5></div>
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

<div class="space_height"></div>

<div class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
        
        <div class="card p-5 cartaForm  mb-5">
            <h4 id="scrollspyHeading3" class="fw-light">3. Documentos</h4>  
            <div>      
                  <div class="row mt-2">
                    <div class="p-2">
                     
                        <div class="card mt-3">
                            <div class="card-header bg-gradient-pink">
                                Distribuidor
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
                                                <input class="file" id="my-file" type="file" name="urlpdf" required>
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
                                                <input class="file" id="my-file" type="file" name="urlpdf" required>
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
                                                <input class="file" id="my-file" type="file" name="urlpdf" required>
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
                                                <input class="file" id="my-file" type="file" name="urlpdf" required>
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
                                                <input class="file" id="my-file" type="file" name="urlpdf" required>
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
                                                <input class="file" id="my-file" type="file" name="urlpdf" required>
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
                                                <input class="file" id="my-file" type="file" name="urlpdf" required>
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
                                                <input class="file" id="my-file" type="file" name="urlpdf" required>
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
                                                <input class="file" id="my-file" type="file" name="urlpdf" required>
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
                                                <input class="file" id="my-file" type="file" name="urlpdf" required>
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
                    {{-- <button class="btn btn-outline-secondary">Abandonar</button>
                    <button class="btn btn-dark">Continuar</button> --}}

                    <a class="btn btn-outline-purple" href="/Creditos">Abandonar</a>
                    <a class="btn btn-purple" href="/Creditos">Finalizar</a>
                </div>
            </div>
        </div>


    </div>
</div>



<script>
    // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
    (function () {
      'use strict'
  
      // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
      var forms = document.querySelectorAll('.needs-validation')
      // Bucle sobre ellos y evitar el envío
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>
  <script>
    document.querySelector("html").classList.add('js');
  
      var fileInput  = document.querySelector( ".file" ),  
          button     = document.querySelector( ".file-trigger" ),
          the_return = document.querySelector(".file-return");
            
      button.addEventListener( "keydown", function( event ) {  
          if ( event.keyCode == 13 || event.keyCode == 32 ) {  
              fileInput.focus();  
          }  
      });
      button.addEventListener( "click", function( event ) {
        fileInput.focus();
        return false;
      });  
      fileInput.addEventListener( "change", function( event ) {  
          the_return.innerHTML = this.value;  
      });  
  </script>

@endsection