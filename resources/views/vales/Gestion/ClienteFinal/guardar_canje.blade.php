@extends('layouts.app')
@section('content')
{{-- ALERTAS --}}
@if ($mensaje = Session::get('validado'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Se validaron los datos correctamente","success", {buttons: false,timer: 2000});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('warning'))
  @php
          echo '<script language="success">';
          echo 'swal("¡No se a efectuado la acción!","Intente despues o pruebe con otra cosa","success", {buttons: false,timer: 3000});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('erroryausado'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Ya exixte un registor con este numero de vale","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp

  @elseif($mensaje = Session::get('errorvale'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","El folio del vale no es valido","warning", {buttons: false,timer: 5000});';
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
                    <h3 class="fw-light">Información del cliente</h3>
                </div>
                <form action="/paginaprueba" method="" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
                <div class="mb-5">
                        <div class="row">
                            <a class="col-md-3 d-none d-md-block nav-link btn btn-mar step" href="#paso1"><h6 class="pt-1 text-light"><b>1</b></h6></a>    
                            <h6 class="col-md-2 fw-light" id="paso1">Datos Validados</h6>
                        </div>


                        <div class="row mb-12">
                            <div class="col-md-2">
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4"># Distribuidor</label>
                                    <input type="text"  class="form-control" name="distribuidor" id=""  minlength="" maxlength="" value="{{$iddis}}" required />
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
                                <label class="form-label" for="form8Example4">Capital Actual</label>
                                    <input type="text"  class="form-control" name="capital" id=""  minlength="" maxlength="" value="{{$capital}}" required />
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
                                <label class="form-label" for="form8Example4">Plazos del vale</label>
                                    <input type="text"  class="form-control" name="plazos" id=""  minlength="" maxlength="" value="{{$plazos}}" required />
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
                                <label class="form-label" for="form8Example4">Folio vale</label>
                                    <input type="text"  class="form-control" name="folio" id=""  minlength="" maxlength="" value="{{$foliovale}}" required />
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                    </div>
                                </div>
                            </div>
                            <br>
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
                                    <input type="text"  class="form-control" name="nombre" id=""  minlength="" maxlength="" required />
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
                                    <input type="date"  class="form-control" name="fecha_nacimiento" id=""  minlength="" maxlength="" required />
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
                                    <input type="text"  class="form-control" name="curp" id=""  minlength="" maxlength="" required />
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
                                    <input type="text"  class="form-control" name="rfc" id=""  minlength="" maxlength="" required />
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
                                    <input type="text"  class="form-control" name="direccion" id=""  minlength="" maxlength="" required />
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
                                    <input type="text"  class="form-control" name="telefono" id=""  minlength="" maxlength="" required />
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
                                    <input type="text"  class="form-control" name="lugar_trabajo" id=""  minlength="" maxlength="" required />
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
                                    <input type="text"  class="form-control" name="telefono_trabajo" id=""  minlength="" maxlength="" required />
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
                                    <input type="text"  class="form-control" name="nombre_referencia" id=""  minlength="" maxlength="" required />
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
                                    <input type="text"  class="form-control" name="direccion_referencia" id=""  minlength="" maxlength="" required />
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
                                    <input type="text"  class="form-control" name="telefono_referencia" id=""  minlength="" maxlength="" required />
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
                                    <input type="file" id="file1" name="comprobante_ide" required>
                                </label>
                            </div>

                            <p class="fs-6 fw-bold">Vale escaneado</p>
                            <div class="row mb-5">
                                <label for="file1" class="drop-container2">
                                    <span class="drop-title2">Suelte archivos aquí</span>
                                    ó
                                    <input type="file" id="file1" name="ruta_vale_escaneado" required>
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
                @csrf
                </form>

              

<script>


</script>

<script src="{{ asset('js/btnBack1.js') }}"></script>
<script src="{{ asset('js/valera.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>


@endsection