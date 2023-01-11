@extends('layouts.app')
@section('content')
<div class="container mt-5 p__little">
  <div class="row" style="margin-left:10px; ">

     
      <div class="col-md-6">
        <h4 class="mt-3 mb-3 animate__animated animate__backInLeft">Catalogo de Empleados</h4> 
      </div>
      <div class="col-md-6">
        <div class="row mt-3 text-end">
          <div class="col-md-3 d-md-block d-none"></div>
          <div class="col-md-3">
            <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><i class="fas fa-plus"></i>&nbsp; Añadir </button> 
          </div>
          <div class="col-md-3">
            <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-download"></i>&nbsp;Exportar </button> 
          </div>
          <div class="col-md-3">
            <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-chart-pie"></i>&nbsp; Gráfica </button> 
          </div>
          {{-- <div class="col-md-4">
            <button  type="button" class="btn push2 bt_tool1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><h2><i class="fas fa-plus"></i></h2></button> 
          </div>
          <div class="col-md-4">
            <button  type="button" class="btn push2 bt_tool2"><h2><i class="fas fa-download"></i></h2></button>
          </div>
          <div class="col-md-4">
            <button  type="button" class="btn push2 bt_tool3"><h2><i class="fas fa-chart-pie"></i></h2></button>
          </div> --}}
        </div>
      </div>
  </div>  
  
  
  
  <div style="background-color: #fff;border-radius:30px;">
    <div class="table-responsive" style="padding:30px;padding-bottom:10px;" id="mydatatable-container">     
      <table class="table table-hover" id="tblempleados">
        <thead class="table">
          <tr>
            <th class="text-center fw-light">Herramientas</th>
            <th  class="text-center fw-light">Primer Nombre</th>
            <th  class="text-center fw-light">Segundo Nombre</th>
            <th  class="text-center fw-light">Apelleido Paterno</th>
            <th  class="text-center fw-light">Apellido Materno</th>
            <th  class="text-center fw-light">Telefono</th>
            <th  class="text-center fw-light">Correo</th>
            <th  class="text-center fw-light">Puesto</th>
            <th  class="text-center fw-light">Sucursal</th>
            <th  class="text-center fw-light">Ciudad</th>
            <th  class="text-center fw-light">Calle</th>
            <th  class="text-center fw-light">Colonia</th>
            <th  class="text-center fw-light">Numero Interior</th>
            <th  class="text-center fw-light">Numero Exterior</th>
            <th  class="text-center fw-light">Codigo Postal</th>
            <th  class="text-center fw-light">Sexo</th>
            <th  class="text-center fw-light">Fecha de Nacimiento</th>
            <th  class="text-center fw-light">Salario Bruto</th>
            <th  class="text-center fw-light">Salario Neto</th>
            <th  class="text-center fw-light">Banco</th>
            <th  class="text-center fw-light">Numero de Tarjeta</th>
            <th  class="text-center fw-light">Numero de Cuenta</th>
            <th  class="text-center fw-light">RFC</th>
            <th  class="text-center fw-light">NSS</th>
            <th  class="text-center fw-light">Tipo de Sangre</th>
            <th  class="text-center fw-light">Contacto de Emergencia</th>
            <th  class="text-center fw-light">Telefono de Emergencia</th>
            <th  class="text-center fw-light">Estado del empleado</th>
            <th  class="text-center fw-light">Descripcion de estado</th>
            <th  class="text-center fw-light">Fecha Ingreso</th>
            <th  class="text-center fw-light">ID</th>
            <th  class="text-center fw-light">Pago imss</th>
            <th  class="text-center fw-light">Pago excedente</th>
            <th  class="text-center fw-light">Pago efectivo</th>

          

          </tr>
        </thead>
        
        <tbody>
          @foreach($varlistaempleados as $vis)
            <tr>
              <td class="table-light">
                  <div class="row">
                    <div class="col-md-6 text-start">
                      <button class="btn fas fa-trash text-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom" id="{{$vis->id}}" ></button>
                    </div>
                    <div class="col-md-6 text-start">
                      <button class="btn fas fa-edit text-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom" id="offcanvasBottom4" ></button> 
                    </div>
                  </div> 
              </td>
              <td class="table-info">{{$vis->primer_nombre}}</td>
              <td class="table-info">{{$vis->segundo_nombre}}</td>
              <td class="table-info">{{$vis->apellido_paterno}}</td>
              <td class="table-info">{{$vis->apellido_materno}}</td>
              <td class="table-primary">{{$vis->telefono}}</td>
              <td class="table-primary">{{$vis->correo}}</td>
              <td class="table-warning">{{$vis->puesto}}</td>
              <td class="table-primary">{{$vis->sucursal}}</td>
              <td class="table-primary">{{$vis->ciudad}}</td>
              <td class="table-primary">{{$vis->calle}}</td>
              <td class="table-primary">{{$vis->colonia}}</td>
              <td class="table-primary">{{$vis->numero_interior}}</td>
              <td class="table-primary">{{$vis->numero_exterior}}</td>
              <td class="table-primary">{{$vis->codigo_postal}}</td>
              <td class="table-primary">{{$vis->sexo}}</td>
              <td class="table-primary">{{$vis->fecha_nacimiento}}</td>
              <td class="table-warning">{{$vis->salario_bruto}}</td>
              <td class="table-warning">{{$vis->salario_neto}}</td>
              <td class="table-warning">{{$vis->banco}}</td>
              <td class="table-warning">{{$vis->numero_tarjeta}}</td>
              <td class="table-warning">{{$vis->numero_cuenta}}</td>
              <td class="table-warning">{{$vis->rfc}}</td>
              <td class="table-warning">{{$vis->nss}}</td>
              <td class="table-primary">{{$vis->tipo_sangre}}</td>
              <td class="table-info">{{$vis->contacto_emergencia}}</td>
              <td class="table-info">{{$vis->telefono_emergencia}}</td>
              @if($vis->estado=='Activo')
              <td class="table-success">{{$vis->estado}}</td>
              @else
              <td class="table-danger">{{$vis->estado}}</td>
              @endif
              <td class="table-primary">{{$vis->descripcion_estado}}</td>
              <td class="table-primary">{{$vis->fecha_ingreso}}</td>
              <td class="table-primary">{{$vis->id}}</td>
              <td class="table-primary">{{$vis->pago_imss}}</td>
              <td class="table-primary">{{$vis->excedente}}</td>
              <td class="table-primary">{{$vis->efectivo}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>  
  </div>
  <br/>
  <br/>



<!-- Insertar Modal-->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height:70vh">
      <div class="offcanvas-header">
        <nav id="navbar-example2" class="navbar navbar-light px-3">
          <a class="navbar-brand" href="#">Agregar Empleado</a>
          <ul class="nav nav-pills middle__font">
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading1">General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading2">Detalles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading3">Razón Social</a>
            </li>
          </ul>
        </nav>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body small">
          <div class="container">
            <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <form action="{{route('Empleados.store')}}" method="POST"  class="g-3 needs-validation" novalidate>
              @csrf
                  <h4 id="scrollspyHeading1">General</h4>
                    <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Primer Nombre</label>
                          <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre" placeholder="Introduzca el primer nombre" required />
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
                          <input type="text" id="segundo_nombre"  name="segundo_nombre" class="form-control" placeholder="Introduzca el segundo nombre"  required />
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
                          <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" placeholder="Introduzca el apellido parterno" required />
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
                          <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" placeholder="Introduzca el apellido materno" required />
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
                          <input type="numeric" name="telefono" id="telefono" class="form-control" placeholder="0000000000"   required />
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
                          <input type="text"  name="correo" id="correo" class="form-control" placeholder="name@exmple.com" required />
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
                          <option selected >Seleccionar</option>
                        @foreach($varpuestos as $puestos)
                        <option  value="{{$puestos->id}}">{{$puestos->nombre}}</option>
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
                          <option selected >Seleccionar</option>
                        @foreach($varsucursales as $sucursales)
                        <option value="{{$sucursales->id}}">{{$sucursales->nombre}}</option>
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
                        <label class="form-label" >Ciudad</label>
                        <select   name="ciudad" id="ciudad" class="form-select" required>
                          <option selected >Seleccionar</option>
                        @foreach($varciudades as $ciudades)
                        <option value="{{$ciudades->id}}">{{$ciudades->nombre}}</option>
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

                      <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                        <label class="form-label" >Banco</label>
                        <select   name="banco" id="banco" class="form-select" required>
                          <option selected >Seleccionar</option>
                        @foreach($varbancos as $banco)
                        <option value="{{$banco->id}}">{{$banco->nombre}}</option>
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
                        <label class="form-label" for="form8Example4">Calle</label>
                          <input type="text" name="calle" id="calle" class="form-control" required />
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
                          <input type="text" name="colonia" id="colonia" class="form-control" required />
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
                          <input type="text" name="numero_interior" id="numero_interior" class="form-control" placeholder="00" required />
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
                          <input type="text" class="form-control" name="numero_exterior" id="numero_exterior" placeholder="00" required />
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
                          <input type="text"  name="codigo_postal" id="codigo_postal"  class="form-control"  placeholder="00000" required />
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
                        <label class="form-label" >Sexo</label>
                          <select  class="form-select" id="sexo" name="sexo"  required >
                            <option  selected>Seleccionar</option>
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

                      <div class="col">
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
                      </div>

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
        

                      
                    </div>
                    <br/>
                    <!-- aqui termina el primer insert -->
                    <br/>
                    <h4 id="scrollspyHeading2">Detalles</h4>

                    <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                        <label class="form-label" >Salario Bruto</label>
                          <input type="text" name="salario_bruto" id="salario_bruto" class="form-control" placeholder="00.00" required />
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
                        <label class="form-label" >Salario Fijo</label>
                          <input type="text" name="salario_fijo" id="salario_fijo" class="form-control" placeholder="00.00" required/>
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
                        <label class="form-label" >Salario Neto</label>
                          <input type="text" Name="salario_neto" id="salario_neto" class="form-control" placeholder="00.00" required />
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
                          <input type="text" name="numero_tarjeta" id="numero_tarjeta" class="form-control" placeholder="000000000000000" required />
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
                          <input type="text" name="numero_cuenta" id="numero_cuenta" class="form-control" required  placeholder="0000000000" />
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
                        <label class="form-label" >rfc</label>
                          <input type="text" name="rfc" id="rfc" class="form-control" placeholder="0000000000000"  required/>
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
                        <label class="form-label" >Numero de Seguro Social</label>
                          <input type="text" name="nss" id="nss" class="form-control" placeholder="000000000000" required />
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
                          <input type="text" name="tipo_sangre" id="tipo_sangre" class="form-control" placeholder="+" required />
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
                          <input type="text" name="contacto_emergencias" id="contacto_emergencias" class="form-control" placeholder="Nombre de la persona"  required />
                          <div class="valid-feedback">
                            ¡Se ve bien!
                          </div>
                          <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                          </div>
                        
                        </div>
                      </div>
                    </div>

                    
                      
                    <div class="col">
                        <!-- Email input -->
                        <div class="form-outline">
                        <label class="form-label" >Telefono de emergencia </label>
                          <input type="text" name="telefono_emergencia" id="telefono_emergencia" class="form-control" placeholder="00000000000" required />
                          <div class="valid-feedback">
                            ¡Se ve bien!
                          </div>
                          <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                          </div>
                        </div>
                      </div>


                      <br/>
                    <!-- aqui termina el segundo insert -->
                    <br/>
                    <h4 id="scrollspyHeading3">Razón Social</h4>

                    <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                        <select class="form-select form-select mb-3" id="cmbempresas" name="cmbempresas" aria-label="Ejemplo de .form-select-lg" required>
                          <option selected >Seleccionar Empresa</option>
                        @foreach($varempresas as $empresa)
                        <option value="{{$empresa->id}}">{{$empresa->nombre_empresa}}</option>
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
                      <div class="col-md-4" id="nss">
                        <label class="form-label">Desglose de IMSS</label>
                        <input type="text" name="pago_IMSS" id="pago_IMSS" class="form-control" placeholder="00.00"  required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                      </div>
                      <div class="col-md-4" id="excedente">
                        <label class="form-label">Excedente</label>
                        <input type="text" name="excedente" id="excedente" class="form-control" placeholder="00.00"  required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                    </div>

                    <div class="col-md-4" id="Efectivo">
                        <label class="form-label">Efectivo</label>
                        <input type="text" name="efectivo" id="efectivo" class="form-control" placeholder="00.00" required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                    </div>

                    </div>
                    <div class="offcanvas-footer text-center" style="padding:10px;">
                      <button class="btn btn-dark" type="submit">Guardar empleado</button>
                    </div>
              </form>
            </div>
          </div> 
      </div>
</div>
<!-- Fin Insertar Modal-->

<!-- Editar modal -->

  <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom2" aria-labelledby="offcanvasBottomLabel" style="height:70vh">
      <div class="offcanvas-header">
        <nav id="navbar-example2" class="navbar navbar-light px-3">
          <a class="navbar-brand" href="#">Editar Empleado</a>
          <ul class="nav nav-pills middle__font">
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading1">General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading2">Detalles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading3">Razón Social</a>
            </li>
          </ul>
        </nav>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body small">
          <div class="container">
            <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <form action="" method=""  class="g-3 needs-validation" novalidate>
              @csrf
                  <h4 id="scrollspyHeading1">General</h4>
                    <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Primer Nombre</label>
                          <input type="text"  class="form-control" name="primer_nombre" id="primer_nombres" placeholder="Introduzca el primer nombre" required />
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
                          <input type="text" id="segundo_nombres"  name="segundo_nombre" class="form-control" placeholder="Introduzca el segundo nombre"  required />
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
                          <input type="text" name="apellido_paterno" id="apellido_paternos" class="form-control" placeholder="Introduzca el apellido parterno" required />
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
                          <input type="text" name="apellido_materno" id="apellido_maternos" class="form-control" placeholder="Introduzca el apellido materno" required />
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
                          <input type="numeric" name="telefono" id="telefonos" class="form-control" placeholder="0000000000"   required />
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
                          <input type="text"  name="correo" id="correos" class="form-control" placeholder="name@exmple.com" required />
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
                        <select name="puesto" id="puestos" class="form-select" required>
                        @foreach($varpuestos as $puestos)
                        <option  value="{{$puestos->id}}">{{$puestos->nombre}}</option>
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
                        <select  name="sucursal" id="sucursals" class="form-select" required>
                         
                        @foreach($varsucursales as $sucursales)
                        <option value="{{$sucursales->id}}">{{$sucursales->nombre}}</option>
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
                        <label class="form-label" >Ciudad</label>
                        <select   name="ciudad" id="ciudads" class="form-select" required>
                        
                        @foreach($varciudades as $ciudades)
                        <option value="{{$ciudades->id}}">{{$ciudades->nombre}}</option>
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

                      <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                        <label class="form-label" >Banco</label>
                        <select   name="banco" id="bancos" class="form-select" required>
                        
                        @foreach($varbancos as $banco)
                        <option value="{{$banco->id}}">{{$banco->nombre}}</option>
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
                        <label class="form-label" for="form8Example4">Calle</label>
                          <input type="text" name="calle" id="calles" class="form-control" required />
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
                          <input type="text" name="colonia" id="colonias" class="form-control" required />
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
                          <input type="text" name="numero_interior" id="numero_interiors" class="form-control" placeholder="00" required />
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
                          <input type="text" class="form-control" name="numero_exteriors" id="numero_exterior" placeholder="00" required />
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
                          <input type="text"  name="codigo_postal" id="codigo_postals"  class="form-control"  placeholder="00000" required />
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
                        <label class="form-label" >Sexo</label>
                          <select  class="form-select" id="sexos" name="sexo"  required >
                            <option  selected>Seleccionar</option>
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
                        <label class="form-label" >Fecha de Nacimiento</label>
                          <input type="date" name="fecha_nacimiento" id="fecha_nacimientos" class="form-control"  required />
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
                        <label class="form-label" >Foto</label>
                          <input type="text" name="foto" id="fotos" class="form-control"  required />
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
                        <label class="form-label" >Fecha de alta</label>
                          <input type="date" name="fecha_alta" id="fecha_altas" class="form-control"  required />
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
                    <!-- aqui termina el primer insert -->
                    <br/>
                    <h4 id="scrollspyHeading2">Detalles</h4>

                    <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                        <label class="form-label" >Salario Bruto</label>
                          <input type="text" name="salario_bruto" id="salario_brutos" class="form-control" placeholder="00.00" required />
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
                        <label class="form-label" >Salario Fijo</label>
                          <input type="text" name="salario_fijo" id="salario_fijos" class="form-control" placeholder="00.00" required/>
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
                        <label class="form-label" >Salario Neto</label>
                          <input type="text" Name="salario_neto" id="salario_netos" class="form-control" placeholder="00.00" required />
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
                          <input type="text" name="numero_tarjeta" id="numero_tarjetas" class="form-control" placeholder="000000000000000" required />
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
                          <input type="text" name="numero_cuenta" id="numero_cuentas" class="form-control" required  placeholder="0000000000" />
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
                        <label class="form-label" >rfc</label>
                          <input type="text" name="rfc" id="rfcs" class="form-control" placeholder="0000000000000"  required/>
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
                        <label class="form-label" >Numero de Seguro Social</label>
                          <input type="text" name="nss" id="nsss" class="form-control" placeholder="000000000000" required />
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
                          <input type="text" name="tipo_sangre" id="tipo_sangres" class="form-control" placeholder="+" required />
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
                          <input type="text" name="contacto_emergencias" id="contacto_emergenciass" class="form-control" placeholder="Nombre de la persona"  required />
                          <div class="valid-feedback">
                            ¡Se ve bien!
                          </div>
                          <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                          </div>
                        
                        </div>
                      </div>
                    </div>

                    
                      
                    <div class="col">
                        <!-- Email input -->
                        <div class="form-outline">
                        <label class="form-label" >Telefono de emergencia </label>
                          <input type="text" name="telefono_emergencia" id="telefono_emergencias" class="form-control" placeholder="00000000000" required />
                          <div class="valid-feedback">
                            ¡Se ve bien!
                          </div>
                          <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                          </div>
                        </div>
                      </div>


                      <br/>
                    <!-- aqui termina el segundo insert -->
                    <br/>
                    <h4 id="scrollspyHeading3">Razón Social</h4>

                    <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                        <select class="form-select form-select mb-3" id="cmbempresas" name="cmbempresass" aria-label="Ejemplo de .form-select-lg" required>
                          <option selected >Seleccionar Empresa</option>
                        @foreach($varempresas as $empresa)
                        <option value="{{$empresa->id}}">{{$empresa->nombre_empresa}}</option>
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
                      <div class="col-md-4" id="nss">
                        <label class="form-label">Desglose de IMSS</label>
                        <input type="text" name="pago_IMSS" id="pago_IMSSS" class="form-control" placeholder="00.00"  required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                      </div>
                      <div class="col-md-4" id="excedente">
                        <label class="form-label">Excedente</label>
                        <input type="text" name="excedente" id="excedentes" class="form-control" placeholder="00.00"  required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                    </div>

                    <div class="col-md-4" id="Efectivo">
                        <label class="form-label">Efectivo</label>
                        <input type="text" name="efectivo" id="efectivos" class="form-control" placeholder="00.00" required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                    </div>

                    </div>
                    <div class="offcanvas-footer text-center" style="padding:10px;">
                      <button class="btn btn-dark" type="submit">Editar empleado</button>
                    </div>
              </form>
            </div>
          </div> 
      </div>
</div>
<!-- Fin Editar modal -->

<!-- Eliminar Modal-->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom1" aria-labelledby="offcanvasBottomLabel" style="height:70vh">

        <div class="offcanvas-header">
          <nav id="navbar-example2" class="navbar navbar-light px-3">
            <a class="navbar-brand" href="#">Baja Empleado</a>
          </nav>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-body small">
            <div class="container">
              <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                <form action="{{route('Empleados.bajas')}}" method="POST"  class="g-3 needs-validation" novalidate>
                @csrf
                    
                    <hr/>
                    <h5 class="text-center" id="scrollspyHeading1">Detalles de baja</h5>
                    <br/>
                    <input type="hidden"  id="ids" name="ids">
                      <div class="text-center">
                        <div class="row text-center">
                          <div class="col-md-3">
                            <div class="row">
                              <p class="fs-6 col-md-4 fw-bold">Empleado</p>
                              <p class="fs-6 fw-light col-md-6" id="nombre"></p>
                            </div>
                            
                          </div>
                          <div class="col-md-2">
                            <div class="row">
                              <p class="fs-6 col-md-4 fw-bold">Salario</p>
                              <p class="fs-6 col-md-2 fw-light" id="salario"></p>
                            </div>
                            
                          </div>
                          <div class="col-md-2">
                            <div class="row">
                              <p class="fs-6 col-md-6 fw-bold">Fecha de Ingreso</p>
                              <p class="fs-6 col-md-6 fw-light" id="f_ingreso"></p>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      <hr/>
                      <br/>
                 
                      <div class="row">
                        <div class="col">
                        <label class="form-label" for="form8Example4">Tipo de Baja</label> 
                        <select name="tipo_baja" class="form-select" required>
                            <option selected >Seleccionar</option>
                            <option  value="finiquito">Finquito</option>
                            <option  value="liquidacion">Liquidacion</option>
                        </select>
                        <label class="form-label" for="form8Example4">Aplicar prima vacacional</label> 
                        <br>   
                        
                        <LABEl style="font-size: 15px;">Si <input style="border: .5px solid rgb(165, 165, 165);width:15px;height:15px;" class="form-check-input" type="checkbox" id="terminos" value="1" onclick="terminos_cambio(this)" /></LABEl>
                        <br> 
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Descripcion de la baja</label>         
                            <textarea class="form-control" name="descripcion_baja" placeholder="Detalle el motivo de la baja del empleado" required>	</textarea>
                            <div class="valid-feedback">
                              ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                              Por favor, completa la información requerida.
                            </div>
                            <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" >Dias de Gratificacion</label>
                          <select name="diasgratificacion" id="diasgratificacion" class="form-select" required>
                            <option selected value="0">Seleccionar los dias a Gratificar</option>
                            <option  value="0">0</option>
                            <option  value="10">10</option>
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
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Dias trabajados Aguinaldo</label>
                            <input type="text" Name="dias_trabajados" id="dias_trabajados" class="form-control" placeholder="10"   />
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
                          <label class="form-label" >Dias trabajados a deber</label>
                            <input type="text" Name="dias_trabajadosa_deber" id="dias_trabajadosa_deber" class="form-control" placeholder="10"   />
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

                        
                

                        <div class="row">
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


                        <div class="col">
                          <!-- Email input -->
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
                          <!-- Email input -->
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
                          <!-- Email input -->
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
                          <input type="date" name="fecha_baja" class="form-control" placeholder="00.00" required />
                      </div>
                   
                        
                        <h5 class="mt-3">Deducciones</h5>

                        
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Imss</label>
                            <input type="text" Name="imms" id="imms" class="form-control" placeholder="00.00" value="0" required/>
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
                            <input type="text" Name="infonavit" id="infonavit" class="form-control" placeholder="00.00" value="0" required/>
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
                          <label class="form-label" >Transporte</label>
                            <input type="text" Name="transporte" id="transporte" class="form-control" placeholder="00.00" value="0" required />
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
                          <label class="form-label" >Prestamo</label>
                            <input type="text" Name="prestamo" id="prestamo" class="form-control" placeholder="00.00" value="0" required />
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
                          <label class="form-label" >Otras deducciones</label>
                            <input type="text" Name="otras" id="otras" class="form-control" placeholder="00.00"  value="0"required />
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
                          <br>
                            <button class="btn btn-success push2" type="button" onclick="operaciones()"><i class="fas fa-calculator"></i>&nbsp;Calcular</button>         
                          </div>
                        </div>
                        </div>
                        <br/>
                        <br/>
                        <h5 class="mt-3">Cantidad a entregar</h5>
                        <input type="text" Name="total_entregar" id="total_entregar" class="form-control" placeholder="00.00" value="0" required />


                            <div class="offcanvas-footer text-center" style="padding:10px;">
                        <button class="btn btn-dark" type="submit">Guardar baja</button>
                      </div>
                          </form>
                          </div>
                        </div>
        </div>
</div>
<!--Fin Eliminar Modal-->

<script>
$(document).ready(function() {
  $("table tbody tr").click(function() {
  var salario = $(this).find("td:eq(17)").text();
  var nombre = $(this).find("td:eq(1)").text();
  var id = $(this).find("td:eq(29)").text();
  var nombre2 = $(this).find("td:eq(2)").text();
  var Apellido_p = $(this).find("td:eq(3)").text();
  var Apellido_m = $(this).find("td:eq(4)").text();
  var fecha_alta = $(this).find("td:eq(28)").text();
  var nombrecompleto=document.getElementById('nombre');
  var salariosoperaciones=document.getElementById('salario');
  var fecha_ingreso=document.getElementById('f_ingreso');
  nombrecompleto.innerText = nombre+' '+nombre2+' '+Apellido_p+' '+Apellido_m;
  salariosoperaciones.innerText = salario;
  fecha_ingreso.innerText = fecha_alta;
    var fechaIni = new Date(fecha_ingreso.innerText);
    var fechaFin = new Date();
    const añoinicio = fechaIni.getFullYear();
    const añoactual = fechaFin.getFullYear();
    const diahoy = fechaFin.getDate();
    const mes = fechaFin.getMonth()+1;
    if (añoinicio == añoactual){
    }
    else{
      fechaIni = new Date(añoactual+'-01-01');
    }
    var diff = fechaFin - fechaIni;
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
    diferenciaDias = Math.floor(diff / (1000 * 60 * 60 * 24));
    $("#dias_trabajadosa_deber").val(diferenciaDias);
    $("#ids").val(id);


    //Formulario de editar
    $("#primer_nombres").val(nombre);

    $("#segundo_nombres").val(nombre2);

    $("#apellido_paternos").val(Apellido_p);

    $("#apellido_maternos").val(Apellido_m);
    var telefono = $(this).find("td:eq(5)").text();
    $("#telefonos").val(telefono);

    var correo = $(this).find("td:eq(6)").text();
    
    $("#correos").val(correo);

    var puesto = $(this).find("td:eq(7)").text();
    $("#puestos option[value='"+ puesto +"']").attr("selected",true);

    var sucursal = $(this).find("td:eq(8)").text();
    $("#sucursals option[value='"+ sucursal +"']").attr("selected",true);
  
    var ciudad = $(this).find("td:eq(9)").text();
    $("#ciudads option[value='"+ ciudad +"']").attr("selected",true);
  
    var calle = $(this).find("td:eq(10)").text();
    $("#calles").val(calle);

    var colonia = $(this).find("td:eq(11)").text();
    $("#colonias").val(colonia);

    var numero_int = $(this).find("td:eq(12)").text();
    $("#numero_interiors").val(numero_int);

    var numero_ext = $(this).find("td:eq(13)").text();
    $("#numero_exteriors").val(numero_ext);

    var codigo_postal = $(this).find("td:eq(14)").text();
    $("#codigo_postals").val(codigo_postal);

    var sexo = $(this).find("td:eq(15)").text();
    $("#sexos").val(sexo);

    var fecha_nacimiento = $(this).find("td:eq(16)").text();
    $("#fecha_nacimientos").val(fecha_nacimiento);

    var salario_bruto = $(this).find("td:eq(17)").text();
    $("#salario_brutos").val(salario_bruto);

    var salario_fijo = $(this).find("td:eq(18)").text();
    $("#salario_fijos").val(salario_fijo);

    var salario_neto = $(this).find("td:eq(19)").text();
    $("#salario_netos").val(salario);

    var banco = $(this).find("td:eq(20)").text();
    $("#bancos option[value='"+ banco +"']").attr("selected",true);
  
    var numero_tarjeta = $(this).find("td:eq(20)").text();
    $("#numero_tarjetas").val(numero_tarjeta);

    var numero_cuenta = $(this).find("td:eq(21)").text();
    $("#numero_cuentas").val(numero_cuenta);

    var rfc = $(this).find("td:eq(22)").text();
    $("#rfcs").val(rfc);

    var nss = $(this).find("td:eq(23)").text();
    $("#nsss").val(nss);

    var tipo_sangre = $(this).find("td:eq(24)").text();
    $("#tipo_sangres").val(tipo_sangre);

    var contacto_emergencias = $(this).find("td:eq(25)").text();
    $("#contacto_emergenciass").val(contacto_emergencias);

    var telefono_emergencia = $(this).find("td:eq(26)").text();
    $("#telefono_emergencias").val(telefono_emergencia);

    var cmbempresas = $(this).find("td:eq(27)").text();
    $("#cmbempresass").val(cmbempresas);

    var pago_IMSS = $(this).find("td:eq(31)").text();
    $("#pago_IMSSS").val(pago_IMSS);

    var excedente = $(this).find("td:eq(32)").text();
    $("#excedentes").val(excedente);

    var efectivo = $(this).find("td:eq(33)").text();
    $("#efectivos").val(efectivo);  
});

  $('#nss').hide();
  $('#excedente').hide();
  $('#Efectivo').hide();
  $('#vacaciones_poporcionales').hide();
  $('#dias_vacaciones').hide();
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
  if(empresa == "KAGDA" || empresa == "CREDILAGUNA")
  {
      $('#nss').hide();
      $('#excedente').hide();
      $('#Efectivo').hide();
  }
  else
  {
      $('#nss').show();
      $('#excedente').show();
      $('#Efectivo').show();
  }
    });
</script>
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

function terminos_cambio(checkbox){
    //Si está marcada ejecuta la condición verdadera.
    if(checkbox.checked){
      $('#vacaciones_poporcionales').show();
      $('#dias_vacaciones').show();
    }
    //Si se ha desmarcado se ejecuta el siguiente mensaje.
    else{
      $('#vacaciones_poporcionales').hide();
      $('#dias_vacaciones').hide();
      $("#vacaciones_poporcionales").val(0);
      $("#dias_vacaciones").val(0);
    }
}
  function operaciones()
  {
    var salario=document.getElementById('salario');
    var salarioc = parseFloat(salario.innerHTML).toFixed(2);
    var diagratificacion = document.getElementById("diasgratificacion").value;
    var diastrabajados = $("#dias_trabajados").val();
    var diastrabajadosdeber = $("#dias_trabajadosa_deber").val();
    var diasvacaciones = $("#dias_vacaciones").val();
    var deduccionimms =  $("#imms").val();
    var deduccioninfonavit =  $("#infonavit").val();
    var deducciontransporte =  $("#transporte").val();
    var deduccionorestamo =  $("#prestamo").val();
    var deducciootros =  $("#otras").val();
    var aguinaldo = 15/365*diastrabajados*salarioc;
    var gratificacion = diagratificacion*salarioc;
    var sueldopropo = salarioc*diastrabajadosdeber;
    var vacacionesproporcional = diasvacaciones*salarioc*.25
    var total = ((((((aguinaldo+gratificacion+sueldopropo+vacacionesproporcional)-parseFloat(deduccionimms).toFixed(2))-parseFloat(deduccioninfonavit).toFixed(2)-parseFloat(deducciontransporte).toFixed(2))-parseFloat(deduccionorestamo).toFixed(2))-parseFloat(deducciootros).toFixed(2)));
    $("#Aguinaldo_poporcional").val(parseFloat(aguinaldo).toFixed(2));
    $("#gratificacion").val(parseFloat(gratificacion).toFixed(2));
    $("#sueldo_poporcional").val(parseFloat(sueldopropo).toFixed(2));
    $("#vacaciones_poporcionales").val(parseFloat(vacacionesproporcional).toFixed(2));
    $("#total_entregar").val(parseFloat(total).toFixed(2));
  }
</script>

@endsection