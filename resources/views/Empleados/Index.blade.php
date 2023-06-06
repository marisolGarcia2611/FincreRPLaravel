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


  @elseif($mensaje = Session::get('Errorpermisos'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se encontro el permiso para efectuar la accion!","Comunicate al area de sistemas para validar permisos","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp

@endif

<div id="btnBack"></div>  
<div class="pos__ico">
    <img class="ico__image2" src="{{ asset('ico/logo.png') }}" alt="fincreLaguna">
</div>


<div class="p__little">
  <br/>
  <br/>
    {{--------------------------- Encabezado de la pagina----------------------}}
      <div class="container">
        <div  class="row mb-5 bg-p">
            <div class="col-md-5 center">
              <h2 class="mt-3 mb-1 fw-light animate_animated animate_backInLeft">Catalogo de Empleados</h2> 
              <cite title="Título fuente">Altas, Bajas y Edición</cite>
            </div>

            <div class="col-md-6">
              <div class="row mt-3 text-center">
                    @foreach($permisos as $accion)
                    @if($accion->nombre_accion == "alta_empleados")
                    <div class="col-md-3">
                      <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><i class="fas fa-plus"></i>&nbsp; Añadir </button>  
                    </div>
                    @endif
                    @if($accion->nombre_accion ==  "exportar_empleados") 
                    <div class="col-md-3">
                      <form action="{{ route('Empleados.exportar_excel') }}">                             
                      <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fas fa-download"></i>&nbsp; Exportar </button>          
                      </form>            
                    </div>
                    @endif 
                    @if($accion->nombre_accion == "graficar_empleados")
                    <div class="col-md-3">
                      <form action="{{ route('Empleados.grafica_empleados') }}">
                      <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fas fa-chart-pie"></i>&nbsp;Gaficar </button>
                      </form>
                    </div>
                    @endif
                    @endforeach 
              </div>
            </div>
        </div>
      </div> 
     
      @csrf

      {{--------------------------- Cuerpo de la tabla----------------------}}
    <center class="mb-5 bg-body border-0">
        <div class="table-responsive pad-table" id="mydatatable-container">     
          <table class="table table-hover " id="tblempleados">
            <thead class="table">
                  <tr class="tr-table"> 
                  <th class="text-center fw-light">Acciones</th>
                  <th class="text-center fw-light">Foto</th>
                  <th  class="text-center fw-light">Estado</th> 
                  <th class="text-center fw-light"># </th>
                  <th  class="text-center fw-light">Primer Nombre</th>
                  <th  class="text-center fw-light">Segundo Nombre</th>
                  <th  class="text-center fw-light">Apellido Paterno</th>
                  <th  class="text-center fw-light">Apellido Materno</th>
                  <th  class="text-center fw-light">Descripción</th>
                  <th  class="text-center fw-light">Estado Civil</th>
                  <th  class="text-center fw-light">Telefono</th>               
                  <th  class="text-center fw-light">Correo</th>
                  <th  class="text-center fw-light">Nacionalidad</th>
                  <th  class="text-center fw-light">Ciudad</th>
                  <th  class="text-center fw-light">Calle</th>
                  <th  class="text-center fw-light">Colonia</th>
                  <th  class="text-center fw-light">Numero Interior</th>
                  <th  class="text-center fw-light">Numero Exterior</th>
                  <th  class="text-center fw-light">CP</th>
                  <th  class="text-center fw-light">Sexo</th>
                  <th  class="text-center fw-light">Tipo Sangre</th>
                  <th  class="text-center fw-light">Fecha de Nacimiento</th>
                  <th  class="text-center fw-light">Grado de estudios</th>
                  <th  class="text-center fw-light">Puesto</th>
                  <th  class="text-center fw-light">Fecha Ingreso</th>
                  <th  class="text-center fw-light">Empresa</th>
                  <th  class="text-center fw-light">Sucursal</th>
                  <th  class="text-center fw-light">Salario Mensual</th>
                  <th  class="text-center fw-light">Salario Diario Integrado</th>
                  <th  class="text-center fw-light">Salario Diario Fiscal</th>
                  <th  class="text-center fw-light">ID Infonavit</th>
                  <th  class="text-center fw-light">Tipo infonavit</th>
                  <th  class="text-center fw-light">No. Credito infonavit</th>   
                  <th  class="text-center fw-light">Factor sua</th>
                  <th  class="text-center fw-light">Descuento Quincenal</th>
                  <th  class="text-center fw-light">Banco</th>
                  <th  class="text-center fw-light">Numero Tarjeta</th>
                  <th  class="text-center fw-light">Numero Cuenta</th>
                  <th  class="text-center fw-light">RFC</th>
                  <th  class="text-center fw-light">NSS</th>
                  <th  class="text-center fw-light">CURP</th>
                  <th  class="text-center fw-light">Fecha Ingreso IMSS</th>
                  <th  class="text-center fw-light">Pago IMMS</th>
                  <th  class="text-center fw-light">Sueldo Fiscal</th>
                  <th  class="text-center fw-light">Pago excedente</th>
                  <th  class="text-center fw-light">Pago efectivo</th>
                  <th  class="text-center fw-light">Contacto de Emergencia</th>
                  <th  class="text-center fw-light">Telefono de Emergencia</th>
                 
                  </tr>
            </thead>
            
            <tbody>
              @foreach($varlistaempleados as $vis )
                <tr>
                  {{--------------------- Herramientas de la tabla--------------------}}
                  <td class="bg-0">
                    <p>
                        @if($vis->estado == "I" )
                        <form action="/Empleados/editBaja/{{$vis->idempleado}}">
                          <a class="text-s btn fas fa-user-check" title="Reactivar Empleado"  href="/ReactivarEmpleado/{{$vis->idempleado}}"></a>
                          <button class="text-s btn fas fa-edit bor" title="Editar Baja Empleado"  type="submit"></button>
                          @if($vis->archivo_baja=="1" )
                           <a class="text-s btn btn fas fa-eye" target="_blank" title="Ver Docuemnto Baja" href="DetallesEmpleados/bajas/baja_{{$vis->idempleado}}.pdf"></a>          
                          @else
                            <button class="text-s btn fas fa-upload" title="Subir Baja Firmada"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvaBottomUpload" aria-controls="offcanvasBottom" id="{{$vis->id}}" ></button>
                          @endif
                        </form>
                        @endif
                  
                        
                        @if($vis->estado == "A") 
                          <form action="{{ route('Empleados.edit', $vis->idempleado) }}">
                            <button class="text-s btn fas fa-edit bor" title="Editar Empleado" type="submit"></button>
                          </form>
                     
                          @foreach($permisos as $permisobaja)
                            @if($permisobaja->nombre_accion == "eliminar_empleados")
                              <button class="text-s btn  fas fa-trash"  type="button" title="Baja Empleado" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom" id="{{$vis->id}}" ></button>
                            @endif 
                          @endforeach
                        
                        @endif
                    </p>
                  </td>

                  <td class="bg-0">
                    @if($vis->foto == "0") 
                      <img class="pImage" src="Images/Perfil/0.png"/>
                    @else
                    @php($foto='')
                    @php($foto=$vis->idempleado)
                      <img class="pImage zoom" src="{{ asset('Images/Perfil/'.$foto.'.png') }}" alt="foto"/>
                    @endif
                  </td>

                  @if($vis->estado=='A')
                  <td class="bg-0 text-center" ><div class="bg-4 circle col-md-4"></div> <div class="col-md-4 fw-light text-succes fs-9">ACTIVO</div> </td>
                  @else
                  <td class="bg-0 text-center" ><div class="bg-5 circle col-md-4"></div> <div class="col-md-4 fw-light text-danger fs-9">INACTIVO</div> </td>
                  @endif
                  
                  <td class="table-light text-secondary">{{$vis->idempleado}}</td>
                  <td class="table-light text-secondary">{{$vis->primer_nombre}}</td>
                  <td class="table-light text-secondary">{{$vis->segundo_nombre}}</td>
                  <td class="table-light text-secondary">{{$vis->apellido_paterno}}</td>
                  <td class="table-light text-secondary">{{$vis->apellido_materno}}</td>
                  <td class="table-light text-secondary">{{$vis->descripcion_estado}}</td>
                  <td class="table-light text-secondary">{{$vis->estado_civil}}</td>
                  <td class="table-light text-secondary">{{$vis->telefono}}</td>            
                  <td class="table-light text-secondary">{{$vis->correo}}</td>
                  <td class="table-light text-secondary">{{$vis->nacionalidad}}</td>
                  <td class="table-light text-secondary">{{$vis->ciudad}}</td>
                  <td class="table-light text-secondary">{{$vis->calle}}</td>
                  <td class="table-light text-secondary">{{$vis->colonia}}</td>
                  <td class="table-light text-secondary">{{$vis->numero_interior}}</td>
                  <td class="table-light text-secondary">{{$vis->numero_exterior}}</td>
                  <td class="table-light text-secondary">{{$vis->codigo_postal}}</td>
                  <td class="table-light text-secondary">{{$vis->sexo}}</td>
                  <td class="table-light text-secondary">{{$vis->tipo_sangre}}</td>
                  <td class="table-light text-secondary">{{$vis->fecha_nacimiento}}</td>
                  <td class="table-light text-secondary">{{$vis->grado_estudio}}</td>
                  <td class="table-light text-secondary">{{$vis->puesto}}</td>
                  <td class="table-light text-secondary">{{$vis->fecha_ingreso}}</td>
                  <td class="table-light text-secondary">{{$vis->nombre_empresa}}</td>
                  <td class="table-light text-secondary">{{$vis->sucursal}}</td>
                  <td class="table-light text-secondary">{{$vis->salario_bruto}}</td>
                  <td class="table-light text-secondary">{{$vis->salario_neto}}</td>
                  <td class="table-light text-secondary">{{$vis->salario_fijo}}</td>
                  <td class="table-light text-secondary">{{$vis->idinfonavit}}</td>
                  <td class="table-light text-secondary">{{$vis->nombreinfonavit}}</td>
                  <td class="table-light text-secondary">{{$vis->numero_credito_infonavit}}</td>
                  <td class="table-light text-secondary">{{$vis->factor_sua}}</td>
                  <td class="table-light text-secondary">{{$vis->descuento_quincenal}}</td>
                  <td class="table-light text-secondary">{{$vis->banco}}</td>
                  <td class="table-light text-secondary">{{$vis->numero_tarjeta}}</td>
                  <td class="table-light text-secondary">{{$vis->numero_cuenta}}</td>
                  <td class="table-light text-secondary">{{$vis->rfc}}</td>
                  <td class="table-light text-secondary">{{$vis->nss}}</td>
                  <td class="table-light text-secondary">{{$vis->curp}}</td>
                  <td class="table-light text-secondary">{{$vis->fecha_ingreso_imss}}</td>
                  <td class="table-light text-secondary">{{$vis->pago_imss}}</td>
                  <td class="table-light text-secondary">{{$vis->sueldo_fiscal}}</td>
                  <td class="table-light text-secondary">{{$vis->excedente}}</td>
                  <td class="table-light text-secondary">{{$vis->efectivo}}</td>
                  <td class="table-light text-secondary">{{$vis->contacto_emergencia}}</td>
                  <td class="table-light text-secondary">{{$vis->telefono_emergencia}}</td>
                
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>  
    </center>

  
</div>
<!-- ................................................................................................................................................-->

<!-- Insertar Modal-->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height:70vh">
  <div class="offcanvas-header">
    <nav id="navbar-example2" class="navbar navbar-light px-3">
        <a class="navbar-brand">Nuevo Empleado</a>
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link nav-it text-secondary fs-8" style="border-radius:20px;" href="#paso1">Paso - 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-it text-secondary fs-8" style="border-radius:20px;" href="#paso2">Paso - 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-it text-secondary fs-8" style="border-radius:20px;" href="#paso3">Paso - 3</a>
            </li>
          
          </ul>
      </nav>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>


 <div class="offcanvas-body small contenedor">
        <div class="container">
          <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <form action="/Empleados/store" method="POST" enctype="multipart/form-data" class="g-3 needs-validation" novalidate>
            @csrf

            <div class="card p-5 cartaForm mb-4">
                <h4 id="paso1">Paso 1. General</h4>
                  <div class="row">
                    <div class="col">
                      <!-- Name input -->
                      <div class="form-outline">
              
                      <label class="form-label" for="form8Example4">Primer Nombre</label>
                   
                        <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre" minlength="3" maxlength="20"    required />
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
                      <label class="form-label">Segundo Nombre</label>
                        <input type="text" id="segundo_nombre"  name="segundo_nombre" class="form-control" minlength="3" maxlength="20"/>
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
                      <label class="form-label" >Apellido Paterno</label>
                        <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" minlength="3" maxlength="20"  required />
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
                      <label class="form-label" >Apellido Materno</label>
                        <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" minlength="3" maxlength="20"  required />
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
                      <label class="form-label" for="form8Example4">Telefono</label>
                        <input type="numeric" name="telefono" id="telefono" class="form-control" minlength="6" maxlength="10"   required />
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
                        <input type="text"  name="correo" id="correo" class="form-control" minlength="3" maxlength="40"   required />
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
                      <select name="puesto" id="puesto" class="form-select" required>
                      <option value="">Seleccionar...</option>
                      @foreach($varpuestos as $obtenerpuestos)
                      <option value="{{$obtenerpuestos->id}}">{{$obtenerpuestos->nombre}}</option>
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
                        <option value="">Seleccionar...</option>
                      @foreach($varsucursales as $obtenersucursal)
                      <option value="{{$obtenersucursal->id}}">{{$obtenersucursal->nombre}}</option>
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
                      <input type="text"  name="grado_estudio" id="grado_estudio" class="form-control"   minlength="3" maxlength="100"  required />  
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
                      <input type="text"  name="nacionalidad" id="nacionalidad" class="form-control"  minlength="3" maxlength="100"  required />  
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
                      <option value="">Seleccionar...</option>
                      @foreach($varciudades as $obtenerciudad)
                      <option value="{{$obtenerciudad->id}}">{{$obtenerciudad->nombre}}</option>
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
                        <input type="text" name="calle" id="calle" class="form-control" minlength="3" maxlength="60"  required />
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
                        <input type="text" name="colonia" id="colonia" class="form-control" minlength="3" maxlength="60"  required />
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
                        <input type="text" name="numero_interior" id="numero_interior" class="form-control"  maxlength="10"  placeholder="#00" />
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
                      <label class="form-label" >Numero Exterior</label>
                        <input type="text" class="form-control" name="numero_exterior" id="numero_exterior" maxlength="10"  placeholder="#00" required />
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
                        <input type="text"  name="codigo_postal" id="codigo_postal"  class="form-control" maxlength="6"   placeholder="00000" required />
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
                      <label class="form-label">Estado Civil</label>
                      <select class="form-select" name="estado_civil" id="estado_civil" required>
                        <option value="">Seleccionar...</option>
                        <option value="SOLTERP">SOLTERO</option>
                        <option value="CASADO">CASADO</option>
                        <option value="UNION_LIBRE">UNION LIBRE</option>
                      </select>
                      </div>
                    </div>
                    

                    <div class="col">
                      <!-- Email input -->
                      <div class="form-outline">
                      <label class="form-label" >Sexo</label>
                        <select  class="form-select" id="sexo" name="sexo" required>
                          <option value="">Seleccionar...</option>
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
                        <input type="text" name="tipo_sangre" id="tipo_sangre" class="form-control" placeholder="+" maxlength="2" />
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
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"  required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                      </div>
                    </div>

                    {{-- <div class="col">
                      <!-- Email input -->
                      <div class="form-outline">
                      <label class="form-label" >Foto</label>
                        <input type="text" name="foto" id="foto" class="form-control"  required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                      </div>
                    </div> --}}

                    <div class="col">
                      <!-- Email input -->
                      <div class="form-outline">
                      <label class="form-label" >Fecha de ingreso</label>
                        <input type="date" name="fecha_alta" id="fecha_alta" class="form-control"  required />
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
                        <input type="text" name="contacto_emergencias" id="contacto_emergencias" class="form-control" placeholder="Nombre de la persona" maxlength="50"/>
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
                          <input type="text" name="telefono_emergencia" id="telefono_emergencia" class="form-control" placeholder="00000000000" maxlength="10"/>
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
            
           <div class="card p-5 cartaForm mb-4">
              <div class="row mb-4">
                <div>
                  <div class="text-center">
                    <h5>Contrato de Empleado</h5>
                  </div>
                    <label for="file1" class="drop-container1">
                      <span class="drop-title">Suelte archivo aquí</span>
                      ó
                      <input type="file" id="my-fileContra" type="file" name="urlpdff" required>
                      <div class="valid-feedback fs-8">
                        ¡Se ve bien!
                      </div>
                      <div class="invalid-feedback fs-8">
                        ¡Por favor, sube el archivo de la baja firmada!
                      </div>
                    </label>
                    <spam class="fs-8 text-secondary">Recuerde que solo se admite el formato ".pdf"</spam>
                </div>
              </div>
           </div>
            
            <div class="card p-5 cartaForm mb-4">
                  <h4 id="paso2">Paso 2. Salario</h4>
                  <div class="row">
                    <div class="col">
                      <div class="form-outline">
                      <label class="form-label" >Salario Mensual</label>
                        <input type="text" name="salario_bruto" id="salario_bruto" class="form-control" maxlength="8"   required />
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
                      <label class="form-label" >Salario Diario Fiscal</label>
                        <input type="text" name="salario_fijo" id="salario_fijo" class="form-control" maxlength="8" placeholder="00.00"/>
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
                      <label class="form-label" >Salario Diario Integrado</label>
                        <input type="text" Name="salario_neto" id="salario_neto" class="form-control" maxlength="8" placeholder="00.00" required />
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
                        <label class="form-label" >Banco</label>
                        <select   name="banco" id="banco" class="form-select" required>
                        <option value="">Seleccionar...</option>
                        @foreach($varbancos as $obtenerbanco)
                        <option value="{{$obtenerbanco->id}}">{{$obtenerbanco->nombre}}</option>
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
                      <label class="form-label" >Numero de Tarjeta</label>
                        <input type="text" name="numero_tarjeta" id="numero_tarjeta" class="form-control" minlength="16" maxlength="16" placeholder="000000000000000" />
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
                      <label class="form-label" for="form8Example4">Numero de Cuenta</label>
                        <input type="text" name="numero_cuenta" id="numero_cuenta" class="form-control" maxlength="10"  placeholder="0000000000" />
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
                      <label class="form-label" >RFC</label>
                        <input type="text" name="rfc" id="rfc" class="form-control" placeholder="0000000000000" maxlength="13" required/>
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
                      <label class="form-label" >CURP</label>
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
                      <label class="form-label" >NSS</label>
                        <input type="text" name="nss" id="numero_seguro_social" class="form-control" placeholder="xxxxxxxxxx" maxlength="12"  />
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
                      <label class="form-label">Fecha de ingreo a IMSS</label>
                        <input type="date" name="fecha_ingreso_imss" id="fecha_ingreso_imss" class="form-control"  maxlength="12"/>
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

             <div class="card p-5 cartaForm mb-4">
                  <h4 id="paso3">Paso 3. Razón Social</h4>

                  <div class="row">
                    <div class="col">
                      <div class="form-outline">
                      <select class="form-select mb-3" id="cmbempresas" name="cmbempresas" aria-label="Ejemplo de .form-select-lg" minlength="1" required>
                        <option value="">Seleccionar...</option>
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


                  <div class="row mb-4">
                      <div class="col-md-3" id="sueldo_fiscal">
                        <label class="form-label">Sueldo fiscal</label>
                        <input type="text" name="sueldo_fiscal" id="sueldo_fiscal" class="form-control" placeholder="00.00" value="0.00" maxlength="8"required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                    </div>
                      <div class="col-md-3" id="excedente">
                        <label class="form-label">Excedente</label>
                        <input type="text" name="excedente" id="excedente" class="form-control" placeholder="00.00" value="0.00" maxlength="8"required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                      </div>
                    <div class="col-md-3" id="Efectivo">
                        <label class="form-label">Efectivo</label>
                        <input type="text" name="efectivo" id="efectivo" class="form-control" placeholder="00.00"maxlength="8" value="0.00" required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>

                    </div>

                    {{-- Descuento de Infonavit --}}

                    <div class="row text-center mt-4 mb-4">
                      <hr/>
                      <div class="col">
                        <label>Aplicar credito Infonavit 
                          <input style="border: .5px solid rgb(165, 165, 165);width:15px;height:15px;" class="form-check-input" type="checkbox" id="terminos" value="1" onclick="chekinfonavit(this)" />
                        </label>
                      </div>
                    </div>
                 </div>
                
                  <div class="row">
                      <div class="col-md-3" id="tipo_descuento_infonavit">
                      <div class="row" >
                      <label class="form-label">Tipo de descuento infonavit</label>
                      <select class="form-select mb-3" name="tipo_infonavit" >
                        @foreach($vartipodescinfo as $obtenertipo)
                        @if($obtenertipo->Nombre=="N/D")
                        <option value=" {{$obtenertipo->id}}" selected>{{$obtenertipo->Nombre}}</option>
                        @else
                        <option value=" {{$obtenertipo->id}}">{{$obtenertipo->Nombre}}</option>
                        @endif
                        
                        @endforeach
                      </select>
                    
                      </div>
                    </div>

                    <div class="col-md-3"  id="factor_sua">
                      <div class="row">
                        <label class="form-label">Factor SUA</label>
                          <input type="text" name="factor_sua" class="form-control" value="0.00"  maxlength="8" required />
                      </div>
                    </div>

                    <div class="col-md-3"  id="descuento_quincenal">
                      <div class="row">
                        <label class="form-label">Descuento quincenal</label>
                          <input type="text" name="descuento_quincenal" class="form-control" value="0.00"  maxlength="8"required />
                      </div>
                    </div>

                    <div class="col-md-3"  id="numero_credito_infonavit">
                      <div class="row">
                                <label class="form-label">Numero de credito infoanvit</label>
                          <input type="text" name="numero_credito_infonavit" class="form-control" value="0.00" maxlength="8" required />
                      </div>
                    </div>

                  </div>
                
                       
            
              </div>
                       
                   <br/>
                  <!-- Guardar empleado -->
                  <div class="offcanvas-footer text-center" style="padding:10px;">
                    <button class="btn btn-blue" type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;Guardar empleado</button>
                  </div>


            </form>
          </div>
        </div> 
 </div>
</div>

<!-- Fin Insertar Modal-->

<!-- ................................................................................................................................................-->

<!-- Subir archivo Modal-->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvaBottomUpload" aria-labelledby="offcanvasBottomLabel" style="height:55vh">
  <div class="offcanvas-header">
    <nav id="navbar-example2" class="navbar navbar-light px-3">
      <a class="navbar-brand">Subir baja de empleado firmada</a>
    </nav>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>


  <div class="offcanvas-body">
    <div class="container">
      <div class="row">
      </div>
      <div class="row">
        <form action="/guardar" method="post" enctype="multipart/form-data" >
          @csrf
          <div class="container">
            <input type="hidden"  id="idd" name="idd"/>
            <label for="file1" class="drop-container1">
                <span class="drop-title">Suelte archivo aquí</span>
                ó
                <input type="file" id="my-fileBaja"  name="urlpdf" required>
                <div class="valid-feedback fs-8">
                  ¡Se ve bien!
                </div>
                <div class="invalid-feedback fs-8">
                  ¡Por favor, sube el archivo de la baja firmada!
                </div>
            </label>
            <spam class="fs-8 text-secondary">Recuerde que solo se admite el formato ".pdf"</spam>
            <div  class="text-center">
              <button type="submit" class="btn btn-p col-md-2 col fw-light rounded-5 fs-8"><i class="fas fa-upload"></i>&nbsp;&nbsp; Subir</button></br></br>
            </div>
          </div>
        </form>
      </div>
    </div>
  
  </div>
</div>
<!-- Subir archivo Modal-->

<!-- ................................................................................................................................................-->

<!-- Eliminar Modal-->

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom1" aria-labelledby="offcanvasBottomLabel" style="height:70vh">

  <div class="offcanvas-header">
    <nav id="navbar-example2" class="navbar navbar-light px-3">
          <a class="navbar-brand">Baja Empleado</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link nav-it text-secondary fs-8" style="border-radius:20px;" href="#pas1">Paso - 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-it text-secondary fs-8" style="border-radius:20px;" href="#pas2">Paso - 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-it text-secondary fs-8" style="border-radius:20px;" href="#pas3">Paso - 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-it text-secondary fs-8"  style="border-radius:20px;background-color:#fff;" href="#pas4">Paso - 4</a>
              </li>
            
            </ul>
        </nav>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
    
    <div class="offcanvas-body small contenedor">
        <div class="container">
          <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <form action="{{route('Empleados.bajas')}}" method="POST"  class="g-3 needs-validation" novalidate>
              @csrf
                  {{------------------ Detalles de la baja--------------------}}
              <div class="mb-4 card p-5 cartaForm">
                  <h4 id="pas1">Paso 1. Información de baja</h4>
                  <br/>
                   <input  type="hidden" id="ids" name="ids"/>
                      <div class="row text-center">
                        <div class="container">
                          <hr/>
                            <div class="row mb-3">
                              <div  class="col-md-2" scope="row"><b>Nombre</b><br/><input type="text" name="nombre" id="nombre" /></div>
                              <div  class="col-md-2" scope="row"><b>Puesto</b><br/><input type="text"  name="t_puesto" id="t_puesto"/></div>
                              <div  class="col-md-3" scope="row"><b>Salario Diario Integrado</b><br/><input type="text" name="salario" id="salario"/></div>
                              <div  class="col-md-2" scope="row"><b>Salario Mensual</b><br/><input type="text" name="salarioMensual" id="salarioMensual"/></div>
                              <div  class="col-md-2" scope="row"><b>Fecha de Ingreso</b><br/><input type="text" name="fecha_ingresoe" id="fecha_ingreso_empelado" /> </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4"></div>
                              <div  class="col" scope="row"><b>Tipo Infonavit</b><br/><input type="text" name="t_infonavit" id="t_infonavit" /></div>
                              <div  class="col" scope="row"><b>Empresa</b><br/><input type="text" name="empresa" id="empresa" /></div>
                              <div class="col-md-4"></div>
                            </div>
                            <hr/>
                        </div>
                      </div>
              </div> 
             
                {{------------------ Descripcion de baja--------------------}}
              <div class="mb-4 card p-5 cartaForm" >
                <h4 id="pas2">Paso 2. Detalles de baja</h4>
                <div class="row">
                      <div class="col-md-4">
                        <label class="form-label" for="form8Example4">Tipo de Baja</label> 
                        <select name="tipo_baja" class="form-select" required>
                            <option  selected value="finiquito">Finquito</option>
                        </select>
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                      </div>

                      <div class="col-md-8">
                      <div class="form-outline">
                        <label class="form-label" for="form8Example4">Descripcion de la baja</label>         
                          <textarea class="form-control" name="descripcion_baja"  placeholder="Redacte descripción de baja" maxlength="250" minlength="5" required></textarea>
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
              
                {{------------------ Percepciones--------------------}}
              <div class="mb-4 card p-5 cartaForm">
               <h4 id="pas3">Paso 3. Percepciones</h4>
                <div class="row text-center">
                  <div class="col">
                    <label class="fs-6">Pagar dias de vacaciones
                      <input style="border: .5px solid rgb(165, 165, 165);width:15px;height:15px;" class="form-check-input" type="checkbox"  id="terminos" value="1" onclick="terminos_cambio(this)" />
                    </label>
                  </div>
                </div>
                <hr/> 

                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4" id="Efectivo">
                    <label class="form-label">fecha de baja</label>
                    <input type="date" name="fecha_baja" id="fecha_baja" class="form-control" placeholder="00.00" required />
                  </div>
                  <div class="col-md-4"></div>

                </div>
                      
                  <div class="row">

                  


                    <div class="col">
                      <div class="form-outline">
                        <label class="form-label" >Dias de Gratificacion</label>
                          <select name="diasgratificacion" id="diasgratificacion" class="form-select" required>
                            <option value="">Seleccionar gratificación...</option>
                            {{-- <option selected value="0">Seleccionar los dias a Gratificar</option> --}}
                            <option  value="0">0</option>
                            <option  value="10">10</option>
                            <option  value="15">15</option>
                            <option  value="20">20</option>
                            <option  value="30">30</option>
                            <option  value="40">40</option>
                            <option  value="50">50</option>
                            <option  value="60">60</option>
                            <option  value="70">70</option>
                            <option  value="80">80</option>
                            <option  value="90">90</option>
                          </select>
                      </div>
                    </div>
        
                    <div class="col">
                      <div class="form-outline">
                      <label class="form-label" >Dias trabajados Aguinaldo</label>
                        <input type="text" name="dias_trabajados" id="dias_trabajados" class="form-control" placeholder="10" required/>
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
                      <label class="form-label" >Dias trabajados a deber</label>
                        <input type="text" Name="dias_trabajadosa_deber" id="dias_trabajadosa_deber" class="form-control" placeholder="10" required/>
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
                      <label class="form-label" >Dias de vacaciones no tomados</label>
                        <input type="text" Name="dias_vacaciones" id="vacaciones_notomadas" class="form-control" placeholder="0" value="0"  required/>
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
                      <label class="form-label" >Sueldo proporcional</label>
                        <input type="text" Name="sueldo_poporcional" id="sueldo_poporcional" class="form-control" placeholder="00.00"  required/>
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                      </div>
                    </div>
                    {{---------------------------------------Ya no lo aplicamos-------------------------------------}}
                    {{-- <div class="col" hidden>
                      <div class="form-outline">
                      <label class="form-label"  hidden >Dias de vacaciones a deber</label>
                        <input type="text" Name="dias_vacaciones" id="dias_vacaciones" class="form-control" placeholder="0" value="0"   hidden/>
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                      </div>
                    </div> --}}
                    {{---------------------------------------Ya no lo aplicamos-------------------------------------}}
     
                  </div>

                  <div class="row">
              
                    
                    <div class="col">
                      <!-- Email input -->
                      <div class="form-outline">
                      <label class="form-label" >Cantidad Gratificacion</label>
                        <input type="text" Name="gratificacion" id="gratificacion" class="form-control" placeholder="00.00"  required/>
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
                      <label class="form-label" >Aguinaldo proporcional</label>
                        <input type="text" Name="Aguinaldo_poporcional" id="Aguinaldo_poporcional" class="form-control" placeholder="00.00"  required/>
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
                      <label class="form-label" >Prima Vacacional</label>
                        <input type="text" Name="vacaciones_poporcionales" id="vacaciones_poporcionales" class="form-control" placeholder="00.00" value="0.0" required/>
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
                      <label class="form-label" >Otras</label>
                        <input type="text" Name="otras" id="otras" class="form-control" placeholder="00.00" value="0.0" required/>
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
                      <label class="form-label" >Total de percepciones</label>
                        <input  type="text" Name="total_p" id="total_p" class="form-control"  required/>
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          ¡Recuerde volver a calcular la baja para continuar!
                        </div>
                      </div>
                    </div>


                  </div>
              </div>

              {{------------------ Deducciones--------------------}}               
              <div class="mb-4 card p-5 cartaForm">
                <div class="row">
                  <h4 id="pas3">Paso 4.Deducciones</h4>
                      <div class="row">
                        <div class="col">
                            <!-- Email input -->
                            <div class="form-outline">
                            <label class="form-label" >Imss</label>
                              <input type="text" Name="imms" id="imms" class="form-control"  required/>
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
                            <label class="form-label" >Infonavit</label>
                              <input type="text" Name="infonavit" id="infonavit" class="form-control" placeholder="00.00" value="0.00" required/>
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
                            <label class="form-label" >Transporte</label>
                              <input type="text" Name="transporte" id="transporte" class="form-control" placeholder="00.00" value="0.00" required />
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
                          <label class="form-label" >Prestamo</label>
                            <input type="text" Name="prestamo" id="prestamo" class="form-control" placeholder="00.00" value="0.00" required />
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
                          <label class="form-label" >Otras deducciones</label>
                            <input type="text" Name="otras" id="otras" class="form-control" placeholder="00.00"  value="0.00" required />
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
                          <label class="form-label" >Total de Deducciones</label>
                            <input  type="text" Name="total_d" id="total_d" class="form-control"  required/>
                            <div class="valid-feedback">
                              ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                              ¡Recuerde volver a calcular la baja para continuar!
                            </div>
                          </div>
                        </div>
                      </div>
          
                  {{-- <div class="col-md-2"> --}}
                    
                  {{-- </div> --}}
                </div>
             </div>    

                {{------------------ Herramientas--------------------}}
              <div class="mb-4 row">
                <div class="col-md-8">
                  <div class="form-outline">
                    <button style="height:50px;width:100%;" class="btn btn-success" type="button" onclick="operaciones()"><i class="fas fa-calculator"></i>&nbsp;Calcular</button>         
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-outline">
                    <button style="height:50px;width:100%;" class="btn btn-outline-primary" type="button" onclick="limpiar()"><i class="fas fa-broom"></i>&nbsp;Limpiar</button>  
                  </div>
                </div>
              </div>                    

                       

              <div class="mb-4 card p-5 cartaForm">
                <h4 id="pas4">Paso 5.Cantidad a entregar</h4>
                <div class="row text-center">
                  <div class="col-md-3">
                   <input type="text" Name="total_entregar" id="total_entregar" class="form-control" placeholder="00.00" value="0" required />
                  </div>
                </div>
              </div>
              <br/>
                  
              
              <div class="offcanvas-footer text-center" style="padding:10px;">
                <button class="btn btn-blue"  type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;Guardar baja</button>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>

<!--Fin Eliminar Modal-->

<!-- ................................................................................................................................................-->

<script src="{{ asset('js/tablaEmpleados.js') }}"></script>
<script src="{{ asset('js/calculosEmpleados.js') }}"></script>
<script src="{{ asset('js/btnBack1.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/validaPDF.js')}}"></script>
@endsection