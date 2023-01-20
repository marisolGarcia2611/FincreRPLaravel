@extends('layouts.app')
@section('content')

      <div class="offcanvas-body small">
          <div class="container">
            <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            @foreach($obtenerempleado as $empleado)
              <form  action="{{ route('update', $empleado->idempleado) }}" method="POST"  class="g-3 needs-validation" novalidate> 
                @csrf
                @method('PUT')
                  <h4 id="scrollspyHeading1">General</h4>
                    <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                 
                        <label class="form-label" for="form8Example4">Primer Nombre</label>
                        <input type="text" hidden class="form-control" name="idnomina"  value="{{$empleado->idnom}}"required />
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

                    <label class="form-label" for="form8Example4">Credito Infonavit</label> 
                        <br>   
                        <LABEl style="font-size: 15px;">Si 
                        <input style="border: .5px solid rgb(165, 165, 165);width:15px;height:15px;" class="form-check-input" type="checkbox" id="terminos" value="1" onclick="chekinfonavit(this)" />
                      </LABEl>
                        <br>
                  
                          <div class="col-md-6" id="tipo_descuento_infonavit">
                            <div class="row" >
                            <label class="form-label">Tipo de descuento infonavit</label>

                            <select name="tipo_infonavit" >
                         <option  value="{{$empleado->idinfonavit}}">{{$empleado->nombreinfonavit}}</option>  
                              @foreach($vartipodescinfo as $obtenertipo)
                               <option value=" {{$obtenertipo->id}}">{{$obtenertipo->Nombre}}</option>
                             @endforeach
                            </select>
                          
                            </div>
                          </div>

                          <div class="col-md-6"  id="factor_sua">
                            <div class="row">
                              <label class="form-label">Factor SUA</label>
                               <input type="text" name="factor_sua" class="form-control" value="{{$empleado->factor_sua}}" required />
                            </div>
                          </div>

                          <div class="col-md-6"  id="descuento_quincenal">
                            <div class="row">
                              <label class="form-label">Descuento quincenal</label>
                               <input type="text" name="descuento_quincenal" class="form-control" value="{{$empleado->descuento_quincenal}}" required />
                            </div>
                          </div>

                          <div class="col-md-6"  id="numero_credito_infonavit">
                            <div class="row">
                                      <label class="form-label">Numero de credito infoanvit</label>
                               <input type="text" name="numero_credito_infonavit" class="form-control"  value="{{$empleado->numero_credito_infonavit}}" required />
                            </div>
                          </div>

                
                            <div class="row">
                            <label class="form-label">Estado Civil</label>
                            <select name="estado_civil" id="estado_civil">
                              <option value="soltero">Soltero</option>
                              <option value="casado">Casado</option>
                              <option value="union libre">Union Libre</option>
                            </select>
                            </div>
                          </div>

                    </div>
                    <div class="offcanvas-footer text-center" style="padding:10px;">
                      <button class="btn btn-dark" type="submit">Guardar Cmabios empleado</button>
                    </div>
             
                    @endforeach
              </form>
            </div>
          </div> 
      </div>
</div>
@endsection