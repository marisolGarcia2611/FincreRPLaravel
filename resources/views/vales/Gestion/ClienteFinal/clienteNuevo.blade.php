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


<div id="btnBack"></div>  


<!-----Principal Area----->
<div class="mt-4 p__little">
    <br/>
    <br/>
    <center class="container mt-1">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="offcanvas-body text-start">
            <div class="container p-5">
                <div class="row text-center">
                    <h3 class="fw-light">Canje de vale</h3>
                </div>
                <form action="" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
                    {{-- Datos de capital --}}
                    <div class="mb-4">
                        <div class="row">
                            <a class="col-md-3 d-none d-md-block nav-link btn btn-mar step" href="#paso1"><h6 class="pt-1 text-light"><b>1</b></h6></a>    
                            <h6 class="col-md-2 fw-light">Capital</h6>
                        </div>

                        <!-----validación  Area----->
                        <div class="row mb-5">
                            <div class="row">
                                <div class="col-md-7">
                                    <!-----valera Area----->
                                    <center class="row p-3">
                                        <div id="valera"></div>
                                    </center>

                                    <center class="row">
                                        <button class="btn border-0 text-secondary"><h6><i class="fa-solid fa-eye"></i> &nbsp; Comprobar firma</6></button>
                                    </center>
                                </div>

                                <div class="col-md-5">
                            
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label" for="form8Example4">No. Distribuidor</label>
                                                    <input type="text" placeholder="##" class="form-control" name=""  minlength="" maxlength="" id="distribuidor1" onkeyup="distribuidor();" required />
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
                                                <label class="form-label" for="form8Example4">Capital</label>
                                                    <input type="text" placeholder="00.00" class="form-control" name="" minlength="" maxlength="" id="capital1" onkeyup="capital();" required />
                                                    <div class="valid-feedback">
                                                    ¡Se ve bien!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    Por favor, completa la información requerida.
                                                    </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label" for="form8Example4">Plazos</label>
                                                    <input type="text" placeholder="00"  class="form-control" name=""  minlength="" maxlength="" id="plazo1" onkeyup="plazo();" required />
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
                                                <label class="form-label" for="form8Example4">Folio de vale</label>
                                                    <input type="text" placeholder="##" class="form-control" name=""  minlength="" maxlength="" id="folio1" onkeyup="folio();" required />
                                                    <div class="valid-feedback">
                                                    ¡Se ve bien!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    Por favor, completa la información requerida.
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="wr mt-3">
                                            <button type="button" class="slide_from_left"><h2><i class="fa-brands imgr fa-slack"></i></h2><p class="mt-d8">Validar</p> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>

                    {{-- Datos generales --}}
                    <div class="mb-5">
                        <div class="row">
                            <a class="col-md-3 d-none d-md-block nav-link btn btn-mar step" href="#paso1"><h6 class="pt-1 text-light"><b>2</b></h6></a>    
                            <h6 class="col-md-2 fw-light" id="paso1">Datos Generales</h6>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-8">
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">Nombre completo</label>
                                    <input type="text"  class="form-control" name="" id=""  minlength="" maxlength="" required />
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
                                <label class="form-label" for="form8Example4">Fecha de nacimineto</label>
                                    <input type="date"  class="form-control" name="" id=""  minlength="" maxlength="" required />
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">CURP</label>
                                    <input type="text"  class="form-control" name="" id=""  minlength="" maxlength="" required />
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
                                    <input type="text"  class="form-control" name="" id=""  minlength="" maxlength="" required />
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">Dirección</label>
                                    <input type="text"  class="form-control" name="" id=""  minlength="" maxlength="" required />
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
                                    <input type="text"  class="form-control" name="" id=""  minlength="" maxlength="" required />
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-8">
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">Lugar de trabajo</label>
                                    <input type="text"  class="form-control" name="" id=""  minlength="" maxlength="" required />
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
                                <label class="form-label" for="form8Example4">Telefono de trabajo</label>
                                    <input type="text"  class="form-control" name="" id=""  minlength="" maxlength="" required />
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">Nombre completo de referencia</label>
                                    <input type="text"  class="form-control" name="" id=""  minlength="" maxlength="" required />
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
                                <label class="form-label" for="form8Example4">Dirección de referencia</label>
                                    <input type="text"  class="form-control" name="" id=""  minlength="" maxlength="" required />
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
                                <label class="form-label" for="form8Example4">Telefono de referencia</label>
                                    <input type="text"  class="form-control" name="" id=""  minlength="" maxlength="" required />
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

                    {{-- Docuemntación --}}
                    <div>
                        <div class="row">
                            <a class="col-md-3 d-none d-md-block nav-link btn btn-mar step" href="#paso1"><h6 class="pt-1 text-light"><b>3</b></h6></a>    
                            <h6 class="col-md-2 fw-light">Subir documentación</h6>
                        </div>

                        <div class="row p-3">
                            <p class="fs-6 fw-bold">Comprobante de indentidad (INE)</p>
                            <div class="row mb-3">
                                <label for="file1" class="drop-container2">
                                    <span class="drop-title2">Suelte archivos aquí</span>
                                    ó
                                    <input type="file" id="file1" required>
                                </label>
                            </div>

                            <p class="fs-6 fw-bold">Vale escaneado</p>
                            <div class="row mb-5">
                                <label for="file1" class="drop-container2">
                                    <span class="drop-title2">Suelte archivos aquí</span>
                                    ó
                                    <input type="file" id="file1" required>
                                </label>
                            </div>                          
                        </div>
                    </div>

                    <div class="mb-4 text-center">
                        <button type="submit" class="btn btn-blue col-md-2 col fw-light rounded-5 fs-6_5"><i class="fas fa-save"></i>&nbsp;&nbsp; Terminar canje</button></br></br>
                    </div>
                </form>
            </div>
        </div>   
    </center>
    <br/>
</div>



<script src="{{ asset('js/btnBack1.js') }}"></script>
<script src="{{ asset('js/valera.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>


@endsection