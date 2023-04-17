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
                                <p>Datos Generales</p>
                                <p class="fs-8 fw-light">
                                    <br/><b class="fw-bold">Sucursal: </b>{{$datos->id_distribuidor}}
                                    <br/><b class="fw-bold">Promotor Encargado: </b> {{$datos->distribuidor_idpromotor}}
                                    <br/><b class="fw-bold">Nombre Completo: </b>{{$datos->nombre}}
                                    <br/><b class="fw-bold">Edad:</b>30 años
                                    <br/><b class="fw-bold">Sexo: </b> {{$datos->distribuidor_sexo}}
                                    <br/><b class="fw-bold">Estado Civil: {{$datos->distribuidor_estado_civil}}
                                    <br/><b class="fw-bold">Fecha de Nacimiento: {{$datos->distribuidor_fecha}}
                                    <br/><b class="fw-bold">CURP: </b> {{$datos->distribuidor_curp}}
                                    <br/><b class="fw-bold">RFC: </b> {{$datos->distribuidor_rfc}}
                                    <br/><b class="fw-bold">Telefono: </b>{{$datos->distribuidor_telefono}}
                                    <br/><b class="fw-bold">Estado: </b> {{$datos->distribuidor_estado_civil}}
                                    <br/><b class="fw-bold">Ciudad: </b> {{$datos->distribuidor_idciudad}}
                                    <br/><b class="fw-bold">Dirección: </b> {{$datos->distribuidor_calle}}
                                    <br/><b class="fw-bold"> Actividad Economica: </b> {{$datos->distribuidor_direccion_empresa}}
                                </p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="text-start p-5 carrusel_text">
                                <p>Conyuge</p>
                                <p class="fs-8 fw-light">
                                    <br/><b class="fw-bold">Nombre Completo: {{$datos->nombrec}}
                                    <br/><b class="fw-bold">Sexo: </b> {{$datos->coyu_sexo}}
                                    <br/><b class="fw-bold">Fecha de Nacimiento: </b> {{$datos->conyu_fecha_nacimiento}}
                                    <br/><b class="fw-bold">CURP: </b>{{$datos->conyu_curp}}
                                    <br/><b class="fw-bold">RFC: </b> {{$datos->conyu_rfc}}
                                    <br/><b class="fw-bold">Telefono: </b>{{$datos->nombrec}}
                                    <br/><b class="fw-bold"> Actividad Economica: </b> {{$datos->conyu_lugar_empleo}}
                                </p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="text-start p-5 carrusel_text">
                                <p>Referencias</p>
                                <p class="fs-8 fw-light">
                                    <br/><b class="fw-bold">Nombre Completo: {{$datos->conyu_lugar_empleo}}
                                    <br/><b class="fw-bold">Sexo: </b> {{$datos->refe_sexo}}
                                    <br/><b class="fw-bold">Fecha de Nacimiento: </b>{{$datos->refe_fecha_nacimiento}}
                                    <br/><b class="fw-bold">CURP: </b>{{$datos->refe_curp}}
                                    <br/><b class="fw-bold">RFC: </b> {{$datos->refe_rfc}}
                                    <br/><b class="fw-bold">Telefono: </b> {{$datos->refe_telefono}}
                                    <br/><b class="fw-bold">colonoa : </b>  {{$datos->refe_colonia}}
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
                </div>
                <hr/>
                @endforeach
                <!------Area Aval----->
                <div class="mt-4">
                    <p class="fw-bold bg-encabezado text-light">Aval</p>
                    
                    <div class="text-start mt-2 carrusel_text">
                        <p>Datos Generales</p>
                        @foreach($veraval as $datosa)
                        <p class="fs-8 fw-light">
                            <br/><b class="fw-bold">Nombre: </b> {{$datosa->nombrea}}
                            <br/><b class="fw-bold">Edad: </b>30 años
                            <br/><b class="fw-bold">Sexo: </b>  {{$datosa->sexo}}
                            <br/><b class="fw-bold">Estado Civil: </b>  {{$datosa->estado_civil}}
                            <br/><b class="fw-bold">Fecha de Nacimiento: </b>  {{$datosa->fecha_nacimiento}}
                            <br/><b class="fw-bold">CURP: </b>  {{$datosa->curp}}
                            <br/><b class="fw-bold">RFC: </b>  {{$datosa->rfc}}
                            <br/><b class="fw-bold">Telefono: </b>  {{$datosa->telefono}}
                            <br/><b class="fw-bold">Colonia: </b> {{$datosa->colonia}}
                            <br/><b class="fw-bold">Ciudad: </b>  {{$datosa->idciudad}}
                            <br/><b class="fw-bold">Dirección: </b>  {{$datosa->direccion_empresa}}
                            <br/><b class="fw-bold"> Actividad Economica: </b>  {{$datosa->lugar_empleo}}
                        </p>
                        @endforeach
                    </div>     
                </div>
                <hr/>
                <!------Area Documentacion----->
                <div class="mt-4">
                    <p class="fw-bold bg-encabezado text-light">Documentación</p>

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
                
                    <div id="caja1" class="text-start">
                        <div class="card rounded-5 mt-3">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">#1</th>
                                            <th scope="col">Concepto</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-8">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Indentificación Oficial</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2 d-none d-md-block"></div>
                                                    <div class="col-md-2">
                                                        <button class="text-secondary fa-solid fa-eye btn border-0"></button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="identificacionDis" id="s-identificacionDis" autocomplete="off">
                                                        <label class="btn btn-outline-success fs-9" for="s-identificacionDis">Autorizado</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="identificacionDis" id="d-identificacionDis" autocomplete="off">
                                                        <label class="btn btn-outline-danger fs-9" for="d-identificacionDis">Rechazado</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Comprobante de Domicilo</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2 d-none d-md-block"></div>
                                                    <div class="col-md-2">
                                                        <button class="text-secondary fa-solid fa-eye btn border-0"></button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioDis" id="s-comprobanteDomicilioDis" autocomplete="off">
                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteDomicilioDis">Autorizado</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioDis" id="d-comprobanteDomicilioDis" autocomplete="off">
                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteDomicilioDis">Rechazado</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Solicitud de Crédito</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2 d-none d-md-block"></div>
                                                    <div class="col-md-2">
                                                        <button class="text-secondary fa-solid fa-eye btn border-0"></button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="solicitudCreditoDis" id="s-solicitudCreditoDis" autocomplete="off">
                                                        <label class="btn btn-outline-success fs-9" for="s-solicitudCreditoDis">Autorizado</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="solicitudCreditoDis" id="d-solicitudCreditoDis" autocomplete="off">
                                                        <label class="btn btn-outline-danger fs-9" for="d-solicitudCreditoDis">Rechazado</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Autorización de Consulta de Buro</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2 d-none d-md-block"></div>
                                                    <div class="col-md-2">
                                                        <button class="text-secondary fa-solid fa-eye btn border-0"></button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="consultaBuroDis" id="s-consultaBuroDis" autocomplete="off">
                                                        <label class="btn btn-outline-success fs-9" for="s-consultaBuroDis">Autorizado</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="consultaBuroDis" id="d-consultaBuroDis" autocomplete="off">
                                                        <label class="btn btn-outline-danger fs-9" for="d-consultaBuroDis">Rechazado</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Vreficación de Domicilio</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2 d-none d-md-block"></div>
                                                    <div class="col-md-2">
                                                        <button class="text-secondary fa-solid fa-eye btn border-0"></button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="verificacionDomicilioDis" id="s-verificacionDomicilioDis" autocomplete="off">
                                                        <label class="btn btn-outline-success fs-9" for="s-verificacionDomicilioDis">Autorizado</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="verificacionDomicilioDis" id="d-verificacionDomicilioDis" autocomplete="off">
                                                        <label class="btn btn-outline-danger fs-9" for="d-verificacionDomicilioDis">Rechazado</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="txtcenter fs-9">Recuerde que solo se admite el formato ".pdf"</p> 
                            </div>
                        </div>
                    </div>
                    <div id="caja2" class="text-start">
                        <div class="card rounded-5 mt-3">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">#2</th>
                                            <th scope="col">Concepto</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-8">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Indentificación Oficial</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2 d-none d-md-block"></div>
                                                    <div class="col-md-2">
                                                        <button class="text-secondary fa-solid fa-eye btn border-0"></button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="identificacioAval" id="s-identificacioAval" autocomplete="off">
                                                        <label class="btn btn-outline-success fs-9" for="s-identificacioAval">Autorizado</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="identificacioAval" id="d-identificacioAval" autocomplete="off">
                                                        <label class="btn btn-outline-danger fs-9" for="d-identificacioAval">Rechazado</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Comprobante de Domicilo</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2 d-none d-md-block"></div>
                                                    <div class="col-md-2">
                                                        <button class="text-secondary fa-solid fa-eye btn border-0"></button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioAval" id="s-comprobanteDomicilioAval" autocomplete="off">
                                                        <label class="btn btn-outline-success fs-9" for="s-comprobanteDomicilioAval">Autorizado</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="comprobanteDomicilioAval" id="d-comprobanteDomicilioAval" autocomplete="off">
                                                        <label class="btn btn-outline-danger fs-9" for="d-comprobanteDomicilioAval">Rechazado</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Solicitud de Crédito</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2 d-none d-md-block"></div>
                                                    <div class="col-md-2">
                                                        <button class="text-secondary fa-solid fa-eye btn border-0"></button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="solicitudCreditoAval" id="s-solicitudCreditoAval" autocomplete="off">
                                                        <label class="btn btn-outline-success fs-9" for="s-solicitudCreditoAval">Autorizado</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="solicitudCreditoAval" id="d-solicitudCreditoAval" autocomplete="off">
                                                        <label class="btn btn-outline-danger fs-9" for="d-solicitudCreditoAval">Rechazado</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Autorización de Consulta de Buro</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2 d-none d-md-block"></div>
                                                    <div class="col-md-2">
                                                        <button class="text-secondary fa-solid fa-eye btn border-0"></button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="consultaBuroAval" id="s-consultaBuroAval" autocomplete="off">
                                                        <label class="btn btn-outline-success fs-9" for="s-consultaBuroAval">Autorizado</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="consultaBuroAval" id="d-consultaBuroAval" autocomplete="off">
                                                        <label class="btn btn-outline-danger fs-9" for="d-consultaBuroAval">Rechazado</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Vreficación de Domicilio</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2 d-none d-md-block"></div>
                                                    <div class="col-md-2">
                                                        <button class="text-secondary fa-solid fa-eye btn border-0"></button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="verificacioDomicilioAval" id="s-verificacioDomicilioAval" autocomplete="off">
                                                        <label class="btn btn-outline-success fs-9" for="s-verificacioDomicilioAval">Autorizado</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="radio" class="btn-check" name="verificacioDomicilioAval" id="d-verificacioDomicilioAval" autocomplete="off">
                                                        <label class="btn btn-outline-danger fs-9" for="d-verificacioDomicilioAval">Rechazado</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="txtcenter fs-9">Recuerde que solo se admite el formato ".pdf"</p> 
                            </div>
                        </div>
                    </div>
                </div>


                <!------Area Botones de status----->
                <div class="mt-4 mb-3">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-danger fontResponsive"><i class="fa-solid fa-xmark"></i> Rechzado</button>
                        <button type="button" class="btn btn-outline-success fontResponsive"><i class="fa-solid fa-check"></i> Aprobado</button>
                        <button type="button" class="btn btn-turquesa fontResponsive">Guardar Observaciones</button>
                      </div>
                </div>

            </div>
        </div>


        <!------Area Historial----->
        <div class="col-md-3 col-12 shadow p-3 bg-body rounded pos_histrial">
            <div>
                    <div class="text-center" style="margin-top:50px;">
                        <h5 class="offcanvas-title fw-light" id="offcanvasRightLabel">Historial</h5>
                    </div>
                    <div id="historial"></div>

            </div>

            <div class="btn_Edicion">
                <form action="/vales/GestionFase2/EditarDistribuidor">
                    <button class="btn border-0 fw-ligh text-light fw-bold push" type="submit">Habilitar edición</button>
                </form>
            
            </div>
        </div>

        <div id="chat"></div>
    </div>
</center>


<script src="{{ asset('js/chat.js') }}"></script>
<script src="{{ asset('js/btnBack1.js') }}"></script>
<script src="{{ asset('js/Historial.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/simpleTabla.js') }}"></script>
<script>
    $(document).ready(function() { 
        $('#caja1').hide();
        $('#caja2').hide();
    });
</script>
<script>
        var clic1 = 1;
        var uno1 = document.getElementById('boton1');
    
    
        function divLogin1(){ 
        if(clic1==1){
            
            document.getElementById("caja1").style.height = "100%";
            $('#caja1').show(); 
            uno1.innerHTML = '<div class="row bord"><h1 class="iconSolicitud1 d-none d-md-block"><i class="fa-solid fa-person-circle-plus"></i></h1><h6 class="fw-bold fs_special20">Distribuidor </h6></div>';
            $('#caja2').hide(); 
            uno2.innerHTML = '<div class="row bord1"> <h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-id-badge"></i></h1><h6 class="fw-light fs_special2">Aval</h6></div>';  
            clic1 = clic1 + 1;
        } 
        else{
            document.getElementById("caja1").style.height = "0px"; 
            $('#caja1').hide();   
            uno1.innerHTML ='<div class="row bord1"><h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-person-circle-plus"></i></h1><h6 class="fw-light fs_special2">Distribuidor </h6></div>';  
            clic1 = 1;
        }   
        }
        var clic2 = 1;
        var uno2 = document.getElementById('boton2');

        function divLogin2(){ 
        if(clic2==1){
            
            document.getElementById("caja2").style.height = "100%";
            $('#caja2').show();
            uno2.innerHTML = '  <div class="row bord"><h1 class="iconSolicitud1 d-none d-md-block"><i class="fa-solid fa-id-badge"></i></h1><h6 class="fw-bold fs_special20">Aval</h6></div>';
            $('#caja1').hide(); 
            uno1.innerHTML = '  <div class="row bord1"><h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-person-circle-plus"></i></h1><h6 class="fw-light fs_special2">Distribuidor </h6></div>'; 
            clic2 = clic2 + 1;
        } 
        else{
            document.getElementById("caja2").style.height = "0px"; 
            $('#caja2').hide();   
            uno2.innerHTML = '<div class="row bord1"> <h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-id-badge"></i></h1><h6 class="fw-light fs_special2">Aval</h6></div>';  
            clic2 = 1;
        }   
        }

</script>
@endsection