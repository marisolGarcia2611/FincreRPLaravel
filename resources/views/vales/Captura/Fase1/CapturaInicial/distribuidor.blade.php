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

@endif

<div id="EncabezadoDis"></div>

<div class="space_height" id="block"></div>


<div class="container">
    <form action="/vales/insertardistribuidor" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
     @csrf
        <div class="card p-5 cartaForm mb-5">
          <h4 id="scrollspyHeading1" class="fw-light">1. Distribuidor</h4> 

          <div class="row">
            <div class="col-md-4 col-4 text-center mt-2">
                <h1 class="iconBlue d-none d-md-block"><i class="fa-solid fa-file-invoice"></i></h1>
                <div id="boton1" class="btn push bg-gradient-pink m-0 p-1 sizeItem" onclick="divLogin1()">
                    <div class="row">
                        <h6 class="col-md-6 col-12 fw-light fs_special2">Datos Generales &nbsp;&nbsp; </h6>
                       <h6 class="col-md-6 col-12 text-right mr_15 mt_20"><i class="fa-solid fa-chevron-down"></i></h6>
                    </div>
                </div> 
            </div>

            <div class="col-md-4 col-4 text-center mt-2" id="etiqueta2">
                <h1 class="iconBlue d-none d-md-block"><i class="fa-solid fa-person-circle-plus"></i></h1>
                <div id="boton2" class="btn push bg-gradient-pink m-0 p-1 sizeItem" onclick="divLogin2()">
                    <div class="row">
                        <h6 class="col-md-6 col-12 fw-light fs_special2">Conyuge &nbsp;&nbsp; </h6>
                       <h6 class="col-md-6 col-12 text-right mr_15"><i class="fa-solid fa-chevron-down"></i></h6>
                    </div>
                </div> 
            </div>
            
            
            <div class="col-md-4 col-4 text-center mt-2">
                <h1 class="iconBlue d-none d-md-block"><i class="fa-solid fa-id-badge"></i></h1>
                <div id="boton3" class="btn push bg-gradient-pink m-0 p-1 sizeItem" onclick="divLogin3()">
                    <div class="row">
                        <h6 class="col-md-6 col-12 fw-light fs_special2">Referencias &nbsp;&nbsp; </h6>
                       <h6 class="col-md-6 col-12 text-right mr_15 mt_8"><i class="fa-solid fa-chevron-down"></i></h6>
                    </div>
                </div> 
            </div>
          </div>

          
            <div id="caja1">
                    <div class=" mt-4">
                        <h5 class="fw-light"> <b class="cicle_Blue">1.1</b> Datos Generales</h5>
                    </div>
            
                    <div class="row mt-4">
                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Sucursal</label>
                            <select class="form-select" name="sucursal" id="sucursal" required>
                                <option value="">Seleccionar...</option>
                                @foreach($varsucursales as $sucursal)
                                <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Promotor Encargado</label>
                              <select class="form-select" name="promotor" id="promotor" required>
                                <option value="">Seleccionar...</option>
                                @foreach($varpromotores as $promotor)
                                <option value="{{$promotor->id}}">{{$promotor->Nombre}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div> 
                        
                        <div class="col-md-3">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Tipo Distribuidor</label>
                               <select class="form-select" name="tipo_distribuidor" id="tipo_distribuidor"  onchange="tipo_dis(this.value)" required>
                                <option value="">Seleccionar...</option>
                                @foreach($vartipodis as $tipod)
                                <option value="{{$tipod->id}}">{{$tipod->nombre}}</option>
                                @endforeach
                               </select>
                            </div>
                        </div>
                        
                        <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form8Example4">Capital Solicitado</label>
                                    <input type="number"  class="form-control" name="capital" id="capital"   maxlength="10" placeholder="00.00" required />
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                    </div>
                                </div>
                        </div>     
 
                    </div>

                    <div class="row mt-3">
              
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Primer Nombre</label>
                                <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre"    minlength="3" maxlength="15" onKeyUp="mayus()" required />
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
                            <label class="form-label" for="form8Example4">Segundo Nombre</label>
                                <input type="text"  class="form-control" name="segundo_nombre" id="segundo_nombre" maxlength="15" />
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
                            <label class="form-label" for="form8Example4">Apellido Parterno</label>
                                <input type="text"  class="form-control" name="apellido_paterno" id="apellido_paterno"   minlength="3" maxlength="15" required />
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
                            <label class="form-label" for="form8Example4">Apellido Materno</label>
                                <input type="text"  class="form-control" name="apellido_materno" id="apellido_materno"  minlength="3" maxlength="15" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Estado Civil</label>
                                <select class="form-select" name="estado_civil" id="estado_civil" onchange="tipo_dis(this.value)" required>
                                    <option value="">Seleccionar...</option>
                                    <option value="SOLTERO">Soltero</option>
                                    <option value="CASADO">Casado</option>
                                    <option value="UNION_LIBRE">Unión Libre</option>
                                </select>
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
                            <label class="form-label" for="form8Example4">Sexo</label>
                                <select class="form-select" name="sexo" id="sexo" required>
                                    <option value="">Seleccionar...</option>
                                    <option value="F">F</option>
                                    <option value="M">M</option>
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
                            <label class="form-label" for="form8Example4">Fecha de Nacimiento</label>
                                <input type="date"  class="form-control" name="fecha_nac" id=""  minlength="" maxlength="" required />
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
                            <label class="form-label" for="form8Example4">Lugar de Nacimiento</label>
                                <input type="text"  class="form-control" name="lugar_nacimiento" id="" maxlength="50" required />
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
                            <label class="form-label" for="form8Example4">Nacionalidad</label>
                                <input type="text"  class="form-control" name="nacionalidad" id="" maxlength="50" required />
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
                                <input type="text"  class="form-control" name="telefono" id="telefono" minlength="10" maxlength="10" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">CURP</label>
                            <input type="text" name="curp" id="curp" class="form-control"  maxlength="18" required />
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
                            <input type="text" name="rfc" id="rfc" class="form-control" placeholder="0000000000000" maxlength="13" required/>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Estado</label>
                             <select class="form-select" name="estado" id="estado" required>
                                <option value="">Seleccionar...</option>
                                @foreach($varestados as $estado)
                                <option value="{{$estado->id}}">{{$estado->nombre}}</option>
                                @endforeach
                             </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Ciudad</label>
                               <select class="form-select" name="ciudad" id="ciudad" required>
                                <option value="">Seleccionar...</option>
                                @foreach($varciudades as $ciudad)
                                <option value="  {{$ciudad->id}}">{{$ciudad->nombre}}</option>
                                @endforeach
                               </select>
                               </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">CP</label>
                                <input type="text"  class="form-control" name="codigo_postal" id="codigo_postal"  maxlength="6" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="row mt-3">

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Colonia</label>
                                <input type="text"  class="form-control" name="colonia" id="colonia"  maxlength="60" required />
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
                            <label class="form-label" for="form8Example4">Calle</label>
                                <input type="text"  class="form-control" name="calle" id="calle" maxlength="60" required />
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
                            <label class="form-label" for="form8Example4">Numero Interior</label>
                                <input type="text"  class="form-control" name="numero_interior" id="numero_interior" placeholder="#00" maxlength="10"/>
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
                            <label class="form-label" for="form8Example4">Numero Exterior</label>
                                <input type="text"  class="form-control" name="numero_exterior" id="numero_exterior" maxlength="10" placeholder="#00" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Lugar de Empleo</label>
                                <input type="text"  class="form-control" name="lugar_empleo" id="lugar_empleo" maxlength="30" required />
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
                            <label class="form-label" for="form8Example4">Puesto de Empleo</label>
                                <input type="text"  class="form-control" name="puesto_empleo" id="puesto_empleo" maxlength="30" required />
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
                            <label class="form-label" for="form8Example4">Salario Mensual</label>
                                <input type="number"  class="form-control" name="salario_mensual" id="salarioMensual" maxlength="10" required />
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
                            <label class="form-label" for="form8Example4">Egreso Fijo Mensual</label>
                                <input type="number"  class="form-control" name="egreso_mensual_fijo" id="egresoFijoMensual" maxlength="10" required />
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
                            <label class="form-label" for="form8Example4">Antiguedad</label>
                                <input type="text"  class="form-control" name="antiguedad" id="antiguedad"  maxlength="20" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Telefono de Empleo</label>
                                <input type="text"  class="form-control" name="telefono_empleo" id="telefono_empleo"  maxlength="10" required />
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
                            <label class="form-label" for="form8Example4">Dirección de Empleo</label>
                                <input type="text"  class="form-control" name="direccion_empleo" id="direccion_empleo"  maxlength="60" required />
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
        
            <div id="caja2">
                <div class=" mt-4">
                    <h5 class="fw-light"> <b class="cicle_Blue">1.2</b> Conyuge</h5>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Primer Nombre</label>
                            <input type="text"  class="form-control" name="primer_nombreCon" id="primer_nombreCon"    minlength="3" maxlength="15"  />
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
                        <label class="form-label" for="form8Example4">Segundo Nombre</label>
                            <input type="text"  class="form-control" name="segundo_nombreCon"id="segundo_nombreCon"  maxlength="15" />
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
                        <label class="form-label" for="form8Example4">Apellido Parterno</label>
                            <input type="text"  class="form-control" name="apellido_paternoCon" id="apellido_paternoCon"   minlength="3" maxlength="15" />
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
                        <label class="form-label" for="form8Example4">Apellido Materno</label>
                            <input type="text"  class="form-control" name="apellido_maternoCon" id="apellido_maternoCon"  minlength="3" maxlength="15" />
                            <div class="valid-feedback">
                            ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">

                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Sexo</label>
                            <select class="form-select" name="sexoCon" id="sexoCon">
                                <option value="">Seleccionar...</option>
                                <option value="F">F</option>
                                <option value="M">M</option>
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
                        <label class="form-label" for="form8Example4">Fecha de Nacimiento</label>
                            <input type="date"  class="form-control" name="fecha_nacCon" id=""  minlength="" maxlength="" />
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
                        <label class="form-label" for="form8Example4">CURP</label>
                        <input type="text" name="curpCon" id="curpCon" class="form-control"  maxlength="18" />
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
                        <input type="text" name="rfcCon" id="rfcCon" class="form-control" placeholder="0000000000000" maxlength="13"/>
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
                            <input type="text"  class="form-control" name="telefonoCon" id="telefonoCon" minlength="10" maxlength="10" />
                            <div class="valid-feedback">
                            ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Lugar de Empleo</label>
                            <input type="text"  class="form-control" name="lugar_empleoCon" id="lugar_empleoCon" maxlength="30" />
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
                        <label class="form-label" for="form8Example4">Puesto de Empleo</label>
                            <input type="text"  class="form-control" name="puesto_empleoCon" id="puesto_empleoCon" maxlength="30" />
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
                        <label class="form-label" for="form8Example4">Salario Mensual</label>
                            <input type="number"  class="form-control" name="salarioMensualCon" id="salarioMensualCon" maxlength="10" />
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
                        <label class="form-label" for="form8Example4">Egreso Fijo Mensual</label>
                            <input type="number"  class="form-control" name="egresoFijoMensualCon" id="egresoFijoMensualCon" maxlength="10" />
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
                        <label class="form-label" for="form8Example4">Antiguedad</label>
                            <input type="text"  class="form-control" name="antiguedadCon" id="antiguedadCon"  maxlength="20" />
                            <div class="valid-feedback">
                            ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Telefono de Empleo</label>
                            <input type="text"  class="form-control" name="telefono_empleoCon" id="telefono_empleoCon"  maxlength="10" />
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
                        <label class="form-label" for="form8Example4">Dirección de Empleo</label>
                            <input type="text"  class="form-control" name="direccion_empleoCon" id="direccion_empleoCon"  maxlength="60" />
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

            <div id="caja3">
                <div class=" mt-4">
                    <h5 class="fw-light"> <b class="cicle_Blue">1.3</b> Referencias</h5>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Primer Nombre</label>
                            <input type="text"  class="form-control" name="primer_nombreRef" id="primer_nombreRef"    minlength="3" maxlength="15" required />
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
                        <label class="form-label" for="form8Example4">Segundo Nombre</label>
                            <input type="text"  class="form-control" name="segundo_nombreRef"id="segundo_nombreRef"   maxlength="15"/>
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
                        <label class="form-label" for="form8Example4">Apellido Parterno</label>
                            <input type="text"  class="form-control" name="apellido_paternoRef" id="apellido_paternoRef"   minlength="3" maxlength="15" required />
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
                        <label class="form-label" for="form8Example4">Apellido Materno</label>
                            <input type="text"  class="form-control" name="apellido_maternoRef" id="apellido_maternoRef"  minlength="3" maxlength="15" required />
                            <div class="valid-feedback">
                            ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">

                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Sexo</label>
                            <select class="form-select" name="sexoRef" id="sexoRef" required>
                                <option value="">Seleccionar...</option>
                                <option value="F">F</option>
                                <option value="M">M</option>
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
                        <label class="form-label" for="form8Example4">Fecha de Nacimiento</label>
                            <input type="date"  class="form-control" name="fecha_nacRef" id=""  minlength="" maxlength="" required />
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
                        <label class="form-label" for="form8Example4">Estado Civil</label>
                            <select class="form-select" name="estado_civilRef" id="" required>
                            <option value="">Seleccionar...</option>
                            <option value="CASADO">Casado</option>
                            <option value="SOLTERO">Soltero</option>
                            <option value="UNION">Union libre</option>
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">CURP</label>
                        <input type="text" name="curpRef" id="curpRef" class="form-control"  maxlength="18" required />
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
                        <input type="text" name="rfcRef" id="rfc" class="form-control" placeholder="0000000000000" maxlength="13" required/>
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
                            <input type="text"  class="form-control" name="telefonoRef" id="telefonoRef" minlength="10" maxlength="10" required />
                            <div class="valid-feedback">
                            ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Ciudad</label>
                           <select class="form-select" name="ciudadRef" id="ciudadRef" required>
                            <option value="">Seleccionar...</option>
                            @foreach($varciudades as $ciudad)
                            <option value="  {{$ciudad->id}}">{{$ciudad->nombre}}</option>
                            @endforeach
                           </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Codigo postal</label>
                            <input type="text"  class="form-control" name="codigo_postalRef" id="codigo_postal" maxlength="30" required />
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
                        <label class="form-label" for="form8Example4">Colonia</label>
                            <input type="text"  class="form-control" name="coloniaRef" id="colonia" maxlength="30" required />
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
                        <label class="form-label" for="form8Example4">Calle</label>
                            <input type="text"  class="form-control" name="calleRef" id="calle" maxlength="30" required />
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
                        <label class="form-label" for="form8Example4">Numero Interior</label>
                            <input type="text"  class="form-control" name="numero_interiorRef" id="numero_interior" maxlength="30"/>
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
                        <label class="form-label" for="form8Example4">Numero Exterior</label>
                            <input type="text"  class="form-control" name="numero_exteriorRef" id="numero_exterior" maxlength="30" required />
                            <div class="valid-feedback">
                            ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Dirección de Empleo</label>
                            <input type="text"  class="form-control" name="direccion_empleoRef" id="direccion_empleo"  maxlength="60" required />
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

        <div class="mt-3">
            <div class="text-center">
                    <button class="btn btn-purple1" type="submit">Continuar</button>
            </div>
        </div>
        <br/>
        <br/>
    </form>
</div>


<script src="{{ asset('js/F1Distribuidor.js') }}"></script>
<script src="{{ asset('js/cajas.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script>

function estadoC{
        var val = o;
        if(val==SOLTERO){
            $("#caja2").hide();
            $("#etiqueta2").hide();
        }
        if(val==CASADO){
            $("#caja2").show();
            $("#etiqueta2").show();
        }
    
        if(val==UNION_LIBRE){
            $("#caja2").show();
            $("#etiqueta2").show();
        }
        
    }

    function estado_civil(o){
        var val = o;
        if(val==SOLTERO){
            $("#caja2").hide();
            $("#etiqueta2").hide();
        }
        if(val==CASADO){
            $("#caja2").show();
            $("#etiqueta2").show();
        }
    
        if(val==UNION_LIBRE){
            $("#caja2").show();
            $("#etiqueta2").show();
        }
        
    }
    </script>
<script>
function tipo_dis(o){
    var value = o;
    if(value==1){
        var c1= 8000.00;
        $("#capital").val(c1);
    }
    if(value==2){
        var c2= 15000.00;
        $("#capital").val(c2);
    }

    if(value==3){
        var c3= 25000.00;
        $("#capital").val(c3);
    }
    
}
</script>
@endsection