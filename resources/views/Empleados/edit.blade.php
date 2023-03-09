@extends('layouts.app')
@section('content')
<!--INICIO BUTON AREA-->
<div class="pos__btnBack">
  <div class="wrapper"> 
    <h5 class="btnBack" onClick="history.go(-1);"><i class="fas fa-solid fa-arrow-left"></i></h5>
  </div>
      <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <defs>
              <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
              </filter>
          </defs>
      </svg>
  </div>
  <!--FIN BUTON AREA-->  


@foreach($obtenerempleado as $empleado)
  <div class="mt-5 p__little">
      <nav id="navbar-example2" class="navbar navbar-light bg-light text-light px-3 d-none d-md-block nav-float shadow-lg p-3 mb-5 bg-body">
        <ul style="margin-left:-20px;margin-right: 10px;">
          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#paso1">1. Paso</a>
          </div>
          
          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#paso2">2. Paso</a>
          </div>
      
          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#paso3">3. Paso</a>
          </div>
        </ul>
      </nav>
  </div>


  <div class="container mt-5 p__little">
        <div class="offcanvas-body small">
            <div class="container">
              <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              
                    <form  action="{{ route('cambiar', $empleado->idempleado) }}" method="POST"  enctype="multipart/form-data"  class="g-3 needs-validation" novalidate> 
                      @csrf
                      @method('PUT')


                      <!-- Datos generales-->
                      <div class="card p-5 cartaForm mb-4">
                            <div class="row">
                              <a class="col-md-3 nav-link btn btn-secondary step" href="#paso1"><h6 class="pt-1 text-light"><b>1</b></h6></a>    
                              <h4 class="col-md-2" id="paso1">General</h4>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">Primer Nombre</label>
                                <input type="text" hidden class="form-control" name="idnomina"  value="{{$empleado->idnom}}"required />
                                  <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre"  value="{{$empleado->primer_nombre}}"  minlength="3" maxlength="20" required />
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
                                <label class="form-label">Segundo Nombre</label>
                                  <input type="text" id="segundo_nombre"  name="segundo_nombre" class="form-control"  value="{{$empleado->segundo_nombre}}" minlength="3" maxlength="20"/>
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
                                <label class="form-label" >Apellido Paterno</label>
                                  <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" value="{{$empleado->apellido_paterno}}" minlength="3" maxlength="20" required />
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
                                <label class="form-label" >Apellido Materno</label>
                                  <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" value="{{$empleado->apellido_materno}}"  minlength="3" maxlength="20"required />
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
                                <label class="form-label" for="form8Example4">Telefono</label>
                                  <input type="numeric" name="telefono" id="telefono" class="form-control"  value="{{$empleado->telefono}}" minlength="6" maxlength="10" />
                                  <div class="valid-feedback">
                                    ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <!-- Email input -->
                                <div class="form-outline">
                                <label class="form-label">Correo</label>
                                  <input type="text"  name="correo" id="correo" class="form-control"  value="{{$empleado->correo}}" minlength="3" maxlength="60"/>
                                  <div class="valid-feedback">
                                    ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                  </div>
                                </div>
                              </div>
                    
                              <div class="col">
                                <!-- Email input -->
                                <div class="form-outline">
                                <label class="form-label" >Puesto</label>
                                <select name="puesto" id="puesto" class="form-select"  required>
                    
                                <option value="{{$empleado->idpuesto}}" selected>{{$empleado->puesto}}</option>
                                  @foreach($varpuestos as $obtenerpuesto)
                                  <option value="{{$obtenerpuesto->id}}">{{$obtenerpuesto->nombre}}</option>
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
                                <!-- Email input -->
                                <div class="form-outline">
                                <label class="form-label" >Sucursal</label>
                                <select  name="sucursal" id="sucursal" class="form-select" required>
                              
                                @foreach($varsucursales as $obtenersucursales)
                                @if($empleado->sucursal = $obtenersucursales->nombre)
                                <option value="{{$empleado->idsucursal}}" selected>{{$empleado->sucursal}}</option>
                                @else
                                <option value="{{$obtenersucursales->id}}">{{$obtenersucursales->nombre}}</option>
                                @endif
                            
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
                            <div class="row">
                              <div class="col">
                                <!-- Name input -->
                                <div class="form-outline">
                                <label class="form-label" >Grado de estudio</label> 
                                <input type="text"  name="grado_estudio" id="grado_estudio" class="form-control"  value="{{$empleado->grado_estudio}}" minlength="3" maxlength="100"  required />  
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
                                <!-- Name input -->
                                <div class="form-outline">
                                <label class="form-label" >Nacionalidad</label> 
                                <input type="text"  name="nacionalidad" id="nacionalidad" class="form-control"  value="{{$empleado->nacionalidad}}" minlength="3" maxlength="100"  required />  
                              <div class="valid-feedback">
                                ¡Se ve bien!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                              </div>
                                </div>
                              </div>
                              <div class="col">
                                <!-- Name input -->
                                <div class="form-outline">
                                <label class="form-label" >Ciudad</label>
                                <select   name="ciudad" id="ciudad" class="form-select" required>
                              
                                @foreach($varciudades as $obtenerciudades)
                                @if($empleado->ciudad = $obtenerciudades->nombre)
                                <option value="{{$empleado->idciudad}}" selected>{{$empleado->ciudad}}</option>
                                @else
                                <option value="{{$obtenerciudades->id}}">{{$obtenerciudades->nombre}}</option>
                                @endif
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

                            <div class="row">
                              <div class="col">
                                <!-- Email input -->
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">Calle</label>
                                  <input type="text" name="calle" id="calle" class="form-control"  value="{{$empleado->calle}}" minlength="3" maxlength="60" required />
                                  <div class="valid-feedback">
                                    ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                  </div>
                                </div>
                              </div>

                              <div class="col">
                                <!-- Email input -->
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">Colonia</label>
                                  <input type="text" name="colonia" id="colonia" class="form-control"  value="{{$empleado->colonia}}" minlength="3" maxlength="60"  required />
                                  <div class="valid-feedback">
                                    ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <!-- Email input -->
                                <div class="form-outline">
                                <label class="form-label" >Numero Interior</label>
                                  <input type="text" name="numero_interior" id="numero_interior" class="form-control" placeholder="00"  value="{{$empleado->numero_interior}}"  maxlength="10"  />
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
                                <!-- Name input -->
                                <div class="form-outline">
                                <label class="form-label" >Numero Exterior</label>
                                  <input type="text" class="form-control" name="numero_exterior" id="numero_exterior" placeholder="00"  value="{{$empleado->numero_exterior}}"  maxlength="10"  required />
                                  <div class="valid-feedback">
                                    ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <!-- Email input -->
                                <div class="form-outline">
                                <label class="form-label">Codigo Postal</label>
                                  <input type="text"  name="codigo_postal" id="codigo_postal"  class="form-control"  placeholder="00000"  value="{{$empleado->codigo_postal}}"  maxlength="6"   required />
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
                                <label class="form-label">Estado Civil</label>
                                <select class="form-select" name="estado_civil" id="estado_civil">
                                  <option value="SOLTERO">SOLTERO</option>
                                  <option value="CASADO">CASADO</option>
                                  <option value="UNION LIBRE">UNION LIBRE</option>
                                </select>
                              </div>
                              <div class="col">
                                <!-- Email input -->
                                <div class="form-outline">
                                <label class="form-label" >Sexo</label>
                                  <select  class="form-select" id="sexo" name="sexo"  required >
                                    <option  selected>{{$empleado->sexo}}</option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
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
                                <!-- Email input -->
                                <div class="form-outline">
                                <label class="form-label" >Tipo de Sangre</label>
                                  <input type="text" name="tipo_sangre" id="tipo_sangre" class="form-control" value="{{$empleado->tipo_sangre}}"  maxlength="2"/>
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
                                <!-- Email input -->
                                <div class="form-outline">
                                <label class="form-label" >Fecha de Nacimiento</label>
                                  <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{$empleado->fecha_nacimiento}}" required />
                                  
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
                                <label class="form-label" >Fecha de alta</label>
                                  <input type="date" name="fecha_alta" id="fecha_alta" class="form-control"  value="{{$empleado->fecha_ingreso}}"  required />
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
                                  <!-- Name input -->
                                  <div class="form-outline">
                                  <label class="form-label">Contacto de Emergencias</label>
                                    <input type="text" name="contacto_emergencias" id="contacto_emergencias" class="form-control"  value="{{$empleado->contacto_emergencia}}"  maxlength="50" />
                                    <div class="valid-feedback">
                                      ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                      Por favor, completa la información requerida.
                                    </div>
                                  
                                  </div>
                                </div>
                              
                              <div class="col">
                                  <!-- Email input -->
                                  <div class="form-outline">
                                  <label class="form-label" >Telefono de emergencia </label>
                                    <input type="text" name="telefono_emergencia" id="telefono_emergencia" class="form-control"   value="{{$empleado->telefono_emergencia}}"  maxlength="10" />
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
                    
                      <div class="card p-5 cartaForm mb-4 text-center">
                        <h5>Contrato de Empleado</h5>
                        <iframe src="{{ asset('DetallesEmpleados/contratos/contrato_'.$empleado->rfc.'.pdf') }}" style="width:100%; height:500px;" frameborder="0" ></iframe>
                      </div>

                        <!-- Salario-->
                      <div class="card p-5 cartaForm mb-4">
                          <div class="row">
                              <a class="col-md-3 nav-link btn btn-secondary step" href="#paso2"><h6 class="pt-1 text-light"><b>2</b></h6></a>    
                              <h4 class="col-md-2" id="paso2">Salario</h4>
                            </div>
                          <div class="row">
                            <div class="col">
                              <!-- Name input -->
                              <div class="form-outline">
                              <label class="form-label" >Salario Mensual</label>
                                <input type="text" name="salario_bruto" id="salario_bruto" class="form-control"  value="{{$empleado->salario_bruto}}" required />
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <!-- Email input -->
                              <div class="form-outline">
                              <label class="form-label" >Salario Diario Fiscal</label>
                                <input type="text" name="salario_fijo" id="salario_fijo" class="form-control"  value="{{$empleado->salario_fijo}}" required/>
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>
                              </div>
                            </div>

                            <div class="col">
                              <!-- Email input -->
                              <div class="form-outline">
                              <label class="form-label" >Salario Diario Integrado</label>
                                <input type="text" Name="salario_neto" id="salario_neto" class="form-control"  value="{{$empleado->salario_neto}}" required />
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>
                              </div>
                            </div>
                            <div class="col">
                                <!-- Name input -->
                                <div class="form-outline">
                                <label class="form-label" >Banco</label>
                                <select   name="banco" id="banco" class="form-select" required>
                            
                                  @foreach($varbancos as $obtenerbancos)
                                  @if($empleado->banco = $obtenerbancos->nombre)
                                  <option value="{{$empleado->idbanco}}" selected>{{$empleado->banco}}</option>
                                @else
                                <option value="{{$obtenerbancos->id}}" selected>{{$obtenerbancos->nombre}}</option>
                                @endif
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
                              <!-- Email input -->
                              <div class="form-outline">
                              <label class="form-label" >Numero de Tarjeta</label>
                                <input type="text" name="numero_tarjeta" id="numero_tarjeta" class="form-control"  value="{{$empleado->numero_tarjeta}}"  minlength="16" maxlength="16" />
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
                              <!-- Name input -->
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Numero de Cuenta</label>
                                <input type="text" name="numero_cuenta" id="numero_cuenta" class="form-control" maxlength="10" value="{{$empleado->numero_cuenta}}" />
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <!-- Email input -->
                              <div class="form-outline">
                              <label class="form-label" >RFC</label>
                                <input type="text" name="rfc" id="rfc" class="form-control"  value="{{$empleado->rfc}}" maxlength="13" required/>
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>
                            
                              </div>
                            </div>

                            <div class="col">
                              <!-- Email input -->
                              <div class="form-outline">
                              <label class="form-label" >CURP</label>
                                <input type="text" name="curp" id="curp" class="form-control" value="{{$empleado->curp}}" maxlength="18" required />
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>

                              </div>
                            </div>

                            <div class="col">
                              <!-- Email input -->
                              <div class="form-outline">
                              <label class="form-label" >NSS</label>
                                <input type="text" name="nss" id="nss" class="form-control" value="{{$empleado->nss}}" maxlength="12" required />
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>

                              </div>
                            </div>

                            <div class="col">
                              <!-- Email input -->
                              <div class="form-outline">
                              <label class="form-label" >Fecha de ingreo a IMSS</label>
                                <input type="date" name="fecha_ingreso_imss" id="fecha_ingreso_imss" class="form-control" value="{{$empleado->fecha_ingreso_imss}}" maxlength="12" />
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
                    
                          
                        <!-- Razón Social-->
                      <div class="card p-5 cartaForm mb-4">
                            <div class="row">
                              <a class="col-md-3 nav-link btn btn-secondary step" href="#paso3"><h6 class="pt-1 text-light"><b>3</b></h6></a>    
                              <h4 class="col-md-2" id="paso3">Razón Social</h4>
                            </div>

                            <div class="row">
                              <div class="col">
                                <!-- Name input -->
                                <div class="form-outline">
                                <select class="form-select form-select mb-3" id="cmbempresas" name="cmbempresas"    required>
                                  <option value=" {{$empleado->id}}" selected > {{$empleado->nombre_empresa}}</option>
                                  @foreach($varempresas as $obtenerempresa)
                                <option value="{{$obtenerempresa->id}}">{{$obtenerempresa->nombre_empresa}}</option>
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

                            <div class="row">
                                <div class="col-md-3" id="nss">
                                  <label class="form-label">Desglose de IMSS</label>
                                  <input type="text" name="pago_IMSS" id="pago_IMSS" class="form-control"  value="{{$empleado->pago_imss}}" maxlength="8" />
                                  <div class="valid-feedback">
                                    ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                  </div>
                                </div>

                                <div class="col-md-3" id="sueldo_fiscal">
                                  <label class="form-label">Sueldo fiscal</label>
                                  <input type="text" name="sueldo_fiscal" id="sueldo_fiscal" class="form-control"  value="{{$empleado->sueldo_fiscal}}" maxlength="8"  required />                      
                                  <div class="valid-feedback">
                                    ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                  </div>
                              </div>

                              <div class="col-md-3" id="excedente">
                                <label class="form-label">Excedente</label>
                                <input type="text" name="excedente" id="excedente" class="form-control"  value="{{$empleado->excedente}}" maxlength="8"  required />
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>
                              </div>

                              <div class="col-md-3" id="Efectivo">
                                  <label class="form-label">Efectivo</label>
                                  <input type="text" name="efectivo" id="efectivo" class="form-control"  value="{{$empleado->efectivo}}" maxlength="8" required />
                                  <div class="valid-feedback">
                                    ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                  </div>
                              </div>

                              <div class="row text-center mt-4 mb-4">
                                <hr/>
                                <div class="col">
                                  <label>Aplicar credito Infonavit 
                                    <input style="border: .5px solid rgb(165, 165, 165);width:15px;height:15px;" class="form-check-input" type="checkbox" id="terminos" value="1" onclick="chekinfonavit(this)" />
                                  </label>
                                </div>
                              </div>
                                <br>
                                <div class="row">
                                  <div class="col-md-3" id="tipo_descuento_infonavit">
                                    <div class="row" >
                                      <label class="form-label">Tipo de descuento infonavit</label>

                                      <select class="form-select" name="tipo_infonavit" >
                                        <option  value="{{$empleado->idinfonavit}}">{{$empleado->nombreinfonavit}}</option>  
                                        @foreach($vartipodescinfo as $obtenertipo)
                                        <option value=" {{$obtenertipo->id}}">{{$obtenertipo->Nombre}}</option>
                                      @endforeach
                                      </select>                             
                                    </div>
                                  </div>

                                  <div class="col-md-3"  id="factor_sua">
                                    <div class="row">
                                      <label class="form-label">Factor SUA</label>
                                      <input type="text" name="factor_sua" class="form-control" value="{{$empleado->factor_sua}}" maxlength="8"/>
                                    </div>
                                  </div>

                                  <div class="col-md-3"  id="descuento_quincenal">
                                    <div class="row">
                                      <label class="form-label">Descuento quincenal</label>
                                      <input type="text" name="descuento_quincenal" class="form-control" value="{{$empleado->descuento_quincenal}}" maxlength="8"/>
                                    </div>
                                  </div>

                                  <div class="col-md-3"  id="numero_credito_infonavit">
                                    <div class="row">
                                              <label class="form-label">Numero de credito infoanvit</label>
                                      <input type="text" name="numero_credito_infonavit" class="form-control"  value="{{$empleado->numero_credito_infonavit}}" maxlength="8" />
                                    </div>
                                  </div>
                            </div>
                                

                          </div>

                      </div>         
                      


                      <!-- Guardar-->
                      <div class="mb-5 text-center" style="padding:10px;">
                        <button class="btn btn-blue text-light push" style="width: 80%;height:5vh;" type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;<b>Guardar cambio</b></button>
                      </div>

                      
                    </form>

              </div>
            </div>
        </div> 
  </div>
@endforeach


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


@endsection