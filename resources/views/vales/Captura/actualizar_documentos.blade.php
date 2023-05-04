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
        <form action="/vales/GestionFase1">
            <button class="btn btnBack1 btn-light border-0" type="submit"><h4><i class="fa-solid fa-layer-group"></i></h4></button>
        </form>
    </div>
</div>



    <div class="mt-4 text-center shadow p-3 mb-5 bg-body rounded spaceNavPas ">
        <div class="mt-2">
            <h5 class="fw-light">Fase 1: Captura Inicial de Crédito  <button class="btn border-0 text-secondary" id="show3" onclick="divshow3()"><i class="fa-solid fa-minus"></i></button></h5>
    
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
                                <form action="/vales/actualizar_avalup/{{$idaval}}" method="get">
                                    <button class=" btn fa-primary fw-light fs_special border-0" type="submit">Aval</button>
                                </form>
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
    <form action="/vales/actualizar_documentos/" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
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

                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <div class="form-outline">
                                      <div class="input-group">
                                          <div class="input-group-text labelInv">No. de aval</div>
                                          <input type="text"  name="aval" class="form-control inputInv" value="{{$idaval}}"  required>
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
                                            <div class="input-group-text labelInv">Documento aval</div>
                                            @foreach($avalDoc as $docuemntosAval)
                                            <input type="text"  name="avalDoc" class="form-control inputInv" value="{{$docuemntosAval->id}}"  required>
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
      
                                <div class="col-md-3">
                                  <div class="form-outline">
                                      <div class="input-group">
                                          <div class="input-group-text labelInv">No. Distribuidor</div>
                                          <input type="text"  name="id" class="form-control inputInv" value="{{$iddis}}"  required>
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
                                        <div class="input-group-text labelInv">Documento Distribuidor</div>
                                        @foreach($disDoc as $docuemntosDis)
                                        <input type="text"  name="disDoc" class="form-control inputInv" value="{{$docuemntosDis->id}}"  required>
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
                            {{-- <input class="inputInv" hidden type="text" value="{{$iddis}}" name="id">
                            @foreach($aval as $av)
                            <input class="inputInv" hidden type="text" value="{{$av->id}}" name="aval" >
                            @endforeach --}}
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
<script>
    var clic = 1;
    var show3 = document.getElementById('show3');


    function divshow3(){ 
        if(clic==1){
            document.getElementById("block3").style.height = "130px";
            show3.innerHTML = ' <i class="fa-solid fa-plus"></i>';
            $('#navbar').hide(); 
            clic = clic + 1;
        
        } 
        else{
            document.getElementById("block3").style.height = "230px";
            show3.innerHTML = '<i class="fa-solid fa-minus"></i>';
            $('#navbar').show();   
            clic = 1;
        }   
    }
</script>
@endsection