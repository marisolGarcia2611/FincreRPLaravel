@extends('layouts.app')
@section('content')
<div id="btnBack"></div>  
<div class="pos__ico">
    <img class="ico__image2" src="{{ asset('ico/logo.png') }}" alt="fincreLaguna">
</div>



@foreach($obtenerbajas as $bajas)
  <div class="mt-5 p__little">
      <nav id="navbar-example2" class="navbar navbar-light bg-light text-light px-3 d-none d-md-block nav-float shadow-lg p-3 mb-5 bg-body">
        <ul style="margin-left:-20px;margin-right: 10px;">
          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#pas1">1. Paso</a>
          </div>
          
          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#pas2">2. Paso</a>
          </div>
      
          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#pas3">3. Paso</a>
          </div>

          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#pas4">4. Paso</a>
          </div>

          <div class="nav-item mt-2 row">
            <h6 class="col-md-7 text-muted"></h6>
            <a class="nav-link  btn btn-gradient push stepNav col-md-2" href="#pas5">5. Paso</a>
          </div>
        </ul>
      </nav>
  </div>


  <div class="container mt-5 p__little">
        <div class="offcanvas-body small">
            <div class="container">
              <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                <div class="text-center text-muted  mb-4">
                  <h1 class="fw-light"><i class="fas fa-exclamation-triangle"></i></h1> 
                  <h4 class="fw-light">Este empleado esta inactivo en este momento</h4>
               </div>
              
                <form action="{{ route('Empleados.atualizarBaja') }}" method="POST" class="g-3 needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                        {{------------------ Detalles de la baja--------------------}}
                    <div class="mb-4 card p-5 cartaForm">
                        <h4 id="pas1">Paso 1. Información de baja</h4>
                        <br/>
                        <input hidden value="{{$bajas->idempleado}}"  id="ids" name="ids"/>
                        <input hidden value="{{$bajas->id}}" name="id"/>
                            <div class="row text-center">
                            <div class="container">
                                <hr/>
                                <div class="row mb-3">
                                    <div  class="col-md-2" scope="row">
                                        <label class="form-label" for="form8Example4">Nombre</label> 
                                        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$bajas->primer_nombre}} {{$bajas->segundo_nombre}} {{$bajas->apellido_paterno}} {{$bajas->apellido_materno}}" />
                                    </div>
                                    <div  class="col-md-2" scope="row">
                                        <label class="form-label" for="form8Example4">Puesto</label> 
                                        <input class="form-control" type="text"  name="t_puesto" id="t_puesto" value="{{$bajas->puesto}}"/>
                                    </div>
                                    <div  class="col-md-3" scope="row">
                                        <label class="form-label" for="form8Example4">Salario Diario Integrado</label> 
                                        <input class="form-control" type="text" name="salario" id="salario" value="{{$bajas->salarioDiario}}"/>
                                    </div>
                                    <div  class="col-md-2" scope="row">
                                        <label class="form-label" for="form8Example4">Salario Mensual</label> 
                                        <input class="form-control" type="text" name="salarioMensual" id="salarioMensual" value="{{$bajas->salarioMensual}}"/>
                                    </div>
                                    <div  class="col-md-2" scope="row">
                                        <label class="form-label" for="form8Example4">Fecha de Ingreso</label> 
                                        <input class="form-control" type="text" name="fecha_ingresoe" id="fecha_ingreso_empelado" value="{{$bajas->fecha_ingreso}}" /> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div  class="col" scope="row">
                                        <label class="form-label" for="form8Example4">Tipo Infonavit</label> 
                                        <input class="form-control" type="text" name="t_infonavit" id="t_infonavit" value="{{$bajas->infonavit}}" />
                                    </div>
                                    <div  class="col" scope="row">
                                        <label class="form-label" for="form8Example4">Empresa</label> 
                                        <input class="form-control" type="text" name="empresa" id="empresa" value="{{$bajas->empresa}}" />
                                    </div>
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
                                    <textarea class="form-control" name="descripcion_baja"  placeholder="Redacte descripción de baja" value="{{$bajas->descripcion}}" maxlength="250" minlength="5" required></textarea>
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    ¡Tiene que justificar la actualización de la baja del empleado!
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
                            <label class="fs-6">Aplicar prima vacacional 
                                <input style="border: .5px solid rgb(165, 165, 165);width:15px;height:15px;" class="form-check-input" type="checkbox"  id="terminos" value="1" onclick="terminos_cambio(this)" />
                            </label>
                            </div>
                        </div>
                        <hr/> 
                                
                            <div class="row">
        
                            <div class="col" id="Efectivo">
                                <label class="form-label">fecha de baja</label>
                                <input type="date" name="fecha_baja" id="fecha_baja" class="form-control" placeholder="00.00" value="{{$bajas->fecha_baja}}" required />
                            </div>
        
        
                            <div class="col">
                                <div class="form-outline">
                                <label class="form-label" >Dias de Gratificacion</label>
                                    <select name="diasgratificacion" id="diasgratificacion" class="form-select" required>
                                    <option value="{{$bajas->dias_gratificacion}}" selected>{{$bajas->dias_gratificacion}}</option>
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
                                <input type="text" name="dias_trabajados" id="dias_trabajados" value="{{$bajas->dias_aguinaldo}}" class="form-control" placeholder="10" />
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
                                <input type="text" Name="dias_trabajadosa_deber" id="dias_trabajadosa_deber" class="form-control" value="{{$bajas->dias_sueldo_a_deber}}" placeholder="10" />
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
                            </div>
        
                            <div class="row">
                            <div class="col">
                                <div class="form-outline">
                                <label class="form-label" >Sueldo proporcional</label>
                                <input type="text" Name="sueldo_poporcional" id="sueldo_poporcional" class="form-control" value="{{$bajas->cantidad_sueldo}}" placeholder="00.00"  />
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
                                <input type="text" Name="Aguinaldo_poporcional" id="Aguinaldo_poporcional" class="form-control" value="{{$bajas->cantidad_aguinaldo}}" placeholder="00.00"  />
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
                                <input type="text" Name="gratificacion" id="gratificacion" class="form-control" value="{{$bajas->cantidad_gratificacion}}" placeholder="00.00"  />
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
                                <!-- Email input -->
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
    
                        {{------------------ Deducciones--------------------}}               
                    <div class="mb-4 card p-5 cartaForm">
                        <div class="row">
                        <h4 id="pas4">Paso 4.Deducciones</h4>
                            <div class="row">
                                <div class="col">
                                    <!-- Email input -->
                                    <div class="form-outline">
                                    <label class="form-label" >Imss</label>
                                    <input type="text" Name="imms" id="imms" class="form-control" value="{{$bajas->cantidaddeduccion_imms}}" required/>
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
                                    <input type="text" Name="infonavit" id="infonavit" class="form-control" placeholder="00.00" value="{{$bajas->cantidaddeduccion_infonavit}}" required/>
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
                                    <input type="text" Name="transporte" id="transporte" class="form-control" placeholder="00.00" value="{{$bajas->cantidaddeduccion_transporte}}" required />
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
                                    <input type="text" Name="prestamo" id="prestamo" class="form-control" placeholder="00.00" value="{{$bajas->cantidaddeduccion_prestamo}}" required />
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
                                    <input type="text" Name="otras" id="otras" class="form-control" placeholder="00.00"  value="{{$bajas->cantidaddeduccion_otros}}" required />
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
    
                    <div class="mb-4 card p-5 cartaForm">
                    <h4 id="pas5">Paso 5.Cantidad a entregar</h4>
                    <div class="row text-center">
                        <div class="col-md-3">
                        <input type="text" Name="total_entregar" id="total_entregar" class="form-control" placeholder="00.00" value="{{$bajas->cantidadtotal_entregada}}" required />
                        </div>
                    </div>
                    </div>
                    <br/>
                        
                    
                    <div class="offcanvas-footer text-center" style="padding:10px;">
                    <button class="btn btn-blue rounded-5"  type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;Guardar baja</button>
                    </div>
                </form>

              </div>
            </div>
        </div> 
  </div>
  @break
  @endforeach


  <script src="{{ asset('js/btnBack1.js') }}"></script>
  <script src="{{ asset('js/validation.js') }}"></script>
  <script src="{{ asset('js/validaPDF.js')}}"></script>
  <script src="{{ asset('js/bajaEmpleado.js')}}"></script>
@endsection