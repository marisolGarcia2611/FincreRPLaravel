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
          echo 'swal("¡No se a efectuado la acción!","Recuerde llenar todos los campos y que formato permitido de archivos es .pdf","warning", {buttons: false,timer: 3000});';
          echo '</script>';  
  @endphp

@endif

{{-- ALERTAS --}}

<div class="mt-4 p__little">
    <br/>
    <br/>
  
    {{--------------------------- Encabezado de la pagina----------------------}}
      <center class="container bg-p">
            <div class="col-md-12">
              <h2 class="mt-3 mb-3 fw-light animate_animated animate_backInLeft">Catalogo de Empleados</h2> 
            </div>
            <div class="col-md-12">
              <div class="row mt-3 text-end">
                <div class="col-md-2 d-md-block d-none"></div>
                <div class="col-md-2 mar-l">
                  <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><i class="fas fa-plus"></i>&nbsp; Añadir </button> 
                </div>
                <div class="col-md-2">
                  <form action="{{ route('Empleados.exportar_excel') }}">
                  <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-download"></i>&nbsp; Exportar </button> 
                  </form>            
                </div>
                <div class="col-md-2">
                  <form action="{{ route('Empleados.grafica_empleados') }}">
                  <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-chart-pie"></i>&nbsp;Gaficar </button> 
                  </form>
                </div>
                <div class="col-md-4 d-md-block d-none">
            
              </div>
            </div>
      </center> 
     
      <br/>
      @csrf

      {{--------------------------- Cuerpo de la tabla----------------------}}
    <center>
      <div class="shadow-lg mb-5 bg-body rounded border-0" style="margin:20px;width:95%;">
        <div class="table-responsive pad-table" id="mydatatable-container">     
          <table class="table table-hover " id="tblempleados">
            <thead class="table">
                  <tr class="tr-table"> 
                  <th class="text-center fw-light">Baja</th>
                  <th class="text-center fw-light">Editar</th>
                  <th  class="text-center fw-light"># </th>
                  <th class="text-center fw-light"> Foto</th>
                  <th  class="text-center fw-light">Primer Nombre</th>
                  <th  class="text-center fw-light">Segundo Nombre</th>
                  <th  class="text-center fw-light">Apellido Paterno</th>
                  <th  class="text-center fw-light">Apellido Materno</th>
                  <th  class="text-center fw-light">Estado</th>   
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
                  <th  class="text-center fw-light"># Credito infonavit</th>   
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
              @foreach($varlistaempleados as $vis)
                <tr>
                  {{--------------------- Herramientas de la tabla--------------------}}
                  <td class="td-tools">
                    @if($vis->estado == "A") 
                      <button class="text-light btn  fas fa-trash"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom" id="{{$vis->id}}" ></button>
                    @elseif($vis->archivo_baja=="1")
                      <a class="text-light btn btn fas fa-eye" target="_blank"  href="DetallesEmpleados/bajas/baja_{{$vis->idempleado}}.pdf"></a>
                      
                    @else
                      <button class="text-light btn fas fa-upload"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvaBottomUpload" aria-controls="offcanvasBottom" id="{{$vis->id}}" ></button>
                    @endif
                  </td>
                
                  <td class="td-tools">
                    <form action="/Empleados/{{$vis->idempleado}}/edit">
                      <button class="text-light btn fas fa-edit bor"  type="submit"></button>
                    </form>
                  </td>

                  <td class="bg-1">{{$vis->idempleado}}</td>
                  <td class="bg-1">
                    @if($vis->foto == "0") 
                      <img class="pImage" src="Images/Perfil/0.jpg"/>
                    @else
                      <img class="pImage zoom" src="Images/Perfil/{{$vis->idempleado}}.jpg" alt="foto"/>
                    @endif
                     
                  </td>
                  <td class="bg-2">{{$vis->primer_nombre}}</td>
                  <td class="bg-2">{{$vis->segundo_nombre}}</td>
                  <td class="bg-2">{{$vis->apellido_paterno}}</td>
                  <td class="bg-2">{{$vis->apellido_materno}}</td>
                  @if($vis->estado=='A')
                  <td class="bg-1 text-center" ><div class="bg-4 circle col-md-4"></div> <div class="col-md-4 fw-light text-succes fs-9">ACTIVO</div> </td>
                  @else
                  <td class="bg-1 text-center" ><div class="bg-5 circle col-md-4"></div> <div class="col-md-4 fw-light text-danger fs-9">INACTIVO</div> </td>
                  @endif
                  <td class="bg-1">{{$vis->descripcion_estado}}</td>
                  <td class="bg-1">{{$vis->estado_civil}}</td>
                  <td class="bg-1">{{$vis->telefono}}</td>            
                  <td class="bg-1">{{$vis->correo}}</td>
                  <td class="bg-1">{{$vis->nacionalidad}}</td>
                  <td class="bg-1">{{$vis->ciudad}}</td>
                  <td class="bg-1">{{$vis->calle}}</td>
                  <td class="bg-1">{{$vis->colonia}}</td>
                  <td class="bg-1">{{$vis->numero_interior}}</td>
                  <td class="bg-1">{{$vis->numero_exterior}}</td>
                  <td class="bg-1">{{$vis->codigo_postal}}</td>
                  <td class="bg-1">{{$vis->sexo}}</td>
                  <td class="bg-1">{{$vis->tipo_sangre}}</td>
                  <td class="bg-1">{{$vis->fecha_nacimiento}}</td>
                  <td class="bg-3">{{$vis->grado_estudio}}</td>
                  <td class="bg-3">{{$vis->puesto}}</td>
                  <td class="bg-1">{{$vis->fecha_ingreso}}</td>
                  <td class="bg-1">{{$vis->nombre_empresa}}</td>
                  <td class="bg-1">{{$vis->sucursal}}</td>
                  <td class="bg-3">{{$vis->salario_bruto}}</td>
                  <td class="bg-3">{{$vis->salario_neto}}</td>
                  <td class="bg-3">{{$vis->salario_fijo}}</td>
                  <td class="bg-1">{{$vis->idinfonavit}}</td>
                  <td class="bg-1">{{$vis->nombreinfonavit}}</td>
                  <td class="bg-1">{{$vis->numero_credito_infonavit}}</td>
                  <td class="bg-1">{{$vis->factor_sua}}</td>
                  <td class="bg-1">{{$vis->descuento_quincenal}}</td>
                  <td class="bg-3">{{$vis->banco}}</td>
                  <td class="bg-3">{{$vis->numero_tarjeta}}</td>
                  <td class="bg-3">{{$vis->numero_cuenta}}</td>
                  <td class="bg-3">{{$vis->rfc}}</td>
                  <td class="bg-3">{{$vis->nss}}</td>
                  <td class="bg-3">{{$vis->curp}}</td>
                  <td class="bg-1">{{$vis->fecha_ingreso_imss}}</td>
                  <td class="bg-1">{{$vis->pago_imss}}</td>
                  <td class="bg-1">{{$vis->sueldo_fiscal}}</td>
                  <td class="bg-1">{{$vis->excedente}}</td>
                  <td class="bg-1">{{$vis->efectivo}}</td>
                  <td class="bg-2">{{$vis->contacto_emergencia}}</td>
                  <td class="bg-2">{{$vis->telefono_emergencia}}</td>
                
                </tr>
      
                @endforeach
            </tbody>
          </table>
        </div>  
      </div>
    </center> 

    <br/>
    <br/>
</div>

<!-- ................................................................................................................................................-->

<!-- Subir archivo Modal-->
<div class="offcanvas offcanvas-bottom sudmit" tabindex="-1" id="offcanvaBottomUpload" aria-labelledby="offcanvasBottomLabel" style="height:70vh">
  <div class="offcanvas-header">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
    <h1>Subir archivo</h1>
    <h2>Favor de subir el comprobante de la baja</h2>
    <form action="/guardar" class="text-center" method="post" enctype="multipart/form-data" >
      @csrf
      <div class="text-center">
        <input type="hidden"  id="idd" name="idd"/>
        <div class="input-file-container">  
          <input class="input-file" id="my-file" type="file" name="urlpdf">
            <label for="my-file"name="my-file" style="border-radius:100px;" class="input-file-trigger"><h1 class="text-light"><i class="fas fa-file-upload"></i></h1></label>
            <p class="file-return"></p>
            <br/>
            <hr/>
            <button class="btn" type="submit" value="subir"><h3 style="color:#2B86C5!important;"><i class="fas fa-paper-plane"></i></h3></button>
        </div>
      </div>
    </form>
    <p class="txtcenter">Recuerde que solo se admite el formato ".pdf"</p>
  </div>
</div>
<!-- Subir archivo Modal-->

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
            <form action="" method="POST" enctype="multipart/form-data" class="g-3 needs-validation" novalidate>
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
                        <input type="text"  name="correo" id="correo" class="form-control" minlength="3" maxlength="60"   required />
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
                      <label class="form-label" >Fecha de alta</label>
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
                <div class="col-md-4 d-md-block d-none"></div>
                <div class="col-md-4 text-center ">
                    <h5>Contrato de Empleado</h5>
                    <div class="orientatioInp">
                      <input class="input-filee" id="my-filee" type="file" name="urlpdff" required/>
                      <label for="my-filee"name="my-filee" style="border-radius:100px;" class="input-filee-trigger"><h1 class="text-light"><i class="fas fa-file-upload"></i></h1></label>
                      <p class="filee-return"></p>
                    </div>
                    <p class="txtcenter">Recuerde que solo se admite el formato ".pdf"</p> 
                </div>
                <div class="col-md-4 d-md-block d-none"></div>
              </div>
            </div>
            
            <div class="card p-5 cartaForm mb-4">
                  <h4 id="paso2">Paso 2. Salario</h4>
                  <div class="row">
                    <div class="col">
                      <!-- Name input -->
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
                      <!-- Email input -->
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
                      <!-- Email input -->
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
                        <!-- Name input -->
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
                      <!-- Email input -->
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
                      <!-- Name input -->
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
                      <!-- Email input -->
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
                      <!-- Email input -->
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
                      <!-- Email input -->
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
                      <!-- Email input -->
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
                      <!-- Name input -->
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
                  <div class="row">
                    {{-- <div class="col-md-3" id="nss">
                      <label class="form-label">Desglose de IMSS</label>
                      <input type="text" name="pago_IMSS" id="pago_IMSS" class="form-control" placeholder="00.00" value="0.00"maxlength="8" required />
                      <div class="valid-feedback">
                        ¡Se ve bien!
                      </div>
                      <div class="invalid-feedback">
                        Por favor, completa la información requerida.
                      </div>
                    </div> --}}
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
                      
                      <br>
                  
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
                <a class="nav-link nav-it text-secondary fs-8" style="border-radius:20px;" href="#pas4">Paso - 4</a>
              </li>
            
            </ul>
        </nav>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
    
    <div class="offcanvas-body small contenedor">
        <div class="container">
          <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <form action="{{route('Empleados.bajas')}}" method="POST" onsubmit="setTimeout(function(){window.location.reload();},1500);"  class="g-3 needs-validation" novalidate>
              @csrf
                  {{------------------ Detalles de la baja--------------------}}
              <div class="card p-5 cartaForm">
                  <h4 id="pas1">Paso 1. Información de baja</h4>
                  <br/>
                   <input  type="hidden" id="ids" name="ids"/>
                      <div class="row text-center">
                        <table class="table">
                          <thead>
                            <tr class="row">
                              <th  class="col" scope="col">Nombre</th>
                              <th  class="col" scope="col">Puesto</th>
                              <th  class="col" scope="col">Salario Diario Integrado</th>
                              <th  class="col" scope="col">Salario Mensual</th>
                              <th  class="col" scope="col">Fecha de Ingreso</th>
                              <th  class="col" scope="col">Tipo Infonavit</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="row">
                              <td  class="col" scope="row"><input type="text" name="nombre" id="nombre" /></td>
                              <td  class="col" scope="row"><input type="text"  name="t_puesto" id="t_puesto"/></td>
                              <td  class="col" scope="row"><input type="text" name="salario" id="salario"/></td>
                              <td  class="col" scope="row"><input type="text" name="salarioMensual" id="salarioMensual"/></td>
                              <td  class="col" scope="row"><input type="text" name="fecha_ingresoe" id="fecha_ingreso_empelado" /> </td>
                              <td  class="col" scope="row"><input type="text" name="t_infonavit" id="t_infonavit" /></td>
                            </tr>
                          </tbody> 
                        </table>
                      </div>
              </div> 
              <br/>
              <br/> 

                {{------------------ Descripcion de baja--------------------}}
              <div class="card p-5 cartaForm" >
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
                          <textarea class="form-control" name="descripcion_baja" placeholder="Detalle el motivo de la baja del empleado" maxlength="250" minlength="5" required>	</textarea>
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
              <br/>
              <br/> 
              
                {{------------------ Percepciones--------------------}}
              <div class="card p-5 cartaForm">
               <h4 id="pas3">Paso 3. Percepciones</h4>
                <div class="row text-center">
                  <div class="col">
                    <label class="fs-6">Aplicar prima vacacional 
                      <input style="border: .5px solid rgb(165, 165, 165);width:15px;height:15px;" class="form-check-input" type="checkbox"  id="terminos" value="1" onclick="terminos_cambio(this)" />
                    </label>
                  </div>
                </div>
                <hr/> 
                      
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
                        <input type="text" Name="dias_trabajados" id="dias_trabajados" class="form-control" placeholder="10" />
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
                        <input type="text" Name="dias_trabajadosa_deber" id="dias_trabajadosa_deber" class="form-control" placeholder="10" />
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
                        <input type="text" Name="vacaciones_notomadas" id="vacaciones_notomadas" class="form-control" placeholder="0" value="0"  />
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
                      <label class="form-label" >Dias de vacaciones a deber</label>
                        <input type="text" Name="dias_vacaciones" id="dias_vacaciones" class="form-control" placeholder="0" value="0"  />
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
                      <label class="form-label" >Cantidad Gratificacion</label>
                        <input type="text" Name="gratificacion" id="gratificacion" class="form-control" placeholder="00.00"  />
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
                      <label class="form-label" >Sueldo proporcional</label>
                        <input type="text" Name="sueldo_poporcional" id="sueldo_poporcional" class="form-control" placeholder="00.00"  />
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
                        <input type="text" Name="Aguinaldo_poporcional" id="Aguinaldo_poporcional" class="form-control" placeholder="00.00"  />
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
                      <label class="form-label" >Vacaciones Proporcionales</label>
                        <input type="text" Name="vacaciones_poporcionales" id="vacaciones_poporcionales" class="form-control" placeholder="00.00" value="0.0" />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                      </div>
                    </div>


                    <div class="col-md-4" id="Efectivo">
                      <label class="form-label">fecha de baja</label>
                      <input type="date" name="fecha_baja" id="fecha_baja" class="form-control" placeholder="00.00" required />
                    </div>

                    <div class="col">
                      <!-- Email input -->
                      <div class="form-outline">
                      <label class="form-label" >Total de percepciones</label>
                        <input  type="text" Name="total_p" id="total_p" class="form-control"  />
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
              <br/>
              <br/> 

                {{------------------ Herramientas--------------------}}
              <div class="row">
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
              <br/>
              <br/> 

                  {{------------------ Deducciones--------------------}}               
              <div class="card p-5 cartaForm">
                  <div class="row">
                    <h4 id="pas3">Paso 3.Deducciones</h4>
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
                              <input  type="text" Name="total_d" id="total_d" class="form-control"  />
                              <div class="valid-feedback">
                                ¡Se ve bien!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                              </div>
                            </div>
                          </div>
                        </div>
            
                    {{-- <div class="col-md-2"> --}}
                       
                    {{-- </div> --}}
                  </div>
              </div>             
              <br/>
              <br/>

              <div class="card p-5 cartaForm">
                <h4 id="pas4">Paso 4.Cantidad a entregar</h4>
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
{{-- <script>
    function refreshPage(){
        window.location.reload();
    } 
</script> --}}
<script>
  $(document).ready(function() {
    $('#nss').hide();
    $('#excedente').hide();
    $('#Efectivo').hide();
    $('#sueldo_fiscal').hide();
    $('#vacaciones_poporcionales').hide();
    $('#dias_vacaciones').hide();
    $('#vacaciones_poporcionales').hide();
    $('#dias_vacaciones').hide();
    $('#tipo_descuento_infonavit').hide();
    $('#factor_sua').hide();
    $('#descuento_quincenal').hide();
    $('#numero_credito_infonavit').hide();
    $('#vacaciones_notomadas').hide();



    $("table tbody tr").click(function() {

      //obtenemos el id del empleado
      var id = $(this).find("td:eq(2)").text();

      //obtenemos el nombre completo mediante la tabla
      var nombre = $(this).find("td:eq(5)").text();
      var nombre2 = $(this).find("td:eq(6)").text();
      var Apellido_p = $(this).find("td:eq(7)").text();
      var Apellido_m = $(this).find("td:eq(8)").text();
      var pago_imms =  $(this).find("td:eq(43)").text();
      var tipo_descuentoinfo = $(this).find("td:eq(32)").text();
      var factorsua = $(this).find("td:eq(34)").text();
      var puesto_e = $(this).find("td:eq(24)").text();

      //obtenemos el salario del empleado
      var salario = $(this).find("td:eq(29)").text();
      var salarioMensual = $(this).find("td:eq(28)").text();
      //obtenemos la fecha de alta del empleado
    var fecha_ingreso_empelado = $(this).find("td:eq(25)").text();
    //obtenemos el imput que llenaremos mediante javascript


    var nombrecompleto=document.getElementById('nombre');
    var salariosoperaciones=document.getElementById('salario');
    var fecha_ingreso=document.getElementById('fecha_ingreso_empelado');
    var tipoinfo=document.getElementById('t_infonavit');
    var puesto_empleado=document.getElementById('t_puesto');


    //llenamos los imput mediante javascript





  $("#imms").val(parseFloat(pago_imms).toFixed(2));
  $("#infonavit").val(parseFloat(factorsua).toFixed(2));
  $("#nombre").val(nombre+' '+nombre2+' '+Apellido_p+' '+Apellido_m);
  $("#salario").val(salario);
  $("#salarioMensual").val(salarioMensual);
  $("#fecha_ingreso_empelado").val(fecha_ingreso_empelado);
  $("#t_infonavit").val(tipo_descuentoinfo);
  $("#t_puesto").val(puesto_e);






    //obtenemos los datos para calcular dias de aguinaldo del empleado
      var fechaIni = new Date(fecha_ingreso.innerText);
      var fechaFin = new Date();
      const añoinicio = fechaIni.getFullYear();
      const mesinicio = fechaIni.getMonth()+1;
      const diainicio = fechaIni.getDate();
      const añoactual = fechaFin.getFullYear();
      const diahoy = fechaFin.getDate();
      const mes = fechaFin.getMonth()+1;
      var diff = fechaFin - fechaIni;

      if (añoinicio == añoactual){

        fechaIni = new Date(añoinicio+'-'+mesinicio+'-'+diainicio);
      }
      else{
        fechaIni = new Date(añoactual+'-01-01');
      }
    diff = fechaFin - fechaIni;
    diferenciaDias = Math.floor(diff / (1000 * 60 * 60 * 24));
      $("#dias_trabajados").val(diferenciaDias);



      if(diahoy >= 16 &&  diahoy <= 31){
        var fecha_ini_sueldopropo = new Date(añoactual+'-'+mes+'-16');
      }
      if(diahoy >= 01 && diahoy <= 15)
      {
        var fecha_ini_sueldopropo = new Date(añoactual+'-'+mes+'-01');
      }
    
      var diff = fechaFin - fecha_ini_sueldopropo;
      diferenciaDiass = Math.floor(diff / (1000 * 60 * 60 * 24));

    if(diferenciaDiass >diferenciaDias ){
      
      $("#dias_trabajadosa_deber").val(diferenciaDiass-1);
    }
    else{
      
      $("#dias_trabajadosa_deber").val(diferenciaDiass+1);
    }
    
      $("#ids").val(id);
      $("#idd").val(id);
      $("#emp").val(id);

      document.getElementById("emple").value = val(id);
    
  });

    var table = $('#tblempleados').DataTable( {
          "dom": 'B<"float-left"l><"float-right"f>t<"float-left"i><"float-right"p><"clearfix">',
          responsive: true,
          scrollY: 500,
          scrollX: true,
          "language": {
              "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
          },
          
      } );
      new $.fn.dataTable.FixedHeader( table );
  });



  $("#cmbempresas").change(function(){
    var id = $(this).val(); 
    var empresa = $(this).find('option:selected').text(); 
    if(empresa == "Sin imss")
    {
        // $('#nss').hide();
        $('#excedente').hide();
        $('#Efectivo').show();
        $('#sueldo_fiscal').hide();
    
    }
    else
    {
        // $('#nss').hide();
        $('#excedente').show();
        $('#Efectivo').hide();
        $('#sueldo_fiscal').show();
    }
      });
</script>
<script>

  function terminos_cambio(checkbox){
      //Si está marcada ejecuta la condición verdadera.
      if(checkbox.checked){
        $('#vacaciones_poporcionales').show();
        $('#dias_vacaciones').show();
        $('#vacaciones_notomadas').show();


      }
      //Si se ha desmarcado se ejecuta el siguiente mensaje.
      else{
        $('#vacaciones_poporcionales').hide();
        $('#dias_vacaciones').hide();
        $("#vacaciones_poporcionales").val(0);
        $("#dias_vacaciones").val(0);
        $('#vacaciones_notomadas').hide(0);
      }
  }

  function chekinfonavit(checkbox){
      //Si está marcada ejecuta la condición verdadera.
      if(checkbox.checked){
        $('#tipo_descuento_infonavit').show();
        $('#factor_sua').show();
        $('#descuento_quincenal').show();
        $('#numero_credito_infonavit').show();

      }
      //Si se ha desmarcado se ejecuta el siguiente mensaje.
      else{
        $('#tipo_descuento_infonavit').hide();
        $('#factor_sua').hide();
        $('#descuento_quincenal').hide();
        $('#numero_credito_infonavit').hide();
        $("#descuento_quincenal").val(0);
        $("#factor_sua").val(0);
      
      }
  }


    function operaciones()
    {

      var salarioc =$("#salario").val();
      var salarioM= $("#salarioMensual").val();
      var diagratificacion = document.getElementById("diasgratificacion").value;
      var diastrabajados = $("#dias_trabajados").val();
      var diastrabajadosdeber = $("#dias_trabajadosa_deber").val();
      var diasvacaciones = $("#dias_vacaciones").val();
      var vacacionesnotomadas = $("#vacaciones_notomadas").val();
      var deduccionimms =  $("#imms").val();
      var deduccioninfonavit =  $("#infonavit").val();
      var deducciontransporte =  document.getElementById("transporte").value;
      var deduccionorestamo =  $("#prestamo").val();
      var deduccionotroa =  $("#otras").val();

      //en este apartado vamos a calcular lo que debe de infonavit segun su credito

      var tipopago =  $("#t_infonavit").val();
      var saldoadeberinfonavit=0;

      pagosuainfonavit =  $("#infonavit").val();
    

      if(pagosuainfonavit==parseFloat(0).toFixed(2));
      {
        saldoadeberinfonavit=0;
      }
      if(tipopago == 'CF' && pagosuainfonavit  != parseFloat(0).toFixed(2))
      {
        pagosuainfonavit =  $("#infonavit").val();
        saldoadeberinfonavit = (pagosuainfonavit*2)/61*(diastrabajadosdeber)+15;
      }
      if(tipopago == 'VSM' && pagosuainfonavit  != parseFloat(0).toFixed(2))
      {
        pagosuainfonavit =  $("#infonavit").val();
        saldoadeberinfonavit = (pagosuainfonavit*103.74*2)/61*(diastrabajadosdeber)+15;
      }
    

      var aguinaldo = 15/365*diastrabajados*salarioc;
      var gratificacion = diagratificacion*salarioc;
      var sueldopropo = salarioc*diastrabajadosdeber;
      var vacacionesproporcional = (((salarioM/30.4)* diasvacaciones)*.25)+(vacacionesnotomadas*salarioc);
      var totalpercepciones = aguinaldo+gratificacion+sueldopropo+vacacionesproporcional;
      //falta agregar las demas deducciones
    

    
      var total = ((((((aguinaldo+gratificacion+sueldopropo+vacacionesproporcional)-parseFloat(deduccionimms).toFixed(2))-parseFloat(saldoadeberinfonavit).toFixed(2)-parseFloat(deducciontransporte).toFixed(2))-parseFloat(deduccionorestamo).toFixed(2))-parseFloat(deduccionotroa).toFixed(2)));
      let totaldeduccion =total-(aguinaldo+gratificacion+sueldopropo+vacacionesproporcional);
    

    // calculamos el aguinaldo del empleado a deber segun la fecha de ingreso
      $("#Aguinaldo_poporcional").val(parseFloat(aguinaldo).toFixed(2));
      $("#total_p").val(parseFloat(totalpercepciones).toFixed(2));
      $("#total_d").val(parseFloat(totaldeduccion).toFixed(2).substr(1,15));
      $("#gratificacion").val(parseFloat(gratificacion).toFixed(2));
      $("#sueldo_poporcional").val(parseFloat(sueldopropo).toFixed(2));
      $("#vacaciones_poporcionales").val(parseFloat(vacacionesproporcional).toFixed(2));
      $("#infonavit").val(parseFloat(saldoadeberinfonavit).toFixed(2));
      $("#total_entregar").val(parseFloat(total).toFixed(2));
    
    
  //sumamos el total de dinero a otorgar al trabajador
    
    }

    function limpiar()
    {
      $("#Aguinaldo_poporcional").val(parseFloat(0).toFixed(2));
      $("#total_p").val(parseFloat(0).toFixed(2));
      $("#total_d").val(parseFloat(0).toFixed(2));
      $("#gratificacion").val(parseFloat(0).toFixed(2));
      $("#sueldo_poporcional").val(parseFloat(0).toFixed(2));
      $("#vacaciones_poporcionales").val(parseFloat(0).toFixed(2));
    
    }
</script>

{{----------------------------------- Script de validacion de formulario---------------------------- --}}
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

{{----------------------------------- Script de carga de archivos 1---------------------------- --}}
<script>
  document.querySelector("html").classList.add('js');

    var fileInput  = document.querySelector( ".input-file" ),  
        button     = document.querySelector( ".input-file-trigger" ),
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

{{----------------------------------- Script de carga de archivos 1---------------------------- --}}

<script>
  document.querySelector("html").classList.add('js');

    var fileInput  = document.querySelector( ".input-filee" ),  
        button     = document.querySelector( ".input-filee-trigger" ),
        the_return = document.querySelector(".filee-return");
          
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