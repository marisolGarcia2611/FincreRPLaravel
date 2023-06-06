@extends('layouts.app')

@section('content')
<div id="btnBack"></div>  
<div class="pos__ico">
    <img class="ico__image2" src="{{ asset('ico/logo.png') }}" alt="valeMil">
</div>



@foreach($obtenerempleado as $empleado)
<div class="container mt-5 p__little">
    <div class="offcanvas-body small">
        <div class="container">
          <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <div class="card p-5 mt-2 cartaForm mb-4">
                <div class="text-center text-muted  mb-4">
                   <h1 class="fw-light"><i class="fas fa-exclamation-triangle"></i></h1> 
                   <h4 class="fw-light">Este empleado esta inactivo en este momento</h4>
                </div>
              
                <div class="row mb-4">
                    <div>
                      <form action="{{ route('Empleados.updateReactivar', $empleado->idempleado) }}" method="POST" enctype="multipart/form-data" class="g-3 needs-validation" novalidate>
                        @csrf
                        @method('PUT')

                         <!-- Detalles de reingreso-->
                          <div class="row mb-4">
                            <h5>1. Detalles Generales</h5>
                            <input type="text" hidden class="form-control" name="idnomina"  value="{{$empleado->idnom}}" required />
                            <input type="text" hidden class="form-control" name="rfc" value="{{$empleado->rfc}}" required/>

                            <div class="col">
                              <div class="form-outline">
                              <label class="form-label" >Fecha de reingreso</label>
                                <input type="date" name="fecha_alta" id="fecha_alta" class="form-control"  value="{{$empleado->fecha_ingreso}}"  required />
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

                          <div class="row mb-4">
                            <div class="col">
                              <div class="form-outline">
                              <label class="form-label" >Salario Mensual</label>
                                <input type="text" name="salario_bruto" id="salario_bruto" class="form-control" maxlength="8"  value="{{$empleado->salario_bruto}}"   required />
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
                                <input type="text" name="salario_fijo" id="salario_fijo" class="form-control" maxlength="8" value="{{$empleado->salario_fijo}}"/>
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
                                <input type="text" Name="salario_neto" id="salario_neto" class="form-control" maxlength="8"  value="{{$empleado->salario_neto}}"required />
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>
                              </div>
                            </div>
      
                          </div>

                          <div class="row mb-2">
                            <h5>2. Razón Social</h5>
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

                          <div class="row mb-3">
                            <div class="col-md-3" id="sueldo_fiscal">
                              <label class="form-label">Sueldo fiscal</label>
                              <input type="text" name="sueldo_fiscal" id="sueldo_fiscal" class="form-control" placeholder="00.00" value="{{$empleado->sueldo_fiscal}}" maxlength="8"required />
                              <div class="valid-feedback">
                                ¡Se ve bien!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                              </div>
                            </div>
                            <div class="col-md-3" id="excedente">
                              <label class="form-label">Excedente</label>
                              <input type="text" name="excedente" id="excedente" class="form-control" placeholder="00.00" value="{{$empleado->excedente}}" maxlength="8"required />
                              <div class="valid-feedback">
                                ¡Se ve bien!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                              </div>
                            </div>
                            <div class="col-md-3" id="Efectivo">
                              <label class="form-label">Efectivo</label>
                              <input type="text" name="efectivo" id="efectivo" class="form-control" placeholder="00.00"maxlength="8" value="{{$empleado->efectivo}}" required />
                              <div class="valid-feedback">
                                ¡Se ve bien!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                              </div>
      
                            </div>
      
                            {{-- Descuento de Infonavit --}}
        
                            <div class="row text-center mt-2">
                                <div class="col">
                                  <label>Aplicar credito Infonavit 
                                    <input style="border: .5px solid rgb(165, 165, 165);width:15px;height:15px;" class="form-check-input" type="checkbox" id="terminos" value="1" onclick="chekinfonavit(this)" />
                                  </label>
                                </div>
                              </div>
                          </div>
                        
                          <div class="row mb-2">
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
                                  <input type="text" name="factor_sua" class="form-control" value="{{$empleado->factor_sua}}"  maxlength="8" />
                              </div>
                            </div>
        
                            <div class="col-md-3"  id="descuento_quincenal">
                              <div class="row">
                                <label class="form-label">Descuento quincenal</label>
                                  <input type="text" name="descuento_quincenal" class="form-control" value="{{$empleado->descuento_quincenal}}"  maxlength="8" />
                              </div>
                            </div>
        
                            <div class="col-md-3"  id="numero_credito_infonavit">
                              <div class="row">
                                        <label class="form-label">Numero de credito infoanvit</label>
                                  <input type="text" name="numero_credito_infonavit" class="form-control" value="{{$empleado->numero_credito_infonavit}}" maxlength="8"  />
                              </div>
                            </div>
      
                          </div>
                          
                        <div class="row mb-4">     
                            <h5>3. Contrato frirmado</h5>
                              <label for="file1" class="drop-container1">
                                <span class="drop-title">Suelte archivo aquí</span>
                                ó
                                <input type="file" id="my-file" class="form-control"  type="file" name="urlpdf" required>
                                <div class="valid-feedback fs-8">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback fs-8">
                                  ¡Por favor, sube el archivo de la baja firmada!
                                </div>
                              </label>

                              <spam class="fs-8 text-secondary">Recuerde que solo se admite el formato ".pdf"</spam>
                        </div>

                        <div class="text-center">
                          <button type="submit" class="btn btn-p push rounded-5" style="width: 30%;"><i class="fas fa-user-check"></i>&nbsp;&nbsp;Activar empleado</button>
                        </div>
                      </form>
                    </div>                       
                </div>
            </div>

          </div>
        </div>
    </div>
</div>

@endforeach
<script src="{{ asset('js/btnBack1.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/validaPDF.js')}}"></script>
<script src="{{ asset('js/reactivarEmpleado.js')}}"></script>

   


@endsection
