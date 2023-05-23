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

<!--Inicio button notificaciones Area-->
<div class="pos__btnBack" >
    <div class="wrapper"> 
      <form action="/gestionCreditos">
        <button class="btn btnBack btn-light" type="submit" ><i class="fas fa-solid fa-arrow-left"></i></button>
      </form>
    </div>
</div>

<!--Icon Area-->
<div class="pos__ico">
    <img class="ico__image" src="{{ asset('ico/valeMil.png') }}" alt="valeMil">
</div>


<!-----Principal Area----->
<div class="p__little">
  <br/>
  <br/>
    {{--------------------------- Encabezado de la pagina----------------------}}
      <div class="container">
            <div class="row mb-5 bg-p">
                <div class="col-md-4 center">
                    <h2 class="mt-3 mb-3 fw-light animate_animated animate_backInLeft mar-2">Control de valeras</h2> 
                    <cite class="mar-2" title="Título fuente">Entrega de nuevas valeras </cite>
                </div>

                <div class="col-md-6">
                    <div class="row mt-3 text-center">
                            <div class="col-md-5">
                                <button  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fa-solid fa-credit-card"></i>&nbsp; Nueva entrega de valera</button> 
                            </div>
                            <div class="col-md-3">
                                <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fa-solid fa-download"></i>&nbsp; Exportar </button> 
                            </div>
                    </div>
                </div>
            </div>
      </div> 
    
    
    {{--------------------------- Cuerpo de la tabla----------------------}}
    <center>
      <div class="bg-body border-0">
        <div class="table-responsive pad-table" id="mydatatable-container"> 
            
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('ico/diamante.png') }}" class="imgIco" alt="...">
                                </div> 
                                <p class="col-md-6 fw-light fs-9">Diamante</p>
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('ico/oro.png') }}" class="imgIco" alt="...">
                                </div> 
                                <p class="col-md-6 fw-light fs-9">Oro</p>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('ico/plata.png') }}" class="imgIco" alt="...">
                                </div> 
                                <p class="col-md-6 fw-light fs-9">Plata</p>
                            </div>
                        </div>
                     
                    </div>
                </div>
                <div class="col-md-8"></div>
            </div>
          
            <table class="table table-hover " id="tblempleados">
                <thead class="table">
                    <tr class="tr-table"> 
                        <th  class="text-center fw-light">Documentos</th>
                        <th  class="text-center fw-light">Editar</th>
                        <th class="text-center fw-light">Tipo</th>
                        <th class="text-center fw-light">Crédito</th>
                        <th class="text-center fw-light">Nombre completo</th>
                        <th class="text-center fw-light">Vales disponibles</th>
                        <th class="text-center fw-light">Fecha entrega</th>
                       
                    </tr>
                </thead>
                
                <tbody>
                
                    <tr>
                        <!-----Herramientas de la tabla---->
                        <td class="bg-0">
                            <button class="text-s btn fa-solid fa-upload bor"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"title="Subir Archivo"></button>
                        </td>

                        <td class="bg-0">
                            <form action="">
                               <button  class="fas fa-edit bor text-s btn border-0" type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Editar" ></button>
                            </form>
                        </td>

                        <td class="bg-0 text-center">
                            <center>
                                <img src="{{ asset('ico/plata.png') }}" class="imgIco" alt="...">           
                            </center>
                        </td>


                        <td class="table-light text-secondary"></td>
                        <td class="table-light text-secondary"></td>
                        <td class="table-light text-secondary"></td>
                        <td class="table-light text-secondary"></td> 
                    </tr>
        
                </tbody>
            </table>

        </div>  
      </div>
    </center> 
</div>

<!-----Modal Nueva valera----->
<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel" style="height:70vh;">
   
        <div class="offcanvas-body contenedor-light">
            <center class="row">
                <div class="col-md-12">
                    <h3 class="mt-3 mb-3 fw-light animate_animated animate_backInLeft">Entrega de nueva valera</h3> 
                </div>
            </center>

            <form action="/asignarvaleraxdistribuidor" method="" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
            @csrf
                <div class="row p-4">
                    <div class="col-md-5 d-none d-md-block">
                        <div class="row">
                            <!-----Ilustración de valera----->
                            <div id="valera"></div>
                        </div>
                    </div>

                    <!-----Formulario valera----->
                    <div class="col-md-7">
                        <div class="p-3">
                            <div class="row mb-3">

                                <div class="col">
                                <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label" for="form8Example4">Sucursal</label>
                                                   <select name="sucursal" id="sucursal">
                                                   @foreach($varobtenersucursalesxusuairo as $sucursales)
                                                   <option value="{{$sucursales->id}}">{{$sucursales->nombre}}</option>
                                                   @endforeach
                                                   </select>
                                            </div>
                                        </div>
                                </div>
                              

                            </div>
                           
                           
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-outline">
                                    <label class="form-label" for="form8Example4">Distribuidor</label>
                                        <select name="distribuidor"  id="distribuidor1" class="form-select" onkeyup="distribuidor();"  required>
                                        @foreach($var as $data)
                                            <option value="{{$data->id}}">{{$data->id}} - {{$data->nombre}}</option>
                                            @endforeach
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
                                    <label class="form-label" for="form8Example4">Fecha de entrega</label>
                                        <input type="date"  class="form-control" name="fecha" id="fecha1" onkeyup="fecha();"  minlength="" maxlength="" required />
                                        <div class="valid-feedback">
                                        ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                        Por favor, completa la información requerida.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-outline">
                                    <label class="form-label" for="form8Example4">Seleccione valera</label>
                                        <select name="valera"  placeholder="00"  id="valera1" onkeyup="valera();" class="form-select"required>
                                        @foreach($varvaleras as $valera)
                                        <option value="{{$valera->folio_valera}}"><h1>Valera #</h1> {{$valera->folio_valera}} ------ Folio Inicio {{$valera->folio_inicio}} ------- Folio Fin {{$valera->folio_fin}} </option>
                                        @endforeach
                                        </select>
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
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="text-center">
                        <!-----Formulario btn guardar----->
                    </br><button type="submit" class="btn btn-p col-md-2 col fw-light rounded-4 fs-8"><i class="fas fa-save"></i>&nbsp;&nbsp; Asignar valera</button></br></br>
                    </div>
                </div>
            </form>
        </div>

        <div class="row mb-4">
            <div class="text-center">
                <!-----Formulario btn guardar----->
                <button type="button" class="btn btn-outline-secondary rounded-5" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-chevron-up"></i></button>
            </div>
        </div>
</div>


<!-----Modal subir archivo comprobante de valera----->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height:55vh;">
    <form action="" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
        <div class="offcanvas-body contenedor-light">
            <center class="">
                <button type="button" class="btn btn-outline-secondary rounded-5 fs-8" data-bs-dismiss="offcanvas" style="width: 40px;height:40px;" aria-label="Close"><i class="fa-solid fa-chevron-down"></i></button>
            </center>
            <center class="row">
                <div class="col-md-12">
                    <h4 class="mt-3 mb-3 fw-light animate_animated animate_backInLeft">Subir compobante de entrga</h4> 
                </div>
            </center>

                <!-----Formulario valera----->
                <div class="row p-3">
                    <div class="row mb-3">
                        <label for="file1" class="drop-container">
                            <span class="drop-title">Suelte archivos aquí</span>
                            ó
                            <input type="file" id="file1" required>
                        </label>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-p col-md-2 col fw-light rounded-5 fs-8"><i class="fas fa-upload"></i>&nbsp;&nbsp; Subir</button></br></br>
                    </div>
                </div>
        </div> 
    </form>  
</div>

<script src="{{ asset('js/simpleTabla.js') }}"></script>
<script src="{{ asset('js/valeraEntrega.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>



@endsection