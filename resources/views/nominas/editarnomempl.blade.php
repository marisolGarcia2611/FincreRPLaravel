@extends('layouts.app')
@section('content')
@foreach($varnomem as $datosempleadonom)



  <div class="container mt-5 p__little">
        <div class="offcanvas-body small">
            <div class="container">
              <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">      
                    <form  action="" method="POST"  class="g-3 needs-validation" novalidate> 
                      @csrf
                      @method('PUT')
                      <!-- Datos generales-->
                      <div class="card p-5 cartaForm">
                            <div class="row">
                              <a class="col-md-3 nav-link btn btn-secondary step" href="#paso1"><h6 class="pt-1 text-light"><b>1</b></h6></a>    
                              <h4 class="col-md-2" id="paso1">General</h4>
                            </div>
                            <div class="row">
                              <div class="col">
                                <!-- Name input -->
                                <div class="form-outline">
                        
                                <label class="form-label" for="form8Example4">Numero de Empleado</label>
                                <input type="text" hidden class="form-control" name="idnomina" required />
                                  <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre"  value="{{$datosempleadonom->idempleado}}"  minlength="3" maxlength="20" required />
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
                                <label class="form-label">Dias Laborados</label>
                                  <input type="text" id="segundo_nombre"  name="segundo_nombre" class="form-control"  value="{{$datosempleadonom->dias_laborados}}" minlength="3" maxlength="20" required />
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
                                <label class="form-label" >Deudores Fiscal</label>
                                  <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" value="{{$datosempleadonom->deudores_fiscal}}" minlength="3" maxlength="20" required />
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
                                <label class="form-label" >Deudores No Fiscal</label>
                                  <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" value="{{$datosempleadonom->deudores_no_fiscal}}"  minlength="3" maxlength="20"required />
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
                                <label class="form-label" for="form8Example4">Pago Infoanvit</label>
                                  <input type="numeric" name="telefono" id="telefono" class="form-control"  value="{{$datosempleadonom->pago_infonavit}}" minlength="6" maxlength="10"  required />
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
                                <label class="form-label">Pago Imss</label>
                                  <input type="text"  name="correo" id="correo" class="form-control"  value="{{$datosempleadonom->pago_imss}}" minlength="3" maxlength="60"  required />
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
                                <label class="form-label" for="form8Example4">Pago Subsido</label>
                                  <input type="text" name="calle" id="calle" class="form-control"  value="{{$datosempleadonom->pago_subsidio}}" minlength="3" maxlength="60" required />
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
                                <label class="form-label" for="form8Example4">Pago ISR</label>
                                  <input type="text" name="colonia" id="colonia" class="form-control"  value="{{$datosempleadonom->pago_isr}}" minlength="3" maxlength="60"  required />
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
                                <label class="form-label" >Bono</label>
                                  <input type="text" name="numero_interior" id="numero_interior" class="form-control" placeholder="00"  value="{{$datosempleadonom->bono}}"  maxlength="10"  required />
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
                                <label class="form-label" >Transporte</label>
                                  <input type="text" class="form-control" name="numero_exterior" id="numero_exterior" placeholder="00"  value="{{$datosempleadonom->transporte}}"  maxlength="10"  required />
                                  <div class="valid-feedback">
                                    ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                  </div>
                                </div>
                              </div>
                        
                        <!-- Guardar-->
                          <div class=" text-center" style="padding:10px;">
                            <button class="btn text-light push" style="width: 80%; background-color: rgba(54, 55, 85, 0.972);height:5vh;" type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;<b>Guardar cambio</b></button>
                          </div>

                      <br/>
                      <br/>     
                    </form>
         

              </div>
            </div>
        </div> 
  </div>
@endforeach