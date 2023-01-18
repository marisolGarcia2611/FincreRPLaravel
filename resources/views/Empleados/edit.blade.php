@extends('layouts.app')
@section('content')

      <div class="offcanvas-body small">
          <div class="container">
            <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <form action="" method="POST"  class="g-3 needs-validation" novalidate>
              @csrf
                  <h4 id="scrollspyHeading1">General</h4>
                    <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                        @foreach($obtenerempleado as $empleado)
                        <label class="form-label" for="form8Example4">Primer Nombre</label>
                     
                          <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre"  value="{{$empleado->primer_nombre}}"required />
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
                          <input type="text" id="segundo_nombre"  name="segundo_nombre" class="form-control"  value="{{$empleado->segundo_nombre}}" required />
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
                          <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" value="{{$empleado->apellido_paterno}}" required />
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
                          <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" value="{{$empleado->apellido_materno}}" required />
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
                          <input type="numeric" name="telefono" id="telefono" class="form-control"  value="{{$empleado->telefono}}"  required />
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
                          <input type="text"  name="correo" id="correo" class="form-control"  value="{{$empleado->correo}}" required />
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
                         // aqui me quede
                          @foreach($varpuestos as $obtenerpues)
                          @if($empleado->puestos = $obtenerpues->nombre)
                          <option value="{{$empleado->idpuesto}}" selected>{{$empleado->puesto}}</option>
                          @else
                        <option value="{{$obtenerpues->id}}">{{$obtenerpues->nombre}}</option>
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

                      <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                        <label class="form-label" >Banco</label>
                        <select   name="banco" id="banco" class="form-select" required>
                          <option value="{{$empleado->idbanco}}" selected>{{$empleado->banco}}</option>
                          @foreach($varbancos as $obtenerbancos)
                        <option value="{{$obtenerbancos->id}}">{{$obtenerbancos->nombre}}</option>
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
                          <input type="text" name="calle" id="calle" class="form-control"  value="{{$empleado->calle}}" required />
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
                          <input type="text" name="colonia" id="colonia" class="form-control"  value="{{$empleado->colonia}}" required />
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
                          <input type="text" name="numero_interior" id="numero_interior" class="form-control" placeholder="00"  value="{{$empleado->numero_interior}}" required />
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
                          <input type="text" class="form-control" name="numero_exterior" id="numero_exterior" placeholder="00"  value="{{$empleado->numero_exterior}}" required />
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
                          <input type="text"  name="codigo_postal" id="codigo_postal"  class="form-control"  placeholder="00000"  value="{{$empleado->codigo_postal}}" required />
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
                        <label class="form-label" >Fecha de Nacimiento</label>
                          <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{$empleado->fecha_de_nacimiento}}" required />
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
                          <input type="text" name="foto" id="foto" class="form-control"  value="{{$empleado->foto}}" required />
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
                          <input type="date" name="fecha_alta" id="fecha_alta" class="form-control"  value="{{$empleado->fecha_alta}}"  required />
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
                        <label class="form-label" >Salario Fijo</label>
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
                        <label class="form-label" >Salario Neto</label>
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
                        <!-- Email input -->
                        <div class="form-outline">
                        <label class="form-label" >Numero de Tarjeta</label>
                          <input type="text" name="numero_tarjeta" id="numero_tarjeta" class="form-control"  value="{{$empleado->numero_tarjeta}}" required />
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
                          <input type="text" name="numero_cuenta" id="numero_cuenta" class="form-control" required  value="{{$empleado->numero_cuenta}}" />
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
                          <input type="text" name="rfc" id="rfc" class="form-control"  value="{{$empleado->rfc}}"  required/>
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
                          <input type="text" name="nss" id="nss" class="form-control" value="{{$empleado->nss}}" required />
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
                          <input type="text" name="tipo_sangre" id="tipo_sangre" class="form-control" value="{{$empleado->tipo_sangre}}" required />
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
                          <input type="text" name="contacto_emergencias" id="contacto_emergencias" class="form-control"  value="{{$empleado->contacto_emergencia}}" required />
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
                          <input type="text" name="telefono_emergencia" id="telefono_emergencia" class="form-control"   value="{{$empleado->telefono_emergencia}}" required />
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
                        <select class="form-select form-select mb-3" id="cmbempresas" name="cmbempresas" aria-label="Ejemplo de .form-select-lg"  value="{{$empleado->razon_social}}" required>
                          <option selected > {{$empleado->nombre_empresa}}</option>
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
                      <div class="col-md-4" id="nss">
                        <label class="form-label">Desglose de IMSS</label>
                        <input type="text" name="pago_IMSS" id="pago_IMSS" class="form-control"  value="{{$empleado->pago_imss}}"  required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                      </div>
                      <div class="col-md-4" id="excedente">
                        <label class="form-label">Excedente</label>
                        <input type="text" name="excedente" id="excedente" class="form-control"  value="{{$empleado->excedente}}"  required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                    </div>

                    <div class="col-md-4" id="Efectivo">
                        <label class="form-label">Efectivo</label>
                        <input type="text" name="efectivo" id="efectivo" class="form-control"  value="{{$empleado->efectivo}}" required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                    </div>

                    </div>
                    <div class="offcanvas-footer text-center" style="padding:10px;">
                      <button class="btn btn-dark" type="submit">Guardar Cmabios empleado</button>
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
                        
                
                        <option ></option>
                 
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
                    @endforeach
              </form>
            </div>
          </div> 
      </div>
</div>
@endsection